<!Doctype html>
<html>
<head>
	<meta charset = "UTF-8">
	
		<title>Database Conection</title>
				
</head>
<body>
	
<?php

 $host = "localhost";
 $dbuser = "shaounshill";
 $dbpass = "stamford";
 $dbName = "php programming practice";
 $con = mysqli_connect($host,$dbuser,$dbpass,$dbName) or die("<br/>Connect failed");

?>

</body>
</html>