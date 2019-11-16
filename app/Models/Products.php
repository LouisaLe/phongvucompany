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
    ];

    protected $attributeMultiplang = [
        'name',
        'summary',
        'short_description',
        'description',
        'keywords',
        'meta_description'
    ];

    public function getContentByLang($attribute)
    {
        $content = TranslationProduct::select("content")
            ->where("product_id", "=", $this->id)
            ->where("attribute", "=", $attribute)
            ->where("lang", "=", App::getLocale())
            ->get();
        return $content ? $content->content : null;
    }
    public function saveDataByLang(){
        foreach ($this->attributeMultiplang as $value ){
            $translate = TranslationProduct::updateOrCreate(
                ['product_id' => $this->id, 'attribute' => $value,"lang"=>App::getLocale()],
                ['content' => $this->$value]
            );
            $translate->save();
        }
    }

    public function setLangAttribute(){
        $data = TranslationProduct::where("product_id", "=", $this->id)
            ->where("lang", "=", App::getLocale())
            ->get();
        foreach ($data as $value){
            $tmp = $value->attribute;
            $this->$tmp = $value->content;
        }
    }

    public function deleteLang(){
        return TranslationProduct::where('product_id', $this->id)->delete();

    }
}
