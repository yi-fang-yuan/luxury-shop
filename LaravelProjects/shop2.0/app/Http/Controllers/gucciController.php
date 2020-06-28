<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class gucciController extends Controller
{
    public function index(){
        if (request()->category){
            $products = Product::where('category_id',request()->category)->get();
        }
        else{
            $products = Product::inRandomOrder()->take(9)->get();
        }
        $categories = Category::all();
        return view('shop',[
            'products'=> $products,
            'categories'=>$categories,
        ]);
    }

    public function show($slug){

        $product = Product::where('slug',$slug)->firstOrFail();
        return view('product.show',compact('product'));
    }
}
