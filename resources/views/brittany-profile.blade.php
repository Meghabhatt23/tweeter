<title>Brittany's profile</title>
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

</div>

<!------ Include the above in your HEAD tag ---------->


<div class="container">
    <div class="fb-profile">
         <img align="left" class="fb-image-lg" src="images/brittanycover.png" alt="Profile image example"/ style="margin-top:0;">
         <img align="left" class="fb-image-profile thumbnail" src="images/brittany.png" alt="Profile image example"/>
            <div class="fb-profile-text">
                <h1>Brittany </h1>
                <p>Student at Innotech Collage</p>
            </div>
     </div>
        <div class="profile-userbuttons">
            <div class="twPc-button">
                    <!-- Twitter Button | you can get from: https://about.twitter.com/tr/resources/buttons#follow -->
                    <a href="https://twitter.com/mertskaplan" class="twitter-follow-button" data-show-count="false" data-size="large" data-show-screen-name="false" data-dnt="true">Follow @mertskaplan</a>
                    {{-- <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script> --}}
                    <!-- Twitter Button -->
        		</div>
			<button type="button" class="btn btn-danger btn-sm">Message</button>
    	</div>
</div>
