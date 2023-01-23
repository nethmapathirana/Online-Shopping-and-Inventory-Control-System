<!--
<!DOCTYPE html >
<html >
<head>
<title>Supplier View</title>
</head>
 
<body>
	<table>
  		<tr>
    		<th align="center">Username</th>
    		<th align="center">Name</th>
    		<th align="center">Address Line 1</th>
    		<th align="center">Address Line 2</th>
    		<th align="center">Address Line 3</th>
    		<th align="center">Tel. Number</th>
    		<th align="center">Fax. Number</th>
    		<th align="center">Email</th>
    		<th align="center">Registered Date</th>
    		<th align="center">Supplier Type</th>
  		</tr>

  		<?php 
  		
  		$conn = mysqli_connect("localhost","root","nethma@123","hardware"); 
  		$sql = "SELECT * FROM supplier";
  		$result = $conn-> query($sql);

  		if ($result->num_rows > 0) {
  			while ($row->$result > fetch_assoc()) {
  				echo "<tr><td>" . $row["SUsername"] . "<tr><td>" . $row["SName"] . "</td></tr>";
  			}
  		}
  		else {
  			echo "No Results";
  		}

  		$conn-> close();
  		?>

  	</table>
  </body>
 </html>
-->