<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eventdate extends Model
{
    use HasFactory;
    
    protected $fillable = [
            'start_date',
            'end_date'
        ];
    
    public function thread()
    {
        return $this->belongsTo(Thread::class);
    }
}
