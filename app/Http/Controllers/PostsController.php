<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function create()
    {
        return view('posts.create', ['title' => 'Create post']);
    }
}
