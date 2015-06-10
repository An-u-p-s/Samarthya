<?php
header('X-Frame-Options: SAMEORIGIN'); 
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
function youtubeBuilder($courseID)
{ 
    $courseObj=new Courses();
    $json= $courseObj->viewCourseFullDetails($courseID);
    $dejson=json_decode($json);
    
    $html='';
    for($ind=0;$ind<count($dejson);$ind++)
    {
        $subcourseId=$dejson[$ind]->{'idCourseLinks'};
        $courseId=$dejson[$ind]->{'courseID'};
        $title=$dejson[$ind]->{'title'};
        $engVideo=$dejson[$ind]->{'courseEngVideoLink'};
        $hindiVideo=$dejson[$ind]->{'courseEngVideoLink'};
        $telVideo=$dejson[$ind]->{'courseEngVideoLink'};
        $engPDF=$dejson[$ind]->{'courseEngPDFLink'};
         
        $html.='<div class="col-xs-12 col-xs-6 col-md-4">';
        $html.='<div class="course-video">';
        $html.='<h5 class="course-title">'.$title.'</h5>';
        
        if(isset($engVideo))
        {
            $html.='<div id="englishVideo" align="center" class="video-frame">';
            $html.='<iframe width="92%" height="80%" src="'.$engVideo.'" frameborder="0" allowfullscreen></iframe>';
            $html.='</div>';
        }
        
        else if(isset($hindiVideo))
        {
            $html.='<div id="hindiVideo" align="center" class="video-frame">';
            $html.='<iframe width="92%" height="80%" src="'.$hindiVideo.'" frameborder="0" allowfullscreen onclick="alert(\"English Video\")"></iframe>';
            $html.='</div>';
        }
        
        else if(isset($telVideo))
        {
            $html.='<div id="teluguVideo" align="center" class="video-frame">';
            $html.='<a href="'.$telVideo.'"';
            $html.='<iframe width="92%" height="80%" src="'.$telVideo.'" frameborder="0" allowfullscreen></iframe>';
            $html.='</a>';
            $html.='</div>';
        }
        $html.='<div>';
        $html.='<a href="'.$engVideo.'" target="new"><div class="english"></div></a>';
        $html.='<a href="'.$hindiVideo.'" target="new"><div class="hindi"></div></a>';
        $html.='<a href="'.$telVideo.'" target="new"><div class="telugu"></div></a>';
        $html.='<a href="'.$engPDF.'" target="new" onclick="pdfDownloadLogs(\''.$title.'\',\''.$subcourseId.'\',\''.$courseId.'\')">';
        $html.='<div class="pdf-download"></div>';
        $html.='</a>';
        $html.='</div>';
        $html.='</div>'; 
        $html.='</div>';
    }
    return $html;
}

 youtubeBuilder(1);
