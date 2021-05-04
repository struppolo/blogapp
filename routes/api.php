<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Http\Controllers\ApiController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/


Route::post('login',[ApiController::class,'login']);

Route::get('posts',[ApiController::class,'index']);
Route::post('posts',[ApiController::class,'store'])->middleware('auth:sanctum');
Route::get('posts/{id}',[ApiController::class,'show']);
Route::put('posts/{id}',[ApiController::class,'update'])->middleware('auth:sanctum');
Route::delete('posts/{id}',[ApiController::class,'destroy'])->middleware('auth:sanctum');