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


Route::get('/home', 'PostsController@index')->name('homepage');
Route::get('/user/{id}', 'usersController@index')->name('user');

Route::get('/edit-profile', 'UsersController@editProfileDisplay');
Route::post('/edit-profile', 'UsersController@editProfile');


Route::post('/tweet', 'PostsController@saveTweet')->name('savetweet');



Route::get('/edit-tweet/{id}', 'PostsController@editTweetDisplay');
Route::post('/edit-tweet', 'PostsController@editTweet');

Route::delete('/delete-tweet', 'PostsController@deleteTweet')->name('delete-tweet');
Route::delete('/delete-comment', 'PostsController@deleteComment')->name('delete-comment');

Route::post('/comment', 'PostsController@saveComment')->name('savecomment');
Route::get('/comment', 'PostsController@saveComment')->name('savecomment');

Route::delete('/comment', 'PostsController@saveComment')->name('deletecomment');

Route::post('/follow', 'UsersController@follow');

Route::post('/like-tweet', 'PostsController@likeTweet');
