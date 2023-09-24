<?php

namespace App\Http\Controllers;

use App\Models\Thread;
use App\Models\Eventdate;
use Illuminate\Http\Request;
use App\Http\Requests\ThreadRequest;
use Cloudinary;
use Carbon\carbon;
    
class ThreadController extends Controller
{   
    public function create(Thread $thread)
    {
        return view('threads.create'); //->with(['threads' => $thread->get()]);
    }
    
    public function store(ThreadRequest $request,Thread $thread)
    {
        $input = $request['thread'];
        if ($request->file('image')){
            $upload_image = Cloudinary::upload($request->file('upload_image')->getRealPath())->getSecurePath();
            $input += ['upload_image'=>$upload_image];
        }
        $input += ['user_id' => Auth::id()];
        $thread->fill($input)->save();
        $input = $request['eventdate'];
        $test['thread_id'] = $thread->id;
        $toDate = Carbon::parse($input['start_date']);
        $fromDate = Carbon::parse($input['end_date']);
        $count = $toDate->diffInDays($fromDate);
        //dd($count);
        $dt = new Carbon($input['start_date']);
        for($i = 0; $i<= $count; $i++)
        {
            
            $test['date'] = $dt->addDays($i);
            $eventdate = new Eventdate;
            $eventdate->fill($test)->save();
        }
        
        return view('threads/show')->with(['thread' => $thread,'eventdate' => $eventdate]);
        //return redirect('/threads/' .$thread->id);
    }
    
    
}