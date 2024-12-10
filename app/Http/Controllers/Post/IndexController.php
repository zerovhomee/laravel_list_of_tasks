<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Post;

class IndexController extends BaseController
{
    public function __invoke(){
        $posts = Post::paginate(10);
       //->sortBy('date');
        return view('post.index', compact('posts'));
    }
}
