<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

header('Content-type: application/excel');  
header("Content-Disposition: attachment;Filename=user-history-".date('d-m-Y').".csv");


require_once 'dal.courses.php';

$response="S. NO.".",";
$response.="USERNAME".",";
$response.="VIEWED DATE".",";
$response.="VIEWED TIME".",";
$response.="COURSENAME".",";
$response.="DESCRIPTION".",";
$response.="IPADDRESS"."\n";

// $response="[";
    $course=new Courses();
    $json=$course->getAdminCourseLogs();
    $dejson=  json_decode($json);
    
    for($ind=0;$ind<count($dejson);$ind++)
    {
        $response.=$ind.",";       
        $response.=$dejson[$ind]->{'firstName'}." ".$dejson[$ind]->{'lastName'}.",";
        $response.=$dejson[$ind]->{'date'}.",";
        $response.=$dejson[$ind]->{'startTime'}.",";
        $response.=$dejson[$ind]->{'course'}.",";
        $response.=$dejson[$ind]->{'status'}.",";
        $response.=chop($dejson[$ind]->{'IPAddress'},"%0A")."\n";
    }
    
  //   $responsive.="]";
    echo $response; 
   