<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/users', "UsersController@getAllUsers");

// Route::post('/tweets', "PostsController@getAllTweets");
Route::get('/tweets', "PostsController@getAllTweets");

// Route::post('/comment', 'PostsController@saveComment')->name('savecomment');
// Route::get('/comments', 'PostsController@getAllComments');
Route::post('/comments', 'PostsController@getAllComments');

Route::get('/tweetsbynumber/{number}', 'PostsController@getAllTweetsByNumber');
Route::get('/tweetsbynumberfromstartpoint/{number}/{id}', 'PostsController@getAllTweetsByNumberFromStartPoint');


Route::post('/tweet-likes', 'PostsController@likeTweetViaApi');
