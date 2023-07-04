<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;

class ProfileController extends Controller
{
    public function update(Request $request)
    {
        $admin = Admin::find(Auth::guard('admin')->user()->id);
        $admin->email = $request->input('email');
        if($request->input('password'))
        {
            $admin->password = Hash::make($request->input('password'));
        }
        $admin->update();
        return redirect('/admin/');
    }
}
