<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eventdate extends Model
{
    use HasFactory;
    
    protected $fillable = [
            'date',
            'thread_id'
        ];
    
    public function thread()
    {
        return $this->belongsTo(Thread::class);
    }
}
