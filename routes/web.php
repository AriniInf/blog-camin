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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/view/{id}','PostsController@ViewPost');

Route::get('/edit/{id}','PostsController@EditPost');
Route::post('/edit','PostsController@UpdatePost');

Route::get('/delete/{id}','PostsController@DeletePost');

Route::get('/allpost','PostsController@AllPost');
Route::get('/createpost','PostsController@CreatePost');
Route::post('/createpost','PostsController@SavePost');
Route::post('/comment','PostsController@CommentPost');
Route::get('/deletecomment/{id}','PostsController@DeleteCommentPost');

