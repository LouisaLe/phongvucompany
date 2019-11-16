<?php
/**
 * Created by PhpStorm.
 * User: 84078
 * Date: 6/9/2019
 * Time: 3:24 PM
 */

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use App\Models\FeedBack;

class FeedBackController extends  Controller{

    protected $uploadImage;
    public function __construct(
        \App\Services\UploadFile\UploadImage $uploadImage
    ){
        $this->uploadImage = $uploadImage;
    }

    public function index(){
        $feedBack = FeedBack::select()->orderBy('id','DESC')->paginate(15);
        return view('admin.feed-back.index', compact('feedBack'));
    }

        public function new(){
        return view('admin.feed-back.form');
    }

    public function delete($id){
        $feedBack = FeedBack::find($id);
        try{
            $feedBack->deleteLang();
            $feedBack->delete();
        }catch (\Exception $e){
            return redirect('admin/feed-back/list')->with('error', 'Lỗi không thể xóa!');
        }
        return redirect('admin/feed-back/list')->with('success', 'Đã Xóa!');
    }

    public function edit($id){
        $feedBack = FeedBack::find($id);
        if($feedBack){
            $feedBack->setLangAttribute();
            return view('admin.feed-back.form', compact('feedBack'));
        } else {
            return redirect('admin/feed-back/list')->with('error', 'Không tồn tại!');
        }


    }

    public function save(Request $request){

        if($request->feed_id){
            $feedBack = FeedBack::find($request->feed_id);
        }else{
            $feedBack = new FeedBack();
        }
        if($request->hasFile('image')){
            if($feedBack->image && file_exists($this->uploadImage->getRootPath().FeedBack::IMAGE_PATH.$feedBack->image)){
                unlink($this->uploadImage->getRootPath().FeedBack::IMAGE_PATH.$feedBack->image);
            }
            $image = $request->file('image');
            $image = $this->uploadImage->setPath(FeedBack::IMAGE_PATH)->setFile($image);
            $image->process();
            $feedBack->image = $image->getFileName();

        }
        if($request->customer_name && $request->feed_back){
            $feedBack->customer_name = $request->customer_name;
            $feedBack->feed_back = $request->feed_back;
            try{
                $feedBack->save();
                $feedBack->saveDataByLang();
                return redirect('admin/feed-back/edit/'.$feedBack->id)->with('success', 'Lưu thành công!');
            } catch (\Exception $e){
                return redirect('admin/feed-back/new')->with('error', $e->getMessage());
            }
        }
        return redirect('admin/feed-back/new')->with('error', 'Không thể lưu!');
    }

}