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
    return view('index');
});
// Route::get('about', function () {
    // return view('about');
// });
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/layout', function () {
    return view('layout');
});
Route::get('/search', function () {
    return view('search');
});
Route::get('/signup', function () {
    return view('signup');
});
Route::get('posts', function () {
    return view('posts');
});
Route::get('profile', function () {
    return view('profile');
});
Route::get('terms', function () {
    return view('terms');
});
Route::get('login', function () {
    return view('login');
});
Route::get('posts','PostController@index');
Route::get('posts/{tweet}','PostController@show');
Route::post('posts','PostController@create');
Route::post('posts/store','PostController@store');
Route::post('posts/delete/1','PostController@destroy');

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
