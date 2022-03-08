<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('auth', function(){
    $credentials = [
        'email' => 'john@example.com',
        'password' => 'password'
    ];

    if (! Auth::attempt($credentials)) 
    {
        return 'Incorrect username and password combination.';
    }

    return redirect('protected');
});

Route::get('auth/logout', function(){
    Auth::logout();

    return 'See you again.';
});

Route::get('protected', function () {
    if (! Auth::check()) 
    {
        return '잘못된 접근입니다. 다시 시도해 주세요.';
    }
    return 'Welcome back, ' . Auth::user()->name;
});

Route::get('auth/login', function () {
    return "로그인 페이지에 도달했습니다.";
});