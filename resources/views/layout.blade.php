
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
<div class="StreamsFooter StreamsFooter--fixed">
    <ul class="StreamsFooter-list u-cf">
        <li class="StreamsFooter-item"><a href="" rel="noopener">About</a></li>
        <li class="StreamsFooter-item"><a href="" rel="noopener">Help Center</a></li>
        <li class="StreamsFooter-item"><a href="" rel="noopener">Blog</a></li>
        <li class="StreamsFooter-item"><a href="" rel="noopener">Status</a></li>
        <li class="StreamsFooter-item"><a href="" rel="noopener">Jobs</a></li>
        <li class="StreamsFooter-item"><a href="Terms" rel="noopener">Terms</a></li>
        <li class="StreamsFooter-item"><a href="" rel="noopener">Privacy Policy</a></li>
        <li class="StreamsFooter-item"><a href="" rel="noopener">Cookies</a></li>
        <li class="StreamsFooter-item"><a href="" rel="noopener">Ads info</a></li>
        <li class="StreamsFooter-item"><a href="" rel="noopener">Brand</a></li>
        <li class="StreamsFooter-item"><a href="" rel="noopener">Apps</a></li>
        <li class="StreamsFooter-item"><a href="" rel="noopener">Advertise</a></li>
        <li class="StreamsFooter-item"><a href="" rel="noopener">Marketing</a></li>
        <li class="StreamsFooter-item"><a href="" rel="noopener">Businesses</a></li>
        <li class="StreamsFooter-item"><a href="" rel="noopener">Developers</a></li>
        <li class="StreamsFooter-item"><a href="profiles" rel="noopener">Directory</a></li>
        <li class="StreamsFooter-item"><a href="" rel="noopener">Settings</a></li>
        <li class="StreamsFooter-item StreamsFooter-copyright">&copy; 2019 Twitter</li>
    </ul>
</div>
