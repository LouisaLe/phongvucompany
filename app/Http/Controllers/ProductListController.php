<?php

namespace App\Http\Controllers;

use \Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Abouts;

class ProductListController extends Controller
{
    protected $product;

    public function __construct(
        \App\Models\Products $product
    ){
        $this->product = $product;
    }

    /**
     * @return mixed
     */
    public function index($cateId) {
        $products = $this->product->getListProductByCate($cateId);
        return view('products', compact('products','cateId'));
    }

    /**
     * @return mixed
     */
    public function all() {
        $products = $this->product->getListProductByCate(false);
        $cateId = false;
        return view('products', compact('products','cateId'));
    }
    
    
}
