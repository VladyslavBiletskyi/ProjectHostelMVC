<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Comment;
use App\Room;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function postAddComment(Request $request)
    {
        // Validation
        $this->validate($request, [
            'text' => 'required|max:1000'
        ]);

        $comment = new Comment();
        $comment->text = $request['text'];
        $comment->user_id = Auth::user()->id;
        $comment->room_id = $request->room_id;
        $message = 'Ошибка добавления комментария';
        //save the post as the related post to a current auth user
        if (Auth::user()->comments()->save($comment)){
            $message = 'Комментарий успешно добавлен';
        }
        return redirect('/room/'.$request['room_id'])->with(['message' => $message]);
    }

    public function postEditComment(Request $request)
    {
        $this->validate($request, [
            'text' => 'required'
        ]);

        $comment = Comment::find($request['postId']);
        if(Auth::user() != $comment->user || Auth::user()->is_admin != 1){
            return redirect()->back();
        }

        $comment->text = $request['text'];
        $comment->update();
        return response()->json(['new_body' => $comment->text ], 200);
    }
}
