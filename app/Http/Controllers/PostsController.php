<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Post;
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

        return redirect('/');
    }

    public function edit(Post $post)
    {
        return view('posts.edit', ['title' => 'Edit post', 'post' => $post]);
    }

    public function update(Post $post, UpdatePostRequest $request)
    {
        try {
            $this->postsService->updatePost($post, $request->validated());
        } catch (Exception $e) {

        }

        return redirect('/');
    }

    public function destroy(Post $post)
    {
        try {
            $this->postsService->deletePost($post);
        } catch (Exception $e) {

        }

        return redirect('/');
    }
}
