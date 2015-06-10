<?php
session_start();
 require 'database.php';
/* 
 * UserAccounts Class includes userregistration table, userlogin table
 */

class UserAccounts
{
    /* USER REGISTRATION FORM */
    /* Account creation : Insertion */
    function checkPhoneExist($mobile)
    {
         $result="NotExist";
         $sql="SELECT * FROM `userregistration` WHERE `mobile`='".$mobile."'";
         $dbObj=new InteractDatabase();
                 $res = $dbObj->getData($sql);

                if ($res->num_rows > 0) {
                    $result="Exist";
                }
               return $result;
    }
    
    function checkRegIDExist($reg)
    {
         $result="NotExist";
         $sql="SELECT * FROM `userlogin` WHERE `idUserRegistration`=".$reg.";";
         $dbObj=new InteractDatabase();
                 $res = $dbObj->getData($sql);

                if ($res->num_rows > 0) {
                    $result="Exist";
                }
               return $result;
    }
    
    function registerByStateAndPhone($mobile, $state, $staffID)
    /* It returns Primary Key */
    {
       
        
        $dbObj=new InteractDatabase();
        $acc=new UserAccounts();
        
        // Check Already PhoneNumber exist or not
       $result=$acc->checkPhoneExist($mobile);
       if($result=='NotExist')
        {
           
            $isql="INSERT INTO `userregistration`(`mobile`, `state`, `staffID`) VALUES ('".$mobile."','".$state."', '".$staffID."')";
            $dbObj->addupdateData($isql);    
        }
        
        $ssql="SELECT idUserRegistration FROM `userregistration` WHERE mobile='".$mobile."';";
        $json=$dbObj->getJSONData($ssql); 
        $dejson=json_decode($json);
       
         $regId=$dejson[0]->{'idUserRegistration'};
        return $regId;
    }
    
    function addOTPatRegister($otpNum, $regId, $otpCount)
    {
        $dbObj=new InteractDatabase();
        $acc=new UserAccounts();
        
        // Check Already Registration Number exist or not
       $result=$acc->checkRegIDExist($regId);
       if($result=='NotExist' && $regId!=0)
        {
           $sql="INSERT INTO `userlogin`(`idUserRegistration`, `OTPCode`, `OTPCount`) VALUES (".$regId.",'".$otpNum."','".$otpCount."')";
           $dbObj->addupdateData($sql);
        }
        else
        {
           // Get OTPCount
            $gsql="SELECT OTPCount FROM `userlogin` WHERE `idUserRegistration`=".$regId; 
            $json=$dbObj->getJSONData($gsql); 
            $dejson=json_decode($json);
            $otpcount=$dejson[0]->{'OTPCount'};
            $otpcount++;
            $usql="UPDATE `userlogin` SET `OTPCode`='".$otpcount."', `OTPCode`='".$otpNum."' WHERE `idUserRegistration`=".$regId;
            $dbObj->addupdateData($usql);
        }
    }
    
    
    function validateOTP($otpNum, $regId)
    {
          $result="NotExist";
         $sql="SELECT * FROM `userlogin` WHERE `OTPCode`='".$otpNum."' AND `idUserRegistration`=".$regId;
         $dbObj=new InteractDatabase();
                 $res = $dbObj->getData($sql);

                if ($res->num_rows > 0) {
                    $result="Exist";
                }
               return $result;
    }
    
    function updateSignup($regId, $username, $password, $firstName, $lastName, $staffID,$emailID, $designation, $active)
    {
        $sql="UPDATE `userlogin`, `userregistration`   SET `userlogin`.`username`='".$username."'";
        $sql.=",`userlogin`.`password`='".$password."',`userlogin`.`active`=".$active.", ";
        $sql.="`userregistration`.`firstName`='".$firstName."', ";
        $sql.="`userregistration`.`lastName`='".$lastName."', ";
        $sql.="`userregistration`.`staffID`='".$staffID."', ";
        $sql.="`userregistration`.`emailID`='".$emailID."', ";
        $sql.="`userregistration`.`designation`='".$designation."' WHERE ";
        $sql.="`userregistration`.`idUserRegistration`=`userlogin`.`idUserRegistration` AND ";
        $sql.=" `userlogin`.`idUserRegistration`=".$regId." ";
       // echo $sql;
        
       $dbObj=new InteractDatabase();  
       $dbObj->addupdateData($sql);
    }
    

            /* Account StaffID : Check */
            function  checkStaffID($staffID)
            {
                $result="NotExist";
                $sql="SELECT * FROM `userregistration` WHERE `staffID`='".$staffID."'";
                 $dbObj=new InteractDatabase();
                 $res = $dbObj->getData($sql);

                if ($res->num_rows > 0) {
                    $result="Exist";
                }
               return $result;
            }
    
            /* Account UserName : Check */
            function checkUsernameExist($username)
            {
                $result="NotExist";
                $sql="SELECT * FROM `userlogin` WHERE `username`='".$username."'";
                 $dbObj=new InteractDatabase();
                 $res = $dbObj->getData($sql);

                if ($res->num_rows > 0) {
                    $result="Exist";
                }
               return $result;
            }

    /* LOGIN FORM */
    function getloginSession($login, $pwd)
    /* $login can be email or username, it validates with password and gets data */
    {
        $sql="SELECT * FROM `userregistration`, `userlogin` ";
        $sql=$sql."WHERE userregistration.idUserRegistration=userlogin.idUserRegistration ";
        $sql=$sql."AND (userregistration.emailID='".$login."' OR userlogin.username='".$login."') ";
        $sql=$sql."AND userlogin.password='".md5($pwd)."'";
             
        $dbObj=new InteractDatabase();
        $json=$dbObj->getJSONData($sql);
    
      //  echo $sql;
        
        $res="Failed";
         $dejson=  json_decode($json);

        if(!empty($dejson))
        {
         
        //  echo $dejson;
        $_SESSION[constant("SESSION_USER_REGID")]=$dejson[0]->{'idUserRegistration'};
        $_SESSION[constant("SESSION_USER_LOGID")]=$dejson[0]->{'idUserLogin'};
        $_SESSION[constant("SESSION_USER_USERNAME")]=$dejson[0]->{'username'};
        $_SESSION[constant("SESSION_USER_PASSWORD")]=$dejson[0]->{'password'};
        $_SESSION[constant("SESSION_USER_FIRSTNAME")]=$dejson[0]->{'firstName'};
        $_SESSION[constant("SESSION_USER_LASTNAME")]=$dejson[0]->{'lastName'};
        $_SESSION[constant("SESSION_USER_STAFFID")]=$dejson[0]->{'staffID'};
        $_SESSION[constant("SESSION_USER_MOBILE")]=$dejson[0]->{'mobile'};
        $_SESSION[constant("SESSION_USER_EMAIL")]=$dejson[0]->{'emailID'};
        $_SESSION[constant("SESSION_USER_DESIGNATION")]=$dejson[0]->{'designation'};
        $_SESSION[constant("SESSION_USER_ACTIVE")]=$dejson[0]->{'active'}; 
        
        
            $res="Success"; 
        }
        return $res;  
    }
            /* Update Forgot Password using username */
            function updatePassword($login, $newpwd)
            {
                $sql="UPDATE `userlogin` SET `password`='".$newpwd."' ";
                $sql.="WHERE userlogin.idUserRegistration=(SELECT `idUserRegistration` FROM ";
                $sql.="`userregistration` WHERE `emailID`='".$login."') OR userlogin.username='".$login."';";
                 
                $gsql="SELECT * FROM userlogin WHERE `emailID`='".$login."'";
                $dbObj=new InteractDatabase();
                $dbObj->addupdateData($sql);
                $json=$dbObj->getJSONData($gsql);
                
                return $json;
            }

            function updateOTPCode()
            {
                $sql="";
            }
            
            
            /* UserDetails : Page */
            
            function adminGetUserDetails()
            {
                $sql="SELECT * FROM `userlogin`, `userregistration` WHERE `userlogin`.idUserRegistration=`userregistration`.idUserRegistration";
           
                $dbObj=new InteractDatabase();
                $json= $dbObj->getJSONData($sql);
                return $json;  
            }
            
            function adminGetUserDetailsDesignation()
            {
                $sql="SELECT DISTINCT designation FROM `userlogin`, `userregistration` WHERE `userlogin`.idUserRegistration=`userregistration`.idUserRegistration";
           
                $dbObj=new InteractDatabase();
                $json= $dbObj->getJSONData($sql);
                return $json;  
            }
            
            
            function adminGetUserDetailsState()
            {
                $sql="SELECT DISTINCT state FROM `userlogin`, `userregistration` WHERE `userlogin`.idUserRegistration=`userregistration`.idUserRegistration";
           
                $dbObj=new InteractDatabase();
                $json= $dbObj->getJSONData($sql);
                return $json;  
            }
            
            /* Reports : Page */
            function userCourseReports()
            {
                $sql="SELECT * FROM usercoursetest, userregistration, courses WHERE usercoursetest.userID=userregistration.idUserRegistration AND courses.idCourses=usercoursetest.courseID AND usercoursetest.testType='Assessment'";
            
                $dbObj=new InteractDatabase();
                $json= $dbObj->getJSONData($sql);
                return $json;  
            }
            
            function userCourseDesignationReports()
            {
                $sql="SELECT DISTINCT designation FROM usercoursetest, userregistration, courses WHERE usercoursetest.userID=userregistration.idUserRegistration AND courses.idCourses=usercoursetest.courseID";
            
                $dbObj=new InteractDatabase();
                $json= $dbObj->getJSONData($sql);
                return $json;  
            }
            
            function userCourseStateReports()
            {
                $sql="SELECT DISTINCT state FROM usercoursetest, userregistration, courses WHERE usercoursetest.userID=userregistration.idUserRegistration AND courses.idCourses=usercoursetest.courseID";
            
                $dbObj=new InteractDatabase();
                $json= $dbObj->getJSONData($sql);
                return $json;  
            }
            
            function userCourseCourseNameReports()
            {
                $sql="SELECT DISTINCT courseName FROM usercoursetest, userregistration, courses WHERE usercoursetest.userID=userregistration.idUserRegistration AND courses.idCourses=usercoursetest.courseID";
            
                $dbObj=new InteractDatabase();
                $json= $dbObj->getJSONData($sql);
                return $json;  
            }
            
            
}




//$acc=new UserAccounts();

/* Get Registration */

//$acc->getloginSession("Test", "password");