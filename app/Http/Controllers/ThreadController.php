<?php

namespace App\Http\Controllers;

use App\Models\Thread;
use App\Models\Eventdate;
use Illuminate\Http\Request;
use App\Http\Requests\ThreadRequest;
use Cloudinary;
    
class ThreadController extends Controller
{   
    public function home(Thread $thread)
    {
        return view('threads.home'); //->with(['threads' => $thread->get()]);
    }
    public function create(Thread $thread)
    {
        return view('threads.create'); //->with(['threads' => $thread->get()]);
    }
    
    public function store(ThreadRequest $request,Thread $thread,Eventdate $event_date)
    {
        $input = $request['thread'];
        if ($request->file('image')){
            $upload_image = Cloudinary::upload($request->file('upload_image')->getRealPath())->getSecurePath();
            $input += ['upload_image'=>$upload_image];
        }
        $input += ['user_id' => Auth::id()];
        $thread->fill($input)->save();
        $input = $request['eventdate'];
        $input['thread_id'] = $thread->id;
        $event_date->fill($input)->save();
        
        return redirect('threads/show');//, ['data' => $request->input('thread')]);
        //return redirect('/threads/' .$thread->id);
    }
    public function show()
    {
        return view('threads.show');//-with(['threads' => $thread]);
    }
    
    
}