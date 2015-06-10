
<?php session_start();
 require 'php/define.php';
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
    <script type="text/javascript">
       function coursesVisited()
       {
           var userId='<?php if(isset($_SESSION[constant("SESSION_USER_LOGID")])) { echo $_SESSION[constant("SESSION_USER_LOGID")]; } ?>';
           console.log("userId : "+userId);
           var result="";
                 $.ajax({type: "GET", 
                                    async: false,
                                    url: 'php/dac.courses.php',
                                    data: { 
                                        action : 'courseVisited',
                                        userId :userId
                                    },
                                    success: function(resp)
                                    {
                                          result=resp;
                                    }
                                   });
                                   
            console.log("result : "+result);
            
            var res=JSON.parse(result);
            
            var content='<table class="table table-responsiv table-bordered">';
             content+='<thead>';
             content+='<tr>';
             content+='<th>Viewed Date</th>';
             content+='<th>Course</th>';
             content+='<th>Description</th>';
             content+='<th>Viewed Time</th>';
             content+='<th>IP Address</th>';
             content+='</tr>';
             content+='</thead>';
             content+='<tbody>';


            for(var index=0;index<res.length;index++)
            {
                if(index%2==0)
                {
                content+='<tr>';
               }
               else
               {
                content+='<tr class="info">';
            } 
            var ip=res[index].IPAddress;
                 
                content+='<td>'+res[index].date+'</td>';
                content+='<td>'+res[index].course+'</td>';
                content+='<td>'+res[index].status+'</td>';
                
                content+='<td>'+res[index].startTime+'</td>';
                 content+='<td>'+ip.replace("%0A", "")+'</td>';
                content+='</tr>';

            }
             content+='</tbody>';
             content+='</table>';
            document.getElementById("visitedList").innerHTML=content;
           
       }
    </script>
  </head>
  <body onload="coursesVisited()">
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
            <?php $page='VisitedCourses';
            include 'templates/Navigation.php';?>
            <!-- End Navigation -->
   </div>
</nav>

<!--   ---------------------- End  Navigation -----------------------    -->


<!--   ---------------------- Start Home Page About Content -----------------------    -->
<br/>
<div class="container">
<div class="col-xs-12">
<h3 class="featurette-heading">VISITED COURSES</h3>
      <hr class="featurette-divider">
</div>
</div>
<div class="container">
<div class="col-xs-12">
<div id="visitedList" class="panel panel-default">
<!--table class="table table-responsiv table-bordered">
<thead>
<tr>
<th>Course Page</th>
<th>Date</th>
<th>Start Time</th>
<th>End Time</th>
<th>IP</th>
</tr>
</thead>
<tbody>
<tr>
<td>Farm Pond</td>
<td>20/04/2015</td>
<td>17:25:20</td>
<td>20:25:20</td>
<td>10.10.10.4</td>
</tr>
<tr class="info">
<td>Deep Ploughing</td>
<td>22/04/2015</td>
<td>18:25:20</td>
<td>23:25:20</td>
<td>10.10.8.4</td>
</tr>
<tr>
<td>Diversion Canal</td>
<td>23/04/2015</td>
<td>6:25:20</td>
<td>8:12:20</td>
<td>10.10.9.4</td>
</tr>
</tbody>
</table-->
</div>
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
<footer><div class="container">&copy; 2015 Copyright | ONLINE COURSES.</div></footer>

</div>
      
      
<!--   ---------------------- End Footer Page Content -----------------------    -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-1.11.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>