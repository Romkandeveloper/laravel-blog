<?php

namespace Tests\Unit;

use App\Models\Post;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PostTest extends TestCase
{
    use RefreshDatabase;

    public function testPostCreation()
    {
        $post = Post::factory([
            'title' => 'Test Post',
            'text' => 'This is a test post',
        ])->create();

        $this->assertInstanceOf(Post::class, $post);
        $this->assertEquals('Test Post', $post->title);
        $this->assertEquals('This is a test post', $post->text);
    }

    public function testPostUpdate()
    {
        $post = Post::factory([
            'title' => 'Old Title',
            'text' => 'Old Text'
        ])->create();

        $post->update([
            'title' => 'New Title',
            'text' => 'New Text'
        ]);

        $this->assertEquals('New Title', $post->title);
        $this->assertEquals('New Text', $post->text);
    }

    public function testPostDeletion()
    {
        $post = Post::factory([
            'title' => 'Old Title',
            'text' => 'Old Text'
        ])->create();

        $post->delete();

        $this->assertSoftDeleted($post);
    }
}
