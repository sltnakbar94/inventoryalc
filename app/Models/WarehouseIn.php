<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\User;
use App\Models\Stackholder;

class WarehouseIn extends Model
{
    use CrudTrait, SoftDeletes;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'warehouse_ins';
    // protected $primaryKey = 'id';
    // public $timestamps = false;
    protected $guarded = ['id'];
    // protected $fillable = [];
    // protected $hidden = [];
    // protected $dates = [];

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */
    /**
     * Get Sales Order by ID
     *
     * @param int $id
     * @return Collection
     */
    public function GetGrandTotalbyID($id)
    {
        return $this->findOrFail($id)->grand_total;
    }

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function details()
    {
        return $this->hasMany(BagItemWarehouseIn::class, 'warehouse_in_id', 'id')->orderby('created_at', 'asc');
    }

    public function supplier()
    {
        return $this->belongsTo(Stackholder::class, 'supplier_id', 'id');
    }

    public function customer()
    {
        return $this->belongsTo(Stackholder::class, 'customer_id', 'id');
    }

    public function purchaseRequisition()
    {
        return $this->belongsToMany(SubmissionForm::class, 'pr_po_relations', 'warehouse_in_id', 'submission_form_id');
    }
    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | ACCESSORS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */
    public function setUploadrefAttribute($value)
    {
        $attribute_name = "uploadref";
        $disk = "public";
        $destination_path = "purchase_orderin/uploadref";

        $this->uploadFileToDisk($value, $attribute_name, $disk, $destination_path);
    }
}
