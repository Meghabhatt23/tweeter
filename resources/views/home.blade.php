@extends('layouts.app')

@section('isactivepage')
    active

@endsection

@section('content')

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->



<nav class="navbar navbar-light bg-white">
        <a href="#" class="navbar-brand">Tweeter</a>

        <form class="form-inline">
            <div class="input-group">
                <input type="text" class="form-control" aria-label="Recipient's username" aria-describedby="button-addon2">
                <div class="input-group-append">
                    <button class="btn btn-outline-primary" type="button" id="button-addon2">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </div>

        </form>

    </nav>



    <div class="container-fluid gedf-wrapper">
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <div class="mr-2">
                            <img class="rounded-circle" width="70" src="https://picsum.photos/50/50" alt="">
                        </div>
                        <div class="h5">@MeghaBhatt</div>

                        <div class="h7">Believe in youself.

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

                <!--- \\\\\\\Post-->
                <div class="card gedf-card">

                    <div class="card-body">
                        <div class="tab-content" id="myTabContent">

                            <div class="tab-pane fade show active" id="posts" role="tabpanel" aria-labelledby="posts-tab">
                                <form name="tweet-form" method="post" action="tweet">
                                    @csrf

                                    <textarea name="tweet" class="form-control" placeholder="what's happening?"></textarea>
                                    <br />
                                    {{-- <input type="hidden" name="tweet_id" value="{{ $tweet->id }}" />  --}}
                                    <div class="align-right">
                                        <button class="btn btn-twitter btn align-right">Tweet</button>
                                    </div>
                                </form>
                                <?php
                                    if(isset($tweets) && ($tweets!==null)){
                                ?>
                                @include('partials.tweetsdisplay')
                                <?php
                                }
                                else{
                                 ?>
                                 <?php } ?>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>




    @endsection
