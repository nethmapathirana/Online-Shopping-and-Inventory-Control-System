<?php include('hardwaredbserver.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Date</title>
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
		<h2>Date</h2>
	</div>
	<?php
		date_default_timezone_set('Asia/Colombo');
		$currentdate = date("d-m-y");
		

	?>
	<form method="post" action="test.php">
		<?php include('errors.php'); ?>
		<div class="input-group">
			<label>Date <?php echo $currentdate; ?></label>
			
			



		<p>
			<a href="home.php">Home</a>
		</p>

	
	</form>
</body>
</html>