
<!DOCTYPE html>
<html>
<head>
	<title>Supplier View</title>
	<style>
		table, th, td {
    		border: 2px solid black;
    		background-color: white;
    		border-collapse: collapse;
    		font-size:1.25em;
    		margin: 200px 0 0 280px;
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

<div style="font-size:4.25em;color:#0036c3;font-weight:bold;text-align: center;height: 200px;width: 1500px;position: fixed;top: 40%;left: 50%;margin-top: -300px;margin-left: -750px;">Registered Suppliers</div>

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

$sql = "SELECT * FROM supplier ORDER BY SName";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>Username</th><th>Name</th><th>Address</th>
    			<th>Tel. Number</th>
    			<th>Fax. Number</th>
    			<th>Email</th>
    			</tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["SUsername"]. "</td><td>" . $row["SName"]. "</td><td>" . $row["SAdr1"]. "</td><td>" .  $row["STel"]. "</td><td>" . $row["SFax"]. "</td><td>" . $row["SEmail"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>

</body>
</html>