<?php

namespace App\Services;

use App\Models\Post;
use Illuminate\Support\Facades\DB;

class PostsService {

    const DEFAULT_PAGINATION_COUNT = 5;

    public function getPosts()
    {
        return Post::orderBy('created_at', 'desc')->paginate(self::DEFAULT_PAGINATION_COUNT);
    }

    public function createPost(array $postData)
    {
        return Post::create($postData);
    }

    public function updatePost(Post $post, array $postData)
    {
        return $post->update($postData);
    }

    public function deletePost(Post $post)
    {
        return $post->delete();
    }
}

