<!Doctype html>
<html>
<head>
	<meta charset = "UTF-8">
	
		<title>Php function</title>
		
</head>
<body>

	<?php 
	
	$name = "My name is : shaoun";
	
	function call($num1,$num2){
		
		global $name;
		echo $name."<br/><br/>";
		
		echo "The total Number is : ".($num1 + $num2);
		
	}
	
	call("10","20");
	
	?>

</body>
</html>