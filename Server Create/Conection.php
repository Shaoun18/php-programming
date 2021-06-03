<?php  
	$host = "localhost";
	$dbUser = "shaounshill18@gmail.com";
	$dbPWD = "stamford";
	$dbname = "php programming practice";

	$connect = mysqli_connect($host,$dbUser,$dbPWD,$dbname);

	if($connect == false){
		echo "<h2>Error connection_timeout</h2>";
	}
?>