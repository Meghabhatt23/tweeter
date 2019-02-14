<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Follower;
use App\Tweet;
use App\User;
use Auth;

class UsersController extends Controller
{
    public function index($id){
        $user = new User();
        $profilefollowers = $users = $uset->get();
        $user = $user->find($id);

        $tweet = new Tweet;
        $tweets = $tweet->get();

        $tweetsCollection = array();
        foreach($tweets as $tweet){
        $newTweet = $tweet;
        $comments = Tweet::find($tweet->id)->comments;
        $newTweet['comments'] = $comments;
        $tweetsCollection[] = $newTweet;
    }

        $tweets = $tweetsCollection;

        return view('profilepage',compacts('user','profilefollowers','tweets'));


    }
    public function follow($id){
        $user = Auth:: User();
        $follower = new Follower;
        $follower->users_id = $user->id;
        $follower->follower_id = $request->user_id;
        $follower->following = 1;
        $follower->save();
        return redirect('home');
    }
    public function editProfileDisplay(){
        $currentUser = Auth:: User();
        $currentUserId = $currentUser->id;

        $user = new User();
        $user = $user->find($currentUserId);



        return view('editUserProfile',compact('user'));
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



}
