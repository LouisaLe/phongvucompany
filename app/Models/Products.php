<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Translation\TranslationProduct;
use App;

class Products extends Model
{
    const FOLDER_UPLOAD = 'uploads/images/products';
    protected $table = 'products';
    public $timestamps = true;
    protected $attributes = ['image'=>0];
    protected $fillable = [
    	'name',
    	'image',
    	'summary',
    	'short_description',
    	'description',
    	'video_url',
    	'keywords',
    	'meta_description',
    	'status',
        'category_id',
        'sku'
    ];
    

    /**
     * @return mixed
     */
    public function getProducts(){
        return self::all();
    }

    /**
     * @return mixed
     */
    public function getListHomePage(){
        return self::where("status","=", 1)->get();
    }

    public function getListProductByCate($cateId = false){
        if($cateId){
            return self::where("category_id","=", $cateId)->get();
        }
        return $this->getProducts();
    }

    /**
     * @param $id
     * @return mixed
     */
    public function getProductById($id){
        return self::findOrfail($id);
    }

    public function getPathImage($nameImage){
        return self::FOLDER_UPLOAD . "/".$nameImage;
    }

}
