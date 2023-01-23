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
  			border-right: none; 
		}

		.btn-group:after {
  			content: "";
  			clear: both;
  			display: table;
		}

		
		.btn-group button:hover {
		  background-color: #c30000;
		}
	</style>
</head>
<body>
	<form method="post" action="hardwareserver.php">
	<div class="btn-group">  		
  		<button type="submit" name="customerlogin" class="btn">Customer Login</button>
  		<button type="submit" name="supplierlogin" class="btn">Supplier Login</button>
	</div>
	<div style="font-size:5.25em;color:#0036c3;font-weight:bold;text-align: center;height: 200px;width: 1500px;position: fixed;top: 50%;left: 50%;margin-top: -300px;margin-left: -750px;">Chandana Hardware (Pvt.) Ltd</div>
	<img src="hardware.jpg" alt="Hardware" style="width: 290px;height: 242px;position: fixed;top: 50%;left: 50%;margin-top: -90px;margin-left: -120px;">
	<iframe src="https://free.timeanddate.com/clock/i8613i4p/n1925/fcfff/tc0036c3/tt0/tm1/td2/th1/tb4" frameborder="0" width="167" height="34" style="position: fixed;top: 5%;right: 2%;"></iframe>
	<div style="position: fixed;bottom: 5%;">Copyright © N N Pathirana</div>
</form>
</body>
</html>