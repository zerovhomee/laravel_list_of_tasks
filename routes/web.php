<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\Post\EditController;
use App\Http\Controllers\Post\CreateController;
use App\Http\Controllers\Post\IndexController;
use App\Http\Controllers\Post\UpdateController;
use App\Http\Controllers\Post\ShowController;
use App\Http\Controllers\Post\DestroyController;
use App\Http\Controllers\Post\StoreController;
use App\Http\Controllers\Post\MyIndexController;


Route::get('/', [App\Http\Controllers\View\ViewController::class, 'index'])->name('first_page');

Route::group([], function () {
    Route::get('/posts', IndexController::class)->name('posts.index');
    Route::get('/posts/create', CreateController::class)->name('posts.create');
    Route::post('/posts', StoreController::class)->name('posts.store');
    Route::get('/posts/{post}', ShowController::class)->name('posts.show');
    Route::get('/posts/{post}/edit', EditController::class)->name('posts.edit');
    Route::patch('/posts/{post}', UpdateController::class)->name('posts.update');
    Route::delete('/posts/{post}', DestroyController::class)->name('posts.destroy');
    Route::get('/posts/my/posts', MyIndexController::class)->name('posts.my_index');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


