

@extends('layouts.landing-layout')






<div class="row" style="width:100%;">

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

            <div class="col-md-6">

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


@include('partials.footer')

</div>
