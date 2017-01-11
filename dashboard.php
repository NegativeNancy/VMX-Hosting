
<?php

session_start();

if (isset($_SESSION["login"]) && $_SESSION["login"] == true){

include('head.php');
include('nav-bar.php');


$gebruiker = $_SESSION['naam'];
echo "Welkom $gebruiker in het Dashboard.";



}else{


    echo '<h1>You are not an authorised user</h1>';
    echo '<h2>Please sign in on the <a href="index.php">Homepage</a></h2>';

}
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

<!-- Start of Menu
<nav class="navbar navbar-default">
  <div class="container">
    // Brand and toggle get grouped for better mobile display
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.html">VMX Hosting</a>
    </div>

    // Collect the nav links, forms, and other content for toggling
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="index.html">Home</a></li>
        <li><a href="about.html">About</a></li>
        <li><a href="contact.html">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="dashboard.html">Dashboard</a></li>
        <li><a href="create.html">Create VM</a></li>
        <li><a href="index.html">Log Out <i class="fa fa-door" aria-hidden="true"></i></a></li>
      </ul>
    </div>// /.navbar-collapse
  </div> // /.container-fluid
</nav>
// End of Menu -->

<div class="content1">
  <div class="row">
    <div class="col-lg-2"></div>
    <div class="col-lg-8">
      <h2>Your Virtual Machines</h2>
      <div class="row">
        <div class="col-md-3">
          <h3>VM 1</h3>

        </div>
        <div class="col-md-3">
          <h3>VM 2</h3>
        </div>
        <div class="col-md-3">
          <h3>VM 3</h3>
        </div>
        <div class="col-md-3">
          <h3>VM 4</h3>
        </div>
      </div>
    </div>
  </div>
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

<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>