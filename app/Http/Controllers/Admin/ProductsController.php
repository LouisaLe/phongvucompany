<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Products;
use App\Http\Requests\ProductsRequest;
use Validator;
use File;


class ProductsController extends Controller
{

    public function index() {

    	$dataProducts = Products::select()->orderBy('id','DESC')->paginate(15);
    	return  view('admin.product.index', compact('dataProducts'));
    }

    public function getAdd() {
    	return view('admin.product.add');
    }

    public function saveNewProduct(ProductsRequest $request) {
        $validator  = Validator::make(
            $request->only('name'),
            [
                'name' => ['required', 'max:191']
            ]
        );

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withInput()
                ->withErrors($validator->errors());
        }

        $pathImage =  Products::FOLDER_UPLOAD;
    	try {

			 $products = new Products;
			 $data = [];
             if($request->hasfile('gallery')){
                 $images = $request->file('gallery');
                foreach($images as $key=>$image)
                {
                    $name = time().$image->getClientOriginalName();
                    $image->move( $pathImage.'/', $name);
                    $data[] = ["name"=>$name,"caption"=>$request->caption[$key]];
                }
                if(count($data)){
                    $products->image = json_encode($data);
                }
             }
			// $products->name           =  $request->name;
			// $products->status         =  $request->status;
			// $products->summary        =  $request->summary;
			// $products->short_description =  $request->short_description;
			// $products->description       =  $request->description;
			// $products->video_url         =  $request->video_url;

            $products->name           =  $request->name;
            $products->status         =  $request->status;
            $products->summary        =  $request->summary;
            $products->short_description =  $request->short_description;
            $products->description       =  $request->description;
            $products->video_url         =  $request->video_url;
            $products->keywords          =  $request->keywords;
            $products->meta_description  =  $request->meta_description;

			$products->save();
            //$products->saveDataByLang();

			return redirect('admin/products/getEdit/'.$products->id)->with('success', 'Thêm thành công sản phẩm');
    	} catch (Exception $e) {

    		return redirect('admin/products/getAdd')->with('error', 'Lỗi không thể thêm sản phẩm');
    	}
    }

    public function getEdit($id) {

    	$dataProducts = Products::find($id);
    	if($dataProducts) {
            //$dataProducts->setLangAttribute();
    		return view('admin.product.edit', compact('dataProducts'));

    	} else {

    		return redirect('admin/products/list')->with('error','Sản phẩm không tồn tại');
    	}
    }

    public function postEdit(Request $request, $id) {
    	$validator  = Validator::make($request->only('name' ),
            [
                'name' => ['required', 'max:191'],
            ],
        [
			'name.required' => 'Bạn cần nhập vào tên sản phẩm',
    	]);

    	if ($validator->fails()) {
            return redirect()
                    ->back()
                    ->withInput()
                    ->withErrors($validator->errors());
        }

    	try {

    		$products = Products::find($id);
            $pathImage =  Products::FOLDER_UPLOAD;
            $newImage = [];
            if($request->hasfile('gallery')){
                $images = $request->file('gallery');
                foreach($images as $key=>$image)
                {
                    $name = time().$image->getClientOriginalName();
                    $image->move( $pathImage.'/', $name);
                    $newImage[] = ["name"=>$name,"caption"=>$request->caption_new[$key]];
                }
            }
            $oldImages = [];
            if($request->gallery_val){
                $oldImages = $products->image ? json_decode($products->image, true):[];
                $deletedFiles=[];
                foreach ($oldImages as $key=>$image){
                    $check = array_search($image['name'], $request->gallery_val);
                    if( $check === false){
                        $deletedFiles[]= $image['name'];
                        unset($oldImages[$key]);
                    }else{
                        $oldImages[$key]['caption'] = $request->caption[$check];
                    }
                }
                foreach ($deletedFiles as $value) {
                    File::delete(Products::FOLDER_UPLOAD . '/' . $value);
                }
            }
            $products->image = json_encode(array_merge($oldImages,$newImage));
            $products->name           =  $request->name;
            $products->status         =  $request->status;
            $products->summary        =  $request->summary;
            $products->short_description =  $request->short_description;
            $products->description       =  $request->description;
            $products->video_url         =  $request->video_url;
            $products->keywords          =  $request->keywords;
            $products->meta_description  =  $request->meta_description;
            $products->save();
            //$products->saveDataByLang();

			return redirect('admin/products/list')->with('success', 'Chỉnh sửa thành công sản phẩm');
    	} catch (Exception $e) {

			return redirect('admin/products/list')->with('error', 'Lỗi không thể chỉnh sửa sản phẩm');
    	}
    }

    public function getDelete($id) {

    	$products = Products::find($id);

    	if(!$products) {

    		return redirect('admin/products/list')->with('error','Sản phẩm không tồn tại');
    	}

    	try {
    	   
            $products ->delete();
            $images = json_decode($products->image, true);
            if($images){
                foreach ($images as $image){
                    File::delete(Products::FOLDER_UPLOAD.'/'.$image['name']);
                }

            }
            return redirect('admin/products/list')->with('success','Xóa thành công slide.');

    	} catch (Exception $e) {
    		return redirect('admin/products/list')->with('error','Lỗi không thể xóa sản phẩm');
    	}
        return redirect('admin/products/list')->with('error','Lỗi không thể xóa');
    }

}
