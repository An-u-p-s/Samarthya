<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require 'dal.courses.php';

$action=$_GET["action"];

if($action=='courseListOnly')
{
    $course=new Courses();
    $json=$course->viewCourseDetailsOnly();
    echo $json;
}
else if($action=='GetCourseId')
{
    $courseName=$_GET["courseName"];
    $course=new Courses();
    $json=$course->getCourseId($courseName);
    echo $json;
}



else if($action=='AddcourseVisited')
{
    if (function_exists('date_default_timezone_set'))
    {
      date_default_timezone_set('Asia/Calcutta');
    }
   $userId=$_GET["userId"];
    $courseObj=new Courses();
    $course=$_GET["course"];
    $date=date("d/m/Y");
    $startTime=date("h:i:sa");
    $status=$_GET["status"];
    
    $ipaddress=urlencode($_GET["ipaddress"]);
    echo $courseObj->addCourseLogs($course, $date, $startTime, $status, $userId, $ipaddress);
}



else if($action=='courseVisited')
{
    $userId=$_GET["userId"];
    $course=new Courses();
    $json=$course->getCourseLogs($userId);
    echo $json; 
}


else if($action=='viewCourseDetails')
{
    $courseID=$_GET["courseID"];
    $course=new Courses();
    $json=$course->viewCourseFullDetails($courseID);
    echo $json;
}

else if($action=='CheckForTest')
{
    $userId=$_SESSION[constant("SESSION_USER_REGID")];
    $courseId=$_GET["courseId"];
    $testType=$_GET["testType"];

   
    if($testType=='preTest')
    {
        $testType='Pre Test';
    }
    else if($testType=='Assessment')
    {
        $testType='Assessment';
    }

    $course=new Courses();
     $json=$course->checkforTestDone($userId, $courseId, $testType);
      echo $json;    
}

else if($action=='AddNewCourses')
{
    $courseName=$_GET["courseName"];
    $courseNum=$_GET["courseNumber"];
    
    echo $courseName;
   echo $courseNum;
        $course=new Courses();
        $course->addCourses($courseName, $courseNum, 'images/courses/course-2.jpg');
}
else if($action=='EditNewCourses')
{
    $idCourses=$_GET["idCourses"];
    $courseName=$_GET["courseName"];
    $courseNum=$_GET["courseNumber"];
    
    echo $courseName;
   echo $courseNum;
        $course=new Courses();
        $course->updateCourses($idCourses, $courseName, $courseNum, 'images/courses/course-2.jpg');
}

else if($action=='DeleteCourse')
{
    $idCourses=$_GET["idCourses"];
    
        $course=new Courses();
        $course->deleteCourses($idCourses);
}


else if($action=='AddNewCourseDetails')
{
    $courseId=$_GET["courseId"];
    $title=$_GET["title"];
    $courseEngVideo=$_GET["courseEngVideo"];
    $courseEngPDF=$_GET["courseEngPDF"];
    
    $courseHinVideo=$_GET["courseHinVideo"];
    $courseHinPDF=$_GET["courseHinPDF"];
    
    $courseTelVideo=$_GET["courseTelVideo"];
    $courseTelPDF=$_GET["courseTelPDF"];
    
    
    $course=new Courses();
    $course->addCourseLink($courseId, $title, $courseEngVideo, $courseEngPDF,
            $courseHinVideo, $courseHinPDF, $courseTelVideo, $courseTelPDF);
}
else if($action=='DeleteCourseDetails')
{
     $idCourseLinks=$_GET["idCourseLinks"];
     $courseName=$_GET["courseName"];
     $title=$_GET["title"];
     
     $course=new Courses();
     $course->deleteCourseLink($idCourseLinks, $courseName, $title);
}

else if($action=='AddUserVisitedHistory')
{
    $courseLinksID=$_GET["courseLinksID"];
    $userID=$_GET["userID"];
    $CourseID=$_GET["CourseID"];
    $View='1';
    $course=new Courses();
    $course->activateCoursesDetails($courseLinksID, $userID, $CourseID, $View);
}

else if($action=='checkForAssessmentTest')
{
    $userId=$_GET["userId"];
    $courseId=$_GET["course"];
    
    $course=new Courses();
    
    $json=$course->viewCourseFullDetails($courseId);  // from courselink table
    $userjson=$course->getListOfActivatedCourseDetails($userId, $courseId); // from courseuserview table
    
    $dejson=json_decode($json);
    $deuserjson=json_decode($userjson);
    
    /*
    echo "JSON : ".$json;
    echo "USER-JSON : ".$userjson;
    */
    
    $count=array();
    for($subcourseInd=0;$subcourseInd<count($dejson);$subcourseInd++)
    {
        
        for($userlistInd=0;$userlistInd<count($deuserjson);$userlistInd++)
        {
            if($dejson[$subcourseInd]->{'idCourseLinks'}==$deuserjson[$userlistInd]->{'courseLinksID'})
            {
                $trigger=false;
                for($countInd=0;$countInd<count($count);$countInd++)
                {
                    if($count[$countInd]==$dejson[$subcourseInd]->{'idCourseLinks'})
                    {
                        $trigger=true;
                    }
                    
                }
                if(!$trigger)
                {
                    $count[]=$dejson[$subcourseInd]->{'idCourseLinks'};
                } 
            }
        }  
        
    }
        
                
    if(count($count)==count($dejson))
    {
        echo "Done";
    }
    else
    {
        echo "NotDone";
    }
}

/* UserHistory : Filters */
else if($action=='GetUserHistoryCourseNameFilter')
{
    $course=new Courses();
    $json=$course->getAdminCourseCourseNameLogs();
    echo $json;
}
else if($action=='GetUserHistoryDescriptionFilter')
{
    $course=new Courses();
    $json=$course->getAdminCourseDescriptionLogs();
    echo $json;
    
}