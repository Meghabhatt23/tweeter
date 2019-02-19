

@extends('layouts.landing-layout')




<meta name="viewport" content="width=device-width, initial-scale=1.0">

<div class="row" style="width:100%;">

    <div class="col-sm-6 home-page">

        <div class="col-offset-md-3" style="font-size: 25px; color:#fff; font-weight:bold; float: left; margin-left:100px; margin-top:100px;">
            <p>Follow your interests.</p>
            <p>Hear what people are talking about.</p>
            <p>Join the conversation.</p>
        </div>
    </div>



    <div class="col-sm-6 home-page-right">

        <div class="col-md-3">
            <img src="images/tweeter-logo.png" alt="logo" title="logo/">
        </div>

        <div class="col-xs-6">

            <form method="get" action="login">
                <button class="btn btn-round">Login</button>
            </form>
        </div>

        <h1>See what’s happening in the world right now</h1>

        <br/>

        <p style="font-size:25px; color:#4D4D58; font-weight:bold; line-height:40px; margin-bottom:2px;">Join Tweeter today</p>

        <br />

        <form method="get" action="login">
            <button class="btn btn-white btn-full-width">Login</button>
        </form>

        <form method="get" action="register">
            <button class="btn btn-white btn-full-width">Signup</button>
        </form>

    </div>




</div>
