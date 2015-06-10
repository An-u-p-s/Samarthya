<?php session_start();
 require 'php/define.php';
 if(isset($_SESSION[constant("SESSION_USER_USERNAME")]) && $_SESSION[constant("SESSION_USER_USERNAME")]=='Administrator')
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
    <script src="js/timer.js"></script>
    <style>
        #submitButton
        {
            margin-left:1%;
            float:left;
        }
        .questions-text, .text-muted
        {
           margin-bottom:2%; 
        }
    </style>
    <script type="text/javascript">
        function pageOnload()
        {
            // Getting Course list
            var result="";
                 $.ajax({type: "GET", 
                                    async: false,
                                    url: 'php/dac.courses.php',
                                    data: { 
                                        action : 'courseListOnly',
                                  
                                    },
                                    success: function(resp)
                                    {
                                          result=resp;
                                    }
                                   });
                                   
            console.log("result : "+result);
           var res=JSON.parse(result);
           
           var courseList=document.getElementById("courseList");
           
           var p_option = document.createElement("option");
			 p_option.id = "";
			p_option.text = "Select a Course";
			p_option.value = "";
			courseList.add(p_option);
           for(var ind=0;ind<res.length;ind++)
           {
                var option = document.createElement("option");
			option.id = res[ind].courseName;
			option.text = res[ind].courseName;
			option.value = res[ind].courseName;
			courseList.add(option);
               console.log("courseName : "+res[ind].courseName);
           }
        }
        
        function AddQuestionOnSubmit()
        {
            var courseList=document.getElementById("courseList").value;
            
            var test=[];
            var answer;
            var c_preTest=document.getElementById("C_PreTest");
            var c_postTest=document.getElementById("C_PostTest");
            
            var addQuestion=document.getElementById("AddQuestion");
            var t_option1=document.getElementById("T_Option1");
            var t_option2=document.getElementById("T_Option2");
            var t_option3=document.getElementById("T_Option3");
            var t_option4=document.getElementById("T_Option4");
            
            var c_option1=document.getElementById("C_Option1");
            var c_option2=document.getElementById("C_Option2");
            var c_option3=document.getElementById("C_Option3");
            var c_option4=document.getElementById("C_Option4");
            
            var act=document.getElementById("activeQuestion");
            var active='0';
            
            if(act.checked)
            {
                active='1';
            }
            
            if(c_preTest.checked)
            {
               test.push(c_preTest.value); 
            }
            if(c_postTest.checked)
            {
               test.push(c_postTest.value); 
            }
            
            if(c_option1.checked)
            {
               answer=t_option1.value;
            }
            if(c_option2.checked)
            {
               answer=t_option2.value;
            }
             if(c_option3.checked)
            {
               answer=t_option3.value;
            }
             if(c_option4.checked)
            {
               answer=t_option4.value;
            }
            
            console.log("courseList : "+courseList);
            console.log("test : "+test);
            console.log("addQuestion : "+addQuestion.value); 
            console.log("t_option1 : "+t_option1.value);
            console.log("t_option2 : "+t_option2.value);
            console.log("t_option3 : "+t_option3.value);
            console.log("t_option4 : "+t_option4.value);
            console.log("answer : "+answer);
            
            // AdminAddQuestions
            
             var result="";
                 $.ajax({type: "GET", 
                                    async: false,
                                    url: 'php/dac.questions.php',
                                    data: { 
                                        action : 'AdminAddQuestions',
                                        courseList : courseList,
                                        testList:test,
                                        addQuestion : addQuestion.value,
                                        t_option1:t_option1.value,
                                        t_option2 : t_option2.value,
                                        t_option3 : t_option3.value,
                                        t_option4 : t_option4.value,
                                        answer : answer,
                                        active : active
                                    },
                                    success: function(resp)
                                    {
                                          result=resp;
                                    }
                                   });
               console.log("Data : "+result);
            
            // Clear Fields
             c_preTest.checked=false;
             c_postTest.checked=false;
            
             addQuestion.value='';
             t_option1.value='';
             t_option2.value='';
             t_option3.value='';
             t_option4.value='';
            
             c_option1.checked=false;
             c_option2.checked=false;
             c_option3.checked=false;
             c_option4.checked=false;
            
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
<!--h5 class="featurette-heading"> ONLINE TEST :
    <span class="text-muted">
   Add-A-QUESTION:
    </span>
</h5-->
     <hr class="featurette-divider">
</div>
</div>
<div class="container">
<div class="col-xs-12">
   <div class="row featurette">
      <div class="col-md-8">
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
     <input type="submit"  id="submitButton" class="btn btn-default pull-right" value=" Submit " onclick="AddQuestionOnSubmit()" >	
	<!--/form-->
    <br/>
      </div>
      <div class="col-md-4"><img class="featurette-image img-responsive center-block" src="images/post-test-img.jpg" alt="Post Test Image"></div>
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
<footer><div class="container">&copy; 2015 Copyright | ONLINE COURSES.</div></footer>

</div>

<!--   ---------------------- End Footer Page Content -----------------------    -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-1.11.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
<?php } else {     header("location:index.php"); } ?>