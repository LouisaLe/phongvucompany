<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Translation\TranslationFeedback;
use App;
use App\Services\UploadFile\UploadImage;

class FeedBack extends Model
{
    const IMAGE_PATH = 'feedback/';

    protected $fillable = [
        'customer_name',
        'feed_back',
        'image'
    ];
    
    public $timestamps = true;

    protected $attributeMultiplang = [
        'customer_name',
        'feed_back',
    ];

    public function getContentByLang($attribute)
    {
        $content = TranslationFeedback::select("content")
            ->where("feedback_id", "=", $this->id)
            ->where("attribute", "=", $attribute)
            ->where("lang", "=", App::getLocale())
            ->get();
        return $content ? $content->content : null;
    }
    public function saveDataByLang(){
        foreach ($this->attributeMultiplang as $value ){
            $translate = TranslationFeedback::updateOrCreate(
                ['feedback_id' => $this->id, 'attribute' => $value,"lang"=>App::getLocale()],
                ['content' => $this->$value]
            );
            $translate->save();
        }
    }
    public function setLangAttribute(){
        $data = TranslationFeedback::where("feedback_id", "=", $this->id)
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
        return TranslationFeedback::where('feedback_id', $this->id)->delete();

    }
}
