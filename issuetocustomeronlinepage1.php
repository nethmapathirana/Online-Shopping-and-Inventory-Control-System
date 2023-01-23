<?php include('hardwaredbserver.php'); ?>
<?php
	$db = mysqli_connect('localhost','root','nethma@123','hardware');
	if (mysqli_connect_errno()) {
		echo "Failed".mysqli_connect_errno();
	}
    $query2 = "SELECT CUsername,CName FROM customer ORDER BY CName";     
    $result2 = mysqli_query($db, $query2);
    $itemlist2 = '';
    while ($ans2 = mysqli_fetch_assoc($result2)) {
    	$itemlist2 .= "<option value = \"{$ans2['CUsername']}\">{$ans2['CName']}</option>";    	
    }
    $query1 = "SELECT ItemNo,ItemDesc FROM itemfile";     
    $result1 = mysqli_query($db, $query1);
    $itemlist1 = '';
    while ($ans1 = mysqli_fetch_assoc($result1)) {
    	$itemlist1 .= "<option value = \"{$ans1['ItemNo']}\">{$ans1['ItemDesc']}</option>";    	
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Issue to Customers</title>
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
		<h2>Issue to Customer</h2>
	</div>
	<form method="post" action="issuetocustomeronlinepage1.php">
		<?php include('errormsg.php'); ?>
		<div class="input-group">
			<label>Order Number  <input type="text" name="ordno" style="width: 100px; height: 20px;"> *</label>			
		</div>
		<button type="submit" name="customerissue1" class="btn"  style="padding: 10px;
	font-size: 15px;
	color: #0036c3;
	background: #48caff;
	border: none;
	border-radius: 5px;">Procced</a></button>
		</div>
		<p>
			Return to Staff Home Page? <a href="staffhome.php">Staff Home Page</a>
		</p>
	</form>
</body>
</html>