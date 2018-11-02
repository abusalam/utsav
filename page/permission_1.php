<?php
require('fpdf.php');

$pdf = new FPDF();
$pdf->AddPage();




$logo=$pdf->Image('images/Emblem.png',100,10,16,21);
$pdf->SetFont('Arial','B',9);
$pdf->Ln(6);
$pdf->Cell(70,46,'');
$pdf->Cell(10,36,'GOVERNMENT OF WEST BENGAL');
$pdf->SetFont('Arial','',9);
$pdf->Cell(-10,2,'');
$pdf->Cell(15,42,'Office of the Sub Divisional Officer');
$pdf->SetFont('Arial','',7);
$pdf->Cell(6,48,'Malda Sadar, Malda');
$pdf->Cell(-90,10,'');
$pdf->SetFont('Arial','',9);
$pdf->Cell(6,48,'Memo No.2302(32)/SDO(S)/Malda');
$pdf->Cell(150,10,'');
$pdf->Cell(200,48,'Date:14/10/2015');	
$pdf->Cell(170,40,'');
$pdf->Cell(6,48,'From:');	
$pdf->Cell(170,10,'');
$pdf->Cell(6,48,'The Sub-Divisional Officer (Sadar), Malda');	
 	



/*$pdf->SetFont('Arial','B',10);
			$pdf->Cell(37,6,'A',1,0,'L');
			$pdf->SetFont('Arial','B',10);
			$pdf->Cell(20);
			$pdf->Cell(84,4,'B','B',0,'C');
			$pdf->SetFont('Arial','B',8);
			$pdf->Cell(28);
			$pdf->Cell(10,3,'C',0,0,'R');*/
			   		
			
$pdf->Output();
?>