<?php

namespace App\Http\Controllers;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
class CartController extends Controller
{
    public function index()
    {
        return view('cart');
    }
    public function store(Request $request)
    {
        Cart::add($request->id,$request->name,1,$request->price)->associate('App\Product');
        return redirect()->route('cart.index')->with('success','Added to your cart!');
    }

    public function delete($id){
        Cart::remove($id);
        return redirect()->route('cart.index')->with('success_message','Item has been removed!');
    }

}
