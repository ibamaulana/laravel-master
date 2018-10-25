<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\Traits\LogsActivity;

class Client extends Model
{
	use SoftDeletes, LogsActivity;

	/**
	* The attributes that use for name table
	*
	* @var string
	*/
	protected $table = 'product';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'prod_name',
        'prod_desc',
        'prod_image', 
        'prod_status', 
    ];

    /**
    * The attributes that used for softdeletes
    * 
    * @var array
    */
    protected $dates = ['deleted_at'];

    /**
    * The attributes for identifier log actifity
    *
    * @var boolean 
    */
    protected static $logFillable = true;
    

    /**
    * The attributes for identifier only for changes value for log activity
    *
    * @var boolean
    */
    protected static $logOnlyDirty = true;


}
