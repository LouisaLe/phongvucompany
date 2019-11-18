<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CoreConfig extends Model
{

    const GOOGLE_MAP = "google/map";
    protected $fillable = [
        'key',
    	'value'
    ];

    protected $table = 'core_config';
    public $timestamps = true;
    
}
