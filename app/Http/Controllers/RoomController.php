<?php
/**
 * Created by PhpStorm.
 * User: mihprog
 * Date: 17.12.16
 * Time: 22:42
 */

namespace App\Http\Controllers;

//the model
use App\User;
use App\Room;
use App\Comment;
//namespace to deal with requests
use Illuminate\Http\Request;
use Illuminate\Http\Response;
//for auth
use Illuminate\Support\Facades\Auth;
//storage for files
use Illuminate\Support\Facades\Storage;
// to work with files
use Illuminate\Support\Facades\File;

class RoomController extends Controller
{
    public function getRoom($id)
    {
        $room = Room::find($id);
        $students = User::where('room_id', '=', $id)->get();
        $comments = Comment::where('room_id', '=', $id)->orderBy('created_at', 'desc')->get();
        $free  = $room->places - $students->count();
        return view('rooms.view', ['room' => $room, 'students' => $students, 'comments' => $comments, 'free' => $free]);
    }

    public function postAddRoom(Request $request)
    {
        $this->validate($request, [
            'id' => 'required|min:1|max:999|integer',
            'places' => 'required|max:4|integer',
            'floor_id' => 'required',
            'description' => 'required',
            'photo' => 'required|file'
        ]);

        $photo = request()->file('photo');
        $photoname = 'room/'.$request['id'].'.jpg';
        if($photo) {
            Storage::disk('local')->put($photoname, File::get($photo));
        }

        $room = new Room();
        $room->id = $request['id'];
        $room->places = $request['places'];
        $room->floor_id = (int)$request['floor_id'];
        $room->description = $request['description'];
        $room->save();
        $message = "Комната успешно добавлена.";
        return redirect('/user')->with(['message' => $message]);
    }

    public function getRoomImage($filename)
    {
        $file = Storage::disk('local')->get('/room/'.$filename);
        return new Response($file, 200);
    }

    public function getBookRoom($id)
    {
        $room = Room::find($id);
        //$user = User::find(Auth::user()->id);
        Auth::user()->room_id = $room->id;
        $errormessage = "Ошибка бронирования.";
        if(Auth::user()->update())
        {
            $message = "Комната успешно забронирована.";
            return redirect('/room/'.$id)->with(['message' => $message]);
        }
        return redirect('/room/'.$id)->with(['errormessage' => $errormessage]);
    }

    public function getCancelBooking($id)
    {
        Auth::user()->room_id = 0;
        $errormessage = "Ошибка снятия брони.";
        if(Auth::user()->update())
        {
            $message = "Бронь успешно снята.";
            return redirect('/room/'.$id)->with(['message' => $message]);
        }
        return redirect('/room/'.$id)->with(['errormessage' => $errormessage]);
    }
}