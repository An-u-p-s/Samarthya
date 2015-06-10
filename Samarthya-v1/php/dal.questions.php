<?php
session_start();
require 'database.php';
/* 
 * Questions Class includes testdetails table, testquestions table, testresults table
 */

class Questions
{
    /* TestDetails Table */
    function addTestDetails($testName, $testType, $testTime, $courseq, $totalMarks, $passMarks)
    {       
        $dbObj=new InteractDatabase();
        $isql="INSERT INTO `testdetails`(`testName`, `testType`, `testTime`, `totalquestions`, `totalmarks`, `passMarks`) ";
        $isql.="VALUES ('".$testName."','".$testType."', '".$testTime."',".$courseq.", ".$totalMarks.",".$passMarks.")";
        $gsql="SELECT * FROM `testdetails` WHERE `testName`='".$testName."' AND `testType`='".$testType."';";
        echo $isql;
        $dbObj->addupdateData($isql);
        $json=$dbObj->getJSONData($gsql);
        $dejson=json_decode($json);
        $courseId=$dejson[0]->{'idTestDetails'};
        
        return $courseId;
    }
    
    
    function getTestDetails($testName)
    {
       $dbObj=new InteractDatabase();
       $sql="SELECT * FROM testdetails WHERE testName='".$testName."'";
       $json=$dbObj->getJSONData($sql);
       return $json;
    }
    
    function getAllTestDetails($testName, $testType)
    {
        $dbObj=new InteractDatabase();
        $sql="SELECT * FROM `testdetails` WHERE testName='".$testName."' and testType='".$testType."';";
        $json=$dbObj->getJSONData($sql);
        
       return $json;
    }
    
    function getIdTestDetails($testName, $testType)
    {
        $dbObj=new InteractDatabase();
        $sql="SELECT idTestDetails FROM `testdetails` WHERE testName='".$testName."' and testType='".$testType."';";
        $json=$dbObj->getJSONData($sql);
        
       return $json;
    }
    
    
    
    
    function addQuestions($testDetailsId, $question, $option1, $option2, $option3, $option4, $answer, $active)
    {
        $sql="INSERT INTO `testquestions`( `idTestDetails`, `question`, `option1`, `option2`, `option3`, `option4`, `answer`, `active`) ";
        $sql.=" VALUES ('".$testDetailsId."','".$question."','".$option1."','".$option2."','".$option3."','".$option4."','".$answer."',".$active.")";
       
         $dbObj=new InteractDatabase();
         $dbObj->addupdateData($sql);
    }
    
    
    function getQuestions($testDetailsId, $active, $qtotal)
    {
        
        $sql="SELECT idTestQuestions, question, option1, option2, option3, option4 FROM `testquestions` WHERE idTestDetails=".$testDetailsId." AND active=".$active." ORDER BY RAND() LIMIT ".$qtotal;
         $dbObj=new InteractDatabase();
         $json=$dbObj->getJSONData($sql);
         return $json;
    }
    
    
    
    function getFinalExamQuestions( $active, $qtotal)
    {
        
        $sql="SELECT idTestQuestions, question, option1, option2, option3, option4 FROM `testquestions` WHERE active=".$active." ORDER BY RAND() LIMIT ".$qtotal;
         $dbObj=new InteractDatabase();
         $json=$dbObj->getJSONData($sql);
         return $json;
    }
    
    
     function getAllQuestions($test, $testType)
    {
        
        $sql="SELECT testdetails.testType, testquestions.idTestQuestions, testquestions.question, testquestions.option1, ";
        $sql.="testquestions.option2, testquestions.option3, testquestions.option4, testquestions.answer, ";
        $sql.="testquestions.active FROM `testquestions`, `testdetails` WHERE ";
        $sql.=" testquestions.idTestDetails=testdetails.idTestDetails AND testdetails.testName='".$test."' AND ";
        $sql.=" testdetails.testType='".$testType."';";
         $dbObj=new InteractDatabase();
         $json=$dbObj->getJSONData($sql);
         return $json;
    }
    
    
    function getAnswersList($ansArray)
    {
        $sql="SELECT idTestQuestions, answer FROM `testquestions` WHERE ";
       
        for($index=0;$index<count($ansArray);$index++)
        {
           $sql.=" idTestQuestions=".$ansArray[$index]." OR";
        }
        
       $sql=chop($sql,"OR");
       
       
         $dbObj=new InteractDatabase();
         $json=$dbObj->getJSONData($sql);
         return $json;
    }
    
    
    
    function addTestResults($userId, $testId, $questionId, $result, $status)
    {
        $sql="INSERT INTO `testresults`( `userCourseTestID`, `questionID`, `result`, `userId`, `status`) ";
        $sql.=" VALUES (".$testId.",".$questionId.",'".$result."',".$userId.",'".$status."')";
        
        $dbObj=new InteractDatabase();
        $dbObj->addupdateData($sql);
    }
   
    
    
    function courseUserTest($userID, $courseID, $testType, $testTaken, $questionResults, $marksResults, $examStatus)
    {
        $sql="INSERT INTO `usercoursetest`(`userID`, `courseID`, `testType`, `testTaken`,`ExamDate`, `questionResults`, `marksResults`, `ExamStatus`) ";
        $sql.="VALUES (".$userID.",".$courseID.",'".$testType."',".$testTaken.",'".date('Y-m-d')."','".$questionResults."','".$marksResults."','".$examStatus."')";
        
        echo $sql;
        
        $dbObj=new InteractDatabase();
        $dbObj->addupdateData($sql);
    }
    
    
    
    function getTestResults($userID)
    {
        $sql="SELECT courseName, testType,questionResults, marksResults, ExamDate, ExamStatus FROM `usercoursetest`, `courses` ";
        $sql.="WHERE `courses`.idCourses= `usercoursetest`.courseID AND `usercoursetest`.userID=".$userID;
          
        $dbObj=new InteractDatabase();
        $json=$dbObj->getJSONData($sql);
        
        echo $json;
    }
    
    
    function getFinalTestResults($userID)
    {
       $sql="SELECT testType,questionResults, marksResults, ExamDate, ExamStatus FROM `usercoursetest` ";
        $sql.="WHERE `usercoursetest`.courseID=0 AND `usercoursetest`.userID=".$userID;
          
        $dbObj=new InteractDatabase();
        $json=$dbObj->getJSONData($sql);
        
        echo $json;  
    }
    
     function getAdminTestResults()
    {
        $sql="SELECT firstName, lastName, courseName, testType,questionResults, marksResults, ExamDate, ExamStatus ";
        $sql.=" FROM `usercoursetest`, `courses`, `userregistration` WHERE `courses`.idCourses= `usercoursetest`.courseID ";
        $sql.=" AND `usercoursetest`.userID=`userregistration`.idUserRegistration";
          
        
        $dbObj=new InteractDatabase();
        $json=$dbObj->getJSONData($sql);
        
        echo $json;
    }
    
    
    
    
    
}


// SELECT * FROM `testdetails` ORDER BY RAND() LIMIT 10
// $que=new Questions();
// $que->addQuestions('2', 'Which is known as Black Continent?', 'Asia', 'Africa', 'Europe', 'Australia', 'Africa', '1');
// echo $que->addTestDetails('Natural Resources Management', 'Pre Test', '00:10', '5', '20');