<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>

    <meta charset="utf-8">
    <title>Posts</title>
    <link rel="stylesheet" type="text/css" href="{{URL::asset('../css/tweeter.css')}}">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>

    <div class="container">
        @yield('main-content')

    </div>

    <div class="row">
        <div class="col-xs-12 col-md-6">
            <h2>Tweets</h2>
            <form method="post" action="/posts">
                @csrf
                <textarea class="form-control tweet-box"
                name="tweet" placeholder="Enter tweet here"></textarea>
                <br />
                <button class="btn btn-success btn-sm">Post</button>
            </form>
        </div>
    </div>
    <br /><br />
    @foreach($tweets as $singletweet)
        <a href="/posts/{{$singletweet->id}}">
            {{ $singletweet->tweets }}</a>
            - by {{ $singletweet->user_id }}
            <br / >

            <div class="row">
                <div class="col-md-4">
                    <form method="post" action="/posts/comment">
                        @csrf
                        <textarea class="form-control tweet-box"
                        name="comment" placeholder="comments on this tweet"></textarea>
                        <br />
                        <input type="hidden" name="user_id" value="{{$singletweet->user_id}}"/>
                        <input type="hidden" name="tweet_id" value="{{$singletweet->id}}"/>

                        <button class="btn btn-success btn-sm">Post</button>
                    </form>
                </div>
            </div>

            <br /><br /><br /><br />
        @endforeach

        @section('heading-extra')
            -welcome to Tweeter
        @endsection

        @include('partials.footer')

    </body>
    </html>
