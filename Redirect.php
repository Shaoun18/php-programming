<?php
	
	$UserInputEmail = $_REQUEST["username"];
	$UserInputPassword = $_REQUEST["password"];

	if($UserInputEmail==12345){
		
		//redirect method
		
		header("location:http://www.google.com?text=$UserInputEmail");
		//facebook,google use
		
	}
?>