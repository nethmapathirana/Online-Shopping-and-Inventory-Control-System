<?php include('hardwaredbserver.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Customer Login System</title>
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
		<h2>Customer Login</h2>
	</div>

	<form method="post" action="customerlogin.php">
		<?php include('errormsg.php'); ?>
		<div class="input-group">
			<label>Username <input type="text" name="username" style="width: 100px; height: 20px;"> *</label>
			
			
		</div>
			
		<div class="input-group">
			<label>Password <input type="password" name="password" style="width: 100px; height: 20px;"> *</label>
			
			
		</div>
		<div class="input-group">
			<button type="submit" name="clogin" class="btn"  style="padding: 10px;
	font-size: 15px;
	color: #0036c3;
	background: #48caff;
	border: none;
	border-radius: 5px;">Login</button>
		</div>
		<p>
			Not a Customer Yet? <a href="customerregister.php">Sign Up</a> 
		</p>


		<p>
			<a href="home.php">Home</a>
		</p>

	
	</form>
</body>
</html>