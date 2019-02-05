
@extends('layouts.landing-layout')

@section('content')

<div class="row">

    <div class="col-sm-6 home-page">

        <div class="col-offset-md-3">
            <h2>Follow your inteerst</h2>
            <h2>Hear what people are talking about</h2>
            <h2>join the Conversatation</h2>
        </div>
    </div>



        <div class="col-sm-6 home-page-right">

            <div class="col-md-3">
                <img src="images/tweeter-logo.png" alt="logo" title="logo/">
            </div>

            <div class="col-md-9">

                <form method="get" action="login">
                    <button class="btn btn-round">Login</button>
                </form>
            </div>

                <h1>What's happening in the world right now</h1>
                    <br/>
                <h3>Join Tweeter today</h3>
                    <br />

                    <form method="get" action="login">
                        <button class="btn btn-white btn-full-width">Login</button>
                    </form>

                    <form method="get" action="register">
                        <button class="btn btn-white btn-full-width">Signup</button>
                    </form>

            </div>
</div>

<div class="panel-footer">
<a href="posts">
<span class="glyphicon glyphicon-user"></span>
Find people you know
</a>
</div>
</div>
<div class="well well-sm">
<ul class="list-inline">
<li>© 2019 Twitter</li>
<li><a href="#">About</a></li>
<li><a href="#">Help</a></li>
<li><a href="#">Terms</a></li>
<li><a href="#">Privacy</a></li>
<li><a href="#">Cookies</a></li>
<li><a href="#">Ads info</a></li>
<li><a href="#">Brand</a></li>
<li><a href="#">Blog</a></li>
<li><a href="#">Status</a></li>
<li><a href="#">Apps</a></li>
<li><a href="#">Jobs</a></li>
<li><a href="#">Advertise</a></li>
<li><a href="#">Businesses</a></li>
<li><a href="#">Media</a></li>
<li><a href="#">Developers</a></li>
</ul>
</div>
</div>
</div>
</div>
