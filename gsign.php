<?php
	session_start();

	$_SESSION["id"] = $_POST["id"];
	$_SESSION["name"] = $_POST["name"];
	$_SESSION["email"] = $_POST["email"];

	$mysqli = new mysqli("localhost","u614737895_pk","dev_varokah","u614737895_pk");

	$gsql = "SELECT * FROM users WHERE email='".$_POST["email"]."'";
	$gresult = $mysqli->query($gsql);

	if(!empty($gresult->fetch_assoc())){
		$gsql2 = "UPDATE users SET google_id='".$_POST["id"]."' WHERE email='".$_POST["email"]."'";
	}else{
		$gsql2 = "INSERT INTO users (name, email, google_id) VALUES ('".$_POST["name"]."', '".$_POST["email"]."', '".$_POST["id"]."')";
	}

	$mysqli->query($gsql2);

	echo "Updated Successful";

	$_SESSION['status'] = "login";
?>