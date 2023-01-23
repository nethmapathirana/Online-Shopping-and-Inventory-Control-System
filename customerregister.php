<?php include('hardwaredbserver.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Customer Registration System</title>
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
		<h2>Customer Registration</h2>
	</div>

	<form method="post" action="customerregister.php">
		<?php include('errormsg.php'); ?>


		<div class="input-group">
			<label>Username <input type="text" name="username" style="width: 100px; height: 20px;"> *</label>
			
			
		</div>
			
		<div class="input-group">
			<label>Password <input type="password" name="password" style="width: 100px; height: 20px;"> *</label>
			
			
		</div>

		<div class="input-group">
			<label>Name <input type="text" name="name" style="width: 408px; height: 20px;"> *</label>
			
			
		</div>
		<div class="input-group">
			<label>Address Line 1 <input type="text" name="adr1" style="width: 248px;  height: 20px;"> *</label>
			
		</div>
		<div class="input-group">
			<label>Address Line 2 <input type="text" name="adr2" style="width: 248px;  height: 20px;"></label>
			
		</div>
		<div class="input-group">
			<label>Address Line 3 <input type="text" name="adr3" style="width: 248px;  height: 20px;"></label>
			
		</div>
		<div class="input-group">
			<label>Tel. Number <input type="text" name="tel" style="width: 88px;  height: 20px;"> *</label>
			
		</div>
		<div class="input-group">
			<label>Fax. Number <input type="text" name="fax" style="width: 96px;  height: 20px;"></label>
			
		</div>
		<div class="input-group">
			<label>E-mail Address <input type="email" name="email" style="width: 248px;  height: 20px;"> *</label>
			
		</div>


		
		<div class="input-group">
			<button type="submit" name="cregister" class="btn" style="padding: 10px;
	font-size: 15px;
	color: #0036c3;
	background: #48caff;
	border: none;
	border-radius: 5px;">Register</button>
		</div>
		<p>
			Already a Customer? <a href="customerlogin.php">Sign In</a>
		</p>
	</form>
</body>
</html>


