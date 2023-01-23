<?php include('hardwaredbserver.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Staff Password Change</title>
	<link rel="stylesheet" type="text/css" href="color.css">	
</head>
<body>
	<div class="header" style="width: 30%;margin:  50px auto 0px;color: #0036c3;background: #48caff;text-align: center;border: 1px solid #B0C4DE;border-bottom: none;border-radius: 10px 10px 0px 0px;padding:  20px;">
		<h2>Staff Password Change</h2>
	</div>
	<form method="post" action="staffchangepassword.php">
		<?php include('errormsg.php'); ?>
		<div class="input-group">
			<label>Username : <?php echo $_SESSION['username']; ?></label>		
		</div>			
		<div class="input-group">
			<label>Current Password <input type="password" name="oldpassword" style="width: 100px; height: 20px;"> *</label>
		</div>
		<div class="input-group">
			<label>New Password <input type="password" name="newpassword1" style="width: 100px; height: 20px;"> *</label>
		</div>
		<div class="input-group">
			<label>Confirm New Password <input type="password" name="newpassword2" style="width: 100px; height: 20px;"> *</label>
		</div>
		<div class="input-group">
			<button type="submit" name="epasswordchange" class="btn" style="padding: 10px;font-size: 15px;color: #0036c3;background: #48caff;border: none;border-radius: 5px;">Change Password</button>
		</div>
		<p>
			Return to Staff Home Page? <a href="staffhome.php">Home</a>
		</p>
	</form>
</body>
</html>