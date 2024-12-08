<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(){
        $posts = Post::all();
        return view('post.index', compact('posts'));
    }


    public function create(){
        return view('post.create');
    }

    public function store(){
        $data = request()->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'date' => 'required|date',
        ]);
        Post::create($data);
        return redirect()->route('posts.index');
    }

    public function show(Post $post){
        return view('post.show', compact('post'));
    }

    public function edit(Post $post){
        return view('post.edit', compact('post'));
    }

    public function update(Post $post){
        $data = request()->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'date' => 'required|date',
        ]);
        $post -> update($data);
        return redirect()->route('posts.show', $post->id);
    }

    public function destroy(Post $post){
        $post -> delete();
        return redirect()->route('posts.index');
    }
}
