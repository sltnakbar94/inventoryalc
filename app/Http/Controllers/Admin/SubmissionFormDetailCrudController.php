<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\SubmissionFormDetailRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\SubmissionForm;
use App\Models\SubmissionFormDetail;
use App\Flag;

/**
 * Class SubmissionFormDetailCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class SubmissionFormDetailCrudController extends CrudController
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
        CRUD::setModel(\App\Models\SubmissionFormDetail::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/submissionformdetail');
        CRUD::setEntityNameStrings('submissionformdetail', 'submission_form_details');
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
        CRUD::setValidation(SubmissionFormDetailRequest::class);

        CRUD::setFromDb(); // fields

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

    public function store(Request $request)
    {
        $find = SubmissionFormDetail::where('submission_form_id', '=', $request->submission_form_id)->where('item_id', '=', $request->item_id)->first();
        $item = Item::findOrFail($request->item_id);
        if (!empty($find)) {
            $data = SubmissionFormDetail::findOrFail($request->item_id);
            $data->qty = $data->qty + $request->qty;
            $data->update();
        } else {
            $data = new SubmissionFormDetail;
            $data->submission_form_id = $request->submission_form_id;
            $data->item_id = $request->item_id;
            $data->serial = $item->serial;
            $data->qty = $request->qty;
            $data->uom = $item->unit;
            $data->save();
        }
        $item = Item::findOrFail($request->item_id);

        \Alert::add('success', 'Berhasil tambah item ' . $item->name)->flash();
        return redirect()->back();
    }

    public function destroy($id)
    {
        $form_detail = SubmissionFormDetail::findOrFail($id);
        $form_detail->delete();

        \Alert::add('success', 'Berhasil hapus data Item')->flash();
        return redirect()->back();
    }

    public function accept($id)
    {
        $data = SubmissionFormDetail::findOrFail($id);
        $data->status = Flag::PROCESS;
        $data->update();
        if (empty(SubmissionFormDetail::where('submission_form_id', '=', $data->submission_form_id)->where('status', '=', 0)->first())) {
            $header = SubmissionForm::findOrFail($data->submission_form_id);
            $header->status = Flag::PROCESS;
            $header->update();
        }

        \Alert::add('success', 'Berhasil konfirmasi data Item')->flash();
        return redirect()->back();
    }

    public function denied($id)
    {
        $data = SubmissionFormDetail::findOrFail($id);
        $data->status = Flag::DENIED;
        $data->update();
        if (empty(SubmissionFormDetail::where('submission_form_id', '=', $data->submission_form_id)->where('status', '=', 0)->first())) {
            $header = SubmissionForm::findOrFail($id);
            $header->status = Flag::COMPLETE;
            $header->update();
        }

        \Alert::add('success', 'Berhasil konfirmasi data Item')->flash();
        return redirect()->back();
    }
}