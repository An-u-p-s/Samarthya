<?php
// session_start();
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require 'dal.useraccounts.php';
require 'msgconnectivity.php';

$action=$_GET["action"];
if($action=='loginUser')
{
    $userName=$_GET["login_user"];
    $pwd=$_GET["login_pwd"];
    
    if(strlen($userName)>0 && strlen($pwd)>0)
    {
         $acc=new UserAccounts();
         $res=$acc->getloginSession($userName, $pwd);
         echo $res;
    }
    else
    {
        echo "NoUser";
    }   
}
else if($action=='SendMessage')
{
    $state=$_GET["signup_state"];
    $sendPhone=$_GET["sendPhone"];
    $staffID='0000';
    $otpCount='0';
    $util=new Utils();
    $msgObj=new MobileMsg();
    
    $otpNum=$util->randomNumber(6);
    $otpMsg=$msgObj->otpMessage($otpNum);
    
    // Send Message
     $content=$msgObj->sendPhoneMessage($sendPhone, $otpMsg);
 //    echo $content;
    // Insert into Database
    $acc=new UserAccounts();
    $reqId=$acc->registerByStateAndPhone($sendPhone, $state, $staffID);

    
    
    $acc->addOTPatRegister($otpNum, $reqId, $otpCount);
    
    echo $reqId;
}
else if($action=='validateOTP')
{
    $otpNum=$_GET["otpNumber"];
    $regID=$_GET["regId"];
    
    $acc=new UserAccounts();
    $result=$acc->validateOTP($otpNum, $regID);
    
    echo $result;
}
else if($action=='updateRegistration')
{
    $util=new Utils();
     $regId=$_GET["regId"]; 
     $username=$_GET["uName"];
     $d_pwd=$util->randomNumber(10);
     $password=md5($d_pwd); 
     $firstName=$_GET["fName"]; 
     $lastName=$_GET["lName"]; 
     $staffID=$_GET["staffId"]; 
     $emailID=$_GET["email"];  
     $designation=$_GET["designation"];
     $active='0'; 
     
     $acc=new UserAccounts();
     $acc->updateSignup($regId, $username, $password, $firstName, $lastName, $staffID,$emailID, $designation, $active);  
     
     $emsg=new EmailMsg();
     $emailMsg=$emsg->signupGreeting($username, $d_pwd);
     mail($emailID,"Samarthya Online learning Portal ::: Signup Process",$emailMsg);
}

/* User Details : Page */
else if($action=='getUserDetails')
{
  $data="{\"data\": [";
  
    $acc=new UserAccounts();
    $json=$acc->adminGetUserDetails();
  
    //echo $json;
    $dejson=json_decode($json);
   
    for($ind=0;$ind<count($dejson);$ind++)
    {
        $data.="[";       
        $data.="\"".$dejson[$ind]->{'firstName'}." ".$dejson[$ind]->{'lastName'}."\",";
        $data.="\"".$dejson[$ind]->{'designation'}."\",";
        $data.="\"".$dejson[$ind]->{'staffID'}."\",";
        $data.="\"".$dejson[$ind]->{'mobile'}."\",";
        $data.="\"".$dejson[$ind]->{'state'}."\"";
        $data.="],";
    }
    $data=chop($data, ",");
    $data.="]}";
    echo $data;
}

else if($action=='getUserDetailsDesignationFilter')
{
  
    $acc=new UserAccounts();
    $json=$acc->adminGetUserDetailsDesignation();
    echo $json;

}


else if($action=='getUserDetailsStateFilter')
{
  
    $acc=new UserAccounts();
    $json=$acc->adminGetUserDetailsState();
    echo $json;

}


else if($action=='sendForgotPassword')
{
     $acc=new UserAccounts();
     $util=new Utils();
     
    $email=$_GET["email"];
    $newpwd=$util->randomNumber(10);
   
    $json=$acc->updatePassword($email, md5($newpwd));
    
    $dejson=  json_decode($json);
    $username=$dejson->{'username'};
    
    $msging=new EmailMsg();
    $emailMsg=$msging->forgotPassword($username,$email, $password);
     mail($email,"Samarthya Online learning Portal ::: Forgot Password",$emailMsg);
}


/* Admin Portal */
else if($action=='GetUserReports')
{
    $acc=new UserAccounts();
    $json=$acc->userCourseReports();
    
    $dejson=json_decode($json);
   $data="{\"data\": [";
    for($ind=0;$ind<count($dejson);$ind++)
    {
        $data.="[";       
        $data.="\"".$dejson[$ind]->{'firstName'}." ".$dejson[$ind]->{'lastName'}."\",";
        $data.="\"".$dejson[$ind]->{'designation'}."\",";
        $data.="\"".$dejson[$ind]->{'state'}."\",";
        $data.="\"".$dejson[$ind]->{'courseName'}."\",";
        $data.="\"".$dejson[$ind]->{'testType'}."\",";
        $data.="\"".$dejson[$ind]->{'marksResults'}."\",";
        $data.="\"".$dejson[$ind]->{'ExamStatus'}."\"";
        $data.="],";
    }
    $data=chop($data, ",");
      $data.="]}";
    echo $data;
}

else if($action=='GetUserReportDesignationFilter')
{
    $acc=new UserAccounts();
    $json=$acc->userCourseDesignationReports();
    echo $json;
}

else if($action=='GetUserReportStateFilter')
{
    $acc=new UserAccounts();
    $json=$acc->userCourseStateReports();
    echo $json;
}

else if($action=='GetUserReportCourseNameFilter')
{
    $acc=new UserAccounts();
    $json=$acc->userCourseCourseNameReports();
    echo $json;
}



else if($action=='GetAdminUserReports')
{
    $acc=new UserAccounts();
    $json=$acc->userCourseReports();
    
    $dejson=json_decode($json);
   $data="{\"data\": [";
    for($ind=0;$ind<count($dejson);$ind++)
    {
        $data.="[";       
        $data.="\"".$dejson[$ind]->{'firstName'}." ".$dejson[$ind]->{'lastName'}."\",";
        $data.="\"".$dejson[$ind]->{'designation'}."\",";
        $data.="\"".$dejson[$ind]->{'courseName'}."\",";
        $data.="\"".$dejson[$ind]->{'testType'}."\",";
        $data.="\"".$dejson[$ind]->{'marksResults'}."\"";
        $data.="],";
    }
    $data=chop($data, ",");
      $data.="]}";
    echo $data;
}