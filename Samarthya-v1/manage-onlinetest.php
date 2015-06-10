
<?php session_start();
 require 'php/define.php';
 if(isset($_SESSION[constant("SESSION_USER_USERNAME")])) {
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
    <script src="js/popup.js"></script>
    <link href="css/popup.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="js/pages/manage-onlinetest.js"></script>
    <style>
        #leftMenuContainer1, #leftMenuContainer2 { display:none; }
        .questions-text, .text-muted {  margin-bottom:2%; }
        #leftMenuTable1 {  display:none; }
        #viewTestDetailsTable { margin-top:3%; display:none; }
        .btn{  margin-left:1%; }
        .label-form-control { margin-top: 2%; }
        #Bttn_AddExamDetails {  margin-top:3%; }
        #Add_viewExamDetails { display:none; }
    </style>
    <script type="text/javascript">
       
    </script>
  </head>
  <body onload="managecoursesload()">
      
      
        <div id="PopupAudioBackground"></div> 
        <div id="PopupAudioFrontEnd">
            <a href="#" onclick="javascript:popupClose();">
                         <img id="PopupAudioCloseButton" src="images/stuff/button.jpg"/> 
             </a>
            <div id="popcontent" align="center" class="col-xs-12">
                
            </div>
        </div>
      
      
      
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
            <?php $page='ManageTest';
            include 'templates/Navigation.php';?>
            <!-- End Navigation -->
   </div>
</nav>

<!--   ---------------------- End  Navigation -----------------------    -->


<!--   ---------------------- Start Home Page About Content -----------------------    -->
<br/>
<div class="container">
<div class="col-xs-12">
<h3 class="featurette-heading">MANAGE ONLINE TEST</h3>
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
        <li id="leftMenu-2"><a href="#" onclick="viewLeftMenu1()">Manage Examination</a></li>
        <li id="leftMenu-1"><a href="#" onclick="viewLeftMenu2()">Manage Examination Questions</a></li>
        
       </ul>
        </div>
        
        <div class="col-xs-8">
        
            
            <!-- viewLeftMenu1 :  Manage Examinations -->
            <div class="col-xs-12" id="leftMenuContainer1">
                
                <div class="col-xs-12">
                    <h4><B>Manage Examination</B></h4><hr/>
                </div>
                
                <div class="col-xs-12">  Course Name : </div>
                <div class="col-xs-12"> <select id="view-OnlineTest-courseName" class="form-control" onchange="viewTestDetailsTable()"> </select> </div>  
                <div class="col-xs-12"> <div id="viewTestDetailsTable" class=" panel panel-default"></div></div>
                
                
                <div id="Add_viewExamDetails" class="col-xs-12">
                    <input type="hidden" id="operation_mode" value="Add"/>
                    <div class="col-xs-12"><h4 id="AddViewExamDetails_header"><B>Add Examination Details</B></h4><hr/></div>
                    <div class="col-xs-12"> Type of Test:</div>
                    <div class="col-xs-12 label-form-control">
                        <select id="AddViewExamDetails_TestType" class="form-control">
                            <option value="">Choose a Test</option>
                            <option value="Pre Test">Pre Test</option>
                            <option value="Assessment">Assessment</option>
                        </select>
                    </div>
                    
                     <div class="col-xs-12  label-form-control"> Test Duration:</div>
                     <div class="col-xs-12 label-form-control"> 
                         <div class="col-xs-2">
                             <input type="number" id="AddViewExamDetails_TestDurationHour" class="form-control"/> 
                         </div>
                         <div class="col-xs-2">
                             <input type="number" id="AddViewExamDetails_TestDurationMinute" class="form-control"/> 
                         </div>
                         <div class="col-xs-2">
                             <input type="number" id="AddViewExamDetails_TestDurationSecond" class="form-control"/> 
                         </div>
                         
                     </div>
                     <div class="col-xs-12  label-form-control"> Total Questions:</div>
                     <div class="col-xs-12 label-form-control"><input type="number" id="AddViewExamDetails_TotalQuestion" class="form-control"/></div>
                     <div class="col-xs-12  label-form-control">Total Marks:</div>
                     <div class="col-xs-12 label-form-control"> <input type="number" id="AddViewExamDetails_TotalMarks" class="form-control"/></div>
                     <div class="col-xs-12  label-form-control"> Pass Marks:</div>
                     <div class="col-xs-12 label-form-control"><input type="number" id="AddViewExamDetails_PassMarks" class="form-control"/></div>
                     <div class="col-xs-12  label-form-control"><input type="button" id="AddViewExamDetails_submit" class="btn btn-warning pull-right" value="Add Exam Details" onclick="addupdateExamDetails()"/> </div>
               
                </div>
                
            </div>
            
            
            
            
            
            
            
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
 <?php } else {
     header("location:index.php");
 }
?>