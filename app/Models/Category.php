<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Translation\TranslationProduct;
use App;

class Category extends Model
{
    const FOLDER_UPLOAD = 'uploads/images/category';
    protected $table = 'category';
    public $timestamps = true;
    protected $attributes = ['image'=>0];
    protected $fillable = [
    	'name',
    	'parent_id',
    	'status',
    	'name',
    	'image',
    	'meta_title',
    	'meta_keyword',
    	'description',
    	'url_key',
    ];
    

}
