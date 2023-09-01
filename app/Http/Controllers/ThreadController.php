<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Thread;

class ThreadController extends Controller
{
    public function index(Thread $thread)
    {
        return view('threads.create')->with(['threads' => $thread->get()]);
    }
    public function store(Request $request)
    {
        return redirect()->route('threads.show',['id'=>$ThreadId]);　//fillを使って保存して、thread.phpにfillableを設定して、他のphpにも
    }
}