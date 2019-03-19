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

        return view('user', compact('user'));

    }













    public function store()
	{
        $input = array_add(Input::get(), 'userId', Auth::id());
        $this->execute(FollowUserCommand::class, $input);
        Flash::success('You are now following this user.');
        return Redirect::back();
	}
    /**
     * Unfollow a user.
     *
     * @param $userIdToUnfollow
     * @internal param int $id
     * @return Response
     */
	public function destroy($userIdToUnfollow)
	{
        $input = array_add(Input::get(), 'userId', Auth::id());
        $this->execute(UnfollowUserCommand::class, $input);
        Flash::success('You have now unfollowed this user.');
        return Redirect::back();
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
  }
