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




require __DIR__ . '/auth.php'; // 라라벨 로그인

Route::get('/posts/main',[PostsController::class, 'main'])->name('post.main');
// Route::get('/posts/profile',[PostsController::class, 'profile'])->name('post.profile');
// Route::get('/posts/login',[PostsController::class, 'login'])->name('post.login');
Route::get('/posts/made',[PostsController::class, 'made'])->name('post.made')/*->middleware(['auth']) */;

Route::post('/posts/store', [PostController::class, 'store'])->name('posts.store');

Route::get('/posts/show/{id}',[PostsController::class, 'show'])->name('post.show');
