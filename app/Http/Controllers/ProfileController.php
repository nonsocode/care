<?php

namespace App\Http\Controllers;

use App\Http\Requests\PasswordChange;
use App\Http\Requests\ProfileRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()
    {
    	return view('admin.profile',['user'=>Auth::user()]);
    }

    public function update(ProfileRequest $request)
    {
    	Auth::user()->update($request->except('email'));
    	return back()->with('success','Your Porfile was updated successfully');
    }

    public function changePassword(PasswordChange $request)
    {
    	Auth::user()->update(["password" => bcrypt($request->password)]);
    	return back()->with('password_success' , 'Your Password was changed Successfully');
    }
}
