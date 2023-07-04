<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Auth;

class MyProfileController extends Controller
{
    public function update(Request $request)
    {
        $user = User::find(Auth::guard('web')->user()->id);
        $user->name = $request->input('name');
        $user->dob =  $request->input('dob');
        $user->contact = $request->input('contact');
        $user->email = $request->input('email');
        $user->address = $request->input('address');
        $user->city = $request->input('city');
        $user->pincode = $request->input('pincode');
        if($request->input('password'))
        {
            $user->password = Hash::make($request->input('password'));
        }
        $user->update();
        return redirect('/');
    }
}
