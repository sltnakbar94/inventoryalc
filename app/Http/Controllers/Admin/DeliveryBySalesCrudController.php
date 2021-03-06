<?php

namespace App\Http\Controllers\Admin;

use App\Flag;
use App\Http\Requests\DeliveryBySalesRequest;
use App\Models\DeliveryBySales;
use App\Models\DeliveryBySalesDetail;
use App\Models\SalesOrder;
use App\Models\SalesOrderDetail;
use App\Models\SubmissionForm;
use App\Models\SubmissionFormDetail;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use PDF;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

/**
 * Class DeliveryBySalesCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class DeliveryBySalesCrudController extends CrudController
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
        CRUD::setModel(\App\Models\DeliveryBySales::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/deliverybysales');
        CRUD::setEntityNameStrings('Delivery by Sales', 'Delivery by Sales');
        $this->crud->setShowView('warehouse.ds.show');
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        if (backpack_user()->hasRole('sales')) {
            $this->crud->addClause('where', 'user_id', '=', backpack_auth()->id());
            $this->crud->addClause('where', 'status', '!=', 4);
            $this->crud->addClause('where', 'status', '!=', 3);
        }
        if (backpack_user()->hasRole('purchasing')) {
            $this->crud->addClause('where', 'status', '=', 1);
            $this->crud->removeButton('create');
            $this->crud->removeButton('update');
            $this->crud->removeButton('delete');
        }

        $this->crud->addColumn([
            'name' => 'ds_number',
            'type' => 'text',
            'label' => 'Nomor Surat Jalan'
        ]);

        $this->crud->addColumn([
            'name' => 'sales_order_id',
            'type' => 'select',
            'entity' => 'SalesOrder',
            'attribute' => 'so_number',
            'model' => 'App\Models\SalesOrder',
            'label' => 'Nomor Sales Order'
        ]);

        $this->crud->addColumn([
            'name' => 'ds_date',
            'type' => 'date',
            'label' => 'Tanggal Delivery Note'
        ]);

        $this->crud->addColumn([
            'name' => 'expedition',
            'type' => 'text',
            'label' => 'Ekspedisi'
        ]);

        $this->crud->addColumn([
            'name' => 'etd',
            'type' => 'date',
            'label' => 'Estimasi Keberangkatan'
        ]);

        $this->crud->addColumn([
            'name' => 'description',
            'type' => 'text',
            'label' => 'Catatan'
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

        $count = DeliveryBySales::withTrashed()->whereDate('created_at', date('Y-m-d'))->count();
        $number = str_pad($count + 1,3,"0",STR_PAD_LEFT);

        $generate = $month.$day."-".$number."/DBS-SJ/".$year;

        return $number;
    }

    protected function setupCreateOperation()
    {
        CRUD::setValidation(DeliveryBySalesRequest::class);

        $this->crud->removeSaveActions(['save_and_back','save_and_edit','save_and_new']);

        $this->crud->addField([
            'label' => "Nomor Surat jalan",
            'name'  => "ds_number",
            'type'  => 'hidden',
            'value' => $this->generateNomorPengiriman(),
            'attributes' => [
                'readonly'    => 'disabled',
            ]
        ]);

        $this->crud->addField([
            'name' => 'perusahaan',
            'label' => 'Nama Perusahaan',
            'type' => 'text',
        ]);

        $this->crud->addField([
            'name' => 'sales_order_id',
            'label' => 'Nomor Sales Order',
            'type' => 'select2_from_array',
            'options' => SalesOrder::where('status', '=', Flag::PROCESS)->pluck('so_number', 'id'),
            'allows_null' => true,
        ]);

        $this->crud->addField([
            'name' => 'ds_date',
            'label' => 'Tanggal Surat Jalan',
            'type' => 'date_picker',
        ]);

        $this->crud->addField([
            'name' => 'etd',
            'label' => 'Estimasi Keberangkatan',
            'type' => 'datetime_picker',
        ]);

        $this->crud->addField([
            'name' => 'expedition',
            'label' => 'Ekspedisi',
            'type' => 'text',
        ]);

        $this->crud->addField([
            'name' => 'plat_number',
            'label' => 'Plat Nomor Kendaraan',
            'type' => 'text',
        ]);

        $this->crud->addField([
            'name' => 'driver',
            'label' => 'Nama Pengemudi',
            'type' => 'text',
        ]);

        $this->crud->addField([
            'name' => 'driver_phone',
            'label' => 'No Kontak Pengemudi',
            'type' => 'text',
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
            'label' => "Nomor Surat jalan",
            'name'  => "ds_number",
            'type'  => 'hidden',
            'attributes' => [
                'readonly'    => 'readonly',
            ]
        ]);

        $this->crud->addField([
            'name' => 'perusahaan',
            'label' => 'Nama Perusahaan',
            'type' => 'text',
        ]);

        $this->crud->addField([
            'name' => 'sales_order_id',
            'label' => 'Nomor Sales Order',
            'type' => 'select2_from_array',
            'options' => SalesOrder::where('status', '=', Flag::PROCESS)->pluck('do_number', 'id'),
            'allows_null' => true,
        ]);

        $this->crud->addField([
            'name' => 'ds_date',
            'label' => 'Tanggal Surat Jalan',
            'type' => 'date_picker',
        ]);

        $this->crud->addField([
            'name' => 'etd',
            'label' => 'Estimasi Keberangkatan',
            'type' => 'datetime_picker',
        ]);

        $this->crud->addField([
            'name' => 'plat_number',
            'label' => 'Plat Nomor Kendaraan',
            'type' => 'text',
        ]);

        $this->crud->addField([
            'name' => 'driver',
            'label' => 'Nama Pengemudi',
            'type' => 'text',
        ]);

        $this->crud->addField([
            'name' => 'driver_phone',
            'label' => 'No Kontak Pengemudi',
            'type' => 'text',
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
    }


    public function store(Request $request)
    {

        $count = DeliveryBySales::withTrashed()->whereDate('form_date', date($request->ds_date))->count();
        $number = str_pad($count + 1,3,"0",STR_PAD_LEFT);
        $day = date('d', strtotime($request->ds_date));
        $month = date('m', strtotime($request->ds_date));
        $year = date('Y', strtotime($request->ds_date));
        $nomor = $month.$day."-".$number."/".$request->perusahaan."-SF/".$year;
        $data = new SubmissionForm();
        $data->ds_number = $nomor;
        $data->ds_date = $request->ds_date;
        $data->perusahaan = $request->company;
        $data->sales_order_id = $request->sales_order_id;
        $data->etd = $request->etd;
        $data->expedition = $request->expedition;
        $data->plat_number = $request->plat_number;
        $data->user_id = $request->user_id;
        $data->driver = $request->driver ;
        $data->driver_phone = $request->driver_phone;
        if($request->hasFile('uploadref')) {
            $file = $request->file('uploadref');
            $path = $file->storeAs('delivery_by_slaes/uploadref', $month.$day.'-'.$number.'-'.$request->perusahaan.'-DS-'.$year. '.' . $file->getClientOriginalExtension() , 'public');
            $data->uploadref = $path;
        }
        $data->save();
        $cari = DeliveryBySales::where('ds_number' , '=' , $nomor)->first();
        return redirect(backpack_url('deliverybysales/'.$cari->id.'/show'));
    }

    public function update(Request $request)
    {
        $data = DeliveryBySales::findOrFail($request->id);
        $day = date('d', strtotime($request->ds_date));
        $month = date('m', strtotime($request->ds_date));
        $year = date('Y', strtotime($request->ds_date));
        $number = substr($data->form_number,5,3);
        $nomor = $month.$day."-".$number."/".$request->perusahaan."-SF/".$year;
        $data->ds_number = $nomor;
        $data->ds_date = $request->ds_date;
        $data->perusahaan = $request->company;
        $data->sales_order_id = $request->sales_order_id;
        $data->etd = $request->etd;
        $data->expedition = $request->expedition;
        $data->plat_number = $request->plat_number;
        $data->user_id = $request->user_id;
        $data->driver = $request->driver ;
        $data->driver_phone = $request->driver_phone;
        if($request->hasFile('uploadref')) {
            $file = $request->file('uploadref');
            $path = $file->storeAs('delivery_by_slaes/uploadref', $month.$day.'-'.$number.'-'.$request->perusahaan.'-DS-'.$year. '.' . $file->getClientOriginalExtension() , 'public');
            $data->uploadref = $path;
        }
        $data->update();
        $cari = DeliveryBySales::where('ds_number' , '=' , $nomor)->first();
        return redirect(backpack_url('deliverybysales/'.$cari->id.'/show'));

    }

    public function process(Request $request)
    {
        $header = DeliveryBySales::findOrFail($request->id);
        $header->status = Flag::COMPLETE;
        $details = DeliveryBySalesDetail::where('delivery_by_sales_id', '=', $request->id)->get();
        $sales_order = $header->SalesOrder;
        $sales_order_detail = SalesOrderDetail::where('sales_order_id', '=', $sales_order->id)->get();
        $submission_form = $sales_order->purchaseRequisition;
        $submission_form_id = collect($submission_form->toArray())->all();
        $submission_form_detail = SubmissionFormDetail::whereIn('submission_form_id', array_column($submission_form_id, 'id'))->get();
        foreach ($details as $detail) {
            $update = DeliveryBySalesDetail::findOrFail($detail->id);
            $update->status = Flag::COMPLETE;
            $update->update();
        }
        $head_sales = SalesOrder::findOrFail($sales_order->id);
        $head_sales->status = Flag::COMPLETE;
        $head_sales->update();
        foreach ($sales_order_detail as $sales_detail) {
            $detail = SalesOrderDetail::findOrFail($sales_detail->id);
            $detail->status = Flag::COMPLETE;
            $detail->update();
        }
        foreach ($submission_form as $form) {
            $submissionForm = SubmissionForm::findOrFail($form->id);
            $submissionForm->status = Flag::COMPLETE;
            $submissionForm->update();
        }
        foreach ($submission_form_detail as $form_detail) {
            $submissionFormDetail = SubmissionFormDetail::findOrFail($form_detail->id);
            $submissionFormDetail->status = Flag::COMPLETE;
            $submissionFormDetail->update();
        }
        $header->update();

        \Alert::add('success', 'Berhasil submit ' . $header->po_number)->flash();
        return redirect()->back();
    }

    public function pdf(Request $request)
    {
        $data = DeliveryBySales::findOrFail($request->id);

        $pdf = PDF::loadview('warehouse.ds.output_so',['data'=>$data]);
    	return $pdf->stream($data->ds_number.'.pdf');
    }
}
