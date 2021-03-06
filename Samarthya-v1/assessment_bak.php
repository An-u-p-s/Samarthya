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
      <div id="navbar" class="navbar-collapse collapse">
         <ul class="nav navbar-nav">
                <li class="active"><a href="user-landing.php">Home</a></li>
                <?php   if($_SESSION[constant("SESSION_USER_USERNAME")]=='Administrator') { ?>
                <li><a href="dashboard.php">Dashboard</a></li>
                <?php } ?>
                <li><a href="previous-test-results.php">Previous Test Results</a></li>
                <li><a href="visited-courses.php">Visit Courses</a></li>

                <?php   if($_SESSION[constant("SESSION_USER_USERNAME")]=='Administrator') { ?>
                <li><a href="visited-courses.php">Manage Courses</a></li>
                <li><a href="visited-courses.php">Manage Online Tests</a></li>
                <?php } ?>
         </ul>
         <ul class="nav navbar-nav navbar-right right-margin">
         <li class="user-info">Welcome  <span class="user-name">B. Vinod</span></li>
         <li><a href="#">Logout</a></li>
            <li class="active dropdown"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false"><span class="icon-cog"></span>Settings<span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
               <li><a href="#">Profile</a></li>
            </ul>
            </li>
         </ul>
      </div>
   </div>
</nav>

<!--   ---------------------- End  Navigation -----------------------    -->


<!--   ---------------------- Start Home Page About Content -----------------------    -->
<br/>
<div class="container">
<div class="col-xs-12">
<h3 class="featurette-heading">COURSE-1:<span class="text-muted"> ASSESSMENT</span><div class="time-left pull-right">Time Left: <spna class="text-muted">00:00 Hrs</span></div></h3>
      <hr class="featurette-divider">
</div>
</div>
<div class="container">
<div class="col-xs-12">
   <div class="row featurette">
      <div class="col-md-8">
    <div class="questions-count"><span class="text-muted">Q1:</span></div><div class="questions-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s?</div>
    <form role="form" name="quizform" action="quiztest.asp?qtest=HTML" method="post">
    <div class="multiple-choice">
	<div class="radio">
       <label><input type="radio" name="quiz" id="1" value="1">Simply dummy text</label>
    </div>
    <div class="radio">
       <label><input type="radio" name="quiz" id="2" value="2">Simply dummy text</label>
    </div>
    <div class="radio">
       <label><input type="radio" name="quiz" id="3" value="3">Simply dummy text</label>
    </div>
    </div>
	<br>
    <input type="submit" class="btn btn-default" value=" Previous ">
	<input type="submit" class="btn btn-default" value=" Next ">
    <input type="submit" class="btn btn-default" value=" Submit ">	
	</form>
    <br/>
      </div>
      <div class="col-md-4"><img class="featurette-image img-responsive center-block" src="images/post-test-img.jpg" alt="Post Test Image"></div>
   </div>
   </div>
</div>
<!--   ---------------------- Start Details Page video Content -----------------------    -->


    
    <!--   ---------------------- End Details Page video Content -----------------------    -->
    
    <!--   ---------------------- Start Footer Page Content -----------------------    -->
    
    <div class="container">
       <hr class="featurette-divider footerdivider">
       <div class="col-xs-12 col-md-7">
       <ul class="nav navbar-nav footer-menu">
          <li class="active"><a href="user-details.php">Home</a></li>
          <li>|</li>
          <li class="active"><a href="user-details.php">Courses</a></li>
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