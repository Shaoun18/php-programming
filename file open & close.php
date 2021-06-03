<!Doctype html>
<html>
<head>
	<meta charset = "UTF-8">
	
		<title>Php file open & close Method</title>
		
</head>
<body>

<?php
$myfile = fopen("newfile.txt", "r+");  // some code to be executed....
echo fgets($myfile);
fclose($myfile);
?>

<?php
$myfile = fopen("newfile.txt", "w+") or die("Unable to open file!");  // write a file 
$txt = "Shaoun Chandra Shill\n";
fwrite($myfile, $txt);
$txt = "Anupom Chandra Shill";
fwrite($myfile, $txt);
fclose($myfile);
?>
	
</body>
</html>