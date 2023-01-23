<?php include('hardwaredbserver.php'); ?>
<?php

	$db = mysqli_connect('localhost','root','nethma@123','hardware');

	if (mysqli_connect_errno()) {
		echo "Failed".mysqli_connect_errno();
	}
  	$valueusername = $_SESSION['username'];
	$query4 = "SELECT SName FROM supplier WHERE SUsername='$valueusername'";     
    $result4 = mysqli_query($db, $query4);
    $ans4 = mysqli_fetch_assoc($result4);
  	$valuename = $ans4['SName'];    
  	$query5 = "SELECT ItemNo FROM supplieritem WHERE SUsername='$valueusername'";     
    $result5 = mysqli_query($db, $query5);
    $ans5 = mysqli_fetch_assoc($result5);
  	$valueitemno = $ans5['ItemNo'];
    $query = "SELECT itemfile.ItemNo,ItemDesc FROM itemfile INNER JOIN supplieritem ON itemfile.ItemNo=supplieritem.ItemNo AND SUsername='$valueusername'";     
    $result = mysqli_query($db, $query);
    $itemlist = '';
    while ($ans = mysqli_fetch_assoc($result)) {
    	$itemlist .= "<option value = \"{$ans['ItemNo']}\">{$ans['ItemDesc']}</option>";    	
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Supplier Item Deletion</title>
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
		<h2>Supplier Item Deletion</h2>
	</div>
	<form method="post" action="supplieritem.php">	
		<div class="input-group">
			<label>Username : <?php echo $_SESSION['username']; ?></label>			
		</div>
		<label for="">Select Items You Want to Delete : </label>
		<select name="item" id="item">
			<?php echo $itemlist; ?>
		</select>		
		<div>
			<button type="submit" name="supplieritemdelete" class="btn"  style="padding: 10px;
	font-size: 15px;
	color: #0036c3;
	background: #48caff;
	border: none;
	border-radius: 5px;">Delete</a></button>
		</div>
		<p>
			Return to Supplier Home Page? <a href="supplierhome.php">Supplier Home Page</a>
		</p>
		
	</form>
</body>
</html>