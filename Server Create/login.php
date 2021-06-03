<?php
	require_once("Conection.php");	

	$UserInputEmail = $_REQUEST["Username"];
	$UserInputPassword = $_REQUEST["Password"];

	$createaut = md5(sha1($UserInputEmail.$UserInputPassword));

	$matchQuery = "select * from  my_users where token_name = '$createaut'";
	$runQuery = mysqli_query($connect,$matchQuery);
	$checkCount = mysqli_num_rows($runQuery);

	if($runQuery==true){

		if($checkCount==1){

		setcookie("currentUser",$createaut,time()+(86400*7));			// login from the time session
		header("location: Profile.php");		
	}else{		
		header("location:Index.php?wrong_info");
	}	

	}
?>