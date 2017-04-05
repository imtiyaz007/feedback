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
      <img src="AIMS_LOGO.jpg" height="200"><br><br>
      <div class="container">
      <div class="row">
      <div class="col-md-4 col-md-offset-4">
      <div class="panel panel-default">
      <div class="panel-heading"><h4>Enter OTP below</h4></div>
      <div class="panel-body">
      <form method="POST" action="/confirm">
      {{ csrf_field() }}
        <input type="hidden" name="phNo" value="{{ session('phoneNo') }}" class="form-control">
        <input type="number" placeholder="OTP" name="otp" class="form-control"><br>
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