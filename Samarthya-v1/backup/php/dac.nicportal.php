<?php
require 'dal.nicportal.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$action=$_GET["action"];

if($action=='CheckUser')
{
    $phoneNumber=$_GET["phoneNumber"];
    $portal=new nicportal();
    $json=$portal->getUserData($phoneNumber);
    echo $json;
}
else if($action=='AddUser')
{
    $userName=$_GET["addUser-userName"];
    $firstName=$_GET["addUser-firstName"];
    $lastName=$_GET["addUser-lastName"]; 
    $staffId=$_GET["addUser-staffId"];
    $designation=$_GET["addUser-designation"];
    $email_Id=$_GET["addUser-email_Id"];
    $phoneNumber=$_GET["addUser-phoneNumber"];
    
    $portal=new nicportal();
    $portal->addUserData($userName, $firstName, $lastName, $staffId, $designation, $email_Id, $phoneNumber);
    
    header("location:../AddPortal.php?result=Success");
}
