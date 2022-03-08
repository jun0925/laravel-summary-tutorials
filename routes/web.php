<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;

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

// Route::get('/', function () {
//     $items = [
//         '사과',
//         '바나나',
//         '딸기'
//     ];
//     return view('index', compact('items'));
// });

Route::get('/', 'App\Http\Controllers\IndexController@index');

Route::resource('posts','App\Http\Controllers\PostsController');

Route::resource('posts.comments', 'App\Http\Controllers\PostCommentController');