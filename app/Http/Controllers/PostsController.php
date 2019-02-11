<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tweet;
use App\Comments;
use App\User;
use App\Follower;
use Auth;


class PostsController extends Controller
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

     $users = new User;
     $profilefollowers = $users = $users->get();
     $user = Auth::user();


     // $follower = new Follower;
     // $follower = $follower->where("user_id",$user->id)->where("following", 1)->get(array('id'))->toArray();


       $tweet = new Tweet;
       $tweets = $tweet->get();

    $tweetCollection = array();

    foreach ($tweets as $tweet) {
     $newTweet = $tweet;
     $comments= Tweet::find($tweet->id)->comments;
      $newTweet['comments'] = $comments;

      if($user->id == $tweet->user_id){
          $newTweet['can_delete'] = 1;
     }
     $tweetCollection[] = $newTweet;
 }
    $tweets = $tweetCollection;

     return view('home',compact('tweets'));
  }
  public function saveTweet(Request $request){
      $user = Auth::user();
      $tweet = new Tweet;
      $tweet ->user_id = $user->id;
      $tweet ->tweets = $request->tweet;
      $tweet -> save();
      return redirect('home');
}
  public function saveComment(Request $request){
      $user = Auth::user();
      $comment = new Comments;
      $comment ->user_id = $user->id;
      $comment ->tweet_id = $request->tweet_id;
      $comment ->comments = $request->comment;
      $comment-> save();
      return redirect('home');
  }


  public function deleteTweet(Request $request){

     $tweet = Tweet::find($request->tweet_id);
     if($tweet){
         Tweet::destroy($request->tweet_id);
     }
     return  redirect('home');

}
}
