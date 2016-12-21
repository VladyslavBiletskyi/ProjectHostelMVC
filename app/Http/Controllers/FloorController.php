<?php

namespace App\Http\Controllers;

use App\Floor;
use Illuminate\Http\Request;
//storage for files
use Illuminate\Support\Facades\Storage;
// to work with files
use Illuminate\Support\Facades\File;

class FloorController extends Controller
{
    public function getFloor($id)
    {
        return view('');
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
}
