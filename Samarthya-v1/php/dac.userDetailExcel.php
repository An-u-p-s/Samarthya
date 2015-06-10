<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require 'dal.useraccounts.php';

header('Content-type: application/excel');  
header("Content-Disposition: attachment;Filename=user-details-".date('d-m-Y').".csv");

 $data="NAME".",";
 $data.="DESIGNATION".",";
 $data.="STAFF-ID".",";
 $data.="MOBILE".",";
 $data.="STATE"."\n";
    
    $acc=new UserAccounts();
    $json=$acc->adminGetUserDetails();
  
    //echo $json;
    $dejson=json_decode($json);
   
    for($ind=0;$ind<count($dejson);$ind++)
    {       
        $data.=$dejson[$ind]->{'firstName'}." ".$dejson[$ind]->{'lastName'}.",";
        $data.=$dejson[$ind]->{'designation'}.",";
        $data.=$dejson[$ind]->{'staffID'}.",";
        $data.=$dejson[$ind]->{'mobile'}.",";
        $data.=$dejson[$ind]->{'state'}."\n";
    }
    echo $data;