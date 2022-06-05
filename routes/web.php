<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\GoogleController;
use App\Http\Livewire\Posts;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\MapController;
use Cornford\Googlmapper\Facades\MapperFacade;

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

    Route::resource('users', \App\Http\Controllers\UsersController::class);

	Route::get('/article/create',[ArticleController::class, 'index'])->name('article.form');
	Route::get('/article/edit',[ArticleController::class, 'index2'])->name('article.form2');
	Route::post('/save-article',[ArticleController::class, 'storeArticle'])->name('store.article');
	Route::get('/article/{id}',[ArticleController::class, 'showArticle'])->name('show.article');

	Route::get('posts', Posts::class)->middleware('auth');

	Route::get('contact-us', [ContactController::class, 'index']);
	Route::post('contact-us', [ContactController::class, 'store'])->name('contact.us.store');
	
	Route::controller(SearchController::class)->group(function(){
    Route::get('demo-search', 'index');
    Route::get('autocomplete', 'autocomplete')->name('autocomplete');
	
});
});
