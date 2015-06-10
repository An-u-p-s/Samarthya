<?php
session_start();
require 'define.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$action=$_GET["action"];
if($action=='SetCourseSession')
{
    $courseName=$_GET["courseName"];
    $courseId=$_GET["courseId"];
    $_SESSION[constant("SESSION_COURSENAME")]=$courseName;
    $_SESSION[constant("SESSION_COURSEID")]=$courseId;  
}
else if($action=='SetCourseId')
{
    
}

else if($action=='SetRegStep1')
{
    $state=$_GET["signup_state"];
    $phone=$_GET["signup_phone"];
    $_SESSION[constant("SESSION_SIGNUP_STATE")]=$state;
    $_SESSION[constant("SESSION_SIGNUP_PHONENUMBER")]=$phone;
}
