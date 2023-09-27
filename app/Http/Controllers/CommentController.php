<?php

namespace App\Http\Controllers;

use App\Models\Thread;
use App\Models\Eventdate;
use App\Models\Category;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Carbon\carbon;

class CommentController extends Controller
{
    public function comment_store(Request $request, Thread $thread, Comment $comment)
    {
        $input = $request['comment'];
        if($request->file('image')){
            $comment_upload_image = Cloudinary::upload($request->file('image')->getRealPath())->getSecurePath();
            $input +=['upload_image' => $comment_upload_image];
        }
        $input['user_id'] = Auth::id();
        $input['thread_id'] = $thread->id;
        $comment->fill($input)->save();
        
        return redirect('threads/show')->with(['thread' => $thread, 'eventdate' => $eventdate, 'comment' => $comment]);
    }
}
