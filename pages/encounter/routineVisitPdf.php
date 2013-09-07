<?php
require('../../fPdf/fpdf.php');

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','',10);

$pdf->Cell(15,6,'MRN');
$pdf->Cell(60,6,'56452354', "B", 0);
$pdf->Cell(5,6,'');
$pdf->Cell(20,6,'Date');
$pdf->Cell(30,6,date("d/M/Y"), "B", 0);
$pdf->Cell(5,6,'');
$pdf->Cell(25,6,'Age');
$pdf->Cell(30,6,'10 years', "B", 1);

$pdf->Cell(15,6,'DOD');
$pdf->Cell(60,6,'23-Apr-2013', "B", 0);
$pdf->Cell(5,6,'');
$pdf->Cell(20,6,'Height');
$pdf->Cell(15,6,"134 cm", "B", 0);
$pdf->Cell(15,6,"(     %)  ", 0, 0,"R");
$pdf->Cell(5,6,'');
$pdf->Cell(25,6,'Weight');
$pdf->Cell(15,6,"35 Kg", 'B', 0);
$pdf->Cell(15,6,"(     %)  ", 0, 1,"R");


$pdf->Cell(15,6,'Name');
$pdf->Cell(60,6,'Joe Bloggs', 'B', 0);
$pdf->Cell(5,6,'');
$pdf->Cell(20,6,'BP');
$pdf->Cell(30,6,"blood presure", "B", 0);
$pdf->Cell(5,6,'');
$pdf->Cell(25,6,'Diabetes');
$pdf->Cell(30,6,'T1DM', 'B', 1);

$pdf->Cell(15,6,'Address');
$pdf->Cell(60,6,'33 Red Avenue', 'B', 0);
$pdf->Cell(5,6,'');
$pdf->Cell(20,6,'HbA1c');
$pdf->Cell(30,6,'7.8', 'B', 0);
$pdf->Cell(5,6,'');
$pdf->Cell(25,6,'Prev HbA1c');
$pdf->Cell(30,6,'7.5', 'B', 1);

$pdf->Cell(15,6,'');
$pdf->Cell(60,6,'Model Farm Road', "B", 0);
$pdf->Cell(5,6,'');
$pdf->Cell(20,6,'');
$pdf->Cell(10,6,'');
$pdf->Cell(45,6,'Date of Diagnosis');
$pdf->Cell(5,6,'');
$pdf->Cell(30,6,'01/Nov/2011','B', 1);

$pdf->Cell(15,6,'');
$pdf->Cell(60,6,'Cork',"B", 0);
$pdf->Cell(5,6,'');
$pdf->Cell(20,6,'');
$pdf->Cell(10,6,'');
$pdf->Cell(45,6,'Date of Starting Pump');
$pdf->Cell(5,6,'');
$pdf->Cell(30,6,'01/Dec/2012','B', 1);

$pdf->SetFont('Arial','B',10);
$pdf->Cell(190,6,'Total daily dose: 12 units = xxx units/kg/day',1, 1, 'C');
$pdf->SetFont('Arial','',10);
$pdf->Output();
?>