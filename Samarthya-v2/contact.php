<?php session_start();
 require 'php/define.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <link rel="icon" href="">
    <title>::Samarthya::Online Learning Portal for Technical Staff under MGNREGA</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
<body>
<div class="container page-wrapper">

<!--   ----------------------  Start  Header Content -----------------------    -->
<div class="container">
   <div class="col-xs-12 col-xs-6 col-md-8"><a href="#"><img class="img-responsive" src="images/samarthya-logo.jpg" alt="samarthya" /></a></div>
   <div class="col-xs-12 col-xs-6 col-md-4"><img class="img-responsive center-block right-align" src="images/emblem-img.jpg" alt="Indian Emblem" /></div>
</div>
<!--   ---------------------- End  Header Content -----------------------    -->

<!--   ---------------------- Start  Navigation -----------------------    -->

<nav class="navbar navbar-default">
   <div class="container">   
      <div class="navbar-header">
         <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
         </button>
      </div>
      <!-- NAVIGATION BAR -->
            <!-- Start Navigation -->
            <?php $page='';
            include 'templates/Navigation.php';?>
            <!-- End Navigation -->
   </div>
</nav>

<!--   ---------------------- End  Navigation -----------------------    -->


<!--   ---------------------- Start Home Page About Content -----------------------    -->
<br/>
<div class="container">
   <div class="col-xs-12">
      <h3 class="featurette-heading"><span class="text-muted">CONTACT US</span></h3>
</div>
      <div class="col-xs-12 col-xs-6 col-md-6">
         <p>We are here to answer any questions you may have about our samarthya experiences. Reach out to us and we&lsquo;ll respond as soon as we can.</p><br/>
          <div class="contact-form">
      <form class="form-signin">
        <input type="email" id="inputEmail" class="form-control" placeholder="Your Name..." required autofocus><br/>
        <input type="email" id="inputEmail" class="form-control" placeholder="Your Email Address..."><br/>
        <textarea id="textArea" class="form-control custom-control" rows="3" placeholder="Write Your Message..."></textarea><br/>        
        <button class="btn btn-default pull-right" type="submit">Post Message</button>
      </form>
      </div>
         </div>
<div class="col-xs-12 col-xs-6 col-md-1"></div>
<div class="col-xs-12 col-xs-6 col-md-5">
<div class="address-block">
<h4><span class="text-muted">ADDRESS</span></h4>
<address>
National Institute of Rural Development and Panchayati Raj<br/>
Rajendranagar,Hyderabad-500030<br/>
E-mail:<a href="mailto:cit@nird.gov.in">cit@nird.gov.in</a>/<a href="mailto:admin@nird.gov.in">admin@nird.gov.in</a><br/>
Phone: <strong>+91-40-24008526,24008439</strong><br/>
Fax:<strong>91-40-2401650</strong>
</address>
</div>
</div>

</div>
<br/>
<div class="container">
<div class="col-xs-12">
     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3809.032727676666!2d78.40270799999998!3d17.313970000000005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcbbdec76f2fdff%3A0x89c0c14e19e6f0e8!2sNational+Institute+of+Rural+Development+and+Panchayati+Raj!5e0!3m2!1sen!2sin!4v1431968820764" width="1000" height="300" frameborder="0" style="border:0"></iframe>
</div>
</div>
<!--   ---------------------- Start Details Page video Content -----------------------    -->


    
    <!--   ---------------------- End Details Page video Content -----------------------    -->
    
    <!--   ---------------------- Start Footer Page Content -----------------------    -->
    
    <div class="container">
       <hr class="featurette-divider footerdivider">
       <div class="col-xs-12 col-md-7">
       <ul class="nav navbar-nav footer-menu">
          <li class="active"><a href="index.php">Home</a></li>
          <li>|</li>
          <li class="active"><a href="courses.php">Courses</a></li>
          <li>|</li>
          <li class="active"><a href="index.php">Login</a></li>
          <li>|</li>
          <li class="active"><a href="#">Sign Up</a></li>
          <li>|</li>
          <li class="active"><a href="contact.php">Contact Us</a></li>   
       </ul>
       </div>
       <div class="col-xs-12 col-md-5">
          <ul class="nav navbar-nav social-menu">
          <li class="followus">Follow Us</li>
          <li><a href="#"><img src="images/facebook-icon.png" /></a></li>
          <li><a href="#"><img src="images/twitter-icon.png" /></a></li>
          <li><a href="#"><img src="images/pinterest-icon.png" /></a></li>
      <li><a href="#"><img src="images/flickr-icon.png" /></a></li>
      <li><a href="#"><img src="images/youtube-icon.png" /></a></li>
      </ul>
   </div>
</div>
<footer><div class="container">&copy; 2015 Copyright | ONLINE COURSES.</div></footer>

</div>

<!--   ---------------------- End Footer Page Content -----------------------    -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>