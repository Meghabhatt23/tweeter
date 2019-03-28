<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="{{ URL::asset('css/marketing.css')}}" rel="stylesheet">
        <title></title>
    </head>
    <body>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.css">
<div class="container">
	<div class="row heading-box">
		<h2 class="text-center">Bootstrap 4 slider with Text Animation</h2>
	</div>
</div>
<section>
    <div id="slider-animation" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#slider-animation" data-slide-to="0" class="active"></li>
    <li data-target="#slider-animation" data-slide-to="1"></li>
    <li data-target="#slider-animation" data-slide-to="2"></li>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://i.pinimg.com/originals/10/1b/bb/101bbb8a4e78d2a5d9589d60e410dac8.jpg" alt="Los Angeles">
        <div class="text-box">
            <h2 class="wow slideInRight" data-wow-duration="2s">This is Obitope text</h2>
            <p class="wow slideInLeft" data-wow-duration="2s">There is now an abundance of readable dummy texts. These are usually used when a text is required purely to fill a space. </p>
        </div>
    </div>
    <div class="carousel-item">
      <img src="http://en.ddpai.com/webcommon/images/mix3/animation/bac-2.png" alt="Chicago">
    <div class="text-box">
            <h2 class="wow slideInUp" data-wow-duration="4s" >This is samuel text</h2>
            <p class="wow fadeInDown" data-wow-duration="4s">There is now an abundance of readable dummy texts. These are usually used when a text is required purely to fill a space. </p>
        </div>
    </div>
    <div class="carousel-item">
      <img src="https://playthunee.com/assets/images/4player-bg.jpg" alt="New York">
    <div class="text-box">
            <h2 class="wow fadeInUp" data-wow-duration="4s">This is Airborne text</h2>
            <p class="wow fadeInUp" data-wow-duration="2s">There is now an abundance of readable dummy texts. These are usually used when a text is required purely to fill a space. </p>
        </div>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#slider-animation" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#slider-animation" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>

</section>


<script type="text/javascript" src="{{ URL::asset('js/myjs.js')}}"></script>

    </body>
</html>
