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
        return view('rooms.view', ['room' => $room, 'students' => $students, 'comments' => $comments]);
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
        $path = storage_path().'/floor/' . $filename;
        if (file_exists($path)) {
            //header("Content-Type", 'img/jpeg');
            $response = Response::make($path, 200);
            $response->header('Content-Type', mime_content_type($path));
            return $response;
        }
    }
}