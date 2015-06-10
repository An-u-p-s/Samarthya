<?php
require 'dal.courses.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of dac
 *
 * @author user1
 */

    $returnInf='';
    $do=$_POST["coursedetailsOperation"];
    $idCourseLinks=$_POST["idCourseLinks"];
    $courseId='';
    
    if(!isset($_POST["view-courseName2"]))
    {
       $courseId= $_POST["setCourseName"];    
    }
    else 
    {
        $courseId=$_POST["view-courseName2"];
    }
    $title=$_POST["addcourse-titleName"];
    
    $engvideoLInk=$_POST["addcourse-EngVideoLink"];
    $hinvideoLInk=$_POST["addcourse-HinVideoLink"];
    $telvideoLInk=$_POST["addcourse-TelVideoLink"];
    
    $engvideoLInk=str_replace("watch?v=", "embed/",$engvideoLInk);
    $hinvideoLInk=str_replace("watch?v=", "embed/",$hinvideoLInk);
    $telvideoLInk=str_replace("watch?v=", "embed/",$telvideoLInk);
    
    $engPDFLink= basename($_FILES["addcourse-EngBookLink"]["name"]);
    // Upload
    $target_file  = "../PDF-Text/Course-".$courseId."/".$engPDFLink;
    
   
    if(isset($_FILES['addcourse-EngBookLink']) )
    {
       if (move_uploaded_file($_FILES["addcourse-EngBookLink"]["tmp_name"], $target_file))
      {
          $returnInf='Success';
      }
    }
    
     $courseObj=new Courses;
    
    if($do=='Add')
    {
        
       
        $courseObj->addCourseLink($courseId, $title, $engvideoLInk, $engPDFLink, $hinvideoLInk, '', $telvideoLInk, '');
    }
    else
    {
        $courseObj->updateCourseLink($idCourseLinks, $courseId, $title, $engvideoLInk, $engPDFLink, $hinvideoLInk, '', $telvideoLInk, '');
    }
    
      header("location: ../manage-courses.php");