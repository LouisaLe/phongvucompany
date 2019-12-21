<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Translation\TranslationProduct;
use App;

class CategoryProduct extends Model
{
    protected $fillable = [
    	'product_id',
    	'category_id',
    ];

}
