<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::where('is_published', 0)->get();
        foreach ($posts as $post) {
            dump($post->title);
        }
        dd('end');
    }

    public function create()
    {
        $postsArray = [
            [
                'title' => 'title of post from phpstorm',
                'content' => 'some interesting text here',
                'likes' => 14,
                'is_published' => 1,
            ],
            [
                'title' => 'another of post from phpstorm',
                'content' => 'another some interesting text here',
                'likes' => 24,
                'is_published' => 1,
            ],
        ];

        foreach ($postsArray as $item) {
            Post::create($item);
        }

        dd('created');
    }

    public function update ()
    {
        $post = Post::find(5);

        $post->update([
            'title' => 'updated title',
            'content' => 'updated text here',
            'likes' => 16,
            'is_published' => 1
        ]);
        dd('updated');
    }
}
