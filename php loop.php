<!Doctype html>
<html>
<head>
	<meta charset = "UTF-8">
	
		<title>Php loop using</title>
		
</head>
<body>

	<?php 
	
	// do while loop using
	
	$number_format = 1;
	
	do{
		
	echo "The Number is : ".$number_format."<br/><br/>";
	++$number_format;
		
	}while($number_format<=100);
	
	// for loop using
	
	
	for($number = 101;$number<201;++$number){
		
	echo "The Number is : ".$number."<br/><br/>";
		
	}
	
	?>

</body>
</html>