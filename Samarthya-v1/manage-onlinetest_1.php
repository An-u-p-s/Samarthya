
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
        <li id="leftMenu-1"><a href="#" onclick="viewLeftMenu1()">View Exam Questions</a></li>
        <li id="leftMenu-2"><a href="#" onclick="viewLeftMenu2()">Add Exam Questions</a></li>
        <li id="leftMenu-3"><a href="#" onclick="viewLeftMenu3()">Add Exam Bulk-Questions</a></li>
        <li id="leftMenu-4"><a href="#" onclick="viewLeftMenu4()">Manage Examination</a></li>
       </ul>
        </div>
        
        <div class="col-xs-8">
        
            
            <!-- viewLeftMenu1 : View Courses-->
            <div id="leftMenuContainer1">
                <div class="col-xs-12">
                    <h4><B>View Exam Questions</B></h4><hr/>
                </div>
                
                 <div class="row">
                    <div class="col-xs-12">
                       Course Name : 
                    </div>
                    <div class="col-xs-12">
                        <select id= "view-courseName" class="form-control">
                            
                        </select> 
                    </div>
                 </div>
                
                
                 <div class="row">
                    <div class="col-xs-12">
                       Test type : 
                    </div>
                    <div class="col-xs-12">
                            <div class="radio">
                                  <label>
                                      <input type="radio" name="quiz" id="view_C_PreTest" value="Pre Test" onclick="viewExamination()">
                                    Pre-Test
                                  </label>
                            </div>
                            <div class="radio">
                                  <label>
                                      <input type="radio" name="quiz" id="view_C_PostTest" value="Post Test" onclick="viewExamination()">
                                      Post-Test
                                  </label>
                            </div>
                    </div>
                 </div>
               
                
                
                
                <div class="row">
                     <div style="width:100px;">
                         <!-- class="col-xs-12" class=" panel panel-default" -->
                         <div id="leftMenuTable1" >
                    
                         </div>
                      </div>
                </div>
                
            </div> 
            
            <!-- viewLeftMenu2 : Add a Courses-->
            <div class="col-xs-12" id="leftMenuContainer2">
                <div class="row">
                    <div class="col-xs-12">
                        <h4><B>Add Examination Questions</B></h4><hr/>
                    </div>
                </div>
                <div id="form-Div" class="row" style="">
                   <div class="col-xs-12">
 
          <div class="questions-text">
              <span class="text-muted">Course:</span>
              <select id="courseList" class="form-control"></select>
          </div>
          <div class="questions-text">
              <span class="text-muted">Test Type:</span>
                   <div class="checkbox">
                         <label>
                             <input type="checkbox" name="quiz" id="C_PreTest" value="Pre Test">
                             Pre-Test
                         </label>
                   </div>
                   <div class="checkbox">
                         <label>
                             <input type="checkbox" name="quiz" id="C_PostTest" value="Post Test">
                             Post-Test
                         </label>
                   </div>
           </div>
            <div class="questions-count">
                <span class="text-muted">Question:</span>
            </div>
            <div class="questions-text">
                <input type="text" class="form-control" id="AddQuestion" placeholder="Add a Question"/>
            </div>
   
            
            <!--form role="form" name="quizform" action="quiztest.asp?qtest=HTML" method="post"-->
                <div id="qtest-option" class="multiple-choice">
                   <div class="radio">
                         <label>
                             <input type="radio" id="C_Option1" name="quiz"  value="1">
                             <input type="text" id="T_Option1" class="form-control" placeholder="Option-1"/>
                         </label>
                   </div>
                   <div class="radio">
                        <label>
                            <input type="radio" id="C_Option2"  name="quiz"  value="1">
                            <input type="text" id="T_Option2" class="form-control" placeholder="Option-2"/>
                        </label>
                    </div> 
                    <div class="radio">
                         <label>
                             <input type="radio" id="C_Option3" name="quiz"  value="1">
                             <input type="text" id="T_Option3" class="form-control" placeholder="Option-3"/>
                         </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" id="C_Option4" name="quiz"  value="1">
                            <input type="text" id="T_Option4" class="form-control" placeholder="Option-4"/>
                        </label>
                    </div> 
                </div>
	<br>
        <div class="questions-text">
              
                   <div class="checkbox">
                         <label>
                             <input type="checkbox" name="quiz" id="activeQuestion" value="1">
                             <span class="text-muted">Active Question</span>
                         </label>
                   </div>
               
           </div>
           <button class="btn btn-default pull-right" onclick="AddQuestionOnSubmit()"> Submit  </button>	
	         <!--/form-->
                <br/>
     
               </div>
                </div>
               
            </div>
           
            
            <!-- Add Exam Bulk-Questions -->
            <div class="col-xs-12" id="leftMenuContainer3">
                 <div class="col-xs-12">
                    <h4><B>Add Exam Bulk-Questions</B></h4><hr/>
                </div>
            </div>
            
            
            
            
            
            
            
             <!-- Manage Examinations -->
            <div class="col-xs-12" id="leftMenuContainer4">
                
                <div class="col-xs-12">
                    <h4><B>Manage Examination</B></h4><hr/>
                </div>
                
                <div class="col-xs-12">
                   Course Name :
                </div>
                
                
                 <div class="col-xs-12">
                     <select id="view-OnlineTest-courseName" class="form-control" onchange="viewTestDetailsTable()">
                     </select>
                 </div>  
                 
                
                <div class="col-xs-12">
                   <div id="viewTestDetailsTable" class=" panel panel-default">
                    
                   </div>
                    
                </div>
                
                
                <div id="Add_viewExamDetails" class="col-xs-12">
                    
                    <div class="col-xs-12">
                        <h4 id="AddViewExamDetails_header"><B>Add Examination Details</B></h4><hr/>
                    </div>
                    
                    <div class="col-xs-12">
                        Type of Test:
                    </div>
                    <div class="col-xs-12 label-form-control">
                        <select id="AddViewExamDetails_TestType" class="form-control">
                            <option value="">Choose a Test</option>
                            <option value="Pre Test">Pre Test</option>
                            <option value="Assessment">Assessment</option>
                        </select>
                    </div>
                    
                     <div class="col-xs-12  label-form-control">
                        Test Duration:
                    </div>
                     <div class="col-xs-12 label-form-control">
                       <input type="time" class="form-control"/>
                    </div>
                    
                    
                    <div class="col-xs-12  label-form-control">
                        Total Questions:
                    </div>
                     <div class="col-xs-12 label-form-control">
                       <input type="number" class="form-control"/>
                    </div>
                    
                    
                    <div class="col-xs-12  label-form-control">
                        Total Marks:
                    </div>
                     <div class="col-xs-12 label-form-control">
                       <input type="number" class="form-control"/>
                    </div>
                    
                    
                     <div class="col-xs-12  label-form-control">
                        Pass Marks:
                    </div>
                     <div class="col-xs-12 label-form-control">
                       <input type="number" class="form-control"/>
                    </div>
                    
                    <div class="col-xs-12  label-form-control">
                        <input type="button" id="AddViewExamDetails_submit" class="btn btn-warning pull-right" value="Add Exam Details"/>
                    </div>
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