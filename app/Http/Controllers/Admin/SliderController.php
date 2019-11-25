<?php
/**
 * Created by PhpStorm.
 * User: 84078
 * Date: 7/5/2019
 * Time: 7:20 PM
 */
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use App\Models\Slider;

class SliderController extends  Controller{

    protected $uploadImage;
    public function __construct(
        \App\Services\UploadFile\UploadImage $uploadImage
    ){
        $this->uploadImage = $uploadImage;
    }

    public function index(){
        $slider = Slider::select()->orderBy('id','DESC')->paginate(15);
        return view('admin.slider.index', compact('slider'));
    }

    public function new(){
        return view('admin.slider.form');
    }

    public function delete($id){
        $slider = Slider::find($id);
        try{

            $slider->delete();
            return redirect('admin/slider/list')->with('success', 'Đã Xóa!');


        }catch (\Exception $e){
            return redirect('admin/slider/list')->with('error',$e->getMessage());
        }
        return redirect('admin/slider/list')->with('error', 'Lỗi không thể xóa!');
    }

    public function edit($id){
        $slider = Slider::find($id);
        if($slider){
            $slider->setLangAttribute();
            return view('admin.slider.form', compact('slider'));
        } else {
            return redirect('admin/slider/list')->with('error', 'Không tồn tại!');
        }


    }

    public function save(Request $request){

        if($request->slider_id){
            $slider = Slider::find($request->slider_id);
        }else{
            $slider = new Slider();
        }
        if($request->hasFile('image')){
            if($slider->image && file_exists($this->uploadImage->getRootPath().Slider::IMAGE_PATH.$slider->image)){
                unlink($this->uploadImage->getRootPath().Slider::IMAGE_PATH.$slider->image);
            }
            $image = $request->file('image');
            $image = $this->uploadImage->setPath(Slider::IMAGE_PATH)->setFile($image);
            $image->process();
            $slider->image = $image->getFileName();

        }
        if($request->title && $request->content){
            $slider->title = $request->title;
            $slider->content = $request->content;
            $slider->position = $request->position;
            $slider->group = $request->group;
            try{
                $slider->save();
                //$slider->saveDataByLang();
                return redirect('admin/slider/edit/'.$slider->id)->with('success', 'Lưu thành công!');
            } catch (\Exception $e){
                if($slider->id){
                    return redirect('admin/slider/edit/'.$slider->id)->with('error', 'Lỗi!');
                }
                return redirect('admin/slider/new')->with('error', $e->getMessage())->withInput();
            }
        }
        return redirect('admin/slider/edit/'.$slider->id)->with('error', 'Không thể lưu!');
    }

}