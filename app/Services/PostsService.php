<?php

namespace App\Services;

use App\Models\Post;
use Illuminate\Support\Facades\DB;

class PostsService {

    public function createPost(array $postData)
    {
        //some code...

        $post = Post::create($postData);

        //more code...

        return $post;
    }
}

