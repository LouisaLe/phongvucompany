<?php

namespace App\Http\Controllers;

use \Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Abouts;

class HomeController extends Controller
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
    public function index() {
        $products = $this->product->getProducts();
        return view('homepage', compact('products'));
    }
    
    
}
