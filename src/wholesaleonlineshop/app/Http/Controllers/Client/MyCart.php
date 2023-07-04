<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Product;
use Auth;

class MyCart extends Controller
{
    public function index()
    {
        $cart = Cart::where('user_id',Auth::user()->id)->get();
        if(Auth::guard('web')->check())
        {
            $cartCount = count($cart = Cart::where('user_id',Auth::user()->id)->get());
        }
        else
        {
            $cartCount = null;
        } 
        return view('client_side.my-cart',compact('cart','cartCount'));
    }

    public function addToCart(Request $request, $id)
    {
        $product = Product::find($id);

        if(count(Cart::where('product_id',$id)->get()) > 0)
        {
            $cart = Cart::where('product_id',$id)->get();
            $cart[0]->qty = $cart[0]->qty + $request->input('qty');
            $cart[0]->update();
            $product->stock = $product->stock - $request->input('qty');
            $product->update();
        }
        else
        {
            $cart = new Cart;
            $cart->user_id = Auth::guard('web')->user()->id;
            $cart->product_id = $id;
            $cart->qty = $request->input('qty');
            $cart->save();
            $product->stock = $product->stock - $request->input('qty');
            $product->update();
        }
        return redirect('/my-cart');
    }
}
