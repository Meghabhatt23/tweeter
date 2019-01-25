<?php

namespace App\Http\Controllers;
use DB;
use App\Tweets;

use Illuminate\Http\Request;

class PostController extends Controller
{
        public function index(){
        // $tweeter = \DB::table('tweets')->get();
             // $data = array('tweets' =>$tweeter);
             // return view('posts')->with($data);
             $tweets =Tweets::get();

             return view('posts',compact('tweets'));
        }
        public function show($id){
            $tweets = Tweets::find($id);

          return view('single-tweet',compact('tweets'));
        }

        public function show2(Tweets $tweet){
            return $tweets;
        }
            public function create(Request $request){
            $tweetsModel = new Tweets;
            $tweetsModel ->user_id = 2;
            $tweetsModel ->tweets = $request->tweet;
            $tweetsModel -> save();

        $tweets = Tweets::get();
        return view('posts',compact('tweets'));

}

}
