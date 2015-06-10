<?php 
require 'php/define.php';
session_start(); 
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
    <style>
        @media screen and (max-width: 800px) {
       
        }
        thead{
            background-color: #0075b0;
            color:#fff;
        }
        .report-descriptive
        {
            height:60px;
        }
        .custom
        {
            margin-top:-30px;
           text-align:center;
        }
        
    </style>
    <script type="text/javascript" src="js/jquery.dataTables.columnFilter.js"></script>
    <script type="text/javascript">
        function reportloading()
        {
             $('input[type="search"]').addClass('form-control');
             
             /* Filters Declaration : */
              var filter_designation=[];
              var filter_state=[];
              var filter_courseName=[];
              
             /* Get Filters : GetUserReportFilter */
              
            var designation="";
                 $.ajax({type: "GET", 
                                    async: false,
                                    url: 'php/dac.useraccounts.php',
                                    data: { 
                                        action : 'GetUserReportDesignationFilter'
                                 
                                    },
                                    success: function(resp)
                                    {
                                          designation=resp;
                                    }
                                   });
               console.log("Results : "+designation);
               designation=JSON.parse(designation);
             
             for(var index=0;index<designation.length;index++)
             {
                 filter_designation[index]=designation[index].designation;
             }
             
             /* Get Filters : GetUserReportStateFilter */
             var state="";
                 $.ajax({type: "GET", 
                                    async: false,
                                    url: 'php/dac.useraccounts.php',
                                    data: { 
                                        action : 'GetUserReportStateFilter'
                                 
                                    },
                                    success: function(resp)
                                    {
                                          state=resp;
                                    }
                                   });
               console.log("Results : "+state);
               state=JSON.parse(state);
             
             for(var index=0;index<state.length;index++)
             {
                 filter_state[index]=state[index].state;
             }
             
             /* Get Filter : GetUserReportCourseNameFilter */
              var courseName="";
                 $.ajax({type: "GET", 
                                    async: false,
                                    url: 'php/dac.useraccounts.php',
                                    data: { 
                                        action : 'GetUserReportCourseNameFilter'
                                 
                                    },
                                    success: function(resp)
                                    {
                                          courseName=resp;
                                    }
                                   });
               console.log("Results : "+courseName);
               courseName=JSON.parse(courseName);
             
             for(var index=0;index<courseName.length;index++)
             {
                 filter_courseName[index]=courseName[index].courseName;
             }
             
             // Type of Test Assessment
             // State Filtering
             // CourseName Filtering
             // Designation Filtering
             // Add a Status at Last column and Add Filter
             // Remove Staff-ID Column
             
           /*  var filter_fullName;
            
             var filter_staffId=[];
            
             
             var filter_testType=[];
             var filter_score=[]; */
           /*  
              $('#adminviewuserdetails thead tr#filterrow th').each( function () {
        var title = $('#adminviewuserdetails thead th').eq( $(this).index() ).text();
        $(this).html( '<input type="text" placeholder="Search '+title+'" />' );
    } );
 
    // DataTable
    //var table = $('#example').DataTable();
     */
    
             
             
               var  table=$('#adminviewuserdetails').dataTable( {
                   
        	 "ajax":'php/dac.useraccounts.php?action=GetUserReports',
			//  "scrollY": "400px",
    
			 "columns": [{ "title": "FULL NAME" , "width":"60px", "class": "custom"},
				     { "title": "DESIGNATION" , "class": "center"},
				     { "title": "STATE", "type" : "string", "class": "center" },
                                     { "title": "COURSE NAME", "type" : "string", "class": "center" },
                                     { "title": "TYPE OF TEST", "type" : "string", "class": "center" },
                                     { "title": "SCORE", "type" : "string", "width":"60px", "class": "center" },
                                     { "title": "RESULT", "type" : "string", "class": "center" }
                                    ]
				 } ).columnFilter({
                                     sPlaceHolder: "head:after",
                                     
                                     aoColumns:[null,
                                               {  type:"select", values:filter_designation },
                                               {  type:"select", values:filter_state },
                                               {  type:"select", values:filter_courseName },
                                               null,
                                               null,
                                               {  type:"select", values:["PASSED", "FAILED"] }
                                              /* {  type:"select", values:filter_courseName } */
                                              ]
         });
                   
            
         
                                 
            // Name
           // Staff ID
           // Designation
           //  State
           // Course Name
           // Type of Test
            // Status
          /*  var content='';
             content+=''; 
             content+='<table class="table table-responsiv table-bordered">'
             content+='<thead>';
             content+='<tr>';
             content+='<th>Name</th>
             content+='<th>Staff ID</th>
             content+='<th>Designation</th>
             content+='<th>State</th>
             content+='<th>Course Name</th>
             content+='<th>Type of Test</th>
             content+='<th>Status</th>
             content+='</tr>
content+='</thead>
content+='<tbody>
content+='<tr>
content+='<td>002</td>
content+='<td>Farm Pond</td>
<td>Farm Pond</td>
<td>Post Test</td>
<td>80</td>
<td>Pass</td>
</tr>
<tr class="info">
<td>001</td>
<td>Deep Ploughing</td>
<td>Deep Ploughing</td>
<td>Post Test</td>
<td>50</td>
<td>Fail</td>
</tr>
<tr>
<td>003</td>
<td>Deep Ploughing</td>
<td>Deep Ploughing</td>
<td>Pre Test</td>
<td>70</td>
<td>Pass</td>
</tr>
</tbody>
</table>
            document.getElementById("report-container").innerHTML=''; */
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
            <?php $page='Report';
            include 'templates/Navigation.php';?>
            <!-- End Navigation -->
   </div>
</nav>

<!--   ---------------------- End  Navigation -----------------------    -->


<!--   ---------------------- Start Home Page About Content -----------------------    -->
<br/>
<div class="container">
<div class="col-xs-12">
<h3 class="featurette-heading">NUMBER OF PEOPLE WHO HAVE TAKEN THE TEST</h3>
      <hr class="featurette-divider">
</div>
</div>
<div class="container">
<div id="table-container" class="col-xs-12">
<!--div id="report-container" class="panel panel-default"-->
    <table id="adminviewuserdetails" class="table table-responsiv table-bordered">
       
    </table>
<!--/div-->
<p class="report-descriptive"></p>
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
