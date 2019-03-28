<!DOCTYPE html>
<html>
<head>
<title>Tweeter Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="{{ URL::asset('css/marketing.css')}}" rel="stylesheet">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<style>

   body {
       margin: 0;
       padding: 0;
}
#header {
  padding: 47px;
  text-align: center;
background:url(https://media.giphy.com/media/jut7ta6lQwRkQ/giphy.gif) 100% 100% repeat;
  font-size: 47px;
  margin-top: 0px;
  font-family: sans-serif;
  color:#ce3d3d;
  font-weight: bold;
}
h1{
    font-weight: 300;
   font-size: 4em;
   color: #fff;
   background-color: #071d36;
   padding: 300px 0 50px 100px;
   margin-bottom: 150px;
}
           p {

width: 60%;
               font-size: 1.4em;
               color: #555;
               font-weight: 300;
           }
img{
    width: 100px;
    height: 100px;
    text-transform: capitalize;
    border-radius: 20px;
}
</style>

<body style="background-color: #bfc1326e;">
    <div id="header"> </div>
     {{-- <h1 class="fade-scroll"></h1> --}}

  <div class="col-sm-4">
<p><img src="https://static.wixstatic.com/media/ec2574_a3ed96a05809472f960ae1eee284d0e0~mv2.gif">
    <b> Interesting People:</b>We all want to surround ourselves with interesting people, don’t we? Sadly not all of us get the chance to do that in the real world. You’re tied to your family by blood, and while other people are your friends for a reason (meaning you should get on with them extremely well) that doesn’t mean they’ll have anything particularly interesting to say. </p>

<p><img src="https://media.giphy.com/media/c793Kq1vwkss8/giphy.gif">
    <b>Breaking News:</b>Twitter has proved its worth in recent years as a platform for breaking news. The simplicity of the site means that the first think many people at the scene of a developing news story do is to tweet about it. A few retweets later and the news has spread. This has led to Twitter beating traditional news outlets to a story on many occasions.</p>

<p><img src="https://cdn.dribbble.com/users/1555712/screenshots/3873866/hashtag.gif">
    <b>Tracking Trends:</b>As well as breaking news Twitter is a fine resource for tracking online trends. If a YouTube video is going viral then it will be getting shared on Twitter. If a new meme is spreading like wildfire then it will appear on Twitter. If a celebrity has done something newsworthy but has managed to avoid the news leaking to the mainstream press it will likely appear on Twitter.<p>

<p ><img src="http://www.pardot.com/buyer-journey/assets/css/img/img-header.gif">
    <b>Company Contact:</b>Twitter represents one of the quickest and easiest ways to contact a company to get instant customer service. The response you receive may not be as fine-tuned as you would get by speaking to a person on the phone, but at least you won’t be kept on hold for hours before you get that attention.</p>

<p><img src="https://media3.giphy.com/media/kb84eUz0b5J8k/giphy.gif">
    <b>Celebrity Access:</b>While those who are really keen on certain famous people have always found ways to talk to them, Twitter makes it very simple indeed. If a celebrity is on Twitter then anyone else on Twitter can send a message to them. They may even respond. Indeed, I’ve communicated with several celebrities on Twitter in this way.</p>

<p ><img src="https://media.giphy.com/media/3oEduXdm2gjnrsJBOo/giphy.gif">
    <b>Creative Outlet:</b>You can start a Twitter account about anything, as long as you abide by the rules set forth by the company. You may want to parody a famous person, write short poetry, recount witty anecdotes, or tell lame jokes. Twitter gives you a certain sense of anonymity to plumb the depths of your creativity.</p>

<p><img src="http://www.animatedimages.org/data/media/630/animated-sms-and-text-message-image-0033.gif">
    <b>140 Characters:</b>You only have 140 characters to say what you want to say in a tweet (excluding URLs). This means people are forced to get to the point quickly, paring the facts down to their core essence. Sure, there may be a link to a longer news story, but it’s surprising how much information you can consume purely from reading tweets.</p>

</div>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
<script src="https://unpkg.com/scrollreveal"></script>
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.9"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script type="text/javascript" src="{{ URL::asset('js/myjs.js')}}"></script>
</body>
</html>
