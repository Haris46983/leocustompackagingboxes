<?php
require_once('fpdf.php');
require_once('fpdi.php');

// initiate FPDI
$pdf = new FPDI();
// add a page
$pdf->AddPage();
// set the source file
$pdf->setSourceFile("PdfDocument.pdf");
// import page 1
$tplIdx = $pdf->importPage(1);
// use the imported page and place it at point 10,10 with a width of 100 mm
$pdf->useTemplate($tplIdx, 0, 0, 210);

// now write some text above the imported page
$pdf->SetFont('Arial','',7);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetXY(30, 30);
$pdf->Write(0, 'This is just a simple text');

$pdf->Cell(40,10,'Hello World !',1);
	$pdf->SetXY(16, 52);
	$pdf->Write(0, 'This is just a simple text');

$pdf->Output();