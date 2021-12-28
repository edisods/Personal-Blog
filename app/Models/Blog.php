<?php

namespace App\Models;
//use App\Models\Blog;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Blog;
use App\Models\User;
use Auth;


class Blog extends Model

{
    use HasFactory;
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
