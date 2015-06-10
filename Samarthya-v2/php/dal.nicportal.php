<?php
session_start();
require 'database.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of dal
 *
 * @author user1
 */
define("SERVER_NAME_NIC","localhost:3306",true);
define("DB_NAME_NIC","nicportal",true);
define("DB_USER_NIC","root",true);
define("DB_PASSWORD_NIC","@anupanup123",true);


class nicportal {
   
    function addUserData($userName, $firstName, $lastName, $staffId, $designation, $email_Id, $phoneNumber)
    {
        $sql="INSERT INTO `nicdata`(`userName`, `firstName`, `lastName`, `staffId`, `designation`, `email_Id`,`phoneNumber`) ";
        $sql.="VALUES ('".$userName."','".$firstName."','".$lastName."','".$staffId."','".$designation."','".$email_Id."','".$phoneNumber."')";
        
        echo $sql;
        $conn = new mysqli(constant("SERVER_NAME_NIC"),
                           constant("DB_USER_NIC"), 
                           constant("DB_PASSWORD_NIC"), 
                           constant("DB_NAME_NIC"));
        if ($conn->connect_error) {   die("Connection failed: " . $conn->connect_error); } 

        if ($conn->multi_query($sql) === true) { $result="Success";}
        $conn->close();
    }
    
    function getUserData($phoneNumber)
    {
        $sql="SELECT * FROM `nicdata` WHERE `phoneNumber`='".$phoneNumber."'";
    
        $conn = new mysqli(constant("SERVER_NAME_NIC"),
                           constant("DB_USER_NIC"), 
                           constant("DB_PASSWORD_NIC"), 
                           constant("DB_NAME_NIC"));
        if ($conn->connect_error) {   die("Connection failed: " . $conn->connect_error); } 

        $result = mysqli_query($conn, $sql); 
        $json="";
         if (!$result) {   die("Invalid query: " . mysqli_error($conn));  }
         else 
		 {
        $rows= array();
        while($row = $result->fetch_assoc())
             $rows[] = $row;
	/*	$rows = mysqli_fetch_all($result, MYSQLI_ASSOC); */
			$json = json_encode($rows);//This function returns the JSON representation of a value on success or FALSE on failure.	
         }
		 mysqli_free_result($result); //The mysqli_free_result() function frees the memory associated with the result
        $conn->close();
        $dejson=json_decode($json);
        $_SESSION["GET_USERNAME"]=$dejson[0]->{'userName'};
        $_SESSION["GET_FIRSTNAME"]=$dejson[0]->{'firstName'};
        $_SESSION["GET_LASTNAME"]=$dejson[0]->{'lastName'};
        $_SESSION["GET_STAFFID"]=$dejson[0]->{'staffId'};
        $_SESSION["GET_DESIGNATION"]=$dejson[0]->{'designation'};
        $_SESSION["GET_EMAILID"]=$dejson[0]->{'email_Id'};
        $_SESSION["GET_PHONE"]=$dejson[0]->{'phoneNumber'};
        return $json;
    }
}
