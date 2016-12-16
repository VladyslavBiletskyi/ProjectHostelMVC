<?php

namespace App\Http\Controllers;

//the model
use App\User;
//namespace to deal with requests
use Illuminate\Http\Request;
use Illuminate\Http\Response;
//for auth
use Illuminate\Support\Facades\Auth;
//storage for files
use Illuminate\Support\Facades\Storage;
// to work with files
use Illuminate\Support\Facades\File;

class UserController extends Controller
{
    //
    public function getSignUp()
    {
        return view('user.signup');
    }

    public function postSignIn(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(Auth::attempt(['email' => $request['email'], 'password' => $request['password']]))
        {
            return redirect()->route('user');
        }
        return redirect()->back();
    }
    
    public function getUserIndex()
    {
        if(Auth::user()->is_admin == 1)
        {
            return view('moderator.index', ['user' =>Auth::user()]);
        }
        return view('user.index', ['user' =>Auth::user()]);
    }
}
