<!DOCTYPE html>
<html>
<head>
<title>Tweeter Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="{{ URL::asset('css/profile.css')}}" rel="stylesheet">


</head>
<body>

    <div id="typed-strings">
        <p>    Twitter was originally an internal service for employees of Odeo but entered into the public domain in July 2006. By 2007 early adopters and tech bloggers had started to use Twitter, and the service has grown every year since then. In 2009 it benefited from the Oprah Effect, hitting </p>
    </div>
    <span id="typed"></span>



    <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>


  <script src="https://unpkg.com/scrollreveal"></script>


<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.9"></script>




  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  <script type="text/javascript" src="{{ URL::asset('js/myjs.js')}}"></script>
  <script>
    var typed = new Typed('#typed', {
      stringsElement: '#typed-strings'
    });
  </script>

</body>
</html>
