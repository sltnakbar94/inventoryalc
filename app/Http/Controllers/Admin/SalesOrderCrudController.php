<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\SalesOrderRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use App\Models\Stackholder;
use App\Models\SalesOrder;
use App\Models\SalesOrderDetail;
use Illuminate\Http\Request;
use PDF;

/**
 * Class SalesOrderCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class SalesOrderCrudController extends CrudController
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
        CRUD::setModel(\App\Models\SalesOrder::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/salesorder');
        CRUD::setEntityNameStrings('Sales Order', 'Sales Orders');
        $this->crud->setShowView('warehouse.so.show');
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        $this->crud->addColumn([
            'name' => 'so_number',
            'type' => 'text',
            'label' => 'Nomor SO'
        ]);

        $this->crud->addColumn([
            'name' => 'supplier_id',
            'type' => 'select',
            'entity' => 'supplier',
            'attribute' => 'company',
            'model' => 'App\Models\Stackholder',
            'label' => 'Supplier'
        ]);

        $this->crud->addColumn([
            'name' => 'customer_id',
            'type' => 'select',
            'entity' => 'customer',
            'attribute' => 'company',
            'model' => 'App\Models\Stackholder',
            'label' => 'Customer'
        ]);

        $this->crud->addColumn([
            'name' => 'so_date',
            'type' => 'date',
            'label' => 'Tanggal Masuk'
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

        $count = SalesOrder::withTrashed()->whereDate('created_at', date('Y-m-d'))->count();
        $number = str_pad($count + 1,3,"0",STR_PAD_LEFT);

        $generate = $month.$day."-".$number."/WHI-SO/".$year;

        return $generate;
    }

    protected function setupCreateOperation()
    {
        CRUD::setValidation(SalesOrderRequest::class);
        $this->crud->removeSaveActions(['save_and_back','save_and_edit','save_and_new']);

        $this->crud->addField([
            'label' => "Nomor SO",
            'name'  => "so_number",
            'type'  => 'text',
            'value' => $this->generateNomorPengiriman(),
            'attributes' => [
                'readonly'    => 'readonly',
            ]
        ]);

        $this->crud->addField([
            'name' => 'so_date',
            'label' => 'Tanggal SO',
            'type' => 'date_picker',
        ]);

        $this->crud->addField([
            'name' => 'supplier_id',
            'label' => 'Supplier',
            'type' => 'select2_from_array',
            'options' => Stackholder::whereHas('stackholderRole', function ($query) {
                return $query->where('name', '=', 'supplier');
            })->pluck('company', 'id'),
            'allows_null' => true,
        ]);

        $this->crud->addField([
            'name' => 'customer_id',
            'label' => 'Customer',
            'type' => 'select2_from_array',
            'options' => Stackholder::whereHas('stackholderRole', function ($query) {
                return $query->where('name', '=', 'customer');
            })->pluck('company', 'id'),
            'allows_null' => true,
        ]);

        $this->crud->addField([
            'name' => 'ref_no',
            'label' => 'Nomor Referensi',
            'type' => 'text',
            'attributes' => [
                'placeholder' => 'Contoh : Nomor Surat Penawaran Harga',
              ],
        ]);

        $this->crud->addField([
            'name' => 'discount',
            'label' => 'Diskon (%)',
            'type' => 'number',
            'hint' => 'Discount keseluruhan',
        ]);

        $this->crud->addField([
            'name' => 'ppn',
            'label' => 'PPN (10%)',
            'type' => 'boolean',
            'hint' => 'Bila supplier belum PKP maka tidak Pakai PPN',
        ]);

        $this->crud->addField([
            'name' => 'term_of_paymnet',
            'label' => 'Term of Payment',
            'type' => 'text',
        ]);

        $this->crud->addField([
            'name' => 'description',
            'label' => 'Keterangan',
            'type' => 'textarea',
        ]);

        $this->crud->addField([   // date_range
            'name'  => ['start_date', 'end_date'], // db columns for start_date & end_date
            'label' => 'Estimasi Tanggal Mulai dan Akhir SO',
            'type'  => 'date_range',
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
        $this->setupCreateOperation();
    }

    public function storePic(Request $request)
    {
        if ($request->type == "customer") {
            $data = SalesOrder::findOrFail($request->id);
            $data->pic_customer = $request->pic;
        }
        if ($request->type == "supplier") {
            $data = SalesOrder::findOrFail($request->id);
            $data->pic_supplier = $request->pic;
        }
        $data->update();

        \Alert::add('success', 'Berhasil tambah pic ' . $request->pic)->flash();
       return redirect()->back();
    }

    public function pdf(Request $request)
    {
        $sum = SalesOrderDetail::sum('sub_total');
        $data = SalesOrder::findOrFail($request->id);

        $pdf = PDF::loadview('warehouse.so.output',['data'=>$data, 'sum'=>$sum]);
    	return $pdf->stream($data->so_number.'.pdf');
    }

    public function dn(Request $request)
    {
        return redirect()->route('generate_delivery-note', [$request->id]);

    }
}