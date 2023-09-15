<?php

namespace App\Http\Controllers;

use App\Models\Thread;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(Thread $thread)
    {
        $threads_view = Thread::orderBy('view','desc')->get();
        dd($thread);
        //$threads_today_view duringに登録されている日に限定したのちにviewを降順に3つ並べる
        //$threads_future_view duringが先1か月に限定したのちにviewを降順に並べる
        
        return view('/threads/home')->with(['threads_view' => $threads_view]);
    }
        public function submit(Request $request, Thread $thread)
    {
        return view('thread/submit')->with(['thread' => $thread]);
    }
}
