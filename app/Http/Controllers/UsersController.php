<!-- <?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Follower;
use App\Tweet;
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
  } -->
