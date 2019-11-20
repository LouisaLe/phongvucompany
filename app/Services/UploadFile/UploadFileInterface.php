<?php
/**
 * Created by PhpStorm.
 * User: 84078
 * Date: 6/20/2019
 * Time: 9:17 PM
 */

namespace App\Services\UploadFile;

interface UploadFileInterface{
    public function process();
    public function save();
}