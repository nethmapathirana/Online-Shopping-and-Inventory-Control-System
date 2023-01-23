<?php include('hardwaredbserver.php'); ?>

<?php 

	$ordno = $_SESSION['ordno'];
	$supplier = $_SESSION['rsupname'];
	$item = $_SESSION['itemno'];

	$query3 = "SELECT ItemDesc FROM itemfile WHERE ItemNo = '$item'";
     
    $result3 = mysqli_query($db, $query3);
    $ans3 = mysqli_fetch_assoc($result3);

  	$itemdesc = $ans3['ItemDesc'];

  	$query4 = "SELECT QtyReq FROM request WHERE ItemNo = '$item' AND ReqNo = '$ordno'";
     
    $result4 = mysqli_query($db, $query4);
    $ans4 = mysqli_fetch_assoc($result4);

  	$qtyreq = $ans4['QtyReq'];

  	$_SESSION['qtyreq'] = $qtyreq;

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Receive Order Page 3</title>
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
		<h2>Receive Order</h2>
	</div>

	<form method="post" action="receiveorderpage3.php">
		<?php include('errormsg.php'); ?>

		<div class="input-group">
			<label>Order Number :  <?php echo "$ordno"; ?></label>
			
			
		</div>


<div class="input-group">	
		<label for="">Supplier :  <?php echo "$supplier"; ?></label>
		
</div>

<div class="input-group">	
		<label for="">Item :  <?php echo "$itemdesc"; ?></label>
		
</div>


	<div class="input-group">
			<label>Requested Quantity : <?php echo "$qtyreq"; ?></label>
			
			
		</div>

	<div class="input-group">
			<label>Received Quantity <input type="text" name="recqty" style="width: 100px; height: 20px;"> *</label>			
			
	</div>

	<div class="input-group">
			<label>Unit Price <input type="text" name="unitprice" style="width: 100px; height: 20px;"> *</label>			
			
	</div>
		

		<button type="submit" name="receiveorderpage3" class="btn"  style="padding: 10px;
	font-size: 15px;
	color: #0036c3;
	background: #48caff;
	border: none;
	border-radius: 5px;">Confirm Receive Order</a></button>
		</div>


		<p>
			Return to Staff Home Page? <a href="staffhome.php">Staff Home Page</a>
		</p>
	</form>
</body>
</html>