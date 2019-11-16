<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Translation\TranslationAbout;
use App;
use App\Services\UploadFile\UploadImage;
class Abouts extends Model
{
    public $timestamps = true;
    protected $table = 'abouts';

    protected $fillable = [
        'title',
        'content',
        'image'
    ];

    protected $attributeMultiplang = [
        'title',
        'content',
    ];

    public function getContentByLang($attribute)
    {
        $content = TranslationAbout::select("content")
            ->where("about_id", "=", $this->id)
            ->where("attribute", "=", $attribute)
            ->where("lang", "=", App::getLocale())
            ->get();
        return $content ? $content->content : null;
    }

    public function saveDataByLang(){
        foreach ($this->attributeMultiplang as $value ){
            $translate = TranslationAbout::updateOrCreate(
                ['about_id' => $this->id, 'attribute' => $value,"lang"=>App::getLocale()],
                ['content' => $this->$value]
            );
            $translate->save();
        }
    }

    public function setLangAttribute(){
        $data = TranslationAbout::where("about_id", "=", $this->id)
            ->where("lang", "=", App::getLocale())
            ->get();
        foreach ($data as $value){
            $tmp = $value->attribute;
            $this->$tmp = $value->content;
        }
    }

    public function deleteLang(){
        return TranslationAbout::where('about_id', $this->id)->delete();

    }

    public function getUrlImage($image){
        $service = new UploadImage();
        return $service->getUrlFile($image);
    }

}
