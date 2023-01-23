<?php include('hardwaredbserver.php'); ?>

<?php 

	$ordno=$_SESSION['ordno'];

    $query3 = "SELECT Supplier FROM request WHERE ReqNo = '$ordno'";
     
    $result3 = mysqli_query($db, $query3);
    $ans3 = mysqli_fetch_assoc($result3);

  	$supplierusername = $ans3['Supplier'];

  	$_SESSION['rsupusername'] = $supplierusername;

  	$query4 = "SELECT SName FROM supplier WHERE SUsername='$supplierusername'";
     
    $result4 = mysqli_query($db, $query4);

    $ans4 = mysqli_fetch_assoc($result4);

  	$supplier = $ans4['SName'];

  	$_SESSION['rsupname'] = $supplier;


  	$query1 = "SELECT itemfile.ItemNo,ItemDesc FROM itemfile INNER JOIN request ON itemfile.ItemNo=request.ItemNo AND ReqNo = '$ordno'";
     
    $result1 = mysqli_query($db, $query1);

    $itemlist1 = '';
    while ($ans1 = mysqli_fetch_assoc($result1)) {
    	$itemlist1 .= "<option value = \"{$ans1['ItemNo']}\">{$ans1['ItemDesc']}</option>";
    	
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Receive Order Page 2</title>
	<link rel="stylesheet" type="text/css" href="style.css">
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

	<form method="post" action="receiveorderpage2.php">
		

		<div class="input-group">
			<label>Order Number : <?php echo "$ordno"; ?></label>
			
			
		</div>


<div>	
		<label for="">Supplier : <?php echo "$supplier"; ?></label>
		
</div>


	<div class="input-group">
		<label for="">Item <select name="item" id="item"><?php echo $itemlist1; ?></select></label>
		
</div>
		

		<button type="submit" name="receiveorderpage2" class="btn"  style="padding: 10px;
	font-size: 15px;
	color: #0036c3;
	background: #48caff;
	border: none;
	border-radius: 5px;">Proceed</a></button>
		</div>


		<p>
			Return to Staff Home Page? <a href="staffhome.php">Staff Home Page</a>
		</p>
	</form>
</body>
</html>