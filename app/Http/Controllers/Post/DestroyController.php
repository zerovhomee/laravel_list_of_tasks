<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class DestroyController extends BaseController
{
    public function __invoke(Post $post){
        $post -> delete();
        return redirect()->route('posts.index');
    }
}
