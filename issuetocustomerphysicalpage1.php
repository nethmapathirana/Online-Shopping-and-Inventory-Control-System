<?php include('hardwaredbserver.php'); ?>

<?php

	$db = mysqli_connect('localhost','root','nethma@123','hardware');

	if (mysqli_connect_errno()) {
		echo "Failed".mysqli_connect_errno();
	}

	$query1 = "SELECT ItemNo,ItemDesc FROM itemfile";
     
    $result1 = mysqli_query($db, $query1);

    $itemlist1 = '';
    while ($ans1 = mysqli_fetch_assoc($result1)) {
    	$itemlist1 .= "<option value = \"{$ans1['ItemNo']}\">{$ans1['ItemDesc']}</option>";
    	
    }

 

    $query3 = "SELECT OrdNo FROM corder ORDER BY OrdNo DESC";
     
    $result3 = mysqli_query($db, $query3);

    $ans3 = mysqli_fetch_assoc($result3);

  	$value = $ans3['OrdNo'] + 1; 

  	$_SESSION['physicalordno1'] = $value;

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Issue Order Page 1</title>
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
		<h2>Issue Order</h2>
	</div>

	<form method="post" action="issuetocustomerphysicalpage1.php">
		<?php include('errormsg.php'); ?>

		<div class="input-group">
			<label>Order Number : <?php echo "$value"; ?></label>
			
			
		</div>

		<div class="input-group">
			<label>Customer Name: <input type="text" name="name" style="width: 100px; height: 20px;"> *</label>
		</div>




<div>	
		<label for="">Item </label>
		<select name="item" id="item">
			<?php echo $itemlist1; ?>
		</select>
</div>


		<div class="input-group">
			<label>Quantity Required <input type="number" name="qtyneed" style="width: 100px; height: 20px;"> *</label>			
			
		</div>
		

		<button type="submit" name="physicalcustomer1" class="btn"  style="padding: 10px;
	font-size: 15px;
	color: #0036c3;
	background: #48caff;
	border: none;
	border-radius: 5px;">Next</a></button>
		</div>


		<p>
			Return to Staff Home Page? <a href="staffhome.php">Staff Home Page</a>
		</p>
	</form>
</body>
</html>