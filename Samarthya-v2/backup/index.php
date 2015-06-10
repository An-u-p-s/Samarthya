<?php session_start(); ?>
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
    <script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
    <script type="text/javascript">
        function login()
        {
            var user=$('#login-user');
            var pwd=$('#login-pwd');
            
            //user validation
            //pwd validation
            
            //php-controller
             var result="";
                 $.ajax({type: "GET", 
                                    async: false,
                                    url: 'php/controller.php',
                                    data: { 
                                        login_user :user.val(),
                                        login_pwd : pwd.val(),
                                        action : 'loginUser'
                                    },
                                    success: function(resp)
                                    {
                                          result=resp;
                                    }
                                   });
                                   
                                   console.log("resilt :"+result);
                                   
                    alert(result);
        }
    </script>
  </head>
<body>


<!--   ----------------------  Start  Header Content -----------------------    -->
<div class="container">
   <div class="col-xs-12 col-xs-6 col-md-8"><a href="#"><img class="img-responsive" src="images/samarthya-logo.jpg" alt="samarthya" /></a></div>
   <div class="col-xs-12 col-xs-6 col-md-4"><img class="img-responsive center-block" src="images/emblem-img.jpg" alt="Indian Emblem" /></div>
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
            <li class="active"><a href="index.html">Home</a></li>
            <li><a href="#">Reports</a></li>
         </ul>
         <!--<ul class="nav navbar-nav navbar-right">
            <li><a href="#">Sign Up</a></li>
         </ul>-->
      </div>
   </div>
</nav>

<!--   ---------------------- End  Navigation -----------------------    -->

<!--   ---------------------- Start  Login Form -----------------------    -->

<!--   ---------------------- End  Login Form -----------------------    -->


<!--   ---------------------- Start Home Page Slider -----------------------    -->

<div id="myCarousel" class="carousel slide" data-ride="carousel">
<div class="courses-btn"><a href="courses.html">COURSES</a></div>
<div class="login-form col-xs-6">
<form class="form-horizontal">
    
<fieldset>
<legend class="login-txt">LOGIN</legend>
  <div class="row">
    <div class="col-sm-10">
      <div class="input-group">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                    <input type="text" id="login-user" class="form-control" placeholder="USERNAME">
                </div>
    </div>
    <div class="col-sm-10">
      <div class="input-group space">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                    <input type="password" id="login-pwd" class="form-control" placeholder="PASSWORD">
                </div>
    </div>
    <div class="col-sm-10">
      <div class="input-group space login-btn">
                    <button type="button" class="btn btn-default loginbtn" onclick="javascript:login()">Login</button>
                </div>
    </div>
    <div class="col-sm-5">
      <div class="input-group space">
         <a href="#">Sign Up</a>
      </div>
    </div>
    <div class="col-sm-5">
      <div class="input-group space login-btn">
         <a href="#">Forgot Password?</a>
      </div>
    </div>
    </div>
</fieldset>
</form>
</div>
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
        <li data-target="#myCarousel" data-slide-to="4"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="images/slider-img-01.jpg" height="430" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Enabling technical staff under<br/>MGNREGA to enhance their skill</h1>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="images/slider-img-02.jpg" height="430" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Enabling technical staff under<br/>MGNREGA to enhance their skill</h1>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="images/slider-img-03.jpg" height="430" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Enabling technical staff under<br/>MGNREGA to enhance their skill</h1>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="fourth-slide" src="images/slider-img-04.jpg" height="430" alt="Fourth slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Enabling technical staff under<br/>MGNREGA to enhance their skill</h1>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="fifth-slide" src="images/slider-img-05.jpg" height="430" alt="Fifth slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Enabling technical staff under<br/>MGNREGA to enhance their skill</h1>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>


<!--   ---------------------- End Home Page Slider -----------------------    -->

<!--   ---------------------- Start Home Page About Content -----------------------    -->
<br/>
<div class="container">
   <div class="row featurette">
      <div class="col-md-7">
         <h2 class="featurette-heading"><span class="text-muted">About</span> MGNREGA</h2>
         <p class="lead">"Mahatma Gandhi National Rural Employment Guarantee Act aims at enhancing the livelihood security of people in rural areas by guaranteeing hundred days of wage employment in a financial year to a rural household whose adult members volunteer to do unskilled manual work" &copy; 2015 NIRD Inc. All rights reserved.</p>
      </div>
      <div class="col-md-5"><img class="featurette-image img-responsive center-block" src="images/homepage-img.jpg" alt="About Image"></div>
   </div>
</div>
<!--   ---------------------- End Home Page About Content -----------------------    -->
<br/>
<br/>
<div class="container">
<div class="col-xs-12">
<div class="panel panel-default">
<table class="table table-responsiv table-bordered">
<thead>
<tr>
<th>How Many Have Taken The Test</th>
<th>How Many Registered</th>
<th>How Many Passed</th>
</tr>
</thead>
<tbody>
<tr>
<td>23</td>
<td>400</td>
<td>33</td>
</tr>
<tr class="info">
<td>Column content</td>
<td>Column content</td>
<td>Column content</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
<!--   ---------------------- Start Footer Page Content -----------------------    -->

<div class="container">
   <hr class="featurette-divider footerdivider">
   <div class="col-xs-12 col-md-7">
   <ul class="nav navbar-nav footer-menu">
      <li class="active"><a href="#">Home</a></li>
      <li>|</li>
      <li class="active"><a href="#">Courses</a></li>
      <li>|</li>
      <li class="active"><a href="#">Login</a></li>
      <li>|</li>
      <li class="active"><a href="#">Sign Up</a></li>
      <li>|</li>
      <li class="active"><a href="#">Contact Us</a></li>   
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
<!--   ---------------------- End Footer Page Content -----------------------    -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>