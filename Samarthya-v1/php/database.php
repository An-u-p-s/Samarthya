<?php
 require 'define.php';

class Utils
{
    function randomNumber($size)
    {
        $num="";
        for($index=0;$index<$size;$index++)
        {
            $num.=rand(1,9);
        }
        return $num;
    }
}

class InteractDatabase
{
    
    function dbinteraction()
    {
        $conn = new mysqli(constant("SERVER_NAME"),
                
                           constant("DB_USER"), 
                           constant("DB_PASSWORD"), 
                           constant("DB_NAME"));
        if ($conn->connect_error) {   die("Connection failed: " . $conn->connect_error); } 
        return $conn;
    }
    
    function getData($sql)
    {
        $db=new interactDatabase();
        $conn = $db->dbinteraction();
        $result = $conn->query($sql);
        $conn->close();
        return $result;
    }
    
    function addupdateData($sql)
    {
       $result="Error";
       $db=new interactDatabase();
       $conn = $db->dbinteraction();
       if ($conn->multi_query($sql) === true) { $result="Success";}
       $conn->close();
       return $result;
    }
   
    function getJSONData($sql)
    {
        $db=new interactDatabase();
        $conn = $db->dbinteraction();
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
        return $json;
    }
    
   function getSharedServerJSONData($sql)
    {
        $db=new interactDatabase();
        $conn = $db->dbinteraction();
        
        $arr = array();
        $result = mysqli_query($conn,$sql);
        $totalrecords = mysqli_num_rows($result);
        while($row = mysqli_fetch_assoc($result)) {
            $arr[] = $row;
         }

        
       $json=json_encode($arr, true);

        
        $conn->close();
        return $json;
    }
    
}
 
$db=new InteractDatabase();
$db->dbinteraction();