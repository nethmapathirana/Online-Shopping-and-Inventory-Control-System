<?php include('hardwaredbserver.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Item Add Page</title>
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
		<h2>Add - Items</h2>
	</div>

	<form method="post" action="itemscreen.php">
	<?php include('errormsg.php'); ?>

		<div class="input-group">
			<label>Item Number <input type="text" name="itemno" style="width: 100px; height: 20px;"> *</label>
			
			
		</div>
			
		<div class="input-group">
			<label>Description <input type="text" name="desc" style="width: 350px; height: 20px;"> *</label>
			
			
		</div>

		<div class="input-group">
			<label>Re-Order Level <input type="text" name="rol" style="width: 100px; height: 20px;"> *</label>
			
			
		




		<div class="input-group">
			<button type="submit" name="itemadd" class="btn" style="padding: 10px;
	font-size: 15px;
	color: #0036c3;
	background: #48caff;
	border: none;
	border-radius: 5px;">Add</button>
		</div>
		<p>
			Return to Staff Home Page? <a href="staffhome.php">Staff Home Page</a>
		</p>
	</form>
</body>
</html>




