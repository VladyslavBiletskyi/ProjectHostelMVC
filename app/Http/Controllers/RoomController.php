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
//namespace to deal with requests
use Illuminate\Http\Request;
use Illuminate\Http\Response;
//for auth
use Illuminate\Support\Facades\Auth;
//storage for files
use Illuminate\Support\Facades\Storage;
// to work with files
use Illuminate\Support\Facades\File;

class RoomController
{
    public function getRoomIndex()
    {
        return view('allviews/room.view', []);
    }
}