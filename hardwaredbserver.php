<?php 
	session_start();
	$username = "";
	$email = "";
	$errors = array();
	//connect to the database
	$db = mysqli_connect('localhost','root','nethma@123','hardware');
	if (mysqli_connect_errno()) {
		echo "Failed".mysqli_connect_errno();
	}
	

	//if the eregister button is clicked
	if (isset($_POST['eregister'])) {
		$username = mysqli_real_escape_string($db, $_POST['username']);		
		$password = mysqli_real_escape_string($db, $_POST['password']);
		$name = mysqli_real_escape_string($db, $_POST['name']);
		$adr1 = mysqli_real_escape_string($db, $_POST['adr1']);
		$adr2 = mysqli_real_escape_string($db, $_POST['adr2']);
		$adr3 = mysqli_real_escape_string($db, $_POST['adr3']);
		$tel = mysqli_real_escape_string($db, $_POST['tel']);
		$fax = mysqli_real_escape_string($db, $_POST['fax']);
		$email = mysqli_real_escape_string($db, $_POST['email']);

		//ensure that form fields are filled properly
		if (empty($username)) {
			array_push($errors, "Please Enter Username with 8 Characters");		
		}		
		if (empty($password)) {
			array_push($errors, "Please Enter Password");
		}		
		if (empty($name)) {
			array_push($errors, "Please Enter Name");			
		}
		if (empty($adr1)) {
			array_push($errors, "Please Enter Address");			
		}
		if (empty($tel)) {
			array_push($errors, "Please Enter Telephone Number");
		}		
		if (empty($email)) {
			array_push($errors, "Please Enter Email Address");
		}
		
		//if there are no errors, save user to database
		if (count($errors) == 0) {			
			$password = md5($password);
			$sql = "INSERT INTO staff (EUsername, EPassword, EName, EAdr1, EAdr2, EAdr3, ETel, EFax, EEmail) VALUES ('$username', '$password', '$name', '$adr1', '$adr2', '$adr3', '$tel', '$fax', '$email')";
			mysqli_query($db, $sql);
			header('location: stafflogin.php');	
		}
	}


	//if user click elogin
	if (isset($_POST['elogin'])) {
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$password = mysqli_real_escape_string($db, $_POST['password']);

		//ensure that form fields are filled properly
		if (empty($username)) {
			array_push($errors, "Please Enter Username with 8 Characters");
		}
		if (empty($password)) {
			array_push($errors, "Please Enter Password");
		}
		
		if (count($errors) == 0) {			
			$_SESSION['username'] = $username;
			$_SESSION['staffusername'] = $username;
			$password =  md5($password);
			$query = "SELECT * FROM staff WHERE EUsername='$username' AND EPassword='$password'";
			$result = mysqli_query($db, $query);
			if (mysqli_num_rows($result) == 1) {
				header('location: staffhome.php');
				
			}else{
				array_push($errors, "Wrong Username/ Password");
				
			}
		}
	}


	//if the cregister button is clicked
	if (isset($_POST['cregister'])) {
		$username = mysqli_real_escape_string($db, $_POST['username']);		
		$password = mysqli_real_escape_string($db, $_POST['password']);
		$name = mysqli_real_escape_string($db, $_POST['name']);
		$adr1 = mysqli_real_escape_string($db, $_POST['adr1']);
		$adr2 = mysqli_real_escape_string($db, $_POST['adr2']);
		$adr3 = mysqli_real_escape_string($db, $_POST['adr3']);
		$tel = mysqli_real_escape_string($db, $_POST['tel']);
		$fax = mysqli_real_escape_string($db, $_POST['fax']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		
		//ensure that form fields are filled properly
		if (empty($username)) {
			array_push($errors, "Please Enter Username with 8 Characters");			
		}		
		if (empty($password)) {
			array_push($errors, "Please Enter Password");			
		}		
		if (empty($name)) {
			array_push($errors, "Please Enter Name");			
		}
		if (empty($adr1)) {
			array_push($errors, "Please Enter Address Line 1");			
		}
		if (empty($tel)) {
			array_push($errors, "Please Enter Telephone Number");
		}		
		if (empty($email)) {
			array_push($errors, "Please Enter Email Address");
		}
				
		//if there are no errors, save user to 
		if (count($errors) == 0) {		
			$password = md5($password);
			$sql = "INSERT INTO customer (CUsername, CPassword, CName, CAdr1, CAdr2, CAdr3, CTel, CFax, CEmail) VALUES ('$username', '$password', '$name', '$adr1', '$adr2', '$adr3', '$tel', '$fax', '$email')";
			mysqli_query($db, $sql);
			header('location: customerlogin.php'); 			
		}
	}


	//if user click clogin
	if (isset($_POST['clogin'])) {	
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$password = mysqli_real_escape_string($db, $_POST['password']);

		//ensure that form fields are filled properly
		if (empty($username)) {
			array_push($errors, "Please Enter Username with 8 Characters");
		}
		if (empty($password)) {
			array_push($errors, "Please Enter Password");
		}
		
		if (count($errors) == 0) {			
			$password =  md5($password);
			$query = "SELECT * FROM customer WHERE CUsername='$username' AND CPassword='$password'";
			$result = mysqli_query($db, $query);
			if (mysqli_num_rows($result) == 1) {
				$_SESSION['username'] = $username;
				$_SESSION['success'] = "You are now logged in";				
				$query4 = "SELECT CName FROM customer WHERE CUsername='$username'";     
    			$result4 = mysqli_query($db, $query4);
    			$ans4 = mysqli_fetch_assoc($result4);
  				$valuename = $ans4['CName'];
				$_SESSION['name'] = $valuename;
				header('location: customerhome.php');				
			}else{				
				array_push($errors, "Wrong Username/ Password");				
			}
		}
	}


	//if the sregister button is clicked
	if (isset($_POST['sregister'])) {
		$username = mysqli_real_escape_string($db, $_POST['username']);		
		$password = mysqli_real_escape_string($db, $_POST['password']);
		$name = mysqli_real_escape_string($db, $_POST['name']);
		$adr1 = mysqli_real_escape_string($db, $_POST['adr1']);
		$adr2 = mysqli_real_escape_string($db, $_POST['adr2']);
		$adr3 = mysqli_real_escape_string($db, $_POST['adr3']);
		$tel = mysqli_real_escape_string($db, $_POST['tel']);
		$fax = mysqli_real_escape_string($db, $_POST['fax']);
		$email = mysqli_real_escape_string($db, $_POST['email']);

		//ensure that form fields are filled properly
		if (empty($username)) {
			array_push($errors, "Please Enter Username with 8 Characters");			
		}		
		if (empty($password)) {
			array_push($errors, "Please Enter Password");			
		}		
		if (empty($name)) {
			array_push($errors, "Please Enter Name");			
		}
		if (empty($adr1)) {
			array_push($errors, "Please Enter Address Line 1");			
		}
		if (empty($tel)) {
			array_push($errors, "Please Enter Telephone Number");
		}		
		if (empty($email)) {
			array_push($errors, "Please Enter Email Address");
		}

		//if there are no errors, save user to database
		if (count($errors) == 0) {
			$_SESSION['supusername'] = $username;			
			$password = md5($password);
			$sql = "INSERT INTO supplier (SUsername, SPassword, SName, SAdr1, SAdr2, SAdr3, STel, SFax, SEmail) VALUES ('$username', '$password', '$name', '$adr1', '$adr2', '$adr3', '$tel', '$fax', '$email')";
			mysqli_query($db, $sql);
			header ('location: supplieritem.php');					
		}

	}


	//if user click slogin
	if (isset($_POST['slogin'])) {	
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$password = mysqli_real_escape_string($db, $_POST['password']);
		$_SESSION['name'] = $username;

		//ensure that form fields are filled properly
		if (empty($username)) {
			array_push($errors, "Please Enter Username with 8 Characters");
		}
		if (empty($password)) {
			array_push($errors, "Please Enter Password");
		}
		
		if (count($errors) == 0) {			
			$password =  md5($password);
			$query = "SELECT * FROM supplier WHERE SUsername='$username' AND SPassword='$password'";
			$result = mysqli_query($db, $query);
			if (mysqli_num_rows($result) == 1) {
				$_SESSION['username'] = $username;
				$_SESSION['success'] = "You are now logged in";				
				$query4 = "SELECT SName FROM supplier WHERE SUsername='$username'";     
    			$result4 = mysqli_query($db, $query4);
    			$ans4 = mysqli_fetch_assoc($result4);
  				$valuename = $ans4['SName'];
				$_SESSION['name'] = $valuename;
				header('location: supplierhome.php');			
			}
			else{				
				array_push($errors, "Wrong Username/ Password");				
			}
		}
	}


	// if itemadd button is clicked
	if (isset($_POST['itemadd'])) {	
		$itemno = mysqli_real_escape_string($db, $_POST['itemno']);		
		$desc = mysqli_real_escape_string($db, $_POST['desc']);
		$rol = mysqli_real_escape_string($db, $_POST['rol']);
		
		//ensure that form fields are filled properly
		if (empty($itemno)) {
			array_push($errors, "Please Enter Item Number with 8 Characters");			
		}		
		if (empty($desc)) {
			array_push($errors, "Please Enter Item Description");			
		}		
		if (empty($rol)) {
			array_push($errors, "Please Enter Item Re-Order Level");			
		}
		
		//if there are no errors, save user to database
		if (count($errors) == 0) {	
			$sql = "INSERT INTO itemfile (ItemNo, ItemDesc, ItemROL) VALUES ('$itemno', '$desc', '$rol')";
			mysqli_query($db, $sql);
		}
	}


	// if placeorderpage1 button is clicked
	if (isset($_POST['placeorderpage1'])) {
		$supplier = mysqli_real_escape_string($db, $_POST['supplier']);
		$_SESSION['supusername'] = $supplier;
		if (count($errors) == 0) {
			header('location: placeorderpage2.php');
		}
		
	}


	// if placeorderpage2 button is clicked
	if (isset($_POST['placeorderpage2'])) {	
		$qty = mysqli_real_escape_string($db, $_POST['qty']);		
		$item = mysqli_real_escape_string($db, $_POST['item']);

		//ensure that form fields are filled properly
		if (empty($qty)) {
			array_push($errors, "Please Enter Order Quantity");			
		}
		
		//if there are no errors, save user to database
		if (count($errors) == 0) {		
			$query3 = "SELECT ReqNo FROM request ORDER BY ReqNo DESC";     
    		$result3 = mysqli_query($db, $query3);
    		$ans3 = mysqli_fetch_assoc($result3);
  			$value = $ans3['ReqNo'] + 1;
  			$ordno = $value;
  			$_SESSION['newordno'] = $ordno;
  			$supplierusername = $_SESSION['supusername'];
  			$staffusername = $_SESSION['staffusername'];
  			date_default_timezone_set('Asia/Colombo');
			$currentdate = date("20y-m-d");			
			$sql = "INSERT INTO request (ReqNo, QtyReq, ItemNo, Supplier,EUsername,RequestDate) VALUES ('$value','$qty', '$item', '$supplierusername','$staffusername','$currentdate')";
			mysqli_query($db, $sql);	
			header('location: intermediate.php');			
		}
		
	}


	// if placeorderyes button is clicked
	if (isset($_POST['placeorderyes'])) {		
		header('location: placeorder2.php');			
	}


	// if placeorderno button is clicked
	if (isset($_POST['placeorderno'])) {		
		header('location: staffhome.php');			
	}
		
	
	// if placeorder2 button is clicked
	if (isset($_POST['placeorder2'])) {
		$qty = mysqli_real_escape_string($db, $_POST['qty']);		
		$item = mysqli_real_escape_string($db, $_POST['item']);

		//ensure that form fields are filled properly
		if (empty($qty)) {
			array_push($errors, "Please Enter Order Quantity");			
		}

		//if there are no errors, save user to database
		if (count($errors) == 0) {
			$query3 = "SELECT ReqNo FROM request ORDER BY ReqNo DESC";     
    		$result3 = mysqli_query($db, $query3);
    		$ans3 = mysqli_fetch_assoc($result3);
  			$value = $ans3['ReqNo'];
  			date_default_timezone_set('Asia/Colombo');
			$currentdate = date("20y-m-d");
  			$supplierusername = $_SESSION['supusername'];
			$staffusername = $_SESSION['staffusername'];
			$sql = "INSERT INTO request (ReqNo, QtyReq, ItemNo, Supplier,EUsername,RequestDate) VALUES ('$value','$qty', '$item', '$supplierusername','$staffusername','$currentdate')";
			mysqli_query($db, $sql);
			header('location: intermediate.php');
		}
		
	}


	// if receiveorderpage1 button is clicked
	if (isset($_POST['receiveorderpage1'])) {
		$ordno = mysqli_real_escape_string($db, $_POST['ordno']);

		//ensure that form fields are filled properly
		if (empty($ordno)) {
			array_push($errors, "Please Enter Order Number");			
		}
		$_SESSION['ordno'] = $ordno;
		$temp = $ordno;
		$_SESSION['newordno'] = $temp;

		//if there are no errors, save user to database		
		if (count($errors) == 0) {	
			header('location: receiveorderpage2.php');			
		}		
	}


	// if receiveorderpage2 button is clicked
	if (isset($_POST['receiveorderpage2'])) {			
		$item = mysqli_real_escape_string($db, $_POST['item']);
		$_SESSION['itemno'] = $item;

		if (count($errors) == 0) {		
			header('location: receiveorderpage3.php');			
		}			
	}


	// if receiveorderpage3 button is clicked
	if (isset($_POST['receiveorderpage3'])) {			
		$recqty = mysqli_real_escape_string($db, $_POST['recqty']);
		$unitprice = mysqli_real_escape_string($db, $_POST['unitprice']);		

		//ensure that form fields are filled properly
		if (empty($recqty)) {
			array_push($errors, "Please Enter Received Quantity");			
		}
		if (empty($unitprice)) {
			array_push($errors, "Please Enter Unit Price");			
		}

		//if there are no errors, save user to database
		if (count($errors) == 0) {		
			$ordno = $_SESSION['ordno'];
			$item = $_SESSION['itemno'];			
			date_default_timezone_set('Asia/Colombo');
			$currentdate = date("20y-m-d");
			$sql1 = "INSERT INTO receiveitem (OrdNo, ItemNo, QtyRec, UnitPrice) VALUES ('$ordno','$item', '$recqty', '$unitprice')";
			mysqli_query($db, $sql1);
			$sql2 = "UPDATE request SET QtyRec= '$recqty' /**AND ReceiveDate = '$currentdate'**/ WHERE  ItemNo = '$item' AND ReqNo = '$ordno'";
			mysqli_query($db, $sql2);
			$sql7 = "UPDATE request SET ReceiveDate = '$currentdate' WHERE  ItemNo = '$item' AND ReqNo = '$ordno'";
			mysqli_query($db, $sql7);
			$sql3 = "UPDATE itemfile SET ItemStock= ItemStock + '$recqty' WHERE  ItemNo = '$item'";
			mysqli_query($db, $sql3);
			header('location: intermediate4.php');
		}
		
	}


	// if receiveorderyes button is clicked
	if (isset($_POST['receiveorderyes'])) {		
		header('location: receiveorderpage2.php');			
	}


	// if receiveorderno button is clicked
	if (isset($_POST['receiveorderno'])) {		
		header('location: staffhome.php');			
	}

	// if supplieritemadd button is clicked
	if (isset($_POST['supplieritemadd'])) {		
		$item = mysqli_real_escape_string($db, $_POST['item']);
		$supusername = $_SESSION['supusername'];
    	$query3 = "SELECT SName FROM supplier WHERE SUsername = '$supusername'";     
    	$result3 = mysqli_query($db, $query3);
    	$ans3 = mysqli_fetch_assoc($result3);
		$supname = $ans3['SName'];
  		$query5 = "SELECT ItemNo FROM itemfile WHERE ItemDesc='$item'";     
    	$result5 = mysqli_query($db, $query5);
    	$ans5 = mysqli_fetch_assoc($result5);
  		$value3 = $ans5['ItemNo'];
		$sql = "INSERT INTO supplieritem (SUsername, ItemNo) VALUES ('$supusername', '$item')";
		mysqli_query($db, $sql);
		header('location: intermediate2.php');		
	}


	// if supplieritemaddintermediateyes button is clicked
	if (isset($_POST['supplieritemaddintermediateyes'])) {		
		header('location: supplieritem.php');			
	}


	// if supplieritemaddintermediateno button is clicked
	if (isset($_POST['supplieritemaddintermediateno'])) {		
		header('location: supplierlogin.php');			
	}


	// if newsupplieritemadd button is clicked
	if (isset($_POST['newsupplieritemadd'])) {
		$item = mysqli_real_escape_string($db, $_POST['item']);
		$query = "SELECT ItemNo,ItemDesc FROM itemfile";     
    	$result = mysqli_query($db, $query);
    	$itemlist = '';
    	while ($ans = mysqli_fetch_assoc($result)) {
    		$itemlist .= "<option value = \"{$ans['ItemNo']}\">{$ans['ItemDesc']}</option>";    	
    	}   
  		$valueusername = $_SESSION['username'];  				
		$sql = "INSERT INTO supplieritem (SUsername, ItemNo) VALUES ('$valueusername', '$item')";
		mysqli_query($db, $sql);		
		header('location: newintermediate2.php');		
	}


	// if newsupplieritemintermediateyes button is clicked
	if (isset($_POST['newsupplieritemintermediateyes'])) {		
		header('location: newsupplieritem.php');			
	}


	// if newsupplieritemintermediateno button is clicked
	if (isset($_POST['newsupplieritemintermediateno'])) {		
		header('location: supplierhome.php');			
	}


	// if supplieritemdelete button is clicked
	if (isset($_POST['supplieritemdelete'])) {
		$item = mysqli_real_escape_string($db, $_POST['item']);
  		$valueusername = $_SESSION['username'];			
		$sql = "DELETE FROM supplieritem WHERE ItemNo='$item' AND SUsername='$valueusername'";
		mysqli_query($db, $sql);
		header('location: newintermediate3.php');		
	}


	// if supplieritemdeleteyes button is clicked
	if (isset($_POST['supplieritemdeleteyes'])) {		
		header('location: deleteitem.php');			
	}


	// if supplieritemdeleteno button is clicked
	if (isset($_POST['supplieritemdeleteno'])) {		
		header('location: supplierhome.php');			
	}


	// if user click spasswordchange button
	if (isset($_POST['spasswordchange'])) {		
		$oldpassword = mysqli_real_escape_string($db, $_POST['oldpassword']);
		$newpassword1 = mysqli_real_escape_string($db, $_POST['newpassword1']);
		$newpassword2 = mysqli_real_escape_string($db, $_POST['newpassword2']);	
		if (empty($oldpassword)) {
			array_push($errors, "Please Enter Current Password");			
		}		
		if (empty($newpassword1)) {
			array_push($errors, "Please Enter New Password");			
		}		
		if (empty($newpassword2)) {
			array_push($errors, "Please Enter Confirm New Password");			
		}
		$password = md5($oldpassword);
		$valueusername = $_SESSION['username'];
		$query3 = "SELECT SPassword FROM supplier WHERE SUsername='$valueusername'";     
    	$result3 = mysqli_query($db, $query3);
    	$ans3 = mysqli_fetch_assoc($result3);
  		$valuepassword = $ans3['SPassword'];  		
  		if ((count($errors) == 0) AND ($password != $valuepassword)) {
			array_push($errors, "Please Enter Correct Current Password");
		}	
		if ($newpassword1 != $newpassword2) {
			array_push($errors, "Please Enter Correct Confirm New Password");
		}
		if (count($errors) == 0) {
			$newpassword = md5($newpassword1);	
			$sql = "UPDATE supplier SET SPassword= '$newpassword' WHERE SUsername= '$valueusername'";
			mysqli_query($db, $sql);			
			header ('location: supplierhome.php');
		}
	}


	// if user click epasswordchange button
	if (isset($_POST['epasswordchange'])) {
		$oldpassword = mysqli_real_escape_string($db, $_POST['oldpassword']);
		$newpassword1 = mysqli_real_escape_string($db, $_POST['newpassword1']);
		$newpassword2 = mysqli_real_escape_string($db, $_POST['newpassword2']);	
		if (empty($oldpassword)) {
			array_push($errors, "Please Enter Current Password");		
		}		
		if (empty($newpassword1)) {
			array_push($errors, "Please Enter New Password");			
		}		
		if (empty($newpassword2)) {
			array_push($errors, "Please Enter Confirm New Password");			
		}
		$password = md5($oldpassword);
		$valueusername = $_SESSION['username'];
		$query3 = "SELECT EPassword FROM staff WHERE EUsername='$valueusername'";     
    	$result3 = mysqli_query($db, $query3);
    	$ans3 = mysqli_fetch_assoc($result3);
  		$valuepassword = $ans3['EPassword'];
  		if ((count($errors) == 0) AND ($password != $valuepassword)) {
			array_push($errors, "Please Enter Correct Current Password");			
		}
		if ($newpassword1 != $newpassword2) {
			array_push($errors, "Please Enter Correct Confirm New Password");
		}
		if (count($errors) == 0) {			
			$newpassword = md5($newpassword1);
			$sql = "UPDATE staff SET EPassword= '$newpassword' WHERE EUsername= '$valueusername'";
			mysqli_query($db, $sql);
			header ('location: staffhome.php');
			
		}
	}


	// if user click cpasswordchange button
	if (isset($_POST['cpasswordchange'])) {
		$oldpassword = mysqli_real_escape_string($db, $_POST['oldpassword']);
		$newpassword1 = mysqli_real_escape_string($db, $_POST['newpassword1']);
		$newpassword2 = mysqli_real_escape_string($db, $_POST['newpassword2']);	
		if (empty($oldpassword)) {
			array_push($errors, "Please Enter Current Password");			
		}		
		if (empty($newpassword1)) {
			array_push($errors, "Please Enter New Password");			
		}		
		if (empty($newpassword2)) {
			array_push($errors, "Please Enter Confirm New Password");			
		}
		$password = md5($oldpassword);
		$valueusername = $_SESSION['username'];
		$query3 = "SELECT CPassword FROM customer WHERE CUsername='$valueusername'";     
    	$result3 = mysqli_query($db, $query3);
    	$ans3 = mysqli_fetch_assoc($result3);
  		$valuepassword = $ans3['CPassword'];
  		if ((count($errors) == 0) AND ($password != $valuepassword)) {
			array_push($errors, "Please Enter Correct Current Password");			
		}
		if ($newpassword1 != $newpassword2) {
			array_push($errors, "Please Enter Correct Confirm New Password");
		}
		if (count($errors) == 0) {			
			$newpassword = md5($newpassword1);
			$sql = "UPDATE customer SET CPassword= '$newpassword' WHERE CUsername= '$valueusername'";
			mysqli_query($db, $sql);
			header ('location: customerhome.php');
		}
	}


	// if customerplaceorder button is clicked
	if (isset($_POST['customerplaceorder'])) {	
		$qty = mysqli_real_escape_string($db, $_POST['qty']);		
		$item = mysqli_real_escape_string($db, $_POST['item']);
		$cusername = $_SESSION['username'];    	
    	$ordno = $_SESSION['ordno'];    
		$newordno = $ordno;
		$_SESSION['newordno'] = $newordno;

		//ensure that form fields are filled properly
		if (empty($qty)) {
			array_push($errors, "Please Enter Quantity");			
		}			
		date_default_timezone_set('Asia/Colombo');
		$currentdate = date("20y-m-d");				
		if (count($errors) == 0) {  					
			$sql = "INSERT INTO corder (OrdNo, ItemNo, QtyReq, CustUsername,RequestDate) VALUES ('$ordno','$item', '$qty', '$cusername','$currentdate')";
			mysqli_query($db, $sql);
			header('location: intermediate3.php');
		}		
	}


	// if customerplaceorderyes button is clicked
	if (isset($_POST['customerplaceorderyes'])) {		
		header('location: customerplaceorder2.php');			
	}


	// if customerplaceorderno button is clicked
	if (isset($_POST['customerplaceorderno'])) {		
		header('location: customerhome.php');			
	}


	// if customerissue1 button is clicked
	if (isset($_POST['customerissue1'])) {
		$ordno = mysqli_real_escape_string($db, $_POST['ordno']);
		
		//ensure that form fields are filled properly
		if (empty($ordno)) {
			array_push($errors, "Please Enter Order No");			
		}		
		$_SESSION['ordno'] = $ordno;
		$temp = $ordno;
		$_SESSION['newordnoissue'] = $temp;
		if (count($errors) == 0) {
			header('location: issuetocustomeronlinepage2.php');
		}			
	}


	// if customerissue2 button is clicked
	if (isset($_POST['customerissue2'])) {			
		$item = mysqli_real_escape_string($db, $_POST['item']);
		
		//ensure that form fields are filled properly
		$_SESSION['itemno'] = $item;
		
		if (count($errors) == 0) {	
			header('location: issuetocustomeronlinepage3.php');			
		}			
	}


	// if customerissue3 button is clicked
	if (isset($_POST['customerissue3'])) {			
		$issqty = mysqli_real_escape_string($db, $_POST['issqty']);		
		if (empty($issqty)) {
			array_push($errors, "Please Enter Issued Quantity");			
		}		
		
		//if there are no errors, save user to database
		if (count($errors) == 0) {		
			$ordno = $_SESSION['ordno'];			
			$item = $_SESSION['itemno'];		
			$available = $_SESSION['availablestock'];
			$username = $_SESSION['staffusername'];
			date_default_timezone_set('Asia/Colombo');
			$currentdate = date("20y-m-d");
			if ($issqty < $available) {
				$sql1 = "UPDATE itemfile SET ItemStock= ItemStock - '$issqty' WHERE  ItemNo = '$item'";
				mysqli_query($db, $sql1);
				$sql2 = "UPDATE corder SET QtyIss ='$issqty' WHERE  ItemNo = '$item' AND OrdNo = '$ordno'";
				mysqli_query($db, $sql2);
				$sql7 = "UPDATE corder SET EUsername = '$username' WHERE  ItemNo = '$item' AND OrdNo = '$ordno'";
				mysqli_query($db, $sql7);
				$sql8 = "UPDATE corder SET IssueDate = '$currentdate' WHERE  ItemNo = '$item' AND OrdNo = '$ordno'";
				mysqli_query($db, $sql8);
				$query5 = "SELECT * FROM receiveitem WHERE ItemNo = '$item' AND ((QtyRec-QtyIss)>0) ORDER BY ID";     
    			$result5 = mysqli_query($db, $query5);
  				$needqty = $issqty;    			
    			while ($ans5 = mysqli_fetch_assoc($result5) AND ($needqty > 0)) {    				
    				$recordno = $ans5['OrdNo'];
    				$qtyrec = $ans5['QtyRec'];
  					$qtyiss = $ans5['QtyIss'];
  					$unitprice = $ans5['UnitPrice'];
  					$id = $ans5['ID'];
  					$diff = $qtyrec - $qtyiss;
  					if ($diff >= $needqty) {  						
  						$sql3 = "INSERT INTO issueitem (OrdNo, ItemNo, QtyIss, UnitPrice) VALUES ('$ordno','$item', '$needqty', '$unitprice')";
						mysqli_query($db, $sql3);
						$newqtyiss = $qtyiss + $needqty;						
						$sql4 = "UPDATE receiveitem SET QtyIss = QtyIss + '$needqty' WHERE  ItemNo = '$item' AND ID = '$id'";
						mysqli_query($db, $sql4);
						$needqty = 0;
  					} else {  						
  						$sql5 = "INSERT INTO issueitem (OrdNo, ItemNo, QtyIss, UnitPrice) VALUES ('$ordno','$item', '$qtyiss', '$unitprice')";
						mysqli_query($db, $sql5);
						$newqtyiss = $qtyiss + $diff;						
						$sql6 = "UPDATE receiveitem SET QtyIss = QtyIss + '$diff' WHERE  ItemNo = '$item' AND ID = '$id'";
						mysqli_query($db, $sql6);
						$needqty = $needqty - $qtyiss;
  					}
    			}    			
    			header('location: intermediate5.php');    
			}
			else {
				array_push($errors, "Current Stock is Not Sufficient");				
			}
			
		}
		
	}


	// if onlinecustomeryes button is clicked
	if (isset($_POST['onlinecustomeryes'])) {		
		header('location: issuetocustomeronlinepage2.php');			
	}


	// if onlinecustomerno button is clicked
	if (isset($_POST['onlinecustomerno'])) {		
		header('location: staffhome.php');			
	} 


	// if physicalcustomer1 button is clicked
	if (isset($_POST['physicalcustomer1'])) {
		$name = mysqli_real_escape_string($db, $_POST['name']);		
		$item = mysqli_real_escape_string($db, $_POST['item']);		
		$qty = mysqli_real_escape_string($db, $_POST['qtyneed']);		
		$_SESSION['pcustname'] = $name;
		$_SESSION['pqty'] = $qty;
		$_SESSION['itemno'] = $item;
		$ordno = $_SESSION['physicalordno1'];
		$username = 'dummy123';
		$_SESSION['pcustusername'] = $username;		
		if (empty($name)) {
			array_push($errors, "Please Enter Customer Name");			
		}
		if (empty($qty)) {
			array_push($errors, "Please Enter Quantity Required");			
		}		
		date_default_timezone_set('Asia/Colombo');
		$currentdate = date("20y-m-d");
		if (count($errors) == 0) {
			$sql8 = "INSERT INTO corder (OrdNo, ItemNo, QtyReq, CustUsername,RequestDate) VALUES ('$ordno','$item', '$qty', '$username','$currentdate')";
			mysqli_query($db, $sql8);			
			header('location: issuetocustomerphysicalpage2.php');
		}			
	}


	// if physicalcustomer2 button is clicked
	if (isset($_POST['physicalcustomer2'])) {			
		$issqty = mysqli_real_escape_string($db, $_POST['issqty']);
		if (empty($issqty)) {
			array_push($errors, "Please Enter Issued Quantity");			
		}

		//if there are no errors, save user to database
		if (count($errors) == 0) {		
			$ordno = $_SESSION['physicalordno'];			
			$item = $_SESSION['itemno'];					
			$available = $_SESSION['availablestock'];
			$ordno = $_SESSION['physicalordno'];
			$custname = $_SESSION['pcustname'];
			$item = $_SESSION['itemno'];
			$qtyreq = $_SESSION['pqty'];
			$username = $_SESSION['pcustusername'];
			$staffusername = $_SESSION['staffusername'];
			date_default_timezone_set('Asia/Colombo');
			$currentdate = date("20y-m-d");
			if ($issqty < $available) {
				$sql1 = "UPDATE itemfile SET ItemStock= ItemStock - '$issqty' WHERE  ItemNo = '$item'";
				mysqli_query($db, $sql1);
				$sql2 = "UPDATE corder SET QtyIss ='$issqty' WHERE  ItemNo = '$item' AND OrdNo = '$ordno'";
				mysqli_query($db, $sql2);
				$sql7 = "UPDATE corder SET EUsername = '$staffusername' WHERE  ItemNo = '$item' AND OrdNo = '$ordno'";
				mysqli_query($db, $sql7);
				$sql8 = "UPDATE corder SET IssueDate = '$currentdate' WHERE  ItemNo = '$item' AND OrdNo = '$ordno'";
				mysqli_query($db, $sql8);
				$query5 = "SELECT * FROM receiveitem WHERE ItemNo = '$item' AND ((QtyRec-QtyIss)>0) ORDER BY ID";     
    			$result5 = mysqli_query($db, $query5);
  				$needqty = $issqty;    			
    			while ($ans5 = mysqli_fetch_assoc($result5) AND ($needqty > 0)) {    				
    				$recordno = $ans5['OrdNo'];
    				$qtyrec = $ans5['QtyRec'];
  					$qtyiss = $ans5['QtyIss'];
  					$unitprice = $ans5['UnitPrice'];
  					$id = $ans5['ID'];
  					$diff = $qtyrec - $qtyiss;
  					if ($diff >= $needqty) {  						
  						$sql3 = "INSERT INTO issueitem (OrdNo, ItemNo, QtyIss, UnitPrice) VALUES ('$ordno','$item', '$needqty', '$unitprice')";
						mysqli_query($db, $sql3);
						$newqtyiss = $qtyiss + $needqty;	
						$sql4 = "UPDATE receiveitem SET QtyIss = QtyIss + '$needqty' WHERE  ItemNo = '$item' AND ID = '$id'";
						mysqli_query($db, $sql4);
						$needqty = 0;
  					} else {  						
  						$sql5 = "INSERT INTO issueitem (OrdNo, ItemNo, QtyIss, UnitPrice) VALUES ('$ordno','$item', '$qtyiss', '$unitprice')";
						mysqli_query($db, $sql5);
						$newqtyiss = $qtyiss + $diff;
						$sql6 = "UPDATE receiveitem SET QtyIss = QtyIss + '$diff' WHERE  ItemNo = '$item' AND ID = '$id'";
						mysqli_query($db, $sql6);
						$needqty = $needqty - $qtyiss;
  					}
    			}
    			header('location: intermediate6.php');
			}
			else {
				array_push($errors, "Current Stock is Not Sufficient");				
			}
		}		
	}


	// if physicalcustomeryes button is clicked
	if (isset($_POST['physicalcustomeryes'])) {		
		header('location: issuetocustomerphysicalpage1.php');			
	}


	// if physicalcustomerno button is clicked
	if (isset($_POST['physicalcustomerno'])) {		
		header('location: staffhome.php');			
	} 

?>