<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admins;
use App\Http\Requests\AdminsRequest ;
use Hash;
use Validator;

class AdminsController extends Controller
{
    

    public function index() {

    	$admins = Admins::select()->orderBy('id','DESC')->paginate(15);
    	return view('admin.admins.index', compact('admins'));
    }
    

    public function getAdd() {

    	return view('admin.admins.add');
    }


    public function postAdd(AdminsRequest $request) {


    	$dataAdmin = Admins::where('user_name', $request->user_name)
    						->orWhere('email', $request->email)
    						->get()->toArray();

    	if(!empty($dataAdmin)) {
    		return redirect('admin/admins/list')->with('error','Tên đăng nhập hoặc email đã tồn tại');
    	}

    	try {

            $admins = new Admins;
            $admins->user_name      = $request->user_name;
            $admins->roles          = $request->roles;
            $admins->password       = Hash::make($request->rpassword);
            $admins->email          = $request->email;
            $admins->status         = $request->status;
            $admins->remember_token = $request->_token;
            $admins->save();

            return redirect('admin/admins/list')->with('success', 'Thêm thành công quản trị viên');

        } catch (Exception $e) {

            return redirect('admin/admins/add')->with('error', 'Lỗi Không thể thêm quản trị viên');
        }

    	
    }


    public function getEdit($id) {

    	$admins = Admins::find($id);

    	if($admins) {

    		return view('admin.admins.edit', compact('admins'));

    	} else {

    		return redirect('admin/admins/list')->with('error','Quản trị viên không tồn tại');
    	}
    }


    public function postEdit(Request $request, $id) {
    	$validator  = Validator::make($request->only('user_name', 'roles', 'email'), [
            'user_name' => ['required', 'max:20', 'min:4'],
            'roles'     => ['required'],
            'email'     => ['required', 'email'],
    	],
        [
            'user_name.required' => 'Tên đăng nhập không được để trống',
            'user_name.max'      => 'Tên đăng nhập không thể quá dài',
            'user_name.min'      => 'Tên đăng nhập phải có nhiều hơn 4 ký tự',
            'roles.required'     => 'Bạn cần chọn quyền cho quản trị viên',
            'email.required'     => 'Email không thể để trống',
            'email.email'        => 'Không đúng định dạng email',
    	]);

    	if ($validator->fails()) {
            return redirect()
                    ->back()
                    ->withInput()
                    ->withErrors($validator->errors());
        }
        $admins = Admins::find($request->id);
        $checkuser = Admins::whereRaw('(email = ? OR user_name = ?) && id <> ?', array($request->email, $request->user_name, $request->id))->get();
        if($checkuser->count()){
            return redirect('admin/admins/getEdit/'.$admins->id)->with('error', 'Tên quản trị viên hoặc email đã bị trùng');
        }else {
           
            try {
                $admins->user_name = $request->user_name;
                $admins->roles     = $request->roles;
                $admins->email     = $request->email;
                $admins->status    = $request->status;
                $admins->save();

                return redirect('admin/admins/list')->with('success', 'Chỉnh sửa thành công quản trị viên');

            } catch(Exception $e) {

                 return redirect('admin/admins/list')->with('error', 'Lỗi không thể chỉnh sửa quản trị viên');
            }
        }

		
    }

    public function getDelete($id) {

    	$admins = Admins::find($id);

    	if(!$admins) {

    		return redirect('admin/admins/list')->with('error','Quản trị viên không tồn tại');
    	}

    	try {

            $admins ->delete();

            return redirect('admin/admins/list')->with('success','Xóa thành công quản trị viên');
        } catch(Exception $e) {

            return redirect('admin/admins/list')->with('error','Lỗi không thể xóa quản trị viên');
        }

    }


}
