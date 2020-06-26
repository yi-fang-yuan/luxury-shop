<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class gucciController extends Controller
{
    public function index(){
        $products = Product::all();

        return view('shop',compact('products'));
    }

    public function show($slug){

        $product = Product::where('slug',$slug)->firstOrFail();
        return view('product.show',compact('product'));
    }
}
