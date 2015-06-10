<?php session_start();
require 'php/define.php';
if(!isset($_SESSION[constant("SESSION_USER_USERNAME")]))
{
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
    <style>
        #OTP-NotValid
        {
            display:none;
        }
       #login-ErrorMsg
       {
           display:none;
           width:100%;color:#ffff00;margin-right:1%; 
       }
       #OLP-NotRegMsg
       {
           margin-top: 15%;
           margin-bottom: -10%;
           display:none;
       }
       #Signup-Message
       {
           margin-top: 13%;
       }
       #signup-Greeting
       {
           display:none;
           margin-top:14%;
       }
       #forgotPwd-Message
       {
           display:none;
       }
     </style>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
    <script type="text/javascript">
        var g_state;
        var g_phone;
        var g_regId;
        function indexOnload()
        {
            $('#boot-tab-1').addClass('active');
            viewSignupStep1();
           
        }
        function viewSignupStep1()
        {
            document.getElementById("tab-step-1").style.display='block';
            document.getElementById("tab-step-2").style.display='none';  
            document.getElementById("tab-step-3").style.display='none'; 
        }
        function viewSignupStep2()
        {
            document.getElementById("tab-step-1").style.display='none';
            document.getElementById("tab-step-2").style.display='block';  
            document.getElementById("tab-step-3").style.display='none'; 
        }
        function viewSignupStep3()
        {
            document.getElementById("tab-step-1").style.display='none';
            document.getElementById("tab-step-2").style.display='none';  
            document.getElementById("tab-step-3").style.display='block'; 
        }
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
                                    url: 'php/dac.useraccounts.php',
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
                                   
                                   console.log("result :"+result);
                
               var msgElem=document.getElementById("login-ErrorMsg");
               
                if(result==='Failed')
                {
                    msgElem.style.display='block';
                    msgElem.innerHTML="Invalid Credentials";
                }
                else if(result==='NoUser')
                {
                    msgElem.style.display='block';
                    msgElem.innerHTML="Please enter Username and Password";
                }
                else
                {
                    msgElem.style.display='none';
                    window.location.href='user-landing.php';
                }
                
                    
        }
        function RegStep1()
        {
            g_phone='';
            var state=document.getElementById("Reg-State").value;
            var phone=document.getElementById("Reg-PhneNum").value;
            var msg=document.getElementById("OLP-NotRegMsg");
            console.log("state : "+state);
            console.log("phone : "+phone);
            
            if(state.length===0 || phone.length===0)
            {
                if(state.length===0)
                {
                    msg.style.display='block';
                    msg.innerHTML='Please Select a State';
                }
                else if(phone.length===0)
                {
                    msg.style.display='block';
                    msg.innerHTML='Please Enter your phone Number';
                }
            }
            else
            {
                if(phone.length===10)
                {
                    // Set Session 
                    g_state=state;
                     g_phone=phone;
                    /*var result="";
                     $.ajax({type: "GET", 
                                    async: false,
                                    url: 'php/sessions.php',
                                    data: { 
                                        signup_state :state,
                                        signup_phone : phone,
                                        action : 'SetRegStep1'
                                    },
                                  
                                   });
                        
                     
                      console.log("session_state : "+session_state);
                      console.log("session_phone : "+session_phone);
      */
                       //   window.location.href='#step2';
                          $('#boot-tab-1').removeClass('active');
                          $('#boot-tab-2').addClass('active');
                          $('#boot-tab-3').removeClass('active');
                          
                       viewSignupStep2();
                    
                    var regId;
                     $.ajax({type: "GET", 
                                    async: false,
                                    url: 'php/dac.useraccounts.php',
                                    data: { 
                                        signup_state :state,
                                        sendPhone : phone,
                                        action : 'SendMessage'
                                    },
                                  success: function(resp)
                                    {
                                          regId=resp;
                                    }
                                   });
                        console.log("Registration Id : "+regId);
                        g_regId=regId;
                }
                else
                {
                     msg.style.display='block';
                     msg.innerHTML='Please Enter a valid Phone Nnumber';
                }
               
               // msg.innerHTML="<strong>You cannot register into OLP unless you are registered in MGNREGA staff database</strong>";
            }
            
            RegStep2ClearFields();
        }
        
        function RegStep2ClearFields()
        {
            document.getElementById("otp-Number").value='';
            document.getElementById("OTP-NotValid").style.display='none';
        }
        
        function RegStep2()
        {
            var otpNumber=document.getElementById("otp-Number").value;
            var regId=g_regId;
            var otpview=document.getElementById("OTP-NotValid");
            
            if(otpNumber.length>0)
            {
                var result="";
                // Check for OTPCode in Backend
                $.ajax({type: "GET", 
                                    async: false,
                                    url: 'php/dac.useraccounts.php',
                                    data: { 
                                        otpNumber :otpNumber,
                                        regId : regId,
                                        action : 'validateOTP'
                                    },
                                  success: function(resp)
                                    {
                                          result=resp;
                                    }
                                   });
                        console.log("Res : "+result);
                  if(result==='Exist')
                  {
                      $('#boot-tab-1').removeClass('active');
                      $('#boot-tab-2').removeClass('active');
                      $('#boot-tab-3').addClass('active');
                      
                      viewSignupStep3();
                  }
                  else
                  {
                      otpview.style.display='block';
                      otpview.innerHTML="<strong>The OTP you have entered doesn't match. Please enter valid OTP to enter into Signup process</strong>";
                  }
                      
            }
            else
            {
                otpview.style.display='block';
                otpview.innerHTML='<strong>Please enter OTP to enter into Signup process</strong>';
            }
            console.log("otpNumber : "+otpNumber);
            console.log("regId : "+regId);
            
            
            //
            console.log("PhoneNumber : "+ document.getElementById("Reg-PhneNum").value);
            
            
             var response="";
                // Check for OTPCode in Backend
                $.ajax({type: "GET", 
                                    async: false,
                                    url: 'php/dac.nicportal.php',
                                    data: { 
                                        phoneNumber : document.getElementById("Reg-PhneNum").value,
                                        action : 'CheckUser'
                                    },
                                  success: function(resp)
                                    {
                                          response=resp;
                                    }
                                   });
                        console.log("response : "+response);
                        
           document.getElementById("signup_userName").value='<?php if(isset($_SESSION["GET_USERNAME"])) echo $_SESSION["GET_USERNAME"]; ?>';
           document.getElementById("signup_firstName").value='<?php if(isset($_SESSION["GET_FIRSTNAME"])) echo $_SESSION["GET_FIRSTNAME"];  ?>';
           document.getElementById("signup_lastName").value='<?php  if(isset($_SESSION["GET_LASTNAME"])) echo $_SESSION["GET_LASTNAME"]; ?>';
           document.getElementById("signup_staffId").value='<?php  if(isset($_SESSION["GET_STAFFID"])) echo $_SESSION["GET_STAFFID"]; ?>';
           document.getElementById("signup_designation").value='<?php if(isset($_SESSION["GET_DESIGNATION"])) echo $_SESSION["GET_DESIGNATION"];  ?>';
           document.getElementById("signup_email").value='<?php  if(isset($_SESSION["GET_EMAILID"])) echo $_SESSION["GET_EMAILID"]; ?>';          
                        
            
        }
        
        function resendOTP()
        {
            var phoneNum=g_phone;
            RegStep1();
            console.log("phoneNum : "+phoneNum);
            var otpview=document.getElementById("OTP-NotValid");
            otpview.style.display='block';
            otpview.innerHTML='<strong>The OTP is re-sent to your Mobile '+phoneNum+'</strong>';
        }
        
        function RegStep3()
        {
            var regId=g_regId;
            var uName=document.getElementById("signup_userName").value;
            var fName=document.getElementById("signup_firstName").value;
            var lName=document.getElementById("signup_lastName").value;
            var staffId=document.getElementById("signup_staffId").value;
            var designation=document.getElementById("signup_designation").value;
            var email=document.getElementById("signup_email").value;
            
            
            console.log("RegId : "+regId);
            console.log("uName : "+uName);
            console.log("fName : "+fName);
            console.log("lName : "+lName);
            console.log("staffId : "+staffId);
            console.log("designation : "+designation);
            console.log("email : "+email);
            
            var result="";
                // Check for OTPCode in Backend
                $.ajax({type: "GET", 
                                    async: false,
                                    url: 'php/dac.useraccounts.php',
                                    data: { 
                                        regId : regId,
                                        uName :uName,
                                        fName :fName,
                                        lName :lName,
                                        staffId :staffId,
                                        designation : designation,
                                        email :email,
                                        action : 'updateRegistration'
                                    },
                                  success: function(resp)
                                    {
                                          result=resp;
                                    }
                                   });
                        console.log("Res : "+result);
            
            document.getElementById("submitBttnFinish").style.display='none';
            document.getElementById("signup-Greeting").style.display='block';
            
        }
        
        function forgotPwd()
        {
            var email=document.getElementById("forgotPwd-emailInput").value;
            
            // sendForgotPassword
             var result="";
                $.ajax({type: "GET", 
                                    async: false,
                                    url: 'php/dac.useraccounts.php',
                                    data: { 
                                      
                                        email :email,
                                        action : 'sendForgotPassword'
                                    },
                                  success: function(resp)
                                    {
                                          result=resp;
                                    }
                                   });
                        console.log("Res : "+result);
        }
    </script>
  </head>
<body onload="indexOnload()">

<div class="container page-wrapper">
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
<div class="courses-btn"><a href="courses.php">Courses</a></div>
<div class="login-form col-xs-6">
<form class="form-horizontal">
<fieldset>
<legend class="login-txt">LOGIN</legend>
  <div class="container-fluid">
      <div class="input-group">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                      <input type="text" id="login-user" class="form-control" placeholder="USERNAME">
    </div>
      <div class="input-group space">
                    <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                    <input type="password" id="login-pwd" class="form-control" placeholder="PASSWORD">
                </div>
      <span id="login-ErrorMsg"></span>
      <div class="input-group space login-btn">
          
                    <button type="button" class="btn btn-default loginbtn" onclick="javascript:login()">Login</button>
    </div>
    </div>
    <div class="container-fluid">
    <div class="col-sm-6 left-padding">
      <div class="input-group space">
         <a href="#" data-toggle="modal" data-target="#myModal">Sign Up</a>
      </div>
    </div>
    <div class="col-sm-6 right-padding">
      <div class="input-group space login-btn">
         <a href="#" data-toggle="modal" data-target="#myModal1">Forgot Password?</a>
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
        <li data-target="#myCarousel" data-slide-to="5"></li>
        <li data-target="#myCarousel" data-slide-to="6"></li>
        <li data-target="#myCarousel" data-slide-to="7"></li>
        <li data-target="#myCarousel" data-slide-to="8"></li>
        <li data-target="#myCarousel" data-slide-to="9"></li>
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
        <div class="item">
          <img class="fifth-slide" src="images/slider-img-06.jpg" height="430" alt="Fifth slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Enabling technical staff under<br/>MGNREGA to enhance their skill</h1>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="fifth-slide" src="images/slider-img-07.jpg" height="430" alt="Fifth slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Enabling technical staff under<br/>MGNREGA to enhance their skill</h1>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="fifth-slide" src="images/slider-img-08.jpg" height="430" alt="Fifth slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Enabling technical staff under<br/>MGNREGA to enhance their skill</h1>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="fifth-slide" src="images/slider-img-09.jpg" height="430" alt="Fifth slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Enabling technical staff under<br/>MGNREGA to enhance their skill</h1>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="fifth-slide" src="images/slider-img-10.jpg" height="430" alt="Fifth slide">
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
         <p class="lead">
             The National Rural Employment Guarantee Act 2005 (or, NREGA No 42) was later 
             renamed as the "Mahatma Gandhi National Rural Employment Guarantee Act" (or, MGNREGA), 
             is an Indian labour law and social security measure that aims to guarantee the 'right to work'.
             It aims to ensure livelihood security in rural areas by providing at least 100 days of wage 
             employment in a financial year to every household whose adult members volunteer to do unskilled 
             manual work.It is one of the important scheme being implemented by government to 
             achive inclusive growth.</p>
      </div>
      <div class="col-md-5"><img class="featurette-image img-responsive center-block" src="images/homepage-img.jpg" alt="About Image"></div>
   </div>
</div>
<!--   ---------------------- End Home Page About Content -----------------------    -->
<br/>
<br/>
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
      <li class="active"><a href="#" data-target="#myModal" data-toggle="modal">Sign Up</a></li>
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
<!--   ---------------------- End Footer Page Content -----------------------    -->

<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="text-center">Forgot Password?</h3>
      </div>
      <br/>
    <div class="container-fluid">
    <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="text-center">
                          <p>If you have forgotten your password - reset it here.</p>
                            <div class="panel-body">
                              
                              <form class="form"><!--start form--><!--add form action as needed-->
                                <fieldset>
                                  <div class="form-group">
                                    <div class="input-group">
                                      <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
                                      <!--EMAIL ADDRESS-->
                                      <input id="forgotPwd-emailInput" placeholder="email address" class="form-control" type="email" oninvalid="setCustomValidity('Please enter a valid email address!')" onchange="try{setCustomValidity('')}catch(e){}" required="">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <input class="btn btn-default pull-right" value="Send My Password" type="submit">
                                  </div>
                                </fieldset>
                                <br/>
                                <div class="container-fluid">
                                <div class="form-group">
                        <div id="forgotPwd-Message" class="alert alert-success">We sent password to your email id</div>
                        </div>
                        </div>
                              </form><!--/end form-->
                              
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>
    </div>
</div>
</div>


<!--     Sign Up Form     -->
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">SIGN UP</h4>
      </div>
      <div class="modal-body">
		<div class="well">
			<ul class="nav nav-tabs">
				<li id="boot-tab-1" ><a href="#step1" >Step1</a></li>
				<li id="boot-tab-2" ><a href="#step2" >Step2</a></li>
                                <li id="boot-tab-3" ><a href="#step3" >Step3</a></li>
			</ul>
                    
			<div id="myTabContent" class="tab-content">
				<div class="tab-pane active in" id="step1">
					<!--form class="form-horizontal" action='' method="POST"-->
                                     <div id="tab-step-1" class="container-fluid">
                                             <div class="form-group">
                                    <br/>
                                   <select id="Reg-State" class="form-control" value="">
                                   <option value="">Select State</option>
                                   <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                   <option value="Andhra Pradesh">Andhra Pradesh</option>
                                   <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                   <option value="Assam">Assam</option>
                                   <option value="Bihar">Bihar</option>
                                   <option value="Chandigarh">Chandigarh</option>
                                   <option value="Chhattisgarh">Chhattisgarh</option>
                                   <option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
                                   <option value="Daman and Diu">Daman and Diu</option>
                                   <option value="Delhi">Delhi</option>
                                   <option value="Goa">Goa</option>
                                   <option value="Gujarat">Gujarat</option>
                                   <option value="Haryana">Haryana</option>
                                   <option value="Himachal Pradesh">Himachal Pradesh</option>
                                   <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                   <option value="Jharkhand">Jharkhand</option>
                                   <option value="Karnataka">Karnataka</option>
                                   <option value="Kerala">Kerala</option>
                                   <option value="Lakshadweep">Lakshadweep</option>
                                   <option value="Madhya Pradesh">Madhya Pradesh</option>
                                   <option value="Maharashtra">Maharashtra</option>
                                   <option value="Manipur">Manipur</option>
                                   <option value="Meghalaya">Meghalaya</option>
                                   <option value="Mizoram">Mizoram</option>
                                   <option value="Nagaland">Nagaland</option>
                                   <option value="Odisha">Odisha</option>
                                   <option value="Telangana">Telangana</option>
                                </select>
                                    </div>
                                    <div class="form-group">
                                      <input type="text" id="Reg-PhneNum" class="form-control" id="mobileNumber" placeholder="Mobile Number">
                                    </div>
                                    <div class="form-group">
                                    <button type="submit" class="btn btn-default pull-right" onclick="javascript:RegStep1()">Submit</button>

                                    </div>
                                    <div class="form-group">

                                    <div id="OLP-NotRegMsg" class="alert alert-danger bs-alert-old-docs">

                                      </div>

                                    </div>
                                    <div class="form-group">
                                    <div id="Signup-Message" class="alert alert-danger bs-alert-old-docs">
                                        <strong>"If you have not registered with the MGNREGA staff portal,</strong> 
                                        <a href="http://nrega.nic.in/netnrega/home.aspx">click here"</a>
                                      </div>
                                    </div>
                                    </div>
					<!--/form-->                
				</div>
                            
				<!--div class="tab-pane fade" id="step2"-->
					<!--form id="tab" class="form-horizontal"-->
                    <div id="tab-step-2" class="container-fluid">
                    <div class="form-group">
                    <br/>
    <label for="exampleInputFile">Enter NETSECURE<sup>TM</sup>(OTP) Code</label>
    <input type="text" id="otp-Number"><button type="submit" class="btn btn-default pull-right" onclick="resendOTP()">Resend OTP</button></div>
    <div class="form-group">
    <div id="OTP-NotValid" class="alert alert-danger bs-alert-old-docs">
      <strong>"The OTP</strong> is <strong>not valid, please reenter the OTP"</strong></a>
    </div>
  </div>					
						<div class="form-group">
							<button type="submit" class="btn btn-default pull-right" onclick="RegStep2()">Submit</button>
						</div>
                        </div>
					<!--/form-->
				<!--/div-->
                <!--div class="tab-pane fade" id="step3"-->
					<!--form id="tab" class="form-horizontal"-->
                    <div id="tab-step-3" class="container-fluid">
                        <div class="form-group">
                          <br/>
                          <input class="form-control" type="text" id="signup_userName" placeholder="User Name">
                        </div>
                         <div class="form-group">
               
                       <input class="form-control" type="text" id="signup_firstName" placeholder="First Name">
                    </div>
                    <div class="form-group">
               
                       <input class="form-control" type="text" id="signup_lastName" placeholder="Last Name">
                    </div>	
                    <div class="form-group">
                       <input class="form-control" type="text" id="signup_staffId" placeholder="Staff ID">
                    </div>
                    <div class="form-group">
                       <input class="form-control" type="text" id="signup_designation" placeholder="Designation">
                    </div>
                    <div class="form-group">
                       <input class="form-control" type="text" id="signup_email" placeholder="Email ID">
                    </div>				
						<div class="form-group">
							<button type="submit" id="submitBttnFinish" class="btn btn-default pull-right" onclick="RegStep3()">Confirm</button>
						</div>
                        <div class="form-group">
                        <div id="signup-Greeting" class="alert alert-success">
              <strong>"Thanks for Signing Up.</strong> Please log in using the user id and password sent to your email id."
            </div>
                        </div>
                        </div>
					<!--/form-->
				<!--/div-->
			</div>
		</div>
	</div>
    </div>
  </div>
</div>
</div>
<!--     Sign Up Form     -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    
</body>
</html>
<?php } else {     header("location:user-landing.php"); }?>