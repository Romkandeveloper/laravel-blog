<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Services\PostsService;
use Illuminate\Http\Request;
use Mockery\Exception;

class PostsController extends Controller
{
    public  $postsService;

    public function __construct(PostsService $postsService)
    {
        $this->postsService = $postsService;
    }

    public function create()
    {
        return view('posts.create', ['title' => 'Create post']);
    }

    public function store(StorePostRequest $request)
    {
        try {
            $this->postsService->createPost($request->validated());
        } catch (Exception $e) {

        }

        return redirect()->route('/');
    }
}
