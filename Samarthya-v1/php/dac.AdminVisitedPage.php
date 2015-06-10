<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once 'dal.courses.php';

  $response="{ \"data\":[";
// $response="[";
    $course=new Courses();
    $json=$course->getAdminCourseLogs();
    $dejson=  json_decode($json);
    
    for($ind=0;$ind<count($dejson);$ind++)
    {
        $response.="[";       
        $response.="\"".$dejson[$ind]->{'firstName'}." ".$dejson[$ind]->{'lastName'}."\",";
        $response.="\"".$dejson[$ind]->{'date'}."\",";
        $response.="\"".$dejson[$ind]->{'startTime'}."\",";
        $response.="\"".$dejson[$ind]->{'course'}."\",";
        $response.="\"".$dejson[$ind]->{'status'}."\",";
        $response.="\"".chop($dejson[$ind]->{'IPAddress'},"%0A")."\"],";
    }
    
     $responsive=chop($response, ",");
    $responsive.="]}";
  //   $responsive.="]";
    echo $responsive; 
    
    // File Write
  //  $defineFile=fopen("../testing", "w") or die("Unable to open file!"); 
    //     fwrite($defineFile, $responsive);
    