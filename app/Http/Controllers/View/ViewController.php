<?php

namespace App\Http\Controllers\View;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\UpdateRequest;
use Illuminate\Http\Request;
use App\Models\Post;

class ViewController extends Controller
{
    public function index(){

        return redirect()->route('posts.index');
    }
}
