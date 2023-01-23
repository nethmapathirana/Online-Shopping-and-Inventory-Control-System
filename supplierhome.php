<?php include('hardwaredbserver.php'); ?>

  

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Supplier Home Page</title>
	<link rel="stylesheet" type="text/css" href="color.css">
	<style>
		body{
			
			background-color: #48caff;
		}


.navbar {
  overflow: hidden;
  background-color: #0036c3;
}

.navbar a {
  float: left;
  font-size: 14px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 14px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 14px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}

		
	</style>
</head>
<body>
	<div class="navbar">

  <div class="dropdown">
    <button class="dropbtn">Items 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="newsupplieritem.php">Add Items</a>
      <a href="deleteitem.php">Delete Items</a>
      <a href="individualsupitemview.php">View all Items</a>
      
    </div>
  </div>
  
  <div class="dropdown">
    <button class="dropbtn">Utilities 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="supplierchangepassword.php">Change Password</a>
      <a href="supplierusermanual.pdf" target="_blank">Help</a>      
    </div>
  </div>
  <a href="home.php">Logout</a> 
</div>

<div>
  

</div>

	<div style="font-size:5.25em;color:#0036c3;font-weight:bold;text-align: center;height: 200px;width: 1500px;position: fixed;top: 50%;left: 50%;margin-top: -300px;margin-left: -750px;">Chandana Hardware (Pvt.) Ltd</div>

	<img src="hardware.jpg" alt="Hardware" style="width: 290px;height: 242px;position: fixed;top: 50%;left: 50%;margin-top: -90px;margin-left: -120px;">



    

	<iframe src="https://free.timeanddate.com/clock/i8613i4p/n1925/fcfff/tc0036c3/tt0/tm1/td2/th1/tb4" frameborder="0" width="167" height="34" style="position: fixed;top: 5%;right: 2%;"></iframe>

	<div style="position: fixed;bottom: 5%;">Copyright © N N Pathirana</div>

</form>
</body>
</html>