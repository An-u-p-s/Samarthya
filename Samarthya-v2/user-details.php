
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
    <script src="js/jquery-1.11.1.min.js"></script>
    <link href="css/jquery.dataTables.css"/>
   
    <script src="js/jquery.dataTables.min.js"></script>
    
    <title>::Samarthya::Online Learning Portal for Technical Staff under MGNREGA</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/dataTables.bootstrap.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        thead{
            background-color: #0075b0;
            color:#fff;
        }
    </style>
    <script type="text/javascript" src="js/jquery.dataTables.columnFilter.js"></script>
    <script>
        //function getuserDetailsByAdmin()
      //  {
      $(document).ready(function () {
          
        $('input[type="search"]').addClass('form-control');
          
          var filter_designation=[];
          var filter_state=[];
              
          
          /* Filtering : Designation */
             var designation="";
                 $.ajax({type: "GET", 
                                    async: false,
                                    url: 'php/dac.useraccounts.php',
                                    data: { 
                                        action : 'getUserDetailsDesignationFilter'
                                    },
                                    success: function(resp)
                                    {
                                          designation=resp;
                                    }
                                   });
               console.log("answers : "+designation);
               
               designation=JSON.parse(designation);
               
               for(var index=0;index<designation.length;index++)
               {
                   filter_designation[index]=designation[index].designation;
               }
               
               /* Filtering : State */ 
                 var state="";
                 $.ajax({type: "GET", 
                                    async: false,
                                    url: 'php/dac.useraccounts.php',
                                    data: { 
                                        action : 'getUserDetailsStateFilter'
                                    },
                                    success: function(resp)
                                    {
                                          state=resp;
                                    }
                                   });
               console.log("answers : "+state);
               
               state=JSON.parse(state);
               
               for(var index=0;index<state.length;index++)
               {
                   filter_state[index]=state[index].state;
               }
               
               
               var  table=$('#adminviewuserdetails').dataTable( {
			 "ajax":'php/dac.useraccounts.php?action=getUserDetails',
			 "scrollY": "400px",
			 "columns": [{ "title": "FULL NAME" , "class": "center"},
				     { "title": "DESIGNATION" , "class": "center"},
			             { "title": "STAFF-ID", "type" : "string", "class": "center" },
				     { "title": "MOBILE NUMBER", "type" : "string", "class": "center" },
                                     { "title": "STATE", "type" : "string", "class": "center" }]
				 } ).columnFilter({
                                     sPlaceHolder: "head:after",
                                     
                                     aoColumns:[null,
                                               {  type:"select", values:filter_designation },
                                                 null,
                                                   null,
                                               {  type:"select", values:filter_state }
                                               
                                              /* {  type:"select", values:filter_courseName } */
                                              ]
         });
                             //   $('#adminviewuserdetails').dataTable() .columnFilter();
         
        });
    </script>
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
            <?php $page="UserDetails";
              include 'templates/Navigation.php';?>
            <!-- End Navigation -->
       
          
   
   </div>
</nav>

<!--   ---------------------- End  Navigation -----------------------    -->


<!--   ---------------------- Start Home Page About Content -----------------------    -->
<br/>
<div class="col-xs-12">
    <!--a href="dashboard.php"> 
        <button class="btn btn-default pull-right">View Dashboard</button>
    </a-->
</div>
<br/>
<div class="container">
<div class="col-xs-12">
<h3 class="featurette-heading">USER DETAILS</h3>
      <hr class="featurette-divider">
</div>
</div>
<div class="container">
    <div class="col-xs-12">
        <a href="php/dac.userDetailExcel.php">
            <input type="button" class="btn btn-primary pull-right" value="Download Complete Information"/>
        </a>
    </div>
<div class="col-xs-12">
<!--div  class="panel panel-default"-->
<table id="adminviewuserdetails" class="table table-responsiv table-bordered">

</table>
<!--/div-->
<!--button class="btn btn-default pull-right">Download Data</button-->
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
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