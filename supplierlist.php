<?php
require('fpdf.php');



$pdf = new FPDF();
$pdf->AddPage();
$pdf->Image('hardwaresmall.jpg',170,15);

$pdf->SetFont('Arial','B',16);



$pdf->MultiCell(150,15,'Chandana Hardware (Pvt.) Ltd',0,0);


$pdf->SetFont('Arial','B',14);

$pdf->MultiCell(160,10,'Registered Supplier List',0,0);
$pdf->MultiCell(160,1,'-----------------------------------',0,0);

$pdf->SetFont('Arial','B',12);

$h = 15;
$pdf->Cell(60,$h,'Name',0,0);
$pdf->Cell(60,$h,'Address',0,0);
$pdf->Cell(50,$h,'Email',0,0);	
$pdf->MultiCell(30,$h,'Tel. Number',0,0);
$h = 5;
$db = mysqli_connect('localhost','root','nethma@123','hardware');


$pdf->SetFont('Arial','',10);
$sql = "SELECT * FROM supplier ORDER BY SUsername";
     
$result = mysqli_query($db, $sql);

while ($ans = mysqli_fetch_assoc($result)) {
	$pdf->Cell(60,$h,$ans['SName'],0,0);
	$pdf->Cell(60,$h,$ans['SAdr1'],0,0);
	$pdf->Cell(50,$h,$ans['SEmail'],0,0);
	$pdf->MultiCell(30,$h,$ans['STel'],0,0);
	
		
}

date_default_timezone_set('Asia/Colombo');
$currentdate = date("d-m-20y");
$pdf->MultiCell(30,20,' ',0,0);
$pdf->Cell(10,10,'Date :',0,0);
$pdf->MultiCell(43,10,$currentdate,0,0);


$pdf->Output();
?>