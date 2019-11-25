<?php

namespace App\Http\Controllers;

use \Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Abouts;

class ProductDetailController extends Controller
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
    public function index($id) {
        $product = $this->product->getProductById($id);
        return view('product', compact('product'));
    }
    
    
}
