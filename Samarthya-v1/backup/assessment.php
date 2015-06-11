<?php session_start();
 require 'php/define.php';
 if(isset($_SESSION[constant("SESSION_USER_USERNAME")]) && isset($_SESSION[constant("SESSION_COURSENAME")]))
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
    <script src="js/popup.js"></script>
    <link href="css/popup.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="js/timer.js"></script>
    <style>
        #prevButton, #NextButton, #submitButton
        {
            display: none;margin-left:1%;
            float:left;
        }
    </style>
    <script type="text/javascript">
        var q_json;
        var q_cindex;  // currentIndex
        var q_lindex;  // lastIndex
        
        var q_qId;
        var q_answer=[];
        var q_quesId=[];
        function submitAnswers()
        {
            document.getElementById("submitButton").style.display='none';
            answerpicker();
            console.log("q_quesId : "+q_quesId);
            console.log("q_answer : "+JSON.stringify(q_answer));
            var result="";
                 $.ajax({type: "GET", 
                                    async: false,
                                    url: 'php/dac.questions.php',
                                    data: { 
                                        action : 'SendAnswers',
                                        testType :'Assessment',
                                        questions : q_quesId,
                                        answers : JSON.stringify(q_answer)
                                    },
                                    success: function(resp)
                                    {
                                          result=resp;
                                    }
                                   });
               console.log("answers : "+result);
               
            window.location.href='previous-test-results.php';
        }
         
            
        function answerpicker()
        {
            var q_ans='';
           
            var q_ansId1=document.getElementById("q_answer1");
            var q_ansId2=document.getElementById("q_answer2");
            var q_ansId3=document.getElementById("q_answer3");
            var q_ansId4=document.getElementById("q_answer4");
            
            if(q_ansId1.checked) {  q_ans=q_ansId1.value; }
            if(q_ansId2.checked) {  q_ans=q_ansId2.value; }
            if(q_ansId3.checked) {  q_ans=q_ansId3.value; }
            if(q_ansId4.checked) {  q_ans=q_ansId4.value; }
            
            if(q_ans.length===0)
            {
                popupOpen();
                document.getElementById("popcontent").innerHTML='<h3>Please Select any Answer</h3>'
            }
            else
            {
                // Updating it into an JSON Array
               // console.log("q_ans : "+q_ans);
               // console.log("q_qId : "+q_qId);
               // console.log("Answer Count : "+q_answer.exam.length);
                
                if(q_answer.length>0)
                {
                    var flag=false;
                    var ans_index;
                    // Check for Already existing Question
                    for(var loop=0;loop<q_answer.length;loop++)
                    {
                        // Updating Answers to existing QuestionId's
                        if(q_answer[loop].QuestionId===q_qId)
                        { 
                           flag=true; 
                           ans_index=loop;
                        }
                    }
                   if(flag){
                    q_answer[ans_index].UserAnswer=q_ans;
                }
                else {
                   // Adding Answers to QuestionId's
                    var menuData={"QuestionId":q_qId, "UserAnswer":q_ans};
                    q_answer.push(menuData); 
                }
                }
                else
                {
                    // Adding Answers to QuestionId's
                    var menuData={"QuestionId":q_qId, "UserAnswer":q_ans};
                    q_answer.push(menuData); 
                }
                
                 
                 
                 console.log("Answer Array : "+JSON.stringify(q_answer));
                nextQuestionView();
            }
            
        }
        
        
        
        function pageOnload()
        {
            q_cindex=0;
            testReady();
            currentQuestionView();
          
             
            
        }
        function previousQuestionView()
        {
            q_cindex=q_cindex-1;
          //  console.log("current q : "+q_cindex);
            currentQuestionView();
        }
        function nextQuestionView()
        {
          //  console.log("Total : "+q_lindex);
           
            q_cindex++;
            currentQuestionView();
            
        }
        function currentQuestionView()
        {
            var qNumber=q_cindex+1;
            document.getElementById("qNum").innerHTML='Q'+qNumber+':';
            if(q_cindex===0)
                  {
                      document.getElementById("prevButton").style.display='none';
                      document.getElementById("NextButton").style.display='block';
                      document.getElementById("submitButton").style.display='none';
                  }
            if((q_lindex-1)==q_cindex)
                 {
                      document.getElementById("prevButton").style.display='block';
                      document.getElementById("NextButton").style.display='none';
                      document.getElementById("submitButton").style.display='block';
                  
                 }
             if(q_cindex>0 && q_cindex<(q_lindex-1))
             {
                      document.getElementById("prevButton").style.display='block';
                      document.getElementById("NextButton").style.display='block';
                      document.getElementById("submitButton").style.display='none';
             }
            if(q_cindex<q_lindex)
            {
                document.getElementById("qtest-question").innerHTML=q_json[q_cindex].question;
            
                q_qId=q_json[q_cindex].idTestQuestions;
                q_quesId.push(q_qId);
             //  console.log("QuestionId "+q_json[q_cindex].idTestQuestions);
                var options='';
                    options+='<div class="radio">';
                    options+='<label><input type="radio" name="quiz" id="q_answer1" value="'+q_json[q_cindex].option1+'">'+q_json[q_cindex].option1+'</label>';
                    options+='</div>';
                    options+='<div class="radio">';
                    options+='<label><input type="radio" name="quiz" id="q_answer2" value="'+q_json[q_cindex].option2+'">'+q_json[q_cindex].option2+'</label>';
                    options+='</div>';
                    options+='<div class="radio">';
                    options+='<label><input type="radio" name="quiz" id="q_answer3" value="'+q_json[q_cindex].option3+'">'+q_json[q_cindex].option3+'</label>';
                    options+='</div>';
                    options+='<div class="radio">';
                    options+='<label><input type="radio" name="quiz" id="q_answer4" value="'+q_json[q_cindex].option4+'">'+q_json[q_cindex].option4+'</label>';
                    options+='</div>';
                
                    document.getElementById("qtest-option").innerHTML=options;
                   // console.log("question : "+q_json[q_cindex].question);
                   // console.log("option1 : "+q_json[q_cindex].option1);
                   // console.log("option2 : "+q_json[q_cindex].option2);
                   // console.log("option3 : "+q_json[q_cindex].option3);
                   // console.log("option4 : "+q_json[q_cindex].option4);
        
                    }
                    
                    var q_ansId1=document.getElementById("q_answer1");
                    var q_ansId2=document.getElementById("q_answer2");
                    var q_ansId3=document.getElementById("q_answer3");
                    var q_ansId4=document.getElementById("q_answer4");
         
                  // Check Already Selected 
                  for(var viewIndex=0;viewIndex<q_answer.length;viewIndex++)
                  {
                      if(q_answer[viewIndex].QuestionId===q_qId)
                      {
                          if(q_ansId1.value==q_answer[viewIndex].UserAnswer)
                          {
                              q_ansId1.checked=true;
                          }
                          if(q_ansId2.value==q_answer[viewIndex].UserAnswer)
                          {
                              q_ansId2.checked=true;
                          }
                          if(q_ansId3.value==q_answer[viewIndex].UserAnswer)
                          {
                              q_ansId3.checked=true;
                          }
                          if(q_ansId4.value==q_answer[viewIndex].UserAnswer)
                          {
                              q_ansId4.checked=true;
                          }
                      }
                  }
                
           // qNum
           // qtest-question
        }
        function testReady()
        {
           var courseName='<?php if(isset($_SESSION[constant("SESSION_COURSENAME")])) echo $_SESSION[constant("SESSION_COURSENAME")]; ?>'; 
           
            var result="";
                 $.ajax({type: "GET", 
                                    async: false,
                                    url: 'php/dac.questions.php',
                                    data: { 
                                        action : 'TestDetails',
                                        testType:'Assessment',
                                        courseName : courseName
                                    },
                                    success: function(resp)
                                    {
                                          result=resp;
                                    }
                                   });
                 // console.log("result : "+result); 
                  var res=JSON.parse(result);
                  
                  var tqnum=res[0].totalquestions;
                  var tdId=res[0].idTestDetails;
                  var time=res[0].testTime;
                  
                    var t=time.split(":"); 
                  var hour=t[0];
                  var min=t[1];
                  var sec=t[2];
                  
                 
                  
                  timeloader(hour,min, sec);
                  
              var c_resp="";
              $.ajax({type: "GET", 
                                    async: false,
                                    url: 'php/dac.courses.php',
                                    data: { 
                                        action : 'GetCourseId',
                                        courseName : courseName
                                    },
                                    success: function(resp)
                                    {
                                          c_resp=resp;
                                    }
                                   });
                
                  var qres="";
                  $.ajax({type: "GET", 
                                    async: false,
                                    url: 'php/dac.questions.php',
                                    data: { 
                                        action : 'GetQuestions',
                                        TestDetailsID : c_resp,
                                        qtotal :tqnum
                                    },
                                    success: function(resp)
                                    {
                                          qres=resp;
                                    }
                                   });
                  console.log("result : "+qres); 
                  q_json=JSON.parse(qres);
                  q_lindex=q_json.length;
        }
    </script>
  </head>
<body onload="pageOnload()">

     <div id="PopupAudioBackground"></div> 
        <div id="PopupAudioFrontEnd">
            <a href="#" onclick="javascript:popupClose();">
                         <img id="PopupAudioCloseButton" src="images/stuff/button.jpg"/> 
             </a>
            <div id="popcontent" align="center" class="col-xs-12"></div>
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
<h3 class="featurette-heading">COURSE-1:
    <span class="text-muted">
    <?php if(isset($_SESSION[constant("SESSION_COURSENAME")])) echo $_SESSION[constant("SESSION_COURSENAME")]; ?> 
        (ASSESSMENT)
    </span>
   
    <div id="countdowntimer" class="time-left pull-right">Time Left: <span id="future_date" class="text-muted"></span></div></h3>
      <hr class="featurette-divider">
</div>
</div>
<div class="container">
<div class="col-xs-12">
   <div class="row featurette">
      <div class="col-md-8">
          
            <span id="qNum" class="text-muted"></span>
            
            <div id="qtest-question" class="questions-text"></div>
            
            <!--form role="form" name="quizform" action="quiztest.asp?qtest=HTML" method="post"-->
                <div id="qtest-option" class="multiple-choice">
                   
                </div>
	<br>
    <input type="submit"   id="prevButton" class="btn btn-default" value=" Previous " onclick="previousQuestionView()">
	<input type="button"  id="NextButton" class="btn btn-default" value=" Next " onclick="answerpicker();">
    <input type="submit"  id="submitButton" class="btn btn-default" value=" Submit " onclick="submitAnswers()" >	
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
<?php } else {     header("location:user-landing.php"); } ?>