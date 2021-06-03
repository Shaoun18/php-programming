<!Doctype html>
<html>
<head>
	<meta charset = "UTF-8">
	
		<title>php login from security Method</title>
		
</head>
<body>

	<form method ="POST" action ="form sec.php">            <!-- conect to the form sec.php -->
		
		Enter your First Name : <input placeholder = "fname" name = "fname" type = "text" />
		<br/>
		Enter your Last Name : <input placeholder = "lname" name = "lname" type = "text" />
		<br/>
		Enter your Email Address: <input placeholder = "Email" name = "email" type = "email" />
		<br/>
		Enter your password : <input placeholder = "password" name = "password" type = "password" />
		<br/>
		<br/>
		Enter the login button : <input type = "submit" value = "login"/>
		
	</form>

	<br/>

	<table border = "2px" >

		<tr >
			<td><b>Serial Number</b></td>
			<td><b>First Name</b></td>
			<td><b>Last Name</b></td>
			<td><b>Email Address</b></td>
			<td><b>Phone Number</b></td>
		</tr>

		<?php $count = 0; 	?>

		<tr >
			<td><b>	<?php echo $count; $count++	?>	</b></td>
			<td><b>Shaoun</b></td>
			<td><b>Shill</b></td>
			<td><b>Shaounchandrashill75@gmail.com</b></td>
			<td><b>01680134030</b></td>
		</tr>

	</table>


<font color = "Red">

<?php

	if (isset($_REQUEST["pwd_error"])){       // isset use the condition check
		
		echo $_REQUEST["pwd_error"];	
		
	}

?>

</font>

</body>
</html>