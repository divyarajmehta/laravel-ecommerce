<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;
use Auth;
use App\Models\Cart;

class PageController extends Controller
{
    public $cartCount;
    function __construct() {
        
      }
    public function about()
    {
        if(Auth::guard('web')->check())
        {
            $cartCount = count(Cart::where('user_id',Auth::user()->id)->get());
        }
        else
        {
            $cartCount = null;
        }
        return view('client_side.about',compact('cartCount'));
    }
    public function checkout()
    {
        return view('client_side.checkout');
    }
    public function contact()
    {
        if(Auth::guard('web')->check())
        {
            $cartCount = count(Cart::where('user_id',Auth::user()->id)->get());
        }
        else
        {
            $cartCount = null;
        }
        return view('client_side.contact',compact('cartCount'));
    }
    public function faqs()
    {
        return view('client_side.faqs');
    }
    public function help()
    {
        return view('client_side.help');
    }
    public function index()
    {
        $products = Product::all();
        if(Auth::guard('web')->check())
        {
            $cartCount = count(Cart::where('user_id',Auth::user()->id)->get());
        }
        else
        {
            $cartCount = null;
        }
        
        return view('client_side.index',compact('products','cartCount'));
    }
    public function payment()
    {
        return view('client_side.payment');
    }
    public function privacy()
    {
        return view('client_side.privacy');
    }
    // public function product()
    // {
    //     return view('client_side.product');
    // }
    public function product2()
    {
        $products = Product::all();
        if(Auth::guard('web')->check())
        {
            $cartCount = count(Cart::where('user_id',Auth::user()->id)->get());
        }
        else
        {
            $cartCount = null;
        }
        return view('client_side.product2',compact('products','cartCount'));
    }
    public function single($id)
    {
        if(Auth::guard('web')->check())
        {
            $cartCount = count(Cart::where('user_id',Auth::user()->id)->get());
        }
        else
        {
            $cartCount = null;
        }
        $product = Product::find($id);
        return view('client_side.single',compact('product','cartCount'));
    }
    public function single2()
    {
        return view('client_side.single2');
    }
    public function terms()
    {
        return view('client_side.terms');
    }
    public function login()
    {
        return view('client_side.login');
    }
    public function register()
    {
        return view('client_side.register');
    }
    public function profile()
    {
        $user = User::find(Auth::guard('web')->user()->id);
        return view('client_side.profile',compact('user'));
    }
}
