<!Doctype html>
<html>
<head>
	<meta charset = "UTF-8">
	
		<title>Php Basic Knowledge</title>
		
</head>
<body>

	<?php 

    $fname = "Shaoun";
	$lname = "Chandra Shill";
	$age = 20;
	
	$x =array("shaoun","programmer","123");
	
	var_dump($fname);  
	var_dump($x);      

	echo strlen($lname);  
	// show the length of string
	echo strrev($lname); 
	// show the reverse the word
	echo strpos($lname,"Shill"); 
	// show the name the position
	echo str_replace("Shill","Chowdhury",$lname); 
	// show the name the position replace
	echo str_repeat($lname,10); 
	// show the name the position replace
	
	
	echo md5($lname);  
	// show the password encode
	
	echo "<br/><br/>".$fname. " " .$lname."<br/>";  
	// echo or print use
	print "<br/>My Name is ".$fname." ".$lname. "<br/><br/> My Age is : " .$age;
	
	?>

</body>
</html>