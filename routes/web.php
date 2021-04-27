<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Models\Post;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $posts = Post::orderBy('created_at','desc')->get();
    return view('index',compact('posts'));
});


Route::get('/admin', function () {
    return view('admin.index');
});


Route::resource('posts', PostController::class)->except('show')->middleware(['auth']);

Route::get('/posts/{id}',[PostController::class, 'show'])->name('posts.show');

Route::resource('posts/{id}/comments', CommentController::class)->middleware(['auth']);

require __DIR__.'/auth.php';

Auth::routes();
