<title>Mosa's Profile</title>
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" href="{{ URL::asset('css/profile.css')}}" rel="stylesheet">
<link rel="stylesheet" href="{{ URL::asset('css/tweeter.css')}}" rel="stylesheet">
<!------ Include the above in your HEAD tag ---------->


<div class="topnav">
   <a href="home">Home</a>
   <a href="#contact">Moments</a>
   <a href="#contact"> Notifications</a>
   <a href="#contact">Message</a>
   <img class="twtlogo" src="images/bird.png"  alt="logo">
      <div class="search-container">
         <form action="/action_page.php">
            <input type="text" placeholder="Search Tweeter.." name="search">
            <button type="submit"><i class="fa fa-search"></i></button>
         </form>
    </div>
</div>

<!------ Include the above in your HEAD tag ---------->


<div class="container">
    <div class="fb-profile">
         <img align="left" class="fb-image-lg" src="images/mosacover1.png" alt="Profile image example"/>
         <img align="left" class="fb-image-profile thumbnail" src="images/mosa.png" alt="Profile image example"/>
            <div class="fb-profile-text">
                <h1>Mosa Adekundle</h1>
                <p>Instructor at Innotech Collage</p>
            </div>
     </div>

</div>

<?php

$username = "";
$isFollowing = False;

if (isset($_GET['username'])) {
        if (DB::query('SELECT username FROM users WHERE username=:username', array(':username'=>$_GET['username']))) {

                $username = DB::query('SELECT username FROM users WHERE username=:username', array(':username'=>$_GET['username']))[0]['username'];
                $userid = DB::query('SELECT id FROM users WHERE username=:username', array(':username'=>$_GET['username']))[0]['id'];
                $followerid = Login::isLoggedIn();

                if (isset($_POST['follow'])) {
                        if ($userid != $followerid) {
                                if (!DB::query('SELECT follower_id FROM followers WHERE user_id=:userid', array(':userid'=>$userid))) {
                                        DB::query('INSERT INTO followers VALUES (\'\', :userid, :followerid)', array(':userid'=>$userid, ':followerid'=>$followerid));
                                } else {
                                        echo 'Already following!';
                                }
                                $isFollowing = True;
                        }
                }
                if (isset($_POST['unfollow'])) {
                        if ($userid != $followerid) {
                                if (DB::query('SELECT follower_id FROM followers WHERE user_id=:userid', array(':userid'=>$userid))) {
                                        DB::query('DELETE FROM followers WHERE user_id=:userid AND follower_id=:followerid', array(':userid'=>$userid, ':followerid'=>$followerid));
                                }
                                $isFollowing = False;
                        }
                }
                if (DB::query('SELECT follower_id FROM followers WHERE user_id=:userid', array(':userid'=>$userid))) {
                        //echo 'Already following!';
                        $isFollowing = True;
                }
        } else {
                die('User not found!');
        }
}
?>
<h1><?php echo $username; ?>'s Profile</h1>
<form action="mosa-profile?username=<?php echo $username; ?>" method="post">
        <?php
        if ($userid != $followerid) {
                if ($isFollowing) {
                        echo '<input type="submit" name="unfollow" value="Unfollow">';
                } else {
                        echo '<input type="submit" name="follow" value="Follow">';
                }
        }
        ?>
</form>
