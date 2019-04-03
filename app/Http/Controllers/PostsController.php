<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tweet;
use App\Comments;
use App\User;
use App\Follower;
use App\Tweetlike;

use Auth;
use App\Http\Resources\Tweet as TweetResource;
use App\Http\Resources\Comments as CommentsResource;
use App\Http\Resources\Tweetlike as TweetlikeResource;

class PostsController extends Controller
{
    //
//    @return void
  // */
  public function __construct()
  {
      // $this->middleware('auth');
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
     $tweet = new Tweet;
     $tweets = $tweet->get();
     $comment = new Comments;
     $comments = $comment->get();
     $tweets = $tweet->where('user_id',$user->id)->orderBy('created_at','desc')->get();


    // $tweet = Tweet::orderBy('created_at','desc')->get();
    $tweetCollection = array();

     foreach ($tweets as $tweet) {
     $newTweet = $tweet;
     $comments= Tweet::find($tweet->id)->comments;


      $newTweet['liked'] = false;
      $tweetLike = \DB::table('Tweetlikes')->where('user_id',$user->id)->where('tweet_id',$tweet->id)->orderBy('created_at','DESC')->first();

      if(isset($tweetLike->like) && ($tweetLike->like == "1")){
          $newTweet['liked'] = true;
      }
      $newTweet['user'] = Tweet::find($tweet->id)->user;

      if($user->id == $tweet->user_id){
          $newTweet['has_permissions'] = 1;
      }
     $tweetCollection[] = $newTweet;
 }
    $tweets = $tweetCollection;

     return view('home',compact('tweets','user'));
  }
  public function saveTweet(Request $request){
      $this->middleware('auth');
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
public function delete($id){

  $user = Auth::user();
  Comments::where('id',$id)->delete();
  return redirect('home');
}
public function editTweet(Request $request){
    $tweet =Tweet::find($request->tweet_id);
    $tweet ->tweets = $request->tweet;
    $tweet -> save();
    return redirect('home');
}
public function editTweetDisplay($id){
    $tweet =Tweet::find($id);
    return view('editTweet',compact('tweet'));
    }
public function editComment(Request $request){
    $user = Auth::user();
    $comment = Comments::find($request->comment_id);
    $comment ->comments = $request->comment;
    $comment -> save();
    return redirect('home');
    }
public function editCommentDisplay($id){
    $comment =Comments::find($id);
    return view('editComment',compact('comment'));
    }

public function likeTweet(Request $request){
    $user = Auth::user();
    $tweetLike = new Tweetlike;
    $tweetLike ->user_id = $user->id;
    $tweetLike ->tweet_id = $request->tweet_id;
    $tweetLike ->like = $request->like;
    $tweetLike -> save();
    return redirect('home');
  }

  public function editProfile(Request $request){

      $currentUser = Auth:: User();

      $user = new User();
      $currentUserId = $currentUser->id;
      $user = $user->find($currentUserId);

      $user->name = $request->name;
      $user->last_name = $request->last_name;
      $user->email = $request->email;
      $user->telephone = $request->telephone;
      $user->gender = $request->gender;

      $user -> save();
      return redirect('home');
}
  public function editProfileDisplay(){
      $currentUser = Auth:: User();
      $currentUserId = $currentUser->id;
      $user = new User();
      $user = $user->find($currentUserId);

       return view('editUserProfile',compact('user'));
      }
  public function getAllTweets(){
        $tweets =  Tweet::get();
        return new TweetResource($tweets);
        }

    public function getAllComments(){
        $comments =  Comments::get();
        return new CommentsResource($comments);
        }
    // public function getAllTweetLikes(){
    //     $tweetLikes =  Tweetlike::get();
    //     return new TweetlikeResource($tweetLikes);
    //     }

    public function getAllTweetsByNumber($number){
        $tweets =  Tweet::limit($number)->orderBy('id','DESC')->get();
        return new TweetResource($tweets);
            }
    public function getAllTweetsByNumberFromStartPoint($number,$id){
        $tweets =  Tweet::limit($number)->where("id", "<", $id)->orderBy('id','DESC')->get();
        return new TweetResource($tweets);
    }
