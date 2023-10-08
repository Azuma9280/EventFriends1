<?php

namespace App\Http\Controllers;

use App\Models\Thread;
use App\Models\Eventdate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ThreadRequest;
use Cloudinary;
use Carbon\carbon;
    
class ThreadController extends Controller
{   
    public function create(Thread $thread)
    {
        return view('threads.create'); //->with(['threads' => $thread->get()]);
    }
    
    public function store(Request $request,Thread $thread)
    {
        $input = $request['thread'];
        if($request->file('image')){
            $upload_image = Cloudinary::upload($request->file('image')->getRealPath())->getSecurePath();
            $input +=['upload_image' => $upload_image];
        }
        $input['user_id'] = Auth::id();
        $input['thread_id'] = $thread->id;
        $toDate = Carbon::parse($input['start_date']);
        $fromDate = Carbon::parse($input['end_date']);
        $count = $toDate->diffInDays($fromDate);
        $dt = new Carbon($input['start_date']);
        
        $thread->fill($input)->save();
        $input = $request['eventdate']; 
        for($i = 0; $i<= $count; $i++)
        {
            $input['thread_id'] = $thread->id;
            $input['date'] = $dt->addDays($i);
            $eventdate = new Eventdate;
            $eventdate->fill($input)->save();
        }
        
        return view('threads/show')->with(['thread' => $thread,'eventdate' => $eventdate]);
        //return redirect('/threads/' .$thread->id);
    }
    
    
    
}