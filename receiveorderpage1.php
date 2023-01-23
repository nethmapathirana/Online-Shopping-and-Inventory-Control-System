<?php include('hardwaredbserver.php'); ?>

<?php

	$db = mysqli_connect('localhost','root','nethma@123','hardware');

	if (mysqli_connect_errno()) {
		echo "Failed".mysqli_connect_errno();
	}



?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Receive Order Page 1</title>
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

	<form method="post" action="receiveorderpage1.php">
		<?php include('errormsg.php'); ?>

		<div class="input-group">
			<label>Order Number <input type="text" name="ordno" style="width: 100px; height: 20px;"> *</label>
			
			
		</div>


		<button type="submit" name="receiveorderpage1" class="btn"  style="padding: 10px;
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