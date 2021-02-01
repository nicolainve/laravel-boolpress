<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function index() {
        $posts = Post::orderBy('created_at', 'desc')->get();

        return view('guests.posts.index', compact('posts'));
    }

    public function show($slug) {
        $post = Post::where('slug', $slug)->first();

        if (empty($post)) {
            abort(404);
        }

        return view('guests.posts.show', compact('post'));
    }
}
