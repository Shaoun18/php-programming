<!Doctype html>
<html>
<head>
	<meta charset = "UTF-8">
	
		<title>php login from security Method</title>
		
</head>
<body>

	<form method ="POST" action ="Conec.php">            <!-- conect to the form sec.php -->
		
		Enter your any keyword : <input placeholder = "Type the user name" name = "searchtrm" type = "text" />
		<input name = "searchBTN" type = "submit" value="search" style="border: 5px;background: tomato;
		padding: 10px;color: white;border-radius: 6px;" />
		<br/><br/>
		Enter your First Name : <input placeholder = "fname" name = "fname" type = "text" />
		<br/><br/>
		Enter your Last Name : <input placeholder = "lname" name = "lname" type = "text" />
		<br/><br/>
		Enter your User name : <input placeholder="username" name = "username" type = "text"  />
		<br/>
		<br/>
		Enter your Email Address: <input placeholder = "Email" name = "email" type = "email" />
		<br/><br/>
		Enter your password : <input placeholder = "password" name = "password" type = "text"  />
        <br/><br/>
		Enter your profile picture : <input  name = "avator" type = "file" />
		<br/>
		<br/>
		
		Enter the login button : <input type = "submit" value = "login" name = "SubmitBTN"/>
		
	</form>

	<br/>



<font color = "Red">

<?php


	if (isset($_REQUEST["pwd_error"])){       // isset use the condition check
		

		echo $_REQUEST["pwd_error"];	
		
	}

?>

</font>


	<table border = "1px" >

		<br>
		<br>

		<tr >
			<td><b>Serial Number</b></td>
			<td><b>First Name</b></td>
			<td><b>Last Name</b></td>
			<td><b>Email Address</b></td>
			<td><b>Phone Number</b></td>
			<td><b>Profile Picture</b></td>
			<td><b>Action</b></td>
			<td><b>Action</b></td>

		</tr>

		<?php $count = 0; 	?>

		<tr >
			<td><b>	<?php echo $count; $count++	?>	</b></td>
			<td><b>Engr. Shaoun</b></td>
			<td><b>Chandra Shill</b></td>
			<td><b>Shaounchandrashill75@gmail.com</b></td>
			<td><b>01680134030</b></td>
			<td><b> <?php echo uniqid();	?><img width = "40 px" src = "avatar-icon-png-8.jpg" alt = ""></b></td>
			<td><b>Edit</b></td>
			<td><b>Delete</b></td>
		</tr>	

		<tr >
			<td><b>	<?php echo $count; $count++	?>	</b></td>
			<td><b>Mominul</b></td>
			<td><b>Islam</b></td>
			<td><b>masm5@gmail.com</b></td>
			<td><b>01680134020</b></td>
			<td><b> <?php echo uniqid();	?><img width = "40 px" src = "avatar-icon-png-8.jpg" alt = ""></b></td>
			<td><b>Edit</b></td>
			<td><b>Delete</b></td>
		</tr>	

		<tr >
			<td><b>	<?php echo $count; $count++	?>	</b></td>
			<td><b>Rakesh</b></td>
			<td><b>das</b></td>
			<td><b>rakeshdas54278@gmail.com</b></td>
			<td><b>01680134056</b></td>
			<td><b> <?php echo uniqid();	?><img width = "40 px" src = "avatar-icon-png-8.jpg" alt = ""></b></td>
			<td><b>Edit</b></td>
			<td><b>Delete</b></td>
		</tr>

	</table>

</body>
</html>