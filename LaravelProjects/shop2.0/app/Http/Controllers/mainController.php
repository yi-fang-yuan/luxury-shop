<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class mainController extends Controller
{
    public function index(){
        $products = Product::inRandomOrder()->take(9)->get();
        return view('welcome',compact('products'));
    }
}
