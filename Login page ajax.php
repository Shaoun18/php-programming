<?php

	$usern = "shaoun";
	$pas = "1234;

	$usernamei = $_REQUEST["Userna"];
	$passwordj = $_REQUEST["Userpd"];

	if($usern==$usernamei && $pas == $passwordj){

	echo "Loged in";

	}else{

	echo "username is incorect !!!"
	
	}

?>