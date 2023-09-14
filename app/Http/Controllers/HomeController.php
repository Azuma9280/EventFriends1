<?php

namespace App\Http\Controllers;

use App\Models\Thread;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(Thread $thread)
    {
        $threads_view =Thread::orderBy('view','desc')->get();
       
        
        
        return view('/threads/home')->with(['threads_view' => $threads_view]);
    }
}
