<?php include('hardwaredbserver.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Individual Supplier Item View</title>
	<style>
		table, th, td {
    		border: 2px solid black;
    		background-color: white;
    		border-collapse: collapse;
    		
    		margin: 200px 0 0 750px;
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
			Return to Supplier Home Page? <a href="supplierhome.php">Supplier Home Page</a>
</p>

<?php
$db = mysqli_connect('localhost','root','nethma@123','hardware');
$valueusername = $_SESSION['username'];
?>

<div style="font-size:5.25em;color:#0036c3;font-weight:bold;text-align: center;height: 200px;width: 1500px;position: fixed;top: 40%;left: 50%;margin-top: -300px;margin-left: -750px;">Item List</div>
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

$db = mysqli_connect('localhost','root','nethma@123','hardware');
$sql = "SELECT itemfile.ItemNo,ItemDesc FROM itemfile INNER JOIN supplieritem ON itemfile.ItemNo=supplieritem.ItemNo AND SUsername='$valueusername'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo "<table><tr><th>Item Number</th><th>Item Description</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["ItemNo"]. "</td><td>" . $row["ItemDesc"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>

</body>
</html>