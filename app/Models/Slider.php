<?php
/**
 * Created by PhpStorm.
 * User: 84078
 * Date: 7/5/2019
 * Time: 6:57 PM
 */
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Translation\TranslationSlider;
use App\Services\UploadFile\UploadImage;
use App;

class Slider extends Model{
    const IMAGE_PATH = 'slider/';

    protected $fillable = [
        'title',
        'content',
        'position',
        'group',
        'image'
    ];
    protected $table = "slider";
    public $timestamps = true;

    protected $attributeMultiplang = [
        'title',
        'content',
    ];

    public function getContentByLang($attribute)
    {
        $content = TranslationSlider::select("content")
            ->where("slider_id", "=", $this->id)
            ->where("attribute", "=", $attribute)
            ->where("lang", "=", App::getLocale())
            ->get();
        return $content ? $content->content : null;
    }
    public function saveDataByLang(){
        foreach ($this->attributeMultiplang as $value ){
            $translate = TranslationSlider::updateOrCreate(
                ['slider_id' => $this->id, 'attribute' => $value,"lang"=>App::getLocale()],
                ['content' => $this->$value]
            );
            $translate->save();
        }
    }
    public function setLangAttribute(){
        $data = TranslationSlider::where("slider_id", "=", $this->id)
            ->where("lang", "=", App::getLocale())
            ->get();
        foreach ($data as $value){
            $tmp = $value->attribute;
            $this->$tmp = $value->content;
        }
    }

    public function getUrlImage($image){
        $service = new UploadImage();
        $service->setPath(self::IMAGE_PATH);
        return $service->getUrlFile($image);
    }
    public function deleteLang(){
        return TranslationSlider::where('slider_id', $this->id)->delete();

    }

}