<?php
/**
 * Created by PhpStorm.
 * User: 84078
 * Date: 6/20/2019
 * Time: 9:24 PM
 */

namespace App\Services\UploadFile;

class UploadImage {

    private $rootPath = 'uploads/images/';
    private $path = 'wyswyg/';
    private $fileName = '';
    private $file;

    public function setFile($file){
        $this->file = $file;
        return $this;
    }

    public function process()
    {
        if(!$this->fileName){
            $this->fileName = time()."-".$this->file->getClientOriginalName();
        }
        $this->save();
        return $this;

    }

    public function save(){
        try{
            if(!file_exists($this->rootPath.$this->path)){
                mkdir($this->rootPath.$this->path);
            }
             $this->file->move($this->rootPath.$this->path,$this->fileName);
             return $this;
        }catch (\Exception $e){
            return false;
        }
    }


    public function setPath($path){
        $this->path = $path;
        return $this;
    }

    public function setFileName($fileName){
        $this->fileName = $fileName;
        return $this;
    }

    public function getFileName(){
        return $this->fileName;
    }
    public function getFile(){
        return $this->file;
    }

    public function getPath(){
        return $this->path;
    }

    /**
     * @param $path
     * @return $this
     */
    public function setRootPath($path){
        $this->rootPath = $path;
        return $this;
    }

    public function getRootPath(){
        return $this->rootPath;
    }

    public function getUrlFile($fileName){
        return $this->rootPath.$this->path.$fileName;
    }
}