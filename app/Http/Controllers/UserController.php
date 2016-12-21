<?php

namespace App\Http\Controllers;

use Mail;
//the model
use App\User;
use App\Floor;
use App\Room;
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

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View - view for creating request
     */
    public function getSignUp()
    {
        return view('user.signup');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector - sends a letter with a request
     */
    public function postSendRegisterRequest(Request $request)
    {
        //check input data
        $this->validate($request, [
            'username' => 'required',
            'email' => 'required|email|unique:users',
            'faculty' => 'required',
            'scan' => 'file|required'
        ]);

        $scan = $request->file('scan');

        //send the letter to admin
        Mail::send('emails.sendrequest', [
            'name' => $request['username'],
            'email' => $request['email'],
            'faculty' => $request['faculty']

        ], function($message) use ($scan) {
            $message->to(self::MODERATOR_EMAIL);
            $message->attach($scan, ['mime' => 'image/jpeg']);
            $message->subject("Новая заявка на регистрацию");
        });

        return redirect('/signup');
    }

    /**
     * @param Request $request - input data
     * @return \Illuminate\Http\RedirectResponse - user view if success
     */
    public function postSignIn(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        //check if input matches data from users table
        if(Auth::attempt(['email' => $request['email'], 'password' => $request['password']]))
        {
            return redirect()->route('user');
        }
        return redirect('/signup')->with(['errormessage' => "Неверный логин и/или пароль."]);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View - user index
     */
    public function getUserIndex()
    {
        // if admin
        if(Auth::user()->is_admin == 1)
        {
            $users = User::where('is_admin', 0)->get();
            $floors = Floor::all();
            $rooms = Room::all();
            return view('moderator.index', ['user' =>Auth::user(), 'students' => $users,
                'floors' => $floors, 'rooms' => $rooms]);
        }
        //if ordinary user
        return view('user.index', ['user' =>Auth::user()]);
    }

    public function postRegister(Request $request)
    {
        $this->validate($request, [
            'username' => 'required|max:255',
            'email' => 'required|email|max:120|unique:users',
            'faculty' => 'required',
            'password' => 'required|min:6',
            'is_admin' => 'required'
        ]);
        $is_admin = 0;
        if($request['is_admin'] === "Да")
        {
            $is_admin = 1;
        }

        $user = new User();
        $user->username = $request['username'];
        $user->email = $request['email'];
        $user->faculty = $request['faculty'];
        $user->password = bcrypt($request->password);
        $user->is_admin = $is_admin;

        $message = "Ошибка регистрации пользователя.";
        if($user->save())
        {
            Mail::send('emails.sendinfo', [
                'name' => $request['username'],
                'email' => $request['email'],
                'password' => $request['password']

            ], function($message) use ($user){
                $message->to($user->email);
                $message->subject("Вас зарегистрировали в Hostel System");
            });

            $message = "Пользователь успешно зарегистрирован. Отправлено уведомление.";
        }

        return redirect('/user')->with(['message' => $message]);
    }

    public function getLogout()
    {
        Auth::logout();
        return redirect('/');
    }
}
