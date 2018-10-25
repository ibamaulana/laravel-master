<?php

namespace Modules\Product\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
	use SoftDeletes;

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
}
