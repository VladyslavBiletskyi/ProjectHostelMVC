<?php

namespace App\Http\Controllers;

use App\Floor;
use App\Room;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
//storage for files
use Illuminate\Support\Facades\Storage;
// to work with files
use Illuminate\Support\Facades\File;

class FloorController extends Controller
{
    public function getFloor($floor_id)
    {
        $floor_id = intval($floor_id);
        $floor = Floor::where('floor_id', '=', $floor_id)->first();
        $rooms = Room::where('floor_id', '=', $floor_id)->get();
        return view('floors.view', ['floor' => $floor, 'rooms' => $rooms]);
    }

    public function postAddFloor(Request $request)
    {
        $this->validate($request, [
            'floor_id' => 'required|unique:floors',
            'photo' => 'file|required',
            'description' => 'required'
        ]);
        $photo = request()->file('photo');
        $photoname = 'floor/'.$request['floor_id'].'.jpg';
        if($photo) {
            Storage::disk('local')->put($photoname, File::get($photo));
        }

        $floor = new Floor();
        $floor->floor_id = (int)$request['floor_id'];
        $floor->description = $request['description'];
        $floor->save();
        $message = "Этаж успешно добавлен.";
        return redirect('/user')->with(['message' => $message]);
    }

    public function getFloorImage($filename)
    {
        $path = storage_path().'/floor/' . $filename;
        if (file_exists($path)) {
            //header("Content-Type", 'img/jpeg');
            $response = new Response($path, 200);
            $response->header('Content-Type', mime_content_type($path));
            return $response;
        }
    }
}
