<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;

class PostController extends Controller
{
    public function index()
    {
        return view('post',[
            "title" => "Post",
            "post" => Posts::all()
        ]);
    }

    public function show($slug)
    {
        return view('posts',[
            "title" => "Single Post",
            "posts" => Posts::find($slug)
        ]);
    }
}
