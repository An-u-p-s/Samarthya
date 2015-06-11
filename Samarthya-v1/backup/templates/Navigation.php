<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
             #updatePwd { width:400px;height:220px }
             #labelPwd { color:#0033cc;font-size: 16px;margin-top:2%;margin-bottom:2%; }
             #label {  margin-top:1%;margin-bottom:1%;}
             #labelInput { margin-bottom:2%; }
             
             #PopupLogoutBackground { display: none;
                 position: fixed;top: 0%;left: 0%;
                 width: 100%;height: 100%;
                 background-color: #888888;
                 z-index:1001;-moz-opacity: 0.8;
                 opacity:.80;filter: alpha(opacity=80);
             }
             #PopupLogoutFrontEnd {  
                overflow:hidden;display: none;position: fixed;
                margin-left:20%;  margin-top: 180px;
                width: 55%;
                padding: 16px;border: 4px solid #C75314;
                border-bottom-left-radius: 5px;
                border-bottom-right-radius: 5px;
                border-top-left-radius: 5px;
                box-shadow: 10px 10px 5px #888888;
                background-color: white;
                z-index:1002;
             }
             
             @media screen and (max-width: 1440px) and (min-width:801px) {
              #PopupLogoutCloseButton{ left: 80%;}
              #PopupLogoutFrontEnd { height: 200px;}
             }
             
             @media screen and (max-width: 800px)  {  
             #PopupLogoutCloseButton{ left: 70%; }
              #PopupLogoutFrontEnd { height: 40%;}
             }
             #PopupLogoutCloseButton
            {
               height:28px;
               width:30px; 
               position:fixed;
               
               margin-top:-28px;
               z-index:-1;
               overflow: hidden;
            }
            #popLogoutcontent
            {
                margin-top: 6%;
            }
        </style>
        <script>
            
            function popupLogoutOpen()
            {
                document.getElementById("PopupLogoutFrontEnd").style.display='block';
                document.getElementById("PopupLogoutBackground").style.display='block';
            }
    
            function logout()
            {
               popupLogoutOpen();
                var content='<B>Are you sure to logout from SAMARTHYA ONLINE PORTAL?</B>';
                content+='<br/>';
                content+='<a href="php/logout.php" onclick="popupLogoutClose()">';
                content+='<input type="button" class="btn btn-danger" value="logout"/>';
                content+='</a>';
                content+='<a href="#"  onclick="popupLogoutClose()">';
                content+='<input type="button" class="btn btn-danger" value="cancel"/>';
                content+='</a>';
                document.getElementById("popLogoutcontent").innerHTML=content;

            }
            
            function popupLogoutClose()
            {
                document.getElementById("PopupLogoutFrontEnd").style.display='none';
                document.getElementById("PopupLogoutBackground").style.display='none';
            }
          function opendropdown(){
                $(".dropdown-menu").dropdown("toggle");
              }
              
              function resetPassword()
              { 
                  var pwd=document.getElementById("input-Pwd").value;
                  var repwd=document.getElementById("input-RePwd").value;
                  
                  if(pwd.length>0 && repwd.length>0)
                  {
                      if(pwd==repwd)
                      {
                           popupLogoutOpen();
                          var content='<B>Are you sure to reset your password of SAMARTHYA ONLINE PORTAL?</B>';
                            content+='<br/>';
                            content+='<a href="#" onclick="">';
                            content+='<input type="button" class="btn btn-danger" value="Yes"/>';
                            content+='</a>';
                            content+='<a href="#"  onclick="popupLogoutClose()">';
                            content+='<input type="button" class="btn btn-danger" value="cancel"/>';
                            content+='</a>';
                          document.getElementById("popLogoutcontent").innerHTML=content;
                      }
                      else
                      {
                         popupLogoutOpen();
                          var content='<B>Password and confirm password doesn\'t match. Please re-enter to reset your password of SAMARTHYA ONLINE PORTAL</B>';
   
                        document.getElementById("popLogoutcontent").innerHTML=content;
                      }
                  }
                  else
                  {
                      popupLogoutOpen();
                       var content='<B>Please enter password/confirm password to reset your password of SAMARTHYA ONLINE PORTAL</B>';
   
                        document.getElementById("popLogoutcontent").innerHTML=content;
                  }
              }
        </script>
    </head>
    <body>
        <!-- POP-UP CONTENT -->
        <div id="PopupLogoutBackground"></div> 
        <div id="PopupLogoutFrontEnd">
            <a href="#" onclick="javascript:popupLogoutClose();">
                         <img id="PopupLogoutCloseButton" src="images/stuff/button.jpg"/> 
             </a>
            <div id="popLogoutcontent" align="center" class="col-xs-12"></div>
        </div>
        
        <!-- NAVIGATION CONTENT -->
        <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                       <?php   if(isset($_SESSION[constant("SESSION_USER_USERNAME")])) { ?>
                             <?php   if($_SESSION[constant("SESSION_USER_USERNAME")]=='Administrator') { ?>
                    
                                        <!-- Page : User Details -->
                                        <?php   if($page=="UserDetails") {?>
                                                <li class="active"><a href="user-details.php">User Details</a></li>
                                        <?php } else { ?>
                                                 <li><a href="user-details.php">User Details</a></li>
                                        <?php } ?>
                                     
                                        <!-- Page : User History --->
                                        <?php   if($page=="UserHistory") {?>
                                                <li class="active"><a href="user-history.php">User History</a></li>
                                        <?php } else { ?>
                                                <li><a href="user-history.php">User History</a></li>
                                        <?php } ?>
                                                
                                        <!-- Page : AdminTestResults --->
                                        <?php   if($page=="AdminTestResults") {?>
                                              <li class="active"><a href="admin-test-results.php">User Test Results</a></li>
                                        <?php } else { ?>
                                              <li><a href="admin-test-results.php">User Test Results</a></li>
                                        <?php } ?>
                                                
                       <?php } else { ?>
                                         
                                        <!-- Page : UserLanding Page -->
                                         <?php   if($page=="Home") {?>
                                            <li class="active"><a href="user-landing.php">Home</a></li>
                                        <?php } else { ?>
                                            <li><a href="user-landing.php">Home</a></li>
                                        <?php } ?>
                                            
                                        <!-- Page : PreviousTestResults --->
                                        <?php   if($page=="PreviousTestResults") {?>
                                             <li class="active"><a href="previous-test-results.php">Test Results</a></li>
                                        <?php } else { ?>
                                             <li><a href="previous-test-results.php">Test Results</a></li>
                                        <?php } ?>
                                             
                       <?php  } ?>

                       <?php   if($_SESSION[constant("SESSION_USER_USERNAME")]=='Administrator') { ?>
                                        
                                             <!-- Page : Manage Courses -->
                                             <?php   if($page=="ManageCourses") {?>
                                                    <li class="active"><a href="manage-courses.php">Manage Courses</a></li>
                                             <?php } else { ?>
                                                    <li><a href="manage-courses.php">Manage Courses</a></li>
                                             <?php } ?>
                                                    
                                              <!-- Page : Manage Tests -->  
                                              <?php   if($page=="ManageTest") {?>
                                                    <li class="active"><a href="manage-onlinetest.php">Manage Tests</a></li>
                                              <?php } else { ?>
                                                    <li><a href="manage-onlinetest.php">Manage Tests</a></li>
                                              <?php } ?>
                                                        
                        <?php } else {?>
                                           <!-- Page : Visited Courses --> 
                                            <?php   if($page=="VisitedCourses") {?>
                                                    <li class="active"><a href="visited-courses.php">Visited Courses</a></li>
                                            <?php } else { ?>
                                                    <li><a href="visited-courses.php">Visited Courses</a></li>
                                            <?php } ?>     
                                         
                                        <?php  } ?>
                        
                         <?php  } else { ?>
                                    
                             <!-- Page : Index Page -->
                               <?php if($page=="Index") { ?>
                                  <li class="active"><a href="index.php">Home</a></li>
                               <?php } else { ?>  
                                  <li><a href="index.php">Home</a></li> 
                               <?php } ?>
                                 
                                 
                             <!-- Page : Reports -->
                             <?php if($page=="Report") { ?>
                                <li class="active"><a href="reports.php">Reports</a></li>
                               <?php } else { ?>
                                <li><a href="reports.php">Reports</a></li>
                               <?php } ?>
                         <?php } ?>
                </ul>
             <?php  if(isset($_SESSION[constant("SESSION_USER_USERNAME")])) { ?>
                 <ul class="nav navbar-nav navbar-right right-margin">
             
             
             
                 <li class="user-info">Welcome  <span class="user-name"><?php if(isset($_SESSION[constant("SESSION_USER_USERNAME")])) echo $_SESSION[constant("SESSION_USER_USERNAME")]; ?></span></li>
                 <li><a href="#" onclick="logout();">Logout</a></li>
                 
                 <li class="active dropdown"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false"><span class="icon-cog"></span>Settings<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu" data-toggle="dropdown">
                         <li class="mychangedrop">
                            <a href="#" data-toggle="dropdown" role="button" aria-expanded="false">
                                <!-- Update Password -->
                                 <div id="updatePwd" style="">
                                        <div id="labelPwd" align="center" class="col-xs-12"><B> Change Password </B> </div>
                                        <div id="label" class="col-xs-12"><B> Password </B> </div>
                                        <div id="labelInput" class="col-xs-12">
                                            <input id="input-Pwd"  type="password" class="form-control" placeholder="Enter password ... " onclick="opendropdown()"/>
                                        </div>
                                        <div  id="label" class="col-xs-12"><B> Re-enter Password </B> </div>
                                        <div  id="labelInput" class="col-xs-12">
                                           <input id="input-RePwd" type="password" class="form-control" placeholder="Enter Re-enter password ... "  onclick="opendropdown()"/>
                                        </div>
                                        <div  id="label" class="col-xs-12">
                                            <input type="button" class="btn btn-danger pull-right" value="Reset Password" onclick="javascript:resetPassword()"/>
                                        </div>
                                 </div>
                            </a>
                         </li>
                    </ul>
                </li>
          </ul>
            <?php  } else { ?>
           <ul class="nav navbar-nav navbar-right right-margin">
            <li class="active"><a href="index.php"><span class="icon-login"></span>Login</a></li>
            <li class="separator"></li>
            <li class="active"><a href="index.php"><span class="icon-signup"></span>Sign Up</a></li>
         </ul>
           <?php } ?>
      </div>
        
         
    </body>
</html>
