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
    const DEFAULT_PAGINATION_COUNT = 5;

    public  $postsService;

    public function __construct(PostsService $postsService)
    {
        $this->postsService = $postsService;
    }

    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->paginate(self::DEFAULT_PAGINATION_COUNT);
        return view('posts.index', ['title' => 'Posts', 'posts' => $posts]);
    }

    public function show(Post $post)
    {
        return view('posts.show', ['title' => $post->title, 'post' => $post]);
    }

    public function create()
    {
        return view('posts.create', ['title' => 'Create post']);
    }

    public function store(StorePostRequest $request)
    {
        try {
            $post = $this->postsService->createPost($request->validated());
        } catch (Exception $e) {

        }

        return redirect()->route('posts.show', ['post' => $post]);
    }

    public function edit(Post $post)
    {
        return view('posts.edit', ['title' => 'Edit post', 'post' => $post]);
    }

    public function update(Post $post, UpdatePostRequest $request)
    {
        try {
            $post = $this->postsService->updatePost($post, $request->validated());
        } catch (Exception $e) {

        }

        return redirect()->route('posts.show', ['post' => $post]);
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
