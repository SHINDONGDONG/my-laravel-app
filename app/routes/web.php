<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('posts', App\Http\Controllers\PostController::class);

//로그인안되어잇는 유저가 /user/show에 접속하면 middleware가 접속을 차단해준다 auth로 
Route::get('/user/show', [App\Http\Controllers\UserController::class, 'show'])->middleware('auth')->name('users.show');
Route::get('/user/edit', [App\Http\Controllers\UserController::class, 'edit'])->middleware('auth')->name('users.edit');