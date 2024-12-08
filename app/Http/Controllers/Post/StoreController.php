<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\StoreRequest;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request){


        $data = $request->validated();
        $data += ['user_id' => Auth::id()];
        $this->service->store($data);

        return redirect()->route('posts.index');
    }
}
