<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$action=$_GET["action"];
if($action=='GetUserIP')
{
    $ipaddress=@file_get_contents('http://www.telize.com/ip');
    if($ipaddress==false)
    {
       echo "---"; 
    }
    else
    {
        echo $ipaddress;
    }
}
