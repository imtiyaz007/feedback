<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>AIMS Institute</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/rating.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <br><br>
    <center>
      <img src="AIMS_LOGO.jpg" height="100"><br><br>
      <div class="container">
      <div class="row">
      <div class="col-md-4 col-md-offset-4">
      <div class="panel panel-default">
      <div class="panel-heading"><h4>Kindly fill in the form below</h4></div>
      <div class="panel-body">
      <form method="POST" action="/giveFeedback">
      {{ csrf_field() }}
        <input type="hidden" name="phNo" value="{{ session('phoneNo') }}" class="form-control">
        <select class="form-control" name="title">
          <option value="Accounts">Accounts</option>
          <option value="Canteen">Canteen</option>
          <option value="Faculty">Faculty</option>
          <option value="Front Office">Front Office</option>
        </select>
        <br>
        <input type="text" placeholder="Enter your name" name="name" class="form-control"><br>
        <textarea name="content" placeholder="Feel free to express your feelings" class="form-control" rows="10"></textarea>
        <br>
        <div class="rating-wrapper">Rating: 
        <input value="5" type="radio" class="rating-input" id="rating-input-1-5" name="rating-input-1"/>
        <label for="rating-input-1-5" class="rating-star"></label>
        <input value= "4"type="radio" class="rating-input" id="rating-input-1-4" name="rating-input-1"/>
        <label for="rating-input-1-4" class="rating-star"></label>
        <input value= "3"type="radio" class="rating-input" id="rating-input-1-3" name="rating-input-1"/>
        <label for="rating-input-1-3" class="rating-star"></label>
        <input value= "2"type="radio" class="rating-input" id="rating-input-1-2" name="rating-input-1"/>
        <label for="rating-input-1-2" class="rating-star"></label>
        <input value= "1"type="radio" class="rating-input" id="rating-input-1-1" name="rating-input-1"/>
        <label for="rating-input-1-1" class="rating-star"></label>
        </div>
        <br>
        <input type="submit" value="Submit" class="btn btn-success form-control">
      </form>
      </div>
      </div>
      </div>
      </div>
      </div>
    </center>
    @if(session('Error'))
      <div class="alert alert-warning col-md-4 col-md-offset-4">{{ session('Error') }}
    @endif
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>