<?php

namespace App\Http\Controllers;

use App\Models\Thread;
use App\Models\Eventdate;
use Illuminate\Http\Request;
use App\Http\Requests\ThreadRequest;
use Cloudinary;
    
class ThreadController extends Controller
{
    public function create(Thread $thread)
    {
        return view('threads.create'); //->with(['threads' => $thread->get()]);
    }
    
    public function show(Thread $Thread)
    {
        return view('threads.show')-with(['threads' => $thread]);
    }
    
    public function store(ThreadRequest $request,Thread $thread,Eventdate $event_date)
    {
        $input = $request['thread'];
        $upload_image = Cloudinary::upload($request->file('image')->getRealPath())->getSecurePath();
        dd($upload_image);
        
        $thread->fill($input)->save();
        $input = $request['eventdate'];
        $input['thread_id'] = $thread->id;
        $event_date->fill($input)->save();
        
        return view('threads.show', ['data' => $request->input('thread')]);
        //return redirect('/threads/' .$thread->id);
    }
    
}