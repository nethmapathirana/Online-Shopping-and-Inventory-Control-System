<?php include('hardwaredbserver.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Issue Order</title>
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

	<form method="post" action="intermediate6.php">
		

		<p>Would you like to add another item for the same order?</p>
		
		<div>
		<button type="submit" name="physicalcustomeryes" class="btn"  style="padding: 10px;
	font-size: 15px;
	color: #0036c3;
	background: #48caff;
	border: none;
	border-radius: 5px;">Yes</a></button>

	<button type="submit" name="physicalcustomerno" class="btn"  style="padding: 10px;
	font-size: 15px;
	color: #0036c3;
	background: #48caff;
	border: none;
	border-radius: 5px;">No</a></button>
		</div>

<a href="customerbillphysical.php" target="_blank">Print Customer Invoice</a>
		
	</form>
</body>
</html>