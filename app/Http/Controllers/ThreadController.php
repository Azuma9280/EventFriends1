<?php

namespace App\Http\Controllers;

use App\Models\Thread;
use Illuminate\Http\Request;
use App\Http\Requests\ThreadRequest;
    
class ThreadController extends Controller
{
    public function create(Thread $thread)
    {
        return view('threads.create')->with(['threads' => $thread->get()]);
    }
    public function store(ThreadRequest $request,Thread $thread)
    {
        $input = $request['thread'];
        $post->fill($input)->save();
        return redirect()->route('show');
    }
}