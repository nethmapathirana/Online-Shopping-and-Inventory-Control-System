<?php include('hardwaredbserver.php'); ?>
<?php
	$db = mysqli_connect('localhost','root','nethma@123','hardware');
	if (mysqli_connect_errno()) {
		echo "Failed".mysqli_connect_errno();
	}
    $query3 = "SELECT ReqNo FROM request ORDER BY ReqNo DESC";     
    $result3 = mysqli_query($db, $query3);
    $ans3 = mysqli_fetch_assoc($result3);
  	$value = $ans3['ReqNo'] + 1;   	
  	$supplierusername = $_SESSION['supusername'];
  	$query4 = "SELECT SName FROM supplier WHERE SUsername='$supplierusername'";     
    $result4 = mysqli_query($db, $query4);
    $ans4 = mysqli_fetch_assoc($result4);
  	$supplier = $ans4['SName'];
  	$_SESSION['supname'] = $supplier;
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Place Order Page 2</title>
	<link rel="stylesheet" type="text/css" href="color.css">
</head>
<body>	

	<div class="header" style="width: 30%;margin:  50px auto 0px;color: #0036c3;
	background: #48caff;
	text-align: center;
	border: 1px solid #B0C4DE;
	border-bottom: none;
	border-radius: 10px 10px 0px 0px;
	padding:  20px;">
		<h2>Place Order</h2>
	</div>

	<form method="post" action="placeorderpage2.php">
	<?php include('errormsg.php'); ?>

		<div class="input-group">
			<label>Order Number : <?php echo $value; ?></label>
			
			
		</div>


<div>	
		<label for="">Supplier : <?php echo $supplier; ?></label>
		
</div>


<?php 
    $query5 = "SELECT ItemNo FROM supplieritem WHERE SUsername='$supplierusername'";     
    $result5 = mysqli_query($db, $query5);
    $ans5 = mysqli_fetch_assoc($result5);
  	$valueitemno = $ans5['ItemNo'];
    $query1 = "SELECT itemfile.ItemNo,ItemDesc FROM itemfile INNER JOIN supplieritem ON itemfile.ItemNo=supplieritem.ItemNo AND SUsername='$supplierusername'";     
    $result1 = mysqli_query($db, $query1);
    $itemlist1 = '';
    while ($ans1 = mysqli_fetch_assoc($result1)) {
    	$itemlist1 .= "<option value = \"{$ans1['ItemNo']}\">{$ans1['ItemDesc']}</option>";    	
    }

?>


<div>
		<label for="">Item </label>
		<select name="item" id="item">
			<?php echo $itemlist1; ?>
		</select>
</div>
	<div class="input-group">
			<label>Order Quantity <input type="text" name="qty" style="width: 100px; height: 20px;"> *</label>
			
			
		</div>
		

		<button type="submit" name="placeorderpage2" class="btn"  style="padding: 10px;
	font-size: 15px;
	color: #0036c3;
	background: #48caff;
	border: none;
	border-radius: 5px;">Place Order</a></button>
		</div>


		<p>
			Return to Staff Home Page? <a href="staffhome.php">Staff Home Page</a>
		</p>
	</form>
</body>
</html>