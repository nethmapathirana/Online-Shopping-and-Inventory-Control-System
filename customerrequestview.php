<!DOCTYPE html>
<html>
<head>
	<title>Customer Request View</title>
	<style>
		table, th, td {
    		border: 2px solid black;
    		background-color: white;
    		border-collapse: collapse;
    		font-size:1.25em;
    		margin: 150px 0 0 435px;
		}
		th {
			color: #0036c3;;
		}
		body{
			
			background-color: #48caff;
		}
	</style>
</head>
<body>

<p>
			Return to Staff Home Page? <a href="staffhome.php">Staff Home Page</a>
</p>

<div style="font-size:4.25em;color:#0036c3;font-weight:bold;text-align: center;height: 200px;width: 1500px;position: fixed;top: 40%;left: 50%;margin-top: -300px;margin-left: -750px;">Customer Requests to be Issued</div>

<?php
$servername = "localhost";
$username = "root";
$password = "nethma@123";
$dbname = "hardware";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM corder WHERE QtyIss = 0 ORDER BY OrdNo ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    

    echo "<table><tr><th>Order Number</th><th>Item</th><th>Quantity Required</th><th>Customer</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
    	$username = $row["CustUsername"];
    	$query = "SELECT CName FROM customer WHERE CUsername='$username'";     
    	$result2 = mysqli_query($conn, $query);
    	$ans2 = mysqli_fetch_assoc($result2);
  		$valuename = $ans2['CName'];

  		$itemno = $row["ItemNo"];
    	$query2 = "SELECT ItemDesc FROM itemfile WHERE ItemNo='$itemno'";     
    	$result3 = mysqli_query($conn, $query2);
    	$ans3 = mysqli_fetch_assoc($result3);
  		$itemname = $ans3['ItemDesc'];


        echo "<tr><td>" . $row["OrdNo"]. "</td><td>" . $itemname. "</td><td>" . $row["QtyReq"]. "</td><td>" . $valuename. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>

</body>
</html>