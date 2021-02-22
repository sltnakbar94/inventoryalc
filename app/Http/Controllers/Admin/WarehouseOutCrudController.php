<?php

namespace App\Http\Controllers\Admin;

use Auth;
use App\Models\Item;
use App\Models\Stackholder;
use App\Models\WarehouseOut;
use Illuminate\Support\Facades\DB;
use App\Models\BagItemWarehouseOut;
use App\Http\Requests\WarehouseOutRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use App\Models\Company;
use App\Services\GlobalServices;
use PDF;
use Illuminate\Http\Request;

/**
 * Class WarehouseOutCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class WarehouseOutCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation { show as traitShow; }

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     *
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\WarehouseOut::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/warehouseout');
        CRUD::setEntityNameStrings('Barang Keluar', 'Barang Keluar');
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
            'name' => 'do_number',
            'type' => 'text',
            'label' => 'Nomor DO'
        ]);

        $this->crud->addColumn([
            'name' => 'customer_id',
            'type' => 'select',
            'entity' => 'customer',
            'attribute' => 'name',
            'model' => 'App\Models\Stackholder',
            'label' => 'Customer'
        ]);

        $this->crud->addColumn([
            'name' => 'destination',
            'type' => 'text',
            'label' => 'Tujuan Pengiriman'
        ]);

        $this->crud->addColumn([
            'name' => 'date_out',
            'type' => 'date',
            'label' => 'Tanggal Pengiriman'
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

        $count = WarehouseOut::withTrashed()->whereDate('created_at', date('Y-m-d'))->count();
        $number = str_pad($count + 1,3,"0",STR_PAD_LEFT);

        $generate = $month.$day."-".$number."/WHO-DO/".$year;

        return $generate;
    }
    protected function setupCreateOperation()
    {
        CRUD::setValidation(WarehouseOutRequest::class);
        $this->crud->removeSaveActions(['save_and_back','save_and_edit','save_and_new']);

        $this->crud->addField([
            'label' => 'Nomor DO',
            'name'  => 'do_number',
            'type'  => 'text',
            'value' => $this->generateNomorPengiriman(),
            'attributes' => [
                'readonly'    => 'readonly',
            ]
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
            'name' => 'do_date',
            'label' => 'Tanggal DO',
            'type' => 'date_picker',
        ]);

        $this->crud->addField([
            'label' => 'Nomor Referensi',
            'name'  => 'ref_no',
            'type'  => 'text',
            'attributes' => [
                'placeholder' => 'Contoh : Nomor Bill',
              ],
        ]);

        $this->crud->addField([
            'label' => 'Ekspedisi',
            'name'  => 'expediion',
            'type'  => 'text',
        ]);

        $this->crud->addField([   // date_range
            'name'  => ['start_date', 'end_date'], // db columns for start_date & end_date
            'label' => 'Estimasi Tanggal Mulai dan Akhir DO',
            'type'  => 'date_range',
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

    protected function setupShowOperation()
    {
        $this->crud->setShowView('warehouse.out.show');
    }

    public function show($id)
    {
        $globalService = new GlobalServices;
        $content = $this->traitShow($id);
        $content['data'] = WarehouseOut::findOrFail($id)->with('customer')->first();

        //Check if Flag There's No Submit
        $bagItemOnWarehouseOut = BagItemWarehouseOut::where('warehouse_out_id', $id)->get();
        $checkApprovalByWarehouseID = $globalService->CheckingOnArray($bagItemOnWarehouseOut, 'submit');

        $this->crud->addField([
            'name' => 'warehouse_out',
            'data' => $content['data']
        ]);

        $this->crud->addField([
            'name' => 'items',
            'data' => Item::all(),
        ]);

        $this->crud->addField([
            'name' => 'items_on-bag',
            'data' => BagItemWarehouseOut::all(),
        ]);

        $this->crud->addField([
            'name' => 'flag_approval',
            'data' => $checkApprovalByWarehouseID
        ]);
        return $content;
    }

    public function generateDeliveryNotes($warehouse_out_id)
    {
        return redirect()->route('generate_delivery-note', [$warehouse_out_id]);
    }

    public function pdf(Request $request)
    {
        $data = WarehouseOut::where('id', '=', $request->id)->first();

        $pdf = PDF::loadview('warehouse.out.output',['data'=>$data]);
    	return $pdf->stream($data->do_number.'.pdf');
    }

    public function storePic(Request $request)
    {
        $data = WarehouseOut::findOrFail($request->id);
        $data->pic_customer = $request->pic;
        $data->update();

        \Alert::add('success', 'Berhasil tambah pic ' . $request->pic)->flash();
       return redirect()->back();
    }

}
