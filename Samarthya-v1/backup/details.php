<?php  
 require 'php/dac.youtube.php';
 if(isset($_SESSION[constant("SESSION_COURSEID")])) {
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
      <style>
       #AssessmentTestBttn { display:none; }
        #course-details-view
        {
            margin-top:4%;
        }
        .english, .hindi,.telugu
        {
            cursor:pointer;
        }
        #note { color:#cc0033;}
    </style>
    <script>
        var g_userId;
        var g_course;
        function getIPAddress()
        {
            // Get UserIP Address
            var ipaddress='';
              $.ajax({type: "GET", 
                                    async: false,
                                    url: 'php/dac.util.php',
                                    data: { 
                                        action :'GetUserIP'},
                                    success: function(resp)
                                    {
                                          ipaddress=resp;
                                    }
                                   });
            return ipaddress;
        }
         function pageOnload()
        {
               var ipaddress=getIPAddress();
            
               console.log("ipaddress : "+ipaddress);
                
            var course='<?php if(isset($_SESSION[constant("SESSION_COURSENAME")])) echo $_SESSION[constant("SESSION_COURSENAME")]; ?>';
            var userId='<?php if(isset($_SESSION[constant("SESSION_USER_REGID")])) echo $_SESSION[constant("SESSION_USER_REGID")]; ?>';
            var courseId='<?php if(isset($_SESSION[constant("SESSION_COURSEID")])) echo $_SESSION[constant("SESSION_COURSEID")]; ?>';
            // Check for Displaying Go for Assessment Option
            // Inputs : courseId, userId
            var testresp="";
                 $.ajax({type: "GET", 
                                    async: false,
                                    url: 'php/dac.courses.php',
                                    data: { 
                                        userId :userId,
                                        course : courseId,
                                        action : 'checkForAssessmentTest'
                                    },
                                    success: function(resp)
                                    {
                                          testresp=resp;
                                    }
                                   });
                                   
                                   console.log("testResp :"+testresp);
            
            if(testresp==='Done')
            {
                document.getElementById("AssessmentTestBttn").style.display='block';
            }
            
            
            
            // Add logs to Course Visited
            g_course=course;
            g_userId=userId;
           
             var result="";
                 $.ajax({type: "GET", 
                                    async: false,
                                    url: 'php/dac.courses.php',
                                    data: { 
                                        userId :userId,
                                        course : course,
                                        ipaddress :ipaddress,
                                        status :'Page Visited',
                                        action : 'AddcourseVisited'
                                    },
                                    success: function(resp)
                                    {
                                          result=resp;
                                    }
                                   });
                                   
                                   console.log("result :"+result);
                       
        }
      function pdfDownloadLogs(title, subcourseId, courseId)
      {
          var ipaddress=getIPAddress();
          
                   var result="";
                            $.ajax({type: "GET", 
                                    async: false,
                                    url: 'php/dac.courses.php',
                                    data: { 
                                        userId :g_userId,
                                        course : g_course,
                                        ipaddress :ipaddress,
                                        status :'Downloaded '+title,
                                        action : 'AddcourseVisited'
                                    },
                                    success: function(resp)
                                    {
                                          result=resp;
                                    }
                                   });
                               console.log("result :"+result);
                               
           /* Adding to visited link */
           var userID='<?php if(isset($_SESSION["SESSION_USER_REGID"])) { echo $_SESSION["SESSION_USER_REGID"]; } ?>';
           var response="";
                     $.ajax({type: "GET", 
                                    async: false,
                                    url: 'php/dac.courses.php',
                                    data: { 
                                        courseLinksID :subcourseId,
                                        CourseID : courseId,
                                        userID :userID,
                                        action : 'AddUserVisitedHistory'
                                    },
                                    success: function(resp)
                                    {
                                          response=resp;
                                    }
                                   });
         
                 console.log("response : "+response);                  
      }
    </script>
        
  </head>
  <body onload="pageOnload()">

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
      <h3 class="featurette-heading">Course I on <span class="text-muted">
              <?php if(isset($_SESSION[constant("SESSION_COURSENAME")])) echo $_SESSION[constant("SESSION_COURSENAME")]; ?>
          </span></h3>
      <hr class="featurette-divider">
      <p>
          <span id="note">Note:</span><B><I>Download all PDF's to get Access for the Assessment Exam</I></B><br/>
             The National Rural Employment Guarantee Act 2005 (or, NREGA No 42) was later renamed as the 
             "Mahatma Gandhi National Rural Employment Guarantee Act" (or, MGNREGA), is an Indian labour 
             law and social security measure that aims to guarantee the 'right to work'. 
             It aims to ensure livelihood security in rural areas by providing at least 100 days of 
             wage employment in a financial year to every household whose adult members volunteer to do 
             unskilled manual work.It is one of the important scheme being implemented by government to 
             achive inclusive growth.
             
      </p>
   </div>
</div>
<!--   ---------------------- Start Details Page video Content -----------------------    -->

<div id="courseslink-details" class="container">
    <?php 
    $courseID=$_SESSION[constant("SESSION_COURSEID")];
    echo youtubeBuilder($courseID); ?>
   
    <div class="col-xs-12">
        <a href="assessment.php">
        <input id="AssessmentTestBttn" class="btn btn-default pull-right" value="Go for Assesment"/>
        </a>
    </div>
    

    
    </div>
    
    <!--   ---------------------- End Details Page video Content -----------------------    -->
    
      
 
    
    <!--   ---------------------- End Details Page video Content -----------------------    -->
    
    <!--   ---------------------- Start Footer Page Content -----------------------    -->
    
    <div class="container">
       <hr class="featurette-divider footerdivider">
       <div class="col-xs-12 col-md-7">
       <ul class="nav navbar-nav footer-menu">
          <li class="active"><a href="#">Home</a></li>
          <li>|</li>
          <li class="active"><a href="#">Courses</a></li>
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
    <script src="js/jquery-1.11.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
<?php } else {     header("location:user-landing.php"); } ?>