<?php
/**
 * Created by PhpStorm.
 * User: 84078
 * Date: 6/9/2019
 * Time: 4:51 PM
 */

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use App\Models\FunFacts;

class FunFactsController extends  Controller{

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(){
        $fundFacts = FunFacts::select()->first();
        if($fundFacts){
            return view('admin.fund-facts.form', compact('fundFacts'));
        }
        return view('admin.fund-facts.form');

    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function save(Request $request){
        if($request->ab_id){
            $fundFacts = FunFacts::find($request->ab_id);
        } else{
            $fundFacts = new FunFacts();
        }
        $fundFacts->experience = $request->experience;
        $fundFacts->orders = $request->orders;
        $fundFacts->customers = $request->customers;
        $fundFacts->product = $request->product;

        try{
            $fundFacts->save();
            return redirect('admin/fund-facts/view')->with('success',"Đã lưu");
        } catch (\Exception $e){
            return redirect('admin/fund-facts/view')->with('error',"Lỗi");
        }
    }

}