@extends('layouts.app')

@section('isactivepage')
    active

@endsection

@section('content')

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!------ Include the above in your HEAD tag ---------->

    <div class="topnav">
        <a class="active" href="home">Home</a>
        <a href="#contact">Moments</a>
        <a href="#contact"> Notifications</a>
        <a href="#contact">Message</a>
        <img class="twtlogo" src="images/bird.png"  alt="logo">


    </div>

    <div class="container-fluid gedf-wrapper">
        <div class="row">


            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <div class="mr-2" style="background-color: #1da1f2; color:white;">
                            <img class="rounded-circle" width="70" src="images/profile.png" alt="">
                        </div>
                        <div class="h5">
                            @MeghaBhatt
                        </div>
                        <div class="h7" style="font-weight:bold;">
                            Believe in youself..!!
                        </div>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="h6 text-muted">Followers</div>
                            <div class="h5">5.2342</div>
                        </li>
                        <li class="list-group-item">
                            <div class="h6 text-muted">Following</div>
                            <div class="h5">6758</div>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-md-6 gedf-main">


                <div class="tab-content" id="myTabContent">
                    <form name="tweet-form" method="post" action="tweet">
                        @csrf


                        <textarea name="tweet" class="form-control" placeholder="what's happening?"></textarea>

                        <br />
                        {{-- <input type="hidden" name="tweet_id" value="{{ $tweet->id }}" />  --}}
                        <div class="align-right">
                            <button class="btn btn-twitter btn align-right" style="background-color: #1da1f2; color:white;">Tweet</button>

                        </div>
                    </form>
                    <?php
                    if(isset($tweets) && ($tweets!==null)){
                        ?>
                        @include('partials.showtweets')
                        <?php
                    }
                    else{
                        ?>
                        <?php } ?>
                    </div>

                </div>

                <div class="col-md-3">
                    <h4>People you may follow</h4>
                    <div class="card gedf-card">
                        <div class="card-body">
                            <div class="mr-2">
                                <img class="rounded-circle" width=100 src="images/mosa.png" alt="">
                            </div>


                                <a href="mosa-profile" class="card-link">Mosa</a><br />
                                Instructor
                            <p class="card-text"></p>
                      <a href="/user-follow @php{{$user->id }}@endphp"> Follow </a>
                      <a href="/user-unfollow @php{{$user->id }}@endphp"> Unfollow </a>
                        </div>
                    </div>

                    <div class="card gedf-card">
                        <div class="card-body">
                            <div class="mr-2">
                                <img class="rounded-circle" width=100 src="images/bushra.png" alt="">
                            </div>
                            <a href="bushra-profile" class="card-link">Bushra </a><br />
                            Web- Designer
                            <p class="card-text"></p>
                            <button type="submit" class="btn btn-follow" style="background-color: #1da1f2; color:white;">Follow</button>
                        </div>
                    </div>

                    <div class="card gedf-card">
                        <div class="card-body">
                            <div class="mr-2">
                                <img class="rounded-circle" width=100 src="images/brittany.png" alt="">
                            </div>
                            <a href="brittany-profile" class="card-link">Brittany</a><br />
                            Back-end Developer
                            <p class="card-text"></p>
                            <button type="submit" class="btn btn-follow" style="background-color: #1da1f2; color:white;">Follow</button>
                        </div>
                    </div>

                    <div class="card gedf-card">
                        <div class="card-body">
                            <div class="mr-2">
                                <img class="rounded-circle" width=100 src="images/rachel.png" alt="">
                            </div>
                            <a href="rachel-profile" class="card-link">Rachel</a><br />
                            Frontend Developer
                            <p class="card-text"></p>
                            <button type="submit" class="btn btn-follow" style="background-color: #1da1f2; color:white;">Follow</button>

                        </div>
                    </div>

                    <div class="card gedf-card">
                        <div class="card-body">
                            <div class="mr-2">
                                <img class="rounded-circle" width=100 src="images/jordon.png" alt="">
                            </div>
                            <a href="jordan-profile" class="card-link">Jordan</a><br />
                            Frontend Developer
                            <p class="card-text"></p>
                            <button type="submit" class="btn btn-follow" style="background-color: #1da1f2; color:white;">Follow</button>
                        </div>
                    </div>
                </div>


            </div>

        </div>

    @endsection
