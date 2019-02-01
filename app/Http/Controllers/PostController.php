<?php

namespace App\Http\Controllers;
use DB;
use App\Tweet;
use App\Comments;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $tweeter = \DB::table('tweets')->get();
        $data = array('tweets' =>$tweeter);
        return view('posts')->with($data);
        $tweets = Tweets::orderBy('created_at','desc')->get();
        return view('posts',compact('tweets'));
        $tweet = Tweet::find(19);
        var_dump($tweet->comments);


        $tweets =Tweet::orderby('created_at','desc')->get();
        return view('posts1',compact('tweets','tweetsComments'));
    }
    public function show($id){
        $tweets = Tweets::find($id);

     return view('single-tweet',compact('tweets'));

}
    public function show2(Tweets $tweet){
     return $tweets;
    }
    public function create(Request $request){
        $tweetsModel = new Tweet;
        $tweetsModel ->user_id = 2;
        $tweetsModel ->tweets = $request->tweet;
        $tweetsModel -> save();

    $tweets = Tweet::orderBy('created_at','desc')->get();
    return view('posts',compact('tweets'));

}
    public function comment(Request $request){

        $commentsModel = new Comments;
        $commentsModel ->user_id = $request->user_id;
        $commentsModel ->post_id = $request->tweet_id;
        $commentsModel ->comments = $request->comment;
        $commentsModel -> save();

        $tweets = Tweet::orderBy('created_at','desc')->get();
        return view('posts',compact('tweets'));
    }
}
