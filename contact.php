
<?php
session_start();
?>

<html>
<head>
	<title>Contact us</title>
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="vmx.css">
  <script src="https://use.fontawesome.com/f288586ec5.js"></script>
</head>
<body>
	//NAV
	<?php include('nav-bar.php') ?>

<!-- Start of Menu -->
<nav class="navbar navbar-default">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.html">VMX Hosting</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="index.html">Home</a></li>
        <li><a href="about.html">About</a></li>
        <li class="active"><a href="contact.html">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="signup.html">Sign Up <i class="fa fa-user-plus" aria-hidden="true"></i></a></li>
        <li><a href="login.html">Login <i class="fa fa-user" aria-hidden="true"></i></a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<!-- End of Menu -->

<div class="container bgim-1">
  <div class="row">
    <div class="col-lg-5"></div>
    <div class="col-lg-2">
      <div id="mapHeader">
        <h3>Where we are</h3>
      </div>
    </div>
    <div id="map"></div>
    <script>
      function initMap() {
        var hva = {lat: 52.359215 , lng: 4.909794};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 16,
          center: hva
        });
        var marker = new google.maps.Marker({
          position: hva,
          map: map
        });
      }
    </script>
  </div>
</div>


//ADD CONTACT.
<div class="container">
            <h1>Contact</h1>
<form action="smtp.php" class="well form-horizontal" method="POST">

<div class="form-group">
                    <label class="col-md-5 control-label">Naam:</label>
                    <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input type="text" class="form-control" id="Naam" name="contact_form_naam" required>
                </div>
                    </div>


    <label class="col-md-5 control-label">Email:</label>
                    <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                    <input type="text" class="form-control" id="email" name="contact_form_email" required>
                </div>
                    </div>


    <label class="col-md-5 control-label">Phone:</label>
                    <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
                    <input type="text" class="form-control" id="telefoon" name="contact_form_telefoon" required>
                </div>
                    </div>


<label class="col-md-5 control-label">Subject:</label>
                    <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"></span>
                    <input type="text" class="form-control" id="onderwerp" name="contact_form_onderwerp" required>
                </div>
                    </div>


<label class="col-md-5 control-label">Comment:</label>
                    <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">
                                <span class="input-group-addon"></span>
                <textarea class="form-control" id="exampleTextarea" rows="4" name="contact_form_text"></textarea>

                </div>
                    </div>

  <div class="form-group">
                            <div class="col-md-4 inputGroupContainer">
                            <div class="input-group">

                                <button type="submit" class="btn btn-primary" name="submit" value="Submit">Submit</button>
                            </div>
                        </div>
                        </div>


</div>
</form>
</div>
<!-- Start of Footer -->
<div class="footer">
  <div class="footerContent">
    <div class="container">
      <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-2 col-sm-3">
          <h3>VMX Hosting</h3>
          <ul>
            <li><a href="#">About us</a></li>
            <li><a href="#">About us 2</a></li>
          </ul>
        </div>
        <div class="col-md-2 col-sm-3">
          <h3>VMX Hosting</h3>
          <ul>
            <li><a href="#">About us</a></li>
            <li><a href="#">About us 2</a></li>
          </ul>
        </div>
        <div class="col-md-2 col-sm-3">
          <h3>VMX Hosting</h3>
          <ul>
            <li><a href="#">About us</a></li>
            <li><a href="#">About us 2</a></li>
          </ul>
        </div>
        <div class="col-md-2 col-sm-3">
          <h3>VMX Hosting</h3>
          <ul>
            <li><a href="#">About us</a></li>
            <li><a href="#">About us 2</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End of Footer -->

<script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDt67W5eE2BoAi-c1_Qe-5AcBTJbpA0lT8&callback=initMap">
</script>
<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>