<title>Bushra's Profile</title>
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
         <img align="left" class="fb-image-lg" src="images/bushracover.png" alt="Profile image example"/>
         <img align="left" class="fb-image-profile thumbnail" src="images/bushra.png" alt="Profile image example"/>
            <div class="fb-profile-text">
                <h1>Bushara Chatta</h1>
                <p>Student at Innotech Collage</p>
            </div>
     </div>
        <div class="profile-userbuttons">
	       <button type="button" class="btn btn-success btn-sm">Follow</button>
			<button type="button" class="btn btn-danger btn-sm">Message</button>
    	</div>
</div>
