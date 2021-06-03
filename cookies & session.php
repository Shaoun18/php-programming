<?php
session_start();
?>
<!Doctype html>
<html>
<head>
	<meta charset = "UTF-8">
	
		<title>Php cookies & session method</title>
		
</head>
<body>
<?php

$SESSION["Username"]="Shaoun";
echo $SESSION["Username"];

setcookie("Username","Shaoun",time()+10);

?>
</body>
</html>