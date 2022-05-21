<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ArticleController;

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::group(['middleware' => 'auth'], function () {
    Route::resource('tasks', \App\Http\Controllers\TasksController::class);

    Route::resource('users', \App\Http\Controllers\UsersController::class);
});

Route::get('posts/create',[PostController::class,'create']);
Route::get('posts/edit',[PostController::class,'edit']);
Route::post('posts/store',[PostController::class,'store'])->name('posts.store');

Route::get('/article/create',[ArticleController::class, 'index'])->name('article.form');
Route::get('/article/edit',[ArticleController::class, 'index2'])->name('article.form2');
Route::post('/save-article',[ArticleController::class, 'storeArticle'])->name('store.article');
Route::get('/article/{id}',[ArticleController::class, 'showArticle'])->name('show.article');


