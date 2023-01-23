<!DOCTYPE html>
<html>
<head>
	<title>Item View</title>
	<style>
		
		table, th, td {
    		
    		border: 2px solid black;
    		background-color: white;
    		border-collapse: collapse;
    		font-size:1.25em;
    		margin: 200px 0 0 550px;
		}
		th {
			color: #0036c3;
			
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

<div style="font-size:4.25em;color:#0036c3;font-weight:bold;text-align: center;height: 200px;width: 1500px;position: fixed;top: 40%;left: 50%;margin-top: -300px;margin-left: -750px;">Item List</div>

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

$sql = "SELECT * FROM itemfile ORDER BY ItemNo ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>Item Number</th><th>Item Description</th><th>Re-Order Level</th><th>Item Stock</th>
    			</tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["ItemNo"]. "</td><td>" . $row["ItemDesc"]. "</td><td>" . $row["ItemROL"]. "</td><td>" . $row["ItemStock"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>

</body>
</html>