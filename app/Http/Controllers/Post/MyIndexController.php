<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class MyIndexController extends BaseController
{
    public function __invoke(){
        $posts = Post::where('user_id', Auth::id())->get();
        return view('post.my_index', compact('posts'));
    }
}
