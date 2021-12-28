<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;

// use App\Http\Requests;
// use App\Post;



class BlogController extends Controller
{
    public function index()
    {
        //$blogs = Blog::paginate(10);
        return view('blogs.index');
    }

    public function read($idBlog)
    {
        $data = array('blog' => Blog::findOrFail($idBlog) );
        return view('blogs.read', $data);
    }

    
}
