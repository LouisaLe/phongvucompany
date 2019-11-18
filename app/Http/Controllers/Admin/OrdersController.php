<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\NewsRequest ;
use App\Models\Orders;
use File;

class OrdersController extends Controller
{
    public function listActive() {

        $orders = Orders::where('status','=', 1)->orderBy('id','DESC')->paginate(10);
        $list = 1;
    	return view('admin.orders.index', compact('orders', 'list'));
    }

    public function listNew() {

        $orders = Orders::where('status','=', 0)->orderBy('id','DESC')->paginate(10);
        $list = 0;
        return view('admin.orders.index', compact('orders', 'list'));
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function active($id) {
        $order = Orders::find($id);
        if($order){
            $order->status = 1;
            try{
                $order->save();
                return redirect("admin/order/list")->with('success','Đã xử lý báo giá');
            } catch (\Exception $e){
                return redirect("admin/order/list")->with('error',$e->getMessage());
            }
        }

        return redirect("admin/order/list")->with('error','Không tồn tại order');

    }



}
