<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\StoreRequest;
use Illuminate\Http\Request;
use App\Models\Post;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request){
        $data = $request->validated();
        Post::create($data);
        return redirect()->route('posts.index');
    }
}
