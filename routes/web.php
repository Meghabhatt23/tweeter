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






//Route::get('user','usersController@index');
//Route::get('/tasks/{task}','TaskController@show');





Route::get('/', function () {
    return view('index');
});
Auth::routes();

Route::get('/home', 'PostsController@index')->name('tweets');
Route::post('/tweet', 'PostsController@saveTweet')->name('savetweet');
Route::post('/comment', 'PostsController@saveComment')->name('savecomment');
