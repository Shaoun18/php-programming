<?php require_once("Header.php");?>
	<br/>
	<br/>
	<form type = "POST" action="signup_core.php">
					<center>
					Enter your fname : <input type="text" name="fname" placeholder="first name">
					Enter your lname : <input type="text" name="lname" placeholder="last name">
					Enter your email : <input type="text" name="Username" placeholder="Useremail">
					Enter your password : <input type="text" name="Password" placeholder="Password">
					<input type="submit" name="submitsignup" value="signup">
					</center>
	</form>
	<br/>
	<br/><center>
	<b style = "color: green">
		<?php 
			if (isset($_REQUEST['Done_Signup'])) {

				echo $_REQUEST['Done_Signup'];
			}
		?>		
	</b>
	</center>
	<br/>
<?php require_once("Footer.php");?>