
<?php session_start();
 require 'php/define.php';
 if(isset($_SESSION["SESSION_USER_USERNAME"])) {
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
        input[type="button"] { margin-left:2%; }
        #leftMenuContainer1, #leftMenuContainer2, 
        #leftMenuContainer3, #leftMenuContainer4
        {
            display:none;
        }
         #form-Div {   margin-bottom: 3%; }
        #view-courseDetails { display:none; }
        #course-container { width:100%;height:100%; }
        #video-preview1, #video-preview2, #video-preview3 { margin-top:1%; display:none; }
    </style>
    <script type="text/javascript" src="js/pages/manage-courses.js"></script>
  </head>
  <body onload="managecoursesload()">
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
            <?php $page='ManageCourses';
            include 'templates/Navigation.php';?>
            <!-- End Navigation -->
   </div>
</nav>

<!--   ---------------------- End  Navigation -----------------------    -->


<!--   ---------------------- Start Home Page About Content -----------------------    -->
<br/>
<div class="container">
<div class="col-xs-12">
<h3 class="featurette-heading">MANAGE COURSES</h3>
      <hr class="featurette-divider">
</div>
</div>
<div class="container">
<div class="col-xs-12">

<p>
    "Mahatma Gandhi National Rural Employment Guarantee Act aims at enhancing the livelihood 
    security of people in rural areas by guaranteeing hundred days of wage employment in a financial
    year to a rural household whose adult members volunteer to do unskilled manual work" © 2015 NIRD Inc.
    All rights reserved. "Mahatma Gandhi National Rural Employment Guarantee Act aims at enhancing
    the livelihood security of people in rural areas by guaranteeing hundred days of wage employment
    in a financial year to a rural household whose adult members volunteer to do unskilled manual 
    work"
</p>
<br/>
</div>
   
    <div id="course-container" class="col-xs-12">
        <div class="col-xs-3">
        <ul class="nav nav-pills nav-stacked">
        <li id="leftMenu-1"><a href="#" onclick="viewLeftMenu1()">View/Edit Courses</a></li>
        <li id="leftMenu-2"><a href="#" onclick="viewLeftMenu2()">Add a Course</a></li>
        <li id="leftMenu-3"><a href="#" onclick="viewLeftMenu3()">View/Edit Course Details</a></li>
        <li id="leftMenu-4"><a href="#" onclick="viewLeftMenu4()">Add Course Details</a></li>
       </ul>
        </div>
        
        <div class="col-xs-8">
        
            
            <!-- viewLeftMenu1 : View Courses-->
            <div id="leftMenuContainer1" class="panel panel-default">
               
            </div>
            
            
            
            <!-- viewLeftMenu2 : Add a Courses-->
            <div class="col-xs-12" id="leftMenuContainer2">
                <input type="hidden" id="courseOperation" class="form-control" value="Add"/>
                <input type="hidden" id="idCourses" class="form-control" value=""/>
                <div class="row">
                    <div class="col-xs-12">
                        <h4 id="courseHeading"><B>Add a Course</B></h4><hr/>
                    </div>
                </div>
                <div id="form-Div" class="row" style="">
                    <div class="col-xs-12">
                       CourseName:
                    </div>
                    <div class="col-xs-12">
                        <input type="text" id="add-courseName" class="form-control" placeholder="Example: Natural Resources Management"/>
                    </div>
                </div>
                <div id="form-Div" class="row">
                    <div class="col-xs-12">
                       Course Number:
                    </div>
                    <div class="col-xs-12">
                        <input type="text" id="add-courseNumber"  class="form-control" placeholder="Example: 0514"/>
                    </div>
                </div>
                
                <div id="form-Div" class="row">
                    
                    <div class="col-xs-12">
                        <input id="courseBttn" class="btn btn-default pull-right" onclick="addNewCourse()" value="Add Course" />
                    </div>
                </div>
            </div>
           
           
            
            <!-- viewLeftMenu3 : View Course Details-->
            <div class="col-xs-12"  id="leftMenuContainer3">
                <div class="row">
                    <div class="col-xs-12">
                        <h4><B>View Course Details</B></h4><hr/>
                    </div>
                </div>
                <div id="form-Div" class="row">
                    <div class="col-xs-12">
                       Course Name:
                    </div>
                    <div class="col-xs-12">
                        <select id="view-courseName1" class="form-control" onchange="javascript:viewCourseDetails()"></select>
                    </div>
                </div>
                <div id="form-Div" class="row">
                    <div id="view-courseDetails" class="panel panel-default">
                        
                    </div>
                </div>
            </div>
            
            <form action="php/dac.courseDetails.php" method="POST"  enctype="multipart/form-data">
            <!-- viewLeftMenu4 : Add Course Details-->
            <div id="leftMenuContainer4" class="col-xs-12">
                 <input type="hidden" id="coursedetailsOperation" name="coursedetailsOperation" class="form-control" value="Add"/>
                 <input type="hidden" id="setCourseName" name="setCourseName" class="form-control" value=""/>
                 <input type="hidden" id="idCourseLinks" name="idCourseLinks" class="form-control" value=""/>
                
                
                <div class="row">
                    <div class="col-xs-12">
                        <h4 id="courseDetailHeading"><B>Add Course Details</B></h4><hr/>
                    </div>
                </div>
                <div id="form-Div" class="row">
                    <div id="view-courseName2-label" class="col-xs-12">
                       Course Name:
                    </div>
                    <div class="col-xs-12">
                        <select id="view-courseName2" name="view-courseName2" class="form-control"></select>
                    </div>
                </div>
                <div id="form-Div" class="row">
                    <div class="col-xs-12">
                       Title Name:
                    </div>
                    <div class="col-xs-12">
                        <input id="addcourse-titleName" name="addcourse-titleName"  class="form-control" placeholder="Example : WaterShed"/>
                    </div>
                </div>
                <div id="form-Div" class="row">
                    
                    <div class="col-xs-12">
                        Course Videolink (English Version):
                    </div>
                    
                    <div class="col-xs-12">
                        <input id="addcourse-EngVideoLink" name="addcourse-EngVideoLink" class="form-control"  placeholder="Example : https://www.youtube.com/QOrVotzBNto"/>
                    </div>
                    
                    
                    <div id="video-preview1" class="col-xs-12">
                        <input type="button" class="btn btn-primary pull-right" value="Preview" onclick="videoPreview1()"/>
                    </div>
                    
                    
                </div>
                <div id="form-Div" class="row">
                    
                    <div class="col-xs-12">
                        Course Videolink (Hindi Version):
                    </div>
                    
                    <div class="col-xs-12">
                        <input id="addcourse-HinVideoLink" name="addcourse-HinVideoLink" class="form-control"  placeholder="Example : https://www.youtube.com/QOrVotzBNto"/>
                    </div>
                    
                    
                    <div id="video-preview2" class="col-xs-12">
                        <input type="button" class="btn btn-primary pull-right" value="Preview"  onclick="videoPreview2()"/>
                    </div>
                    
                    
                </div>
                <div id="form-Div" class="row">
                    
                    <div class="col-xs-12">
                        Course Videolink (Telugu Version):
                    </div>
                    
                    <div class="col-xs-12">
                        <input id="addcourse-TelVideoLink" name="addcourse-TelVideoLink" class="form-control"  placeholder="Example : https://www.youtube.com/QOrVotzBNto"/>
                    </div>
                    
                    <div id="video-preview3" class="col-xs-12">
                        <input type="button" class="btn btn-primary pull-right" value="Preview"  onclick="videoPreview3()"/>
                    </div>
                    
                </div>
                 <div id="form-Div" class="row">
                    <div class="col-xs-12">
                        Course Booklink (English Version):
                    </div>
                    <div class="col-xs-12">
                        
                        <div id="alreadyShow" class="col-xs-5"><span id="existingFile"></span></div>
                        <div class="col-xs-6"><input type="file" id="addcourse-EngBookLink"  name="addcourse-EngBookLink"/></div>
                    </div>
                </div>
                
                 <div id="form-Div" class="row">
                    
                    <div class="col-xs-12">
                        <input type="submit" id="CourseDetailsBttn" class="btn btn-default pull-right" value="Add Course Details"/>
                    </div>
                </div>
                
            </div>
        </form>
            <script type="text/javascript">
               
            </script>
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
          <li class="active"><a href="user-landing.php">Home</a></li>
          <li>|</li>
          <li class="active"><a href="user-landing.php">Courses</a></li>
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
<footer><div align="center" class="container">&copy; 2015 Copyright | ONLINE COURSES.</div></footer>

</div>
      
      
<!--   ---------------------- End Footer Page Content -----------------------    -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-1.11.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
 <?php } else { header("location:index.php"); }?>