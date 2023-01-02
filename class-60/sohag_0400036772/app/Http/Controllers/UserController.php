<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function manageUser(){
        return view('admin.user.manage-user',['users'=> User::all()]);
    }
    public function editUser($id){
        return view('admin.user.edit-user',['user'=> User::find($id)]);
    }
    public function updateUser(Request $request){
        User::updateUser($request);
        return redirect(route('manage.user'))->with('message','Update Succesfully');
    }
}
