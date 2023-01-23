<?php include('hardwaredbserver.php'); ?>
<?php 
	$ordno=$_SESSION['ordno'];
    $query3 = "SELECT CustUsername FROM corder WHERE OrdNo = '$ordno'";     
    $result3 = mysqli_query($db, $query3);
    $ans3 = mysqli_fetch_assoc($result3);
  	$customerusername = $ans3['CustUsername'];
  	$_SESSION['custusername'] = $customerusername;
  	$query4 = "SELECT CName FROM customer WHERE CUsername='$customerusername'";     
    $result4 = mysqli_query($db, $query4);
    $ans4 = mysqli_fetch_assoc($result4);
  	$custname = $ans4['CName'];
  	$_SESSION['custname'] = $custname;
  	$query1 = "SELECT itemfile.ItemNo,ItemDesc FROM itemfile INNER JOIN corder ON itemfile.ItemNo=corder.ItemNo AND OrdNo = '$ordno'";     
    $result1 = mysqli_query($db, $query1);
    $itemlist1 = '';
    while ($ans1 = mysqli_fetch_assoc($result1)) {
    	$itemlist1 .= "<option value = \"{$ans1['ItemNo']}\">{$ans1['ItemDesc']}</option>";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Issue Order Page 2</title>
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
		<h2>Issue Order</h2>
	</div>
	<form method="post" action="issuetocustomeronlinepage2.php">
		<div class="input-group">
			<label>Order Number : <?php echo "$ordno"; ?></label>					
		</div>
<div>	
		<label for="">Customer : <?php echo "$custname"; ?></label>
		
</div>
	<div class="input-group">
		<label for="">Item <select name="item" id="item"><?php echo $itemlist1; ?></select></label>
		
</div>
		

		<button type="submit" name="customerissue2" class="btn"  style="padding: 10px;
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