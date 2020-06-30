<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class gucciController extends Controller
{
    public function index(){
        if (request()->category){
            $products = Product::where('category_id',request()->category)->inRandomOrder()->paginate(9);
            $categoryName = Category::where('id',request()->category)->first()->name;
        }
        else{
            $products = Product::inRandomOrder()->paginate(9);
            $categoryName = 'All Products';
        }
        $categories = Category::all();
        return view('shop',[
            'products'=> $products,
            'categories'=>$categories,
            'categoryName'=>$categoryName,
        ]);
    }

    public function show($slug){

        $product = Product::where('slug',$slug)->firstOrFail();
        return view('product.show',compact('product'));
    }
}
