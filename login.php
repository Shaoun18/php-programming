<?php

	$dbuser = "shaounshill18@gmail.com";
	$dbpassword = "123466980";
	
	$UserInputEmail = $_REQUEST["username"];
	$UserInputPassword = $_REQUEST["password"];

	echo "<h2>Database Info : </h2>";
	echo $dbuser;
	echo "<br/>";
	echo $dbpassword;
	echo "<br/>";
	
	echo "<h2>User Info : </h2>";
	echo $UserInputEmail;
	echo "<br/>";
	echo $UserInputPassword;
	
	echo "<br/>";
	echo "<h2>User Info : </h2>";
	
	if($dbpassword==$UserInputPassword){
			
		echo "<font color ='brown'>You are logged in </font>";
		
	}else{
		
		echo "<font color ='red'>You are the incorrect Password </font>";

	}
		
?>