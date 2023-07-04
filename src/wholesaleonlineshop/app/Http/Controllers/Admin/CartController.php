<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cart;

class CartController extends Controller
{
    public function index()
    {
        $carts = Cart::all();
        return view('admin_side.carts',compact('carts'));
    }

    public function create()
    {
        return view('admin_side.addcart');
    }
    public function store(Request $request)
    {
        $cart = new Cart;
        $cart->user_id = $request->input('user_id');
        $cart->product_id = $request->input('product_id');
        $cart->qty = $request->input('qty');
        $cart->save();
        return redirect('/admin/carts');
    }
    public function destroy($id)
    {
        $cart = Cart::find($id);
        $cart->delete();
        return redirect('/admin/carts');
    }

    public function edit($id)
    {
        $cart = Cart::find($id);
        return view('admin_side.updatecart',compact('cart'));
    }

    public function update(Request $request, $id)
    {
        $cart = Cart::find($id);
        $cart->user_id = $request->input('user_id');
        $cart->product_id = $request->input('product_id');
        $cart->qty = $request->input('qty');
        $cart->update();
        return redirect('/admin/carts');
    }
}
