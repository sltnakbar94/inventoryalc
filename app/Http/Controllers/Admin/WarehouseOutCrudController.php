<?php

namespace App\Http\Controllers\Admin;

use PDF;
use Auth;
use App\Flag;
use App\Models\Item;
use App\Models\Company;
use App\Models\Stackholder;
use App\Models\WarehouseOut;
use Illuminate\Http\Request;
use App\Services\GlobalServices;
use Illuminate\Support\Facades\DB;
use App\Models\BagItemWarehouseOut;
use App\Services\DeliveryOrderServices;
use App\Http\Requests\WarehouseOutRequest;
use App\Models\Revision;
use App\Models\Stock;
use App\Models\Warehouse;
use App\Module;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use Illuminate\Support\Facades\Validator;

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
        CRUD::setEntityNameStrings('Delivery Order', 'Delivery Order');
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
            'name' => 'do_number',
            'type' => 'text',
            'label' => 'Nomor DO'
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
            'name' => 'do_date',
            'type' => 'date',
            'label' => 'Tanggal DO'
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

        return $number;
    }
    protected function setupCreateOperation()
    {
        CRUD::setValidation(WarehouseOutRequest::class);
        $this->crud->removeSaveActions(['save_and_back','save_and_edit','save_and_new']);

        $this->crud->addField([
            'label' => 'Nomor DO',
            'name'  => 'do_number',
            'type'  => 'hidden',
            'value' => $this->generateNomorPengiriman(),
            'attributes' => [
                'readonly'    => 'readonly',
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
            'name' => 'do_date',
            'label' => 'Tanggal DO',
            'type' => 'date_picker',
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
            'label' => 'Nomor Referensi',
            'name'  => 'ref_no',
            'type'  => 'text',
            'attributes' => [
                'placeholder' => 'Contoh : Nomor Bill',
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
            'label' => 'Ekspedisi',
            'name'  => 'expedition',
            'type'  => 'text',
        ]);

        $this->crud->addField([
            'name' => 'warehouse_id',
            'label' => 'Pilih Gudang',
            'type' => 'select2_from_array',
            'options' => Warehouse::pluck('name', 'id'),
            'allows_null' => true,
        ]);

        $this->crud->addField([
            'name' => 'destination',
            'label' => 'Tujuan Pengiriman',
            'type' => 'textarea',
        ]);

        $this->crud->addField([
            'name' => 'description',
            'label' => 'Keterangan',
            'type' => 'textarea',
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
        $this->crud->removeSaveActions(['save_and_back','save_and_edit','save_and_new']);

        $this->crud->addField([
            'label' => 'Nomor DO',
            'name'  => 'do_number',
            'type'  => 'hidden',
            'attributes' => [
                'readonly'    => 'readonly',
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
            'name' => 'do_date',
            'label' => 'Tanggal DO',
            'type' => 'date_picker',
        ]);

        $this->crud->addField([
            'name' => 'customer_id',
            'label' => 'Customer',
            'type' => 'text',
            'options' => Stackholder::whereHas('stackholderRole', function ($query) {
                return $query->where('name', '=', 'customer');
            })->pluck('company', 'id'),
            'allows_null' => true,
        ]);

        $this->crud->addField([
            'label' => 'Nomor Referensi',
            'name'  => 'ref_no',
            'type'  => 'text',
            'attributes' => [
                'placeholder' => 'Contoh : Nomor Bill',
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
            'label' => 'Ekspedisi',
            'name'  => 'expedition',
            'type'  => 'text',
        ]);

        $this->crud->addField([
            'name' => 'warehouse_id',
            'label' => 'Pilih Gudang',
            'type' => 'select2_from_array',
            'options' => Warehouse::pluck('name', 'id'),
            'allows_null' => true,
        ]);

        $this->crud->addField([
            'name' => 'destination',
            'label' => 'Tujuan Pengiriman',
            'type' => 'textarea',
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

    public function store(Request $request)
    {
        $perusahaan = Company::find($request->perusahaan);
        $count = WarehouseOut::withTrashed()->whereDate('do_date',date($request->do_date))->count();
        $number = str_pad($count + 1,3,"0",STR_PAD_LEFT);
        $day = date('d', strtotime($request->do_date));
        $month = date('m', strtotime($request->do_date));
        $year = date('Y', strtotime($request->do_date));
        $nomor = $month.$day."-".$number."/".$perusahaan->code."-DO/".$year;
        $data = new WarehouseOut();
        $data->do_number = $nomor;
        $data->perusahaan = $request->perusahaan;
        $data->do_date = $request->do_date;
        $data->customer_id = $request->customer_id;
        $data->ref_no = $request->ref_no;
        $data->expedition = $request->expedition;
        $data->warehouse_id = $request->warehouse_id;
        $data->destination = $request->destination ;
        $data->description = $request->description;
        $data->start_date = $request->start_date;
        $data->end_Date = $request->end_date;
        $data->user_id = $request->user_id;
        $data->status = Flag::PLAN;
        if($request->hasFile('uploadref')) {
            $file = $request->file('uploadref');
            $path = $file->storeAs('delivery_order/uploadref', $month.$day.'-'.$number.'-'.$request->perusahaan.'-DO-'.$year. '.' . $file->getClientOriginalExtension() , 'public');
            $data->uploadref = $path;
        }
        $data->save();

        $cari = WarehouseOut::where('do_number' , '=' , $nomor)->first();
        return redirect(backpack_url('warehouseout/'.$cari->id.'/show'));
    }

    public function update(Request $request)
    {
        $perusahaan = Company::find($request->perusahaan);
        $data = WarehouseOut::findOrFail($request->id);
        $day = date('d', strtotime($request->po_date));
        $month = date('m', strtotime($request->po_date));
        $year = date('Y', strtotime($request->po_date));
        $number = substr($data->po_number,5,3);
        $nomor = $month.$day."-".$number."/".$perusahaan->code."-DO/".$year;
        $data->po_number = $nomor;
        $data->po_date = $request->po_date;
        $data->perusahaan = $request->perusahaan;
        $data->supplier_id = $request->supplier_id;
        $data->ppn = $request->ppn;
        $data->term_of_payment = $request->term_of_payment;
        $data->warehouse_id = $request->warehouse_id;
        $data->description = $request->description ;
        $data->start_date = $request->start_date;
        $data->end_date = $request->end_date;
        $data->user_id = $request->user_id;
        $data->do_number = $nomor;
        $data->perusahaan = $request->company;
        $data->do_date = $request->do_date;
        $data->customer_id = $request->customer_id;
        $data->ref_no = $request->ref_no;
        $data->expedition = $request->expedition;
        $data->warehouse_id = $request->warehouse_id;
        $data->destination = $request->destination ;
        $data->description = $request->description;
        $data->start_date = $request->start_date;
        $data->end_Date = $request->end_date;
        $data->user_id = $request->user_id;
        $data->status = Flag::PLAN;
        if($request->hasFile('uploadref')) {
            $file = $request->file('uploadref');
            $path = $file->storeAs('delivery_order/uploadref', $month.$day.'-'.$number.'-'.$request->perusahaan.'-DO-'.$year. '.' . $file->getClientOriginalExtension() , 'public');
            $data->uploadref = $path;
        }
        $data->update();

        $cari = WarehouseOut::where('do_number' , '=' , $nomor)->first();
        return redirect(backpack_url('warehouseout/'.$cari->id.'/show'));
    }

    public function storePic(Request $request)
    {
        $data = WarehouseOut::findOrFail($request->id);
        $data->pic_customer = $request->pic;
        $data->update();

        \Alert::add('success', 'Berhasil tambah pic ' . $request->pic)->flash();
       return redirect()->back();
    }

    public function accept($id, DeliveryOrderServices $deliveryOrderService)
    {
        try {
            DB::beginTransaction();
            $data = BagItemWarehouseOut::findOrFail($id);
            $data->status = Flag::PROCESS;
            $data->update();
            $item_on_bag = BagItemWarehouseOut::where('warehouse_out_id', '=', $data->warehouse_out_id)->where('status', '=', Flag::PLAN)->first();
            if (empty($item_on_bag)) {
                throw new \Exception("Data Tidak Ditemukan");
            }
            $header = WarehouseOut::findOrFail($data->warehouse_out_id);
            $header->status = Flag::PROCESS;
            $header->update();

            // Increase Qty Item After Approve
            $deliveryOrderService->DecreaseItemQTY($id);

            DB::commit();
            $return = array('status' => 'success', 'message' => 'Berhasil Konfirmasi Data Item');
        } catch (\Throwable $th) {
            DB::rollback();
            $return = array('status' => 'danger', 'message' => $th->getMessage());
        }
        \Alert::add($return['status'], $return['message'])->flash();
        return redirect()->back();
    }

    public function denied($id)
    {
        try {
            DB::beginTransaction();
            $data = BagItemWarehouseOut::findOrFail($id);
            $data->status = FLag::DENIED;
            $data->update();
            if (empty(BagItemWarehouseOut::where('warehouse_out_id', '=', $data->warehouse_out_id)->where('status', '=', Flag::PLAN)->first())) {
                throw new \Exception("Data Tidak Ditemukan");
            }
            $header = WarehouseOut::findOrFail($id);
            $header->status = Flag::PROCESS;
            $header->update();
            DB::commit();
            $return = array('status' => 'success', 'message' => 'Berhasil Konfirmasi Data Item');
        } catch (\Exception $th) {
            DB::rollBack();
            $return = array('status' => 'danger', 'message' => $th->getMessage());
        }
        \Alert::add($return['status'], $return['message'])->flash();
        return redirect()->back();
    }

    public function process(Request $request)
    {
        $header = WarehouseOut::findOrFail($request->id);
        $header->status = Flag::SUBMITED;
        $details = BagItemWarehouseOut::where('warehouse_out_id', '=', $request->id)->get();
        foreach ($details as $detail) {
            $update = BagItemWarehouseOut::findOrFail($detail->id);
            $update->status = Flag::SUBMITED;
            $stocks = Stock::where('warehouse_id', '=', $header->warehouse_id)->where('item_id', '=', $update->item_id)->first();
            $stock = Stock::findOrFail($stocks->id);
            $stock->stock_on_location -= $update->qty;
            $stock->stock_out_indent += $update->qty;
            $stock->update();
            $update->update();
        }
        $header->update();

        \Alert::add('success', 'Berhasil submit ' . $header->do_number)->flash();
        return redirect()->back();
    }

    public function acceptHeader(Request $request)
    {
        $header = WarehouseOut::findOrFail($request->id);
        $header->status = Flag::PROCESS;
        $details = BagItemWarehouseOut::where('warehouse_out_id', '=', $request->id)->get();
        foreach ($details as $detail) {
            $update = BagItemWarehouseOut::findOrFail($detail->id);
            $update->status = Flag::PROCESS;
            $update->update();
        }
        $header->update();

        \Alert::add('success', 'Berhasil submit ' . $header->po_number)->flash();
        return redirect()->back();
    }

    public function deniedHeader(Request $request)
    {
        $header = WarehouseOut::findOrFail($request->id);
        $header->status = Flag::DENIED;
        $details = BagItemWarehouseOut::where('warehouse_out_id', '=', $request->id)->get();
        foreach ($details as $detail) {
            $update = BagItemWarehouseOut::findOrFail($detail->id);
            $update->status = Flag::DENIED;
            $stocks = Stock::where('warehouse_id', '=', $header->warehouse_id)->where('item_id', '=', $update->item_id)->first();
            $stock = Stock::findOrFail($stocks->id);
            $stock->stock_on_location += $update->qty;
            $stock->stock_out_indent -= $update->qty;
            $stock->update();
            $update->update();
        }
        $header->update();

        \Alert::add('success', 'Berhasil submit ' . $header->po_number)->flash();
        return redirect()->back();
    }

    public function revision(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'warehouse_out_id' => 'required',
            'revision' => 'required',
        ]);
        if ($validator->fails()) {
            \Alert::add('danger', 'Data tidak lengkap')->flash();
            return redirect()->back();
        } else {
            $revision = new Revision();
            $revision->module = Module::DeliveryOrder;
            $revision->module_id = $request->warehouse_out_id;
            $revision->revision = $request->revision;
            $revision->user_id = backpack_user()->id;
            $header = WarehouseOut::findOrFail($request->warehouse_out_id);
            $header->status = Flag::REVISION;
            $details = BagItemWarehouseOut::where('warehouse_out_id', '=', $request->warehouse_out_id)->get();
            foreach ($details as $detail) {
                $update = BagItemWarehouseOut::findOrFail($detail->id);
                $update->status = Flag::REVISION;
                $update->update();
            }
            $revision->save();
            $header->update();
            \Alert::add('success', 'Berhasil memberikan pesan revisi')->flash();
            return redirect()->back();
        }
    }
}
