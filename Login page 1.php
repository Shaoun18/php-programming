<!Doctype html>
<html>
<head>
	<meta charset = "UTF-8">
	
		<title>php login from security Method</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		
</head>
<body>

	<!-- 
		conect to the form sec.php 
	-->

	<form onsubmit="return false;" method ="POST" action ="">
		
		Enter your User name : <input placeholder="username" value = "shaoun" name = "username" type = "text" id = "usern" />

		Enter your password : <input placeholder = "password" name = "password" type = "text" id = "passw" />

        <input type = "submit" value = "login" name = "SubmitBTN" id="SubmitBId"/>


        <input style = "background: white; color: blue; font-size: 60px; border: none; "type = "reaonly"  id="spinnerid"/>
		
	</form>

	<div id = "spinner">
		

	</div>

	<script type="text/javascript">
	
	$(document).ready(function(){

	$("#SubmitBId").on("click",function(){  

	var username = $("input#usern").val();
	var password = $("input#passw").val();
	$("#spinner").html('<img src = "spinner.gif" alt = "">');
/*
	setTIMEOUT(function(){
*/
	$.post( "Login page ajax.php",{Userna:username,Userpd:password},
		
/* 
	my data is the database table
*/

	function( mydata ) {

    $("#spinnerid").val("Login Succes");
    $("#spinner img").remove();

	});
/*
	},2000);
*/
	});
	})

	</script>

	<?php

	require_once("Login page ajax.php");

	?>

</body>

</html>