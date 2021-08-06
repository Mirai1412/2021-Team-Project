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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/post/main',[PostsController::class, 'main'])->name('post.main');
Route::get('/post/profile',[PostsController::class, 'profile'])->name('post.profile');
Route::get('/post/login',[PostsController::class, 'login'])->name('post.login');
