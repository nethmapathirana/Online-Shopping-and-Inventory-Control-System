<?php include('hardwaredbserver.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Place Order</title>
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

	<form method="post" action="intermediate.php">
		

		<p>Would you like to add another item to the same order?</p>
		
		<div>
		<button type="submit" name="placeorderyes" class="btn"  style="padding: 10px;
	font-size: 15px;
	color: #0036c3;
	background: #48caff;
	border: none;
	border-radius: 5px;">Yes</a></button>

	<button type="submit" name="placeorderno" class="btn"  style="padding: 10px;
	font-size: 15px;
	color: #0036c3;
	background: #48caff;
	border: none;
	border-radius: 5px;">No</a></button>
		</div>

<a href="staffitemrequestform.php" target="_blank">Print Request Form</a>
		
	</form>
</body>
</html>