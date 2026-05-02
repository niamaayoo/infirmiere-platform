<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
     public function index()
    {
        $posts = Post::with('images')->get();
        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $post = Post::create([
            'name' => $request->name
        ]);

        // ajouter image
        $post->images()->create([
            'url' => $request->url
        ]);

        return redirect()->route('posts.index');
    }
}

