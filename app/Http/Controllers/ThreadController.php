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
}