<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tweet;
use App\Comments;
use Auth;


class TweetsController extends Controller
{
    //
//    @return void
  // */
  public function __construct()
  {
      $this->middleware('auth');
  }

  /**
   * Show the application dashboard.
   *
   * @return \Illuminate\Contracts\Support\Renderable
   */
  public function index()
  {


      $tweet = new Tweet;
      $tweets = $tweet->get();

        $tweetCollection = array();
        foreach ($tweets as $tweet) {
         $newTweet = $tweet;
         $comments = Tweet::find($tweet->id)->comments;
         $newTweet['comments'] = $comments;
         $tweetCollection[] = $newTweet;
     }
     $tweets = $tweetCollection;

     return view('home',compact('tweets'));
  }
  public function saveTweet(Request $request){
      $user = Auth::user();
      $tweet = new Tweet;
      $tweet ->user_id=2;
      $tweet ->tweets = $request->tweet;
      $tweet -> save();
      return redirect('home') ;
}
  public function saveComment(Request $request){
      $user = Auth::user();
      $comment = new Comments;
      $comment ->user_id = $user->id;
      $comment ->tweet_id = $request->tweet;
      $tweets -> save();
      return redirect('home');
}
}
