<?php 

	//if the staff login button is clicked

	if (isset($_POST['stafflogin'])) {
		include 'stafflogin.php';			
	}

	if (isset($_POST['customerlogin'])) {
		include 'customerlogin.php';			
	}

	if (isset($_POST['supplierlogin'])) {
		include 'supplierlogin.php';			
	}

?>