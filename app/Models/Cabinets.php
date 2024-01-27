<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Ministries;
use App\Models\Members;
use App\Models\Documents;
use App\Models\WorkPrograms;

class Cabinets extends Model
{
    use CrudTrait;
    use HasFactory;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'cabinets';
    // protected $primaryKey = 'id';
    // public $timestamps = false;
    protected $guarded = ['id'];
    // protected $fillable = [];
    // protected $hidden = [];

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */
    public static function boot()
    {
        parent::boot();

        static::updating(function ($kabinet) {
            if ($kabinet->status === 'active') {
                self::where('id', '<>', $kabinet->id)->update(['status' => 'inactive']);
            }
        });

        static::creating(function ($kabinet) {
            if ($kabinet->status === 'active') {
                self::where('id', '<>', $kabinet->id)->update(['status' => 'inactive']);
            }
        });
    }
    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */
    public function ministry()
    {
        return $this->hasMany(Ministries::class, 'cabinet_id');
    }

    public function members()
    {
        return $this->hasMany(Members::class, 'cabinet_id');
    }

    public function documents()
    {
        return $this->hasMany(Documents::class, 'cabinet_id');
    }

    public function programs()
    {
        return $this->hasMany(WorkPrograms::class, 'cabinet_id');
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
}
