<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\Admin;
use App\Models\Product;
use App\Models\User;

class PageController extends Controller
{
    public function index()
    {
        return view('admin_side.index');
    }
    public function button()
    {
        return view('admin_side.button');
    }
    
    
    public function errorpage()
    {
        return view('admin_side.errorpage');
    }
    
    public function gallery()
    {
        return view('admin_side.gallery');
    }
    
    public function icons()
    {
        return view('admin_side.icons');
    }
    
    public function input()
    {
        return view('admin_side.input');
    }
    
    public function signin()
    {
        return view('admin_side.signin');
    }
    
    public function tabels()
    {
        return view('admin_side.tabels');
    }
    public function typography()
    {
        return view('admin_side.typography');
    }
    
    public function profile()
    {
        $admin = Admin::find(Auth::guard('admin')->user()->id);
        return view('admin_side.profile',compact('admin'));
    }
    public function blank()
    {
        return view('admin_side.blank');
    }
    public function products()
    {
        $products = Product::all();
        return view('admin_side.products', compact('products'));
    }
    public function orders()
    {
        $orders = [
            ["id" =>"1","customer_id" =>"22","product_id" =>"56","qty" =>"23","totalprice" =>"5066"],
            ["id" =>"2","customer_id" =>"114","product_id" =>"45","qty" =>"600","totalprice" =>"500000"],
            ["id" =>"3","customer_id" =>"398","product_id" =>"97","qty" =>"448","totalprice" =>"150000"],
        ];
        return view('admin_side.orders', compact('orders'));
    }
    public function invoices()
    {
        $invoices = [
            ["id" =>"1","customer_id" =>"2","order_id" =>"1"],
            ["id" =>"2","customer_id" =>"4","order_id" =>"2"],
            ["id" =>"3","customer_id" =>"7","order_id" =>"3"],
        ];
        return view('admin_side.invoices',compact('invoices'));
    }
    public function updateuser($id)
    {
        $user = User::find($id);
        return view('admin_side.updateuser',compact('user'));
    }
    public function updateproduct()
    {
        return view('admin_side.updateproduct');
    }
    public function addproduct()
    {
        return view('admin_side.addproduct');
    }
    public function updateorder()
    {
        return view('admin_side.updateorder');
    }

    public function dashboard()
    {
        return view('admin_side.dashboard');
    }
   
}