<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomePage;
use App\Http\Controllers\PostPage;
use App\Http\Controllers\CategoryPage;
use App\Http\Controllers\search;

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

// pages
Route::get('/',[HomePage::class, 'index']);
Route::get('/trang-chu',[HomePage::class, 'index']);

Route::get('/stories/{id}', [PostPage::class, 'show']);
Route::post('/stories/{id}/store', [PostPage::class, 'store']);
Route::get('/category/{id}',[CategoryPage::class, 'show']);
Route::get('/list-category',[CategoryPage::class, 'index']);

Route::post('/search',[search::class, 'searchPost']);

// Route::get('single', );
// Route::get('gallery', function () {
//     return view('pages/gallery');
// });
// Route::get('about', function () {
//     return view('pages/about');
// });
// Route::get('typo', function () {
//     return view('pages/typo');
// });
// Route::get('contact', function () {
//     return view('pages/contact');
// });

// Route::get('testApi',function(){
//     return view('testApi');
// });

// auth
Auth::routes();
Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// ->random(10)