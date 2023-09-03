<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{
    use HasFactory;
    
    protected $fillable = [
            'title',
            'name',
            'content',
            'upload_image',
            'upload_url',
            'delete_key',
        ];
    
     public function users()
    {
        return $this->belongsToMany(User::class);
    }
    
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    
    public function eventdates()
    {
        return $this->hasMany(Eventdate::class);
    }
    
    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
}
