<?php
$name = $_POST['name'];
$email = $_POST['email'];
$check = $_POST['check'];
$message = $_POST['message'];
$formcontent=" From: $name \n Message: $message";
$recipient = "nick@nkgroup.co.za";
$subject = "New message for NK Group";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>NK Group</title>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">

  </head>

  <body data-spy="scroll" data-target="#navbar-main">
  	<div section="wrapper" id="wrapper">

  	<!--navbar starts here-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" role="navigation" id="navbar-main">
      <a class="navbar-brand" href="index.html">NK Group <small>Founded in 1990</small></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-content" aria-controls="navbar-content" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button> <!-- end button -->

      <div class="collapse navbar-collapse" id="navbar-content">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.html"><span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="forextrading.html">Forex Trading</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="brokerage.html">Brokerage</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://www.emsysindia.com/">IT</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="health.html">Health</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.html">Contact us</a>
          </li>
        </ul>
      </div>
    </nav> <!-- end nav container -->

    <!-- home content start here -->
    <section class="thank-you">

      <div id="thank-you-hero">
        <img src="img/thankyou.jpg" alt="Thank you" class="img-fluid">
      </div> <!-- end contact image -->

      <div class="main-thankyou">
      <p><b>Thank you <?php if(isset($_REQUEST['name'])){print stripslashes($_REQUEST['name']);} ?></b>
      <br>Your message has been sent</p>
      <p><a href="index.html">Click here to continue</a></p>
      </div>
    </section>

    <!-- Footer section -->
    <footer class="footer-section">
      <div class="footer-copyright">
        <small>&copy; NK Group 2019</small>
      </div> <!-- end footer-copyright -->

      <div class="footer-terms">
      	<a class="terms" href="terms-and-conditions.html"><small>Terms and Conditions</small></a>
        <a class="disclaimer" href="disclaimer.html"><small>Disclaimer</small></a>
      </div> <!-- end footer-terms -->
    </footer> <!-- end footer -->
  </div> <!-- end wrapper -->

    <!-- ============================= -->
    <!-- All your JavaScript comes now -->
    <!-- ============================= -->

    <!-- Bootstrap core JS -->
    <!-- Can place script tags with JavaScript files here -->

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

  </body>
</html>
