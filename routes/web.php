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
    return view('about');
});
Route::get('/', function () {
    return view('home');
});

Route::get('/', function () {
    return view('login');
});

Route::get('/', function () {
    return view('posts');
});

Route::get('/', function () {
    return view('profile');
});
Route::get('/', function () {
    return view('search');
});
Route::get('/', function () {
    return view('signup');
});
