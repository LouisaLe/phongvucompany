<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{

    protected $fillable = [
    	'fullname',
    	'phone_number',
    	'product_id',
    	'status',
    ];
    
    public $timestamps = true;
    
}
