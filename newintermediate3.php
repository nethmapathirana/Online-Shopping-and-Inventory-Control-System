<?php include('hardwaredbserver.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Delete Items</title>
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
		<h2>Supplier Item Deletion</h2>
	</div>

	<form method="post" action="newintermediate3.php">
		

		<p>Would you like to delete another item?</p>
		
		<div>
		<button type="submit" name="supplieritemdeleteyes" class="btn"  style="padding: 10px;
	font-size: 15px;
	color: #0036c3;
	background: #48caff;
	border: none;
	border-radius: 5px;">Yes</a></button>

	<button type="submit" name="supplieritemdeleteno" class="btn"  style="padding: 10px;
	font-size: 15px;
	color: #0036c3;
	background: #48caff;
	border: none;
	border-radius: 5px;">No</a></button>
		</div>


		
	</form>
</body>
</html>