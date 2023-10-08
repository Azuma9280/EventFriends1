<?php

namespace App\Http\Controllers;

use App\Models\Thread;
use App\Models\Eventdate;
use App\Models\Category;
use App\Models\Comment;
use Illuminate\Http\Request;
use Carbon\carbon;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{   
    public function index()
    {
        return view('dashboard');
    }
    
    public function home(Category $category)
    {
        $threads_view = Thread::orderBy('view','desc')->take(10)->get();
        //dd($threads_view);
        $today = date("Y-m-d");
        $carbontoday = Carbon::parse($today);
        $today30 = $carbontoday->addMonth();
        $threads_today_view = DB::table('eventdates')->join('threads','eventdates.thread_id', '=', 'threads.id')->where('eventdates.date', '=', $today)->orderBy('threads.view','desc')->take(3)->get();
        //dd($threads_today_view);
        //dateに登録されている日に限定したのちにviewを降順に3つ並べる
        $threads_future_view = DB::table('eventdates')->join('threads','eventdates.thread_id', '=', 'threads.id')->where('eventdates.date', '<=', $today30)->where('eventdates.date', '>=', $today)->orderBy('threads.view','desc')->take(3)->get();
        //dd($threads_future_view);
        //dateが先1か月に限定したのちにviewを降順に並べる
        
        return view('/threads.home')->with(['threads_view' => $threads_view,'threads_today_view' => $threads_today_view,'threads_future_view' => $threads_future_view,'categories' => $category->get()]);
    }
    
    public function submit(Request $request, Thread $thread, Eventdate $eventdate, Comment $comment)
    {
        $thread->view = $thread->view+1;
        $thread->save();
        //dd($thread);
        return view('threads/show')->with(['thread' => $thread,'eventdate' => $eventdate]);
        //end_dateからstart_dateを引いて、引いた数だけforeachを回してtodayという要素を追加して一致したものだけを取ってきて並べ替えをする。
    }
    
    public function category(Category $category)
    {
        return view('threads/category')->with(['categories' => $category->get()]);
    }
    
}
