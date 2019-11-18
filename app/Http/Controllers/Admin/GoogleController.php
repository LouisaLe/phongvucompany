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
use App\Models\CoreConfig;

class GoogleController extends  Controller{

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(){
        $map = CoreConfig::where('key','=',CoreConfig::GOOGLE_MAP)->first();
        if($map){
            return view('admin.core-config.form', compact('map'));
        }
        return view('admin.core-config.form');

    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function save(Request $request){
        if($request->map_id){
            $map = CoreConfig::find($request->map_id);
        } else{
            $map = new CoreConfig();
        }
        $map->value = $request->map;
        $map->key = CoreConfig::GOOGLE_MAP;
        try{
            $map->save();
            return redirect('admin/config/view')->with('success',"Đã lưu");
        } catch (\Exception $e){
            return redirect('admin/config/view')->with('error',$e->getMessage());
        }
    }

}