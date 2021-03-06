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


Route::get('/tweet-comments/{tweetId}', 'PostsController@getTweetComments');

Route::get('/tweetsbynumber/{number}', 'PostsController@getAllTweetsByNumber');
Route::get('/tweetsbynumberfromstartpoint/{number}/{id}', 'PostsController@getAllTweetsByNumberFromStartPoint');


Route::post('/tweet-likes', 'PostsController@likeTweetViaApi');

Route::post('/follow-user', 'PostsController@followUserViaApi');
Route::post('/new-comment', 'PostsController@newCommentViaApi');
