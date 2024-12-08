<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class EditController extends Controller
{
    public function __invoke(Post $post){
        return view('post.edit', compact('post'));
    }
}
