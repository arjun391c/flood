<?php


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

Route::get('/posts/upload', function () {
    return view('posts.upload');
});

Route::get('/terms', function () {
    return view('/terms');
});
//Route::get('/posts/find/{id}/view', function ($id) {
  //  return view('')

//});

Route::resource('posts', 'PostsController');
