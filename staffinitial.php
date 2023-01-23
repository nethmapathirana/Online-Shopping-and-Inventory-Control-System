<?php include('hardwareserver.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Chandana Hardware (Pvt.) Ltd</title>
	
	<style>
		body{
			
			background-color: #48caff;
		}

		
		.btn-group button {
  			background-color: #0036c3; 
  			border: 1px solid black; 
  			color: white; 
  			padding: 10px 24px; 
  			cursor: pointer; 
  			float: left; 
		}

		.btn-group button:not(:last-child) {
  			border-right: none; /* Prevent double borders */
		}

		/* Clear floats (clearfix hack) */
		.btn-group:after {
  			content: "";
  			clear: both;
  			display: table;
		}

		/* Add a background color on hover */
		.btn-group button:hover {
		  background-color: #c30000;
		}
	</style>
</head>
<body>
<!--
	<div class="header">
		<h2>Home</h2>
	</div>
	<div class="input-group">
		<button type="submit" name="register" class="btn">Register</button>
	</div>
	-->

	<form method="post" action="hardwareserver.php">
	<div class="btn-group">
  		<button type="submit" name="stafflogin" class="btn">Staff Login</button>
  		
	</div>

	<div style="font-size:5.25em;color:#0036c3;font-weight:bold;text-align: center;height: 200px;width: 1500px;position: fixed;top: 50%;left: 50%;margin-top: -300px;margin-left: -750px;">Chandana Hardware (Pvt.) Ltd</div>

	<img src="hardware.jpg" alt="Hardware" style="width: 290px;height: 242px;position: fixed;top: 50%;left: 50%;margin-top: -90px;margin-left: -120px;">


<!--
	<iframe src="https://free.timeanddate.com/clock/i860v7jx/n1925/fcfff/tc0036c3/th1" frameborder="0" width="70" height="30" style="position: fixed;top: 5%;left: 95%;margin-top: 10px;margin-left: -10px;"></iframe>
-->

	<iframe src="https://free.timeanddate.com/clock/i8613i4p/n1925/fcfff/tc0036c3/tt0/tm1/td2/th1/tb4" frameborder="0" width="167" height="34" style="position: fixed;top: 5%;right: 2%;"></iframe>

	<div style="position: fixed;bottom: 5%;">Copyright © N N Pathirana</div>

</form>
</body>
</html>