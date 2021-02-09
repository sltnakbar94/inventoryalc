<?php

namespace App\Http\Controllers\Admin;

use Auth;
use App\Models\Item;
use App\Models\Customer;
use App\Models\WarehouseOut;
use Illuminate\Support\Facades\DB;
use App\Models\BagItemWarehouseOut;
use Illuminate\Support\Facades\Request;
use App\Http\Requests\WarehouseOutRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;


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
        CRUD::setFromDb(); // columns


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
    protected function setupCreateOperation()
    {
        CRUD::setValidation(WarehouseOutRequest::class);

        $this->crud->addField([
            'label' => "Surat Jalan",
            'name'  => "delivery_note",
            'type'  => 'text',
        ]);

        $this->crud->addField([
            'name' => 'customer_id',
            'label' => 'Customer',
            'type' => 'select_from_array',
            'options' => Customer::pluck('name', 'id'),
            'allows_null' => true,
        ]);

        $this->crud->addField([
            'name' => 'destination',
            'label' => 'Tujuan',
            'type' => 'address_algolia',
        ]);

        $this->crud->addField([
            'name' => 'date_out',
            'label' => 'Tanggal Keluar',
            'type' => 'date_picker',
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
        $content = $this->traitShow($id);
        $content['data'] = WarehouseOut::findOrFail($id)->with('customer')->first();
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
        return $content;
    }
    
}
