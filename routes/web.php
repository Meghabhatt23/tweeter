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




Auth::routes();
Route::get('/', function () {
    return view('index');
});
Route::get('mosa-profile', function () {
    return view('mosa-profile');
});
Route::get('brittany-profile', function () {
    return view('brittany-profile');
});
Route::get('bushra-profile', function () {
    return view('bushra-profile');
});
Route::get('jordan-profile', function () {
    return view('jordan-profile');
});
Route::get('rachel-profile', function () {
    return view('rachel-profile');
});


Route::get('/home', 'PostsController@index')->name('tweets');

Route::post('/tweet', 'PostsController@saveTweet')->name('savetweet');
Route::get('/tweet', 'PostsController@saveTweet')->name('savetweet');
// Route::update('/tweet', 'PostsController@saveTweet')->name('supdatetweet');
Route::delete('/delete-tweet', 'PostsController@deleteTweet')->name('delete-tweet');

Route::post('/comment', 'PostsController@saveComment')->name('savecomment');
Route::get('/comment', 'PostsController@saveComment')->name('savecomment');
// Route::update('/comment', 'PostsController@saveComment')->name('updatecomment');
Route::delete('/comment', 'PostsController@saveComment')->name('deletecomment');

Route::post('/follow', 'UsersController@follow');
