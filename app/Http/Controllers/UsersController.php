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


//    public function followUser(User $user)
//    {
//      $user = User::find($profileId);
//      if(! $user) {
//
//         return redirect()->back()->with('error', 'User does not exist.');
//     }
//
//    $user->followers()->attach(auth()->user()->id);
//         return redirect()->back()->with('success', 'Successfully followed the user.');
//    }
//
//    public function unFollowUser(User $user)
//    {
//          $user = User::find($profileId);
//          if(! $user) {
//
//         return redirect()->back()->with('error', 'User does not exist.');
//     }
//
//     $user->followers()->detach(auth()->user()->id);
//     return redirect()->back()->with('success', 'Successfully unfollowed the user.');
//     }
//
// public function show(User $user)
// {
//     $user = User::find($userId);
//     $followers = $user->followers;
//     $followings = $user->followings;
//     return view('user.show', compact('user', 'follower' , 'followings');
//     }
//     public function editProfileDisplay(){
//         $currentUser = Auth:: User();
//         $currentUserId = $currentUser->id;
//
//         $user = new User();
//         $user = $user->find($currentUserId);
//
//         return view('editUserProfile',compact('user'));
//     }

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
  }
