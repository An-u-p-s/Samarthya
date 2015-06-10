<?php

require 'define.php';
session_start();
$Name=$_SESSION[constant("SESSION_USER_FIRSTNAME")]." ".$_SESSION[constant("SESSION_USER_FIRSTNAME")];
require('pdf/fpdf.php');

class PDF extends FPDF
{
    // Page header
    function Header()
    {
        // Logo
        $this->Image('../images/samarthya-logo.jpg',10,6,30);
        // Arial bold 15
        $this->SetFont('Arial','B',15);
        $this->Ln(8);
        // Move to the right
      //  $this->Cell(80);
        // Title
        $this->Cell(0,20,'SAMARTHYA COURSES CERTIFICATION',0,1,'C');
        // Line break
        $this->Ln(10);
    }

    // Page footer
    function Footer()
    {
        // Position at 1.5 cm from bottom
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial','I',8);
        // Page number
        $this->Cell(0,10,'Powered by Central Government of India',0,0,'C');
    }
}

// Instanciation of inherited class
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','I',14);
 
    $pdf->cell(0,10,"\t\t\t\t\t\t\t\t\t\t This certifies that ".$Name." has successfully completed the training program ",0,1);
    $pdf->Cell(0,10,"\t\t\t\t\t\t\t\t\t\t of Samarthya Educational Courses ",0,0);
    
$pdf->Output();

?>*/
    
    
    
    