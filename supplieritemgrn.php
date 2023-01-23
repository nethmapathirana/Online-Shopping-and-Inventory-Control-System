<?php include('hardwaredbserver.php'); ?>

<?php
require('fpdf.php');



$pdf = new FPDF();
$pdf->AddPage();
$pdf->Image('hardwaresmall.jpg',170,15);

$pdf->SetFont('Arial','B',16);
$ordno = $_SESSION['newordno'];


$pdf->MultiCell(150,15,'Chandana Hardware (Pvt.) Ltd',0,0);


$pdf->SetFont('Arial','B',14);

$staffusername = $_SESSION['staffusername'];
$supplierusername = $_SESSION['rsupusername'];


$sql = "SELECT * FROM supplier WHERE SUsername = '$supplierusername'";
$result = mysqli_query($db, $sql);
$ans = mysqli_fetch_assoc($result);
$supname = $ans['SName'];
$supaddress = $ans['SAdr1'];
$suptel = $ans['STel'];

$itemno = $_SESSION['itemno'];



$pdf->MultiCell(160,10,'Good Receipt Note',0,0);
$pdf->MultiCell(160,1,'----------------------------',0,0);
$pdf->Cell(43,20,'Order Number : ',0,0);
$pdf->MultiCell(160,20,$ordno,0,0);
//$pdf->MultiCell(160,10,' ',0,0);

$pdf->MultiCell(160,10,'Client Details',0,0);
$pdf->MultiCell(160,1,'-------------------',0,0);
$pdf->SetFont('Arial','',10);
$pdf->MultiCell(160,10,'Client Name :                             Chandana Hardware (Pvt.) Ltd',0,0);
$pdf->MultiCell(180,10,'Client Address :                         No. 35/7/C, Lionel Jayasinghe Mawatha, Godagama, Homagama',0,0);
$pdf->MultiCell(160,10,'Client Telephone Number :        0714433053',0,0);
$pdf->MultiCell(160,10,' ',0,0);
$pdf->SetFont('Arial','B',14);
$pdf->MultiCell(160,10,'Supplier Details',0,0);
$pdf->MultiCell(160,1,'-----------------------',0,0);
$pdf->SetFont('Arial','',10);

$pdf->Cell(50,10,'Supplier Name : ',0,0);
$pdf->MultiCell(160,10,$supname,0,0);
$pdf->Cell(50,10,'Supplier Address : ',0,0);
$pdf->MultiCell(160,10,$supaddress,0,0);
$pdf->Cell(50,10,'Supplier Telephone Number : ',0,0);
$pdf->MultiCell(160,10,$suptel,0,0);
$pdf->MultiCell(160,10,' ',0,0);


$pdf->SetFont('Arial','B',14);
$pdf->MultiCell(160,10,'Order Details',0,0);
$pdf->MultiCell(160,1,'-------------------',0,0);
$pdf->SetFont('Arial','B',12);
$h = 15;
$pdf->Cell(30,$h,'Item No',0,0);
$pdf->Cell(80,$h,'Item Name',0,0);
$pdf->Cell(30,$h,'Quantity',0,0);
$pdf->Cell(30,$h,'Unit Price',0,0);
$pdf->MultiCell(30,$h,'Total (Rs.)',0,0);
$h = 5;
$db = mysqli_connect('localhost','root','nethma@123','hardware');

$pdf->SetFont('Arial','',10);
$sql = "SELECT * FROM request INNER JOIN receiveitem WHERE request.ReqNo = '$ordno' AND request.QtyRec > 0 AND request.ReqNo = receiveitem.OrdNo AND request.ItemNo = receiveitem.ItemNo ORDER BY request.ItemNo";
     
$result = mysqli_query($db, $sql);
$grand = 0;
while ($ans = mysqli_fetch_assoc($result)) {
	$itemno = $ans['ItemNo'];
	$pdf->Cell(30,$h,$itemno,0,0);
	$sql2 = "SELECT ItemDesc FROM itemfile WHERE ItemNo = '$itemno'";
	$result2 = mysqli_query($db, $sql2);
	$ans2 = mysqli_fetch_assoc($result2);
	$itemdesc = $ans2['ItemDesc'];
	$pdf->Cell(80,$h,$itemdesc,0,0);
	$pdf->Cell(30,$h,$ans['QtyRec'],0,0);
	$pdf->Cell(30,$h,$ans['UnitPrice'],0,0);
	$total = $ans['QtyRec'] * $ans['UnitPrice'];
	$pdf->MultiCell(30,$h,$total,0,0);
	$grand = $grand + $total;
}


$pdf->SetFont('Arial','B',12);
$pdf->Cell(170,10,'Grand Total : ',0,0);
$pdf->MultiCell(160,10,$grand,0,0);
$pdf->SetFont('Arial','',10);
$sql = "SELECT EName FROM staff WHERE EUsername = '$staffusername'";
$result = mysqli_query($db, $sql);
$ans = mysqli_fetch_assoc($result);
$staffname = $ans['EName'];

$pdf->MultiCell(160,10,' ',0,0);
$pdf->MultiCell(160,10,' ',0,0);
$pdf->MultiCell(160,10,' ',0,0);
$pdf->Cell(40,10,'Printed and Approved by',0,0);
$pdf->MultiCell(160,10,$staffname,0,0);

date_default_timezone_set('Asia/Colombo');
$currentdate = date("d-m-20y");
$pdf->Cell(10,10,'Date :',0,0);
$pdf->MultiCell(43,10,$currentdate,0,0);
$pdf->Output();
?>