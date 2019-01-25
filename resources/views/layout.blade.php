
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Tweeter</title>
        <link rel="stylesheet" type="text/css" href="{{URL::asset('../css/tweeter.css')}}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.6.3/css/all.css' integrity='sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/' crossorigin='anonymous'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>

    <body>
        @yield('pages-content')
        <div class="split left">
            <div class="centered">
                <div class="left-side">
            <i class="fa fa-search" aria-hidden="true"></i>
                <p>Follow your interests.</p>
            <i class="fa fa-user-plus" style="font-size:30px;color:whitr"></i>
                <p>Hear what people are talking about</p>
            <i style='font-size:24px' class='far'>&#xf075;</i>
                <p>Join the conversation.</p>
                </div>
            </div>
    </div>

    <div class="split right">
        <div class="centered">
      <div class="fa fa-twitter"></div>
            <h1> See what’s happening in the world right now</h1>
            <h2> Join Twitter today.</h2>
      </div>


    <div class="button">
        <a href="#">Sign up</a>
        <br>
        <a href="#">Log in</a>
    </div>

    <div class="footer">
        <p>footer</p>
    </div>

    </div>

           @include('partials.footer')

</body>
</html>
