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

    $supusername = $_SESSION['supusername'];

    $query3 = "SELECT SName FROM supplier WHERE SUsername = '$supusername'";
     
    $result3 = mysqli_query($db, $query3);

    




    $ans3 = mysqli_fetch_assoc($result3);

  	
	$supname = $ans3['SName'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Supplier Item Selection</title>
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
		<h2>Supplier Item Registration</h2>
	</div>

	<form method="post" action="supplieritem.php">
		

		<div class="input-group">
			<label>Name : <?php echo $supname; ?></label>
			
			
		</div>


		<label for="">Select Items You Can Supply : </label>
		<select name="item" id="item">
			<?php echo $itemlist; ?>
		</select>
		
		<div>
			<button type="submit" name="supplieritemadd" class="btn"  style="padding: 10px;
	font-size: 15px;
	color: #0036c3;
	background: #48caff;
	border: none;
	border-radius: 5px;">Add</a></button>
		</div>

		
	</form>
</body>
</html>