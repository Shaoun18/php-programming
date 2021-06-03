<!Doctype html>
<html>
<head>
	<meta charset = "UTF-8">
	
		<title>Php array</title>
		
</head>
<body>

	<?php 
	
	// array using
	
	$fname = array("Shaoun","Mominul","Rakesh","Pilot");
	
	echo count($fname);
	
	$x = "<br/>1";
	
	foreach($fname as $name){
		
	echo $x.". My friend name is : " .$name. "<br/><br/>";
	++$x;
	
	}
	
	$myarray = array("Name"=>"Shaoun","Profession"=>"Programmer","Address"=>"Dhaka",);

	foreach($myarray as $myindex => $value){
		
		echo $myindex." : " .$value;
		echo "<br/><br/>";
	}
	
	?>

</body>
</html>