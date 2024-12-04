<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FirstController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mypage', [FirstController::class, 'lmao']);
Route::get('/es', [FirstController::class, 'es']);
Route::get('/ooo', [FirstController::class, 'ooo']);
Route::get('/ya', [FirstController::class, 'ya']);
Route::get('/eee', [FirstController::class, 'eee']);
Route::get('/rrrr', [FirstController::class, 'rrrr']);
