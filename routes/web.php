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



Route::get('posts','PostController@index');
Route::get('posts/{tweet}','PostController@show');
Route::post('posts','PostController@create');
Route::post('posts/store','PostController@store');
Route::post('posts/delete/1','PostController@destroy');
Route::post('posts/comment','PostController@comment');

Route::get('/about','PagesController@about');
Route::get('/contact','PagesController@contact');
Route::get('/search', 'PagesController@search');
Route::get('/signup', 'UserAuthController@signup');
Route::get('/profile','PagesController@profile');
Route::get('/terms','PagesController@terms');
Route::get('/login','UserAuthController@login');


Route::get('search', function () {
    return view('search');
});

Route::get('user','usersController@index');

Route::get('user/{user_id}','UsersController@getOtherUser');


//Route::get('user','usersController@index');
//Route::get('/tasks/{task}','TaskController@show');

Route::get('user-followers','usersController@usesrFollowers');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
