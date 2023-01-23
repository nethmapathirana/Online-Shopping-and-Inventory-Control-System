<?php include('hardwaredbserver.php'); ?>
<?php
require('fpdf.php');
$pdf = new FPDF();
$pdf->AddPage();
$pdf->Image('hardwaresmall.jpg',170,15);
$pdf->SetFont('Arial','B',16);
$pdf->MultiCell(150,15,'Chandana Hardware (Pvt.) Ltd',0,0);
$pdf->SetFont('Arial','B',14);
$username = $_SESSION['username'];
$sql = "SELECT * FROM customer WHERE CUsername = '$username'";
$result = mysqli_query($db, $sql);
$ans = mysqli_fetch_assoc($result);
$name = $ans['CName'];
$address = $ans['CAdr1'];
$tel = $ans['CTel'];
$ordno = $_SESSION['newordno'];
$pdf->MultiCell(160,10,'Item Request Form',0,0);
$pdf->MultiCell(160,1,'----------------------------',0,0);
$pdf->Cell(50,10,'Order Number : ',0,0);
$pdf->MultiCell(160,10,$ordno,0,0);
$pdf->MultiCell(160,10,' ',0,0);
$pdf->MultiCell(160,10,'Customer Details',0,0);
$pdf->MultiCell(160,1,'-------------------------',0,0);
$pdf->SetFont('Arial','',10);
$pdf->Cell(50,10,'Customer Username : ',0,0);
$pdf->MultiCell(160,10,$username,0,0);
$pdf->Cell(50,10,'Customer Name : ',0,0);
$pdf->MultiCell(160,10,$name,0,0);
$pdf->Cell(50,10,'Customer Address : ',0,0);
$pdf->MultiCell(160,10,$address,0,0);
$pdf->Cell(50,10,'Customer Telephone Number : ',0,0);
$pdf->MultiCell(160,10,$tel,0,0);
$pdf->MultiCell(160,10,' ',0,0);
$pdf->SetFont('Arial','B',14);
$pdf->MultiCell(160,10,'Order Details',0,0);
$pdf->MultiCell(160,1,'-------------------',0,0);
$pdf->SetFont('Arial','B',12);
$h = 15;
$pdf->Cell(30,$h,'Item No',0,0);
$pdf->Cell(80,$h,'Name',0,0);
$pdf->MultiCell(30,$h,'Quantity',0,0);
$h = 5;
$db = mysqli_connect('localhost','root','nethma@123','hardware');

$pdf->SetFont('Arial','',10);
$sql = "SELECT * FROM corder WHERE OrdNo = '$ordno' ORDER BY ItemNo";
     
$result = mysqli_query($db, $sql);

while ($ans = mysqli_fetch_assoc($result)) {
	$pdf->Cell(30,$h,$ans['ItemNo'],0,0);
	$itemno = $ans['ItemNo'];
	$sql2 = "SELECT ItemDesc FROM itemfile WHERE ItemNo = '$itemno'";
	$result2 = mysqli_query($db, $sql2);
	$ans2 = mysqli_fetch_assoc($result2);
	$itemdesc = $ans2['ItemDesc'];
	$pdf->Cell(80,$h,$itemdesc,0,0);
	$pdf->MultiCell(30,$h,$ans['QtyReq'],0,0);		
}

date_default_timezone_set('Asia/Colombo');
$currentdate = date("d-m-20y");
$pdf->MultiCell(30,20,' ',0,0);
$pdf->Cell(10,10,'Date :',0,0);
$pdf->MultiCell(43,10,$currentdate,0,0);
$pdf->Output();
?>