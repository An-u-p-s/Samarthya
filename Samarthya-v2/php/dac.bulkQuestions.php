<?php

header('Content-Type: text/plain');
require('spreadsheets/excel_reader2.php');
require('spreadsheets/SpreadsheetReader.php');
require('dal.courses.php');       

// Add Excel Upload Code here..


$Filepath=$_GET["ExcelFile"];

// $Filepath='../Files/Samarthya-Pre-Test.xlsx';

/* GetIds Based on CourseName */	

        $colheader=array();
	
	try
	{
		$Spreadsheet = new SpreadsheetReader($Filepath);
		$BaseMem = memory_get_usage();

		$Sheets = $Spreadsheet -> Sheets();   // Number of Sheets

		foreach ($Sheets as $Index => $Name) //  $Name gives Sheet Nname
		{
			

			$Spreadsheet -> ChangeSheet($Index);

			foreach ($Spreadsheet as $Key => $Row)
			{
                            
                            
				if ($Row)
				{
                                    if($Key==0)
                                    {
                                        for($headerIndex=0;$headerIndex<count($Row);$headerIndex++)
                                        {
                                            $colheader[$headerIndex]=$Row[$headerIndex];
                                        }
                                    }
                                    else
                                    {
                                        $idTestDetails;
                                        $courselinkId;
                                        $question;
                                        $option1;
                                        $option2;
                                        $option3;    
                                        $option4;
                                        $answer;
                                        $active;
                                        
                                        for($dataIndex=0;$dataIndex<count($Row);$dataIndex++)
                                        {
                                            $courseObj=new Courses();
                                                 if($dataIndex==0) {  $idTestDetails=$courseObj->getCourseId($Row[$dataIndex]); }
                                            else if($dataIndex==1) {  $courselinkId=$courseObj->getCourseLinkId($Row[$dataIndex]); }
                                            else if($dataIndex==2) {  $question=$Row[$dataIndex]; }
                                            else if($dataIndex==3) {  $option1=$Row[$dataIndex];  }
                                            else if($dataIndex==4) {  $option2=$Row[$dataIndex];  }
                                            else if($dataIndex==5) {  $option3=$Row[$dataIndex];  }
                                            else if($dataIndex==6) {  $option4=$Row[$dataIndex];  }
                                            else if($dataIndex==7) {  $answer=$Row[$dataIndex];  }
                                            else if($dataIndex==8) {  $active=$Row[$dataIndex];  }
                                        }
                                        
                                   //  echo $idTestDetails.' | '.$courselinkId.' | ';
                                   //  echo $question.' | '.$option1.' | ';
                                   //  echo  $option2.' | '.$option3.' | ';   
                                   //  echo  $option4.' | '.$answer.' | '.$active.' | '.' \n';
                                     
                                     $question=urlencode($question);
                                     $option1=urlencode($option1);
                                     $option2=urlencode($option2);
                                     $option3=urlencode($option3);
                                     $option4=urlencode($option4);
                                        
                                     $insertSql="INSERT INTO `testquestions`( `idTestDetails`, `courselinkId`, `question`, `option1`, `option2`, `option3`, `option4`, `answer`, `active`) ";
                                     $insertSql.="VALUES (".$idTestDetails.",".$courselinkId.",'".$question."','".$option1."','".$option2."','".$option3."','".$option4."','".$answer."',".$active.");";
                                   
                                     echo $insertSql;
                                     
                                     $dbObj=new InteractDatabase();
                                     $dbObj->addupdateData($insertSql);
                                    
                                    }
					// print_r($Row);
                                 
				}
				
				
			}
		
		}
		
	}
	catch (Exception $E)
	{
		echo $E -> getMessage();
	}
        
        echo "LastLine : ";
        for($headerIndex=0;$headerIndex<count($colheader);$headerIndex++)
                                        {
                                            echo "\n".$colheader[$headerIndex];
                                        }
?>
