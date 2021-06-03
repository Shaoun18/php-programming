<?php
	if(isset($_COOKIE["currentUser"])){
		header("location: Profile.php");
		}
?>
	<div id = "cs">
			<?php require_once("Header.php");?>
		<div id = "content">
			<h1 id ="Logi">Login From</h1>
			<div id = "loginBoxes">
				<center>
				<form type = "POST" action="login.php">
					<input type="text" name="Username" placeholder="Username">
					<br/>
					<br/>
					<input type="text" name="Password" placeholder="Password">
					<br/>
					<br/>
					<input type="submit" name="loginBTN" value="login">
					<br/>
					<br/>
					<?php
						if(isset($_REQUEST["wrong_info"])){

							echo '<b style = "color : red">Username or Password Incorrect.</b>';
						}
					?>
				</form>
				</center>
			</div>			
		</div>
		<?php require_once("Footer.php");?>
	</div>