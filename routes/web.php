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
Route::post('/comment', 'PostsController@saveComment')->name('savecomment');
Route::post('/follow', 'UsersController@follow');
