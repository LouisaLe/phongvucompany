<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Abouts;

class AboutsController extends Controller
{
    protected $uploadImage;
    public function __construct(
        \App\Services\UploadFile\UploadImage $uploadImage
    ){
        $this->uploadImage = $uploadImage;
    }

    public function index() {

        $dataAbouts = Abouts::select()->get();
        return view('admin.abouts.index', compact('dataAbouts'));
    }

    public function getAdd() {

        return view('admin.abouts.add');
    }


    public function getEdit() {

        $dataAbouts = Abouts::first();
        $dataAbouts->setLangAttribute();

        return view('admin.abouts.edit', compact('dataAbouts'));


    }

    public function postEdit(Request $request)  {

        try {
            $dataAbouts = Abouts::first();
            if(!$dataAbouts){
                $dataAbouts = new Abouts();
            }
            if($request->hasFile('image')){
                if($dataAbouts && $dataAbouts->image && file_exists($this->uploadImage->getRootPath().$dataAbouts->image)){
                    unlink($this->uploadImage->getRootPath().$dataAbouts->image);
                }
                $image = $request->file('image');
                $image = $this->uploadImage->setFile($image);
                $image->process();
                $dataAbouts->image = $image->getFileName();

            }
            $dataAbouts ->title       = $request->title;
            $dataAbouts ->content     = $request->content;
            $dataAbouts ->save();
            //$dataAbouts->saveDataByLang();

            return redirect('admin/abouts/getEdit')->with("success","updated");

        } catch(Exception $e) {

            return redirect('admin/abouts/getEdit')->with('error', 'Something wrong');
        }
    }

    public function getDelete($id) {

        $abouts = Abouts::find($id);

        if(!$abouts) {

            return redirect('admin/abouts/list')->with('error','Bài viết không tồn tại');
        }

        try {
            //$abouts->deleteLang();
            $abouts ->delete();
            return redirect('admin/abouts/list')->with('success','Xóa thành công bài viết.');
        } catch (Exception $e) {

            return redirect('admin/abouts/list')->with('error','Lỗi không thể xóa bài viết.');
        }
    }
}
