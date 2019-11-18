<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FunFacts extends Model
{

    protected $fillable = [
        'experience',
    	'orders',
    	'customers',
    	'product'
    ];
    
    public $timestamps = true;
    
}
