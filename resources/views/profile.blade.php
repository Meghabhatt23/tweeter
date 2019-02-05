
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" href="{{ URL::asset('css/tweeter.css')}} ">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>


<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
<a class="navbar-brand" href="#">Navbar</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="collapsibleNavbar">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="#">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Moments</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Notification</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Message</a>
    </li>
  </ul>
</div>
</nav>

<div class="container" style="margin-top:30px">
<div class="row">
  <div class="col-sm-4">
    <h2>Megha Bhatt</h2>
    <h5>Photo of me</h5>
    <div class="fakeimg">Fake Image</div>
    <p>Some text about me in culpa qui officia deserunt mollit anim..</p>
    <h3>Some Links</h3>
    <p>Lorem ipsum dolor sit ame.</p>
    <ul class="nav nav-pills flex-column">
      <li class="nav-item">
        <a class="nav-link active" href="#">Active</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
    <hr class="d-sm-none">
  </div>
  <div class="col-sm-8">
    <h2>TITLE HEADING</h2>
    <div class="row">
        <div class="col-xs-12 col-md-6">
            <h2>Tweets</h2>
            <form method="post" action="/posts">
                @csrf
                <textarea class="form-control tweet-box"
                name="tweet" placeholder="What's happening"></textarea>
                <br />
                <button class="btn btn-success btn-sm">Post</button>
            </form>
        </div>
    </div>
    <h2>TITLE HEADING</h2>
    <h5>Title description, Sep 2, 2017</h5>
    <div class="fakeimg">Fake Image</div>
    <p>Some text..</p>
    <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
  </div>
</div>
</div>

<div class="jumbotron text-center" style="margin-bottom:0">
<p>Footer</p>
</div>
