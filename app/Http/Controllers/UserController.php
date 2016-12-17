<?php

namespace App\Http\Controllers;

use Mail;
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
use Symfony\Component\DomCrawler\Image;

class UserController extends Controller
{
    const MODERATOR_EMAIL = 'hostel.moderator@gmail.com';
    //
    public function getSignUp()
    {
        return view('user.signup');
    }

    public function postSendRegisterRequest(Request $request)
    {
        $this->validate($request, [
            'username' => 'required',
            'email' => 'required|email|unique:users',
            'faculty' => 'required',
            'scan' => 'required'
        ]);
        $username = explode(" ", $request['username'])[0];

        $scan = $request->file('scan');
        $scan_name = $username.'-'.$request['faculty'].'.jpg';
        Storage::disk('local')->put($scan_name, File::get($scan));

        Mail::send('emails.sendrequest', [
            'title' => "Новая заявка",
            'name' => "ФИО: ".$request['username'],
            'email' => "E-Mail: ".$request['email'],
            'faculty' => "Факультет: ".$request['faculty']

        ], function($message) use ($scan) {
            $message->to(self::MODERATOR_EMAIL);
            $message->attach($scan, ['mime' => 'image/jpeg']);
            $message->subject("Новая заявка на регистрацию");
        });

        return redirect('/');
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
