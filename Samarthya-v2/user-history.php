<?php session_start();
 require 'php/define.php';
 if(isset($_SESSION[constant("SESSION_USER_USERNAME")]) && 
         $_SESSION[constant("SESSION_USER_USERNAME")]=='Administrator')
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
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="js/jquery-1.11.1.min.js"></script>
    <link href="css/jquery.dataTables.css"/>
    <script src="js/jquery.dataTables.min.js"></script>
     <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/dataTables.bootstrap.css" rel="stylesheet">
    <!--link href="https://www.datatables.net/release-datatables/media/css/jquery.dataTables.css"-->
    <link href="media/css/TableTools.css">
    <script type="text/javascript" src="https://www.datatables.net/release-datatables/extensions/TableTools/js/dataTables.tableTools.js"></script>
    <script type="text/javascript" src="https://www.datatables.net/release-datatables/media/js/jquery.dataTables.js"></script>
    <style>
        thead{
            background-color: #0075b0;
            color:#fff;
        }
    </style>
    <script type="text/javascript" src="js/jquery.dataTables.columnFilter.js"></script>
   <script type="text/javascript">
       
       
        function reportloading()
        {
            var filter_courseName=[];
            var filter_description=[];
       
            /* Filtering : CourseName */ 
                 var courseName="";
                 $.ajax({type: "GET", 
                                    async: false,
                                    url: 'php/dac.courses.php',
                                    data: { 
                                        action : 'GetUserHistoryCourseNameFilter'
                                    },
                                    success: function(resp)
                                    {
                                          courseName=resp;
                                    }
                                   });
               console.log("answers : "+courseName);
               
               courseName=JSON.parse(courseName);
               
               for(var index=0;index<courseName.length;index++)
               {
                   filter_courseName[index]=courseName[index].courseName;
               }
               
              /* Description Filter : */
             //  
              var description="";
                 $.ajax({type: "GET", 
                                    async: false,
                                    url: 'php/dac.courses.php',
                                    data: { 
                                        action : 'GetUserHistoryDescriptionFilter'
                                    },
                                    success: function(resp)
                                    {
                                          description=resp;
                                    }
                                   });
               console.log("answers : "+description);
               
               description=JSON.parse(description);
               
               for(var index=0;index<description.length;index++)
               {
                   filter_description[index]=description[index].status;
               }
               
               
             $('input[type="search"]').addClass('form-control');
             
      
        var  table=$('#adminviewuserdetails').dataTable( {
		         "ajax":"php/dac.AdminVisitedPage.php",
                      
			 "columns": [{ "title": "Username" , "class": "center"},
				     { "title": "Viewed Date" , "class": "center"},
                                     { "title": "Viewed Time" , "class": "center"},
			             { "title": "Course Name",  "class": "center" },
                                     { "title": "User Activity",  "class": "center" },
                                     { "title": "IP Address", "class": "center" }
                                    ] 
				 } ).columnFilter({
                                     sPlaceHolder: "head:after",
                                     
                                     aoColumns:[null,
                                                null,
                                                null,
                                               {  type:"select", values:filter_courseName },
                                               {  type:"select", values:filter_description },
                                                null
                                              ]
         });
                                 
       
        }
    </script>
  </head>
<body onload="reportloading()">

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
            <?php $page='UserHistory';
            include 'templates/Navigation.php';?>
            <!-- End Navigation -->
       
   </div>
</nav>

<!--   ---------------------- End  Navigation -----------------------    -->


<!--   ---------------------- Start Home Page About Content -----------------------    -->
<br/>
<div class="col-xs-12">
   
</div>
<br/>
<div class="container">
<div class="col-xs-12">
<h3 class="featurette-heading">USER HISTORY</h3>
      <hr class="featurette-divider">
</div>
</div>
<div class="container">
    <div class="col-xs-12">
        <a href="php/dac.userHistoryExcel.php">
        <input type="button" class="btn btn-primary pull-right" value="Download Complete Information"/>
        </a>
    </div>
<div class="col-xs-12">
 <table id="adminviewuserdetails" class="table table-responsiv table-bordered">
        
 </table>
<p>"Mahatma Gandhi National Rural Employment Guarantee Act aims at enhancing the livelihood security of people in rural areas by guaranteeing hundred days of wage employment in a financial year to a rural household whose adult members volunteer to do unskilled manual work" © 2015 NIRD Inc. All rights reserved. "Mahatma Gandhi National Rural Employment Guarantee Act aims at enhancing the livelihood security of people in rural areas by guaranteeing hundred days of wage employment in a financial year to a rural household whose adult members volunteer to do unskilled manual work"</p>
<br/>
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
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
<?php } else {     header("location:index.php"); } ?>