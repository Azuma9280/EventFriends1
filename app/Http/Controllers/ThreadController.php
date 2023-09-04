<?php

namespace App\Http\Controllers;

use App\Models\Thread;
use App\Models\Eventdate;
use Illuminate\Http\Request;
use App\Http\Requests\ThreadRequest;
    
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
        //upload_imageの送信、保存　カリキュラム
        $thread->fill($input)->save();
        $input = $request['eventdate'];
        $input['thread_id'] = $thread->id;
        $event_date->fill($input)->save();
        
        return redirect('/threads/' .$thread->id);
    }
    
}