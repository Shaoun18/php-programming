<?php
	
	$fname = htmlspecialchars($_REQUEST["fname"]);
	$lname = $_REQUEST["lname"];
	$email = $_REQUEST["email"];
	$password = $_REQUEST["password"];

	
	$checkpassword = strlen($password);
	
	if(($checkpassword==6)==false){

	header("location:form security.php?pwd_error=Password is to short!");
		
	}
	
	echo "Your first name is : ".$fname;
	echo"<br/>";
	echo "Your last name is : ".$lname;
	echo"<br/>";
	echo "Your Email is : ".$email;
	echo"<br/>";
	echo "Your Password is : ".$password;
	echo"<br/>";


?>