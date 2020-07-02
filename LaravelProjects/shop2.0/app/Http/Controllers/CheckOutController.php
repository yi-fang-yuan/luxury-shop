<?php

namespace App\Http\Controllers;

use Cartalyst\Stripe\Exception\CardErrorException;
use Cartalyst\Stripe\Laravel\Facades\Stripe;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CheckOutController extends Controller
{
    public function index(){
        return view('checkout');
    }
    public function store(){
        try{
            $contents = Cart::content()->map(function($item){
                return $item->model->name;
                })->values()->toJson();
            $charge = Stripe::charges()->create([
                'amount' => Cart::total(),
                'currency' => 'CAD',
                'source'=> request()->stripeToken,
                'description'=> 'order',
                'receipt_email'=> request()->email,
                'metadata' => [
                    'content' => $contents,
                    'quantity'=> Cart::instance('default')->count(),
                    ],
            ]);
            Cart::instance('default')->destroy();
            return redirect()->route('paid.index')->with('success_message','Your payment has been successfully accepted!');
        }catch(CardErrorException $e){
            return back()->withErrors('Error!', $e->getMessage());
        }
    }
}
