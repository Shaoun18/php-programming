<!Doctype html>
<html>
<head>
	<meta charset = "UTF-8">
	
		<title>Php data types & operators</title>
		
</head>
<body>

	<?php 
	
	// Create a PHP Constant
	define("GREETING", "Welcome to W3Schools.com!", true);

	function myTest() {
    echo GREETING;
	}
 
	myTest();
	
	// PHP String Operators
	$txt1 = "<br/><br/>Hello";
	$txt2 = " world!";
	$txt1 .= $txt2;       // string to append
	echo $txt1;
	
	?>

</body>
</html>