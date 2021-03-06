<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\SubmissionFormRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use App\Models\SubmissionForm;
use App\Models\SubmissionFormDetail;
use Illuminate\Http\Request;
use App\Flag;
use App\Models\Company;
use App\Models\Item;
use PDF;

/**
 * Class SubmissionFormCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class SubmissionFormCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     *
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\SubmissionForm::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/submissionform');
        CRUD::setEntityNameStrings('Purchase Requisition', 'Purchase Requisition');
        $this->crud->setShowView('warehouse.sf.show');
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        $this->crud->addClause('where', 'user_id', '=', backpack_auth()->id());
        $this->crud->addClause('where', 'status', '=', 0);
        if (backpack_user()->hasAnyRole(['purchasing', 'operator-gudang'])) {
            $this->crud->removeButton('create');
            $this->crud->removeButton('edit');
            $this->crud->removeButton('delete');
        }

        $this->crud->addColumn([
            'name' => 'form_number',
            'type' => 'text',
            'label' => 'Nomor Purchase Requisition'
        ]);

        $this->crud->addColumn([
            'name' => 'form_date',
            'type' => 'date',
            'label' => 'Tanggal Pengajuan'
        ]);

        $this->crud->addColumn([
            'name' => 'ref_no',
            'type' => 'text',
            'label' => 'Nomor Referensi'
        ]);

        $this->crud->addColumn([
            'name'  => 'project_id',
            'label' => 'Peruntukan',
            'type'  => 'select_from_array',
            // optionally override the Yes/No texts
            'options' => [1 => 'Stock', 2 => 'Proyek']
        ]);

        $this->crud->addColumn([
            'name'  => 'status',
            'label' => 'Status',
            'type'  => 'select_from_array',
            // optionally override the Yes/No texts
            'options' => [0 => 'Plan', 1 => 'Submited', 2 => 'Process', 3 => 'Denied', 4 => 'Completed']
        ]);

        $this->crud->addColumn([
            'name' => 'description',
            'type' => 'textarea',
            'label' => 'Keterangan'
        ]);

        $this->crud->addColumn([
            'name' => 'user_id',
            'type' => 'select',
            'entity' => 'user',
            'attribute' => 'name',
            'model' => 'App\Models\User',
            'label' => 'Operator'
        ]);

        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']);
         */
    }

    /**
     * Define what happens when the Create operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */

    public function generateNomorPengiriman()
    {
        $day = date("d");
        $month = date("m");
        $year = date("Y");

        $count = SubmissionForm::withTrashed()->whereDate('created_at', date('Y-m-d'))->count();
        $number = str_pad($count + 1,3,"0",STR_PAD_LEFT);

        $generate = $month.$day."-".$number."/WHI-SF/".$year;

        return $number;
    }

    protected function setupCreateOperation()
    {
        CRUD::setValidation(SubmissionFormRequest::class);

        $this->crud->removeSaveActions(['save_and_back','save_and_edit','save_and_new']);

        $this->crud->addField([
            'name'  => "form_number",
            'type'  => 'hidden',
            'value' => $this->generateNomorPengiriman(),
        ]);

        $this->crud->addField([
            'label' => "Tanggal Form Pengajuan",
            'name'  => "form_date",
            'type'  => 'date_picker',
            'date_picker_options' => [
                'todayBtn' => 'linked',
            ],
        ]);

        $this->crud->addField([
            'name' => 'perusahaan',
            'label' => 'Nama Perusahaan',
            'type' => 'select2_from_array',
            'options' => Company::pluck('name', 'id'),
            'allows_null' => true,
        ]);

        $this->crud->addField([
            'name' => 'project_id',
            'label' => 'Peruntukan',
            'type' => 'select2_from_array',
            'options' => ['1' => 'Stok', '2' => 'Proyek'],
            'allows_null' => true,
        ]);

        $this->crud->addField([
            'name' => 'project_name',
            'label' => 'Nama Project',
            'type' => 'text',
            'hint' => 'Abaikan apabila tidak untuk Proyek',
        ]);

        $this->crud->addField([
            'name' => 'ref_no',
            'label' => 'Nomor Referensi',
            'type' => 'text',
            'attributes' => [
                'placeholder' => 'Contoh : Nomor Surat Penawaran Harga',
              ],
        ]);

        $this->crud->addField([   // Upload
            'name'      => 'uploadref',
            'label'     => 'Upload Referensi',
            'type'      => 'upload',
            'upload'    => true,
            'disk'      => 'public', // if you store files in the /public folder, please omit this; if you store them in /storage or S3, please specify it;
        ]);

        $this->crud->addField([
            'name' => 'description',
            'label' => 'Keterangan',
            'type' => 'textarea',
        ]);

        $this->crud->addField([
            'name' => 'user_id',
            'type' => 'hidden',
            'value' => backpack_auth()->id()
        ]);

        $this->crud->addField([
            'name' => 'company_id',
            'type' => 'hidden',
            'value' => backpack_auth()->user()->company_id
        ]);

        /**
         * Fields can be defined using the fluent syntax or array syntax:
         * - CRUD::field('price')->type('number');
         * - CRUD::addField(['name' => 'price', 'type' => 'number']));
         */
    }

    /**
     * Define what happens when the Update operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {

        $this->crud->removeSaveActions(['save_and_back','save_and_edit','save_and_new']);

        $this->crud->addField([
            'label' => "Nomor Form Pengajuan",
            'name'  => "form_number",
            'type'  => 'text',
            'attributes' => [
                'disabled'    => 'disabled',
            ]
        ]);

        $this->crud->addField([
            'label' => "Tanggal Form Pengajuan",
            'name'  => "form_date",
            'type'  => 'date_picker',
            'attributes' => [
                'disabled'    => 'disabled',
            ]
        ]);

        $this->crud->addField([
            'name' => 'perusahaan',
            'label' => 'Nama Perusahaan',
            'type' => 'select2_from_array',
            'options' => Company::pluck('name', 'id'),
            'allows_null' => true,
        ]);

        $this->crud->addField([
            'name' => 'project_id',
            'label' => 'Peruntukan',
            'type' => 'select2_from_array',
            'options' => ['1' => 'Stok', '2' => 'Proyek'],
            'allows_null' => true,
        ]);

        $this->crud->addField([
            'name' => 'project_name',
            'label' => 'Nama Project',
            'type' => 'text',
            'hint' => 'Abaikan apabila tidak untuk Proyek',
        ]);

        $this->crud->addField([
            'name' => 'ref_no',
            'label' => 'Nomor Referensi',
            'type' => 'text',
            'attributes' => [
                'placeholder' => 'Contoh : Nomor Surat Penawaran Harga',
              ],
        ]);

        $this->crud->addField([   // Upload
            'name'      => 'uploadref',
            'label'     => 'Upload Referensi',
            'type'      => 'upload',
            'upload'    => true,
            'disk'      => 'public', // if you store files in the /public folder, please omit this; if you store them in /storage or S3, please specify it;
        ]);

        $this->crud->addField([
            'name' => 'description',
            'label' => 'Keterangan',
            'type' => 'textarea',
        ]);

        $this->crud->addField([
            'name' => 'user_id',
            'type' => 'hidden',
            'value' => backpack_auth()->id()
        ]);
    }

    public function pdf(Request $request)
    {
        $data = SubmissionForm::findOrFail($request->id);

        $pdf = PDF::loadview('warehouse.sf.output',['data'=>$data]);
    	return $pdf->stream($data->do_number.'.pdf');
    }

    public function store(Request $request)
    {
        $perusahaan = Company::find($request->perusahaan);
        $count = SubmissionForm::withTrashed()->whereDate('form_date', date($request->form_date))->count();
        $number = str_pad($count + 1,3,"0",STR_PAD_LEFT);
        $day = date('d', strtotime($request->form_date));
        $month = date('m', strtotime($request->form_date));
        $year = date('Y', strtotime($request->form_date));
        $nomor = $month.$day."-".$number."/".$perusahaan->code."-SF/".$year;
        $data = new SubmissionForm();
        $data->form_number = $nomor;
        $data->form_date = $request->form_date;
        $data->perusahaan = $request->perusahaan;
        $data->project_id = $request->project_id;
        $data->project_name = $request->project_name;
        $data->ref_no = $request->ref_no;
        $data->description = $request->description;
        $data->user_id = $request->user_id;
        if($request->hasFile('uploadref')) {
            $file = $request->file('uploadref');
            $path = $file->storeAs('submission_form/uploadref', $month.$day.'-'.$number.'-'.$request->perusahaan.'-SF-'.$year. '.' . $file->getClientOriginalExtension() , 'public');
            $data->uploadref = $path;
        }
        $data->save();
        $cari = SubmissionForm::where('form_number' , '=' , $nomor)->first();
        return redirect(backpack_url('submissionform/'.$cari->id.'/show'));
    }

    public function update(Request $request)
    {
        $data = SubmissionForm::findOrFail($request->id);
        $day = date('d', strtotime($request->form_date));
        $month = date('m', strtotime($request->form_date));
        $year = date('Y', strtotime($request->form_date));
        $number = substr($data->form_number,5,3);
        $nomor = $month.$day."-".$number."/".$request->perusahaan."-SF/".$year;
        $data->form_number = $nomor;
        $data->form_date = $request->form_date;
        $data->perusahaan = $request->perusahaan;
        $data->project_id = $request->project_id;
        $data->project_name = $request->project_name;
        $data->ref_no = $request->ref_no;
        $data->description = $request->description;
        $data->user_id = $request->user_id;
        if($request->hasFile('uploadref')) {
            $file = $request->file('uploadref');
            $path = $file->storeAs('submission_form/uploadref', $month.$day.'-'.$number.'-'.$request->perusahaan.'-SF-'.$year. '.' . $file->getClientOriginalExtension() , 'public');
            $data->uploadref = $path;
        }
        $data->update();
        $cari = SubmissionForm::where('form_number' , '=' , $nomor)->first();
        return redirect(backpack_url('submissionform/'.$cari->id.'/show'));

    }
}
