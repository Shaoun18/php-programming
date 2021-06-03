<!Doctype html>
<html>
<head>
	<meta charset = "UTF-8">
	
		<title>Php Condition Check</title>
		
</head>
<body>

	<?php 
	
	// Switch case using
	
	$name = "shaoun";
	
	switch($name){
		
		case "shaoun":
		echo "<br/><br/>Hello Shaoun!";
		break;
		case "shanta":
		echo "<br/><br/>Hello shanta!";
		break;
		case "anupom":
		echo "<br/><br/>Hello anupom!";
		break;
		default:
		echo "Nothing Found";
		
	}
	
	// if else using
	
	$fname = "shaoun";
	
	if($fname == "shaoun"){
		echo "<br/><br/>Hello Shaoun!";
	}
	elseif($fname == "shanta"){
		echo "<br/><br/>Hello shanta!";
	}
	elseif($fname == "anupom"){
		echo "<br/><br/>Hello anupom!";
	}
	else{
		echo "<br/><br/>Nothing found";
	}
	
	?>

</body>
</html>