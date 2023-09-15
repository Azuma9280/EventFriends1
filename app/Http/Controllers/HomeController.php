<?php

namespace App\Http\Controllers;

use App\Models\Thread;
use Illuminate\Http\Request;
use Carbon\carbon;

class HomeController extends Controller
{
    public function home()
    {
        $threads_view = Thread::orderBy('view','desc')->take(3)->get();
        //dd($threads_view);
        $threads_today_view = Thread::orderBy('view','desc')->get();//duringに登録されている日に限定したのちにviewを降順に3つ並べる
        $threads_future_view = Thread::orderBy('view','desc')->get();//duringが先1か月に限定したのちにviewを降順に並べる
        
        return view('/threads.home')->with(['threads_view' => $threads_view,'threads_today_view' => $threads_today_view,'threads_future_view' => $threads_future_view]);
    }
        public function submit(Request $request, Thread $thread)
    {
        //$thread->view = $thread->view+1
        //$thread->save();
        return view('thread/submit')->with(['thread' => $thread]);
    }
    //end_dateからstart_dateを引いて、引いた数だけforeachを回してtodayという要素を追加して一致したものだけを取ってきて並べ替えをする。
    
}
