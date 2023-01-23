<?php include('hardwaredbserver.php'); ?>
<?php

	$db = mysqli_connect('localhost','root','nethma@123','hardware');

	if (mysqli_connect_errno()) {
		echo "Failed".mysqli_connect_errno();
	}


	
    $query = "SELECT ItemNo,ItemDesc FROM itemfile";
     
    $result = mysqli_query($db, $query);

    $itemlist = '';
    while ($ans = mysqli_fetch_assoc($result)) {
    	$itemlist .= "<option value = \"{$ans['ItemNo']}\">{$ans['ItemDesc']}</option>";
    	
    }

    

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>New Supplier Item Selection</title>
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
		<h2>Supplier Item Registration</h2>
	</div>

	<form method="post" action="supplieritem.php">
		

		<div class="input-group">
			<label>Username : <?php echo $_SESSION['username']; ?></label>
			
			
		</div>


		<label for="">Select Items You Can Supply : </label>
		<select name="item" id="item">
			<?php echo $itemlist; ?>
		</select>
		
		<div>
			<button type="submit" name="newsupplieritemadd" class="btn"  style="padding: 10px;
	font-size: 15px;
	color: #0036c3;
	background: #48caff;
	border: none;
	border-radius: 5px;">Add</a></button>
		</div>

		<p>
			Return to Supplier Home Page? <a href="supplierhome.php">Supplier Home Page</a>
		</p>

		
	</form>
</body>
</html>