<?php include('hardwaredbserver.php'); ?>

<?php
	$db = mysqli_connect('localhost','root','nethma@123','hardware');
	if (mysqli_connect_errno()) {
		echo "Failed".mysqli_connect_errno();
	}

    $query2 = "SELECT SUsername,SName FROM supplier ORDER BY SName";     
    $result2 = mysqli_query($db, $query2);
    $itemlist2 = '';
    while ($ans2 = mysqli_fetch_assoc($result2)) {
    	$itemlist2 .= "<option value = \"{$ans2['SUsername']}\">{$ans2['SName']}</option>";    	
    }   
    $query3 = "SELECT ReqNo FROM request ORDER BY ReqNo DESC";     
    $result3 = mysqli_query($db, $query3);    
    $ans3 = mysqli_fetch_assoc($result3);
  	$value = $ans3['ReqNo'] + 1;
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Place Order Page 1</title>
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
		<h2>Place Order</h2>
	</div>

	<form method="post" action="placeorderpage1.php">
		

		<div class="input-group">
			<label>Order Number : <?php echo $value; ?></label>
			
			
		</div>


<div>	
		<label for="">Supplier </label>
		<select name="supplier" id="supplier">
			<?php echo $itemlist2; ?>
		</select>
</div>



		

		<button type="submit" name="placeorderpage1" class="btn"  style="padding: 10px;
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