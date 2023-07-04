<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function userslist()
    {
        $users = User::all();
        return view('admin_side.users.list', compact('users'));
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('/admin/users/list');
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->name = $request->input('name');
        $user->contact = $request->input('contact');
        $user->city = $request->input('city');
        $user->email = $request->input('email');
        $user->address = $request->get('address');
        $user->dob = $request->input('dob');
        $user->pincode = $request->input('pincode');
        $user->update();
        return redirect('/admin/users/list');
    }
}
