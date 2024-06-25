<?php

use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('posts.index');
});
Route::resource('posts',PostsController::class);
