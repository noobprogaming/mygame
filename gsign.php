<?php
	session_start();

	$_SESSION["id"] = $_POST["id"];
	$_SESSION["name"] = $_POST["name"];
	$_SESSION["email"] = $_POST["email"];

	$mysqli = new mysqli("localhost","u614737895_pk","dev_varokah","u614737895_pk");

	$gsql = "SELECT * FROM user WHERE email='".$_POST["email"]."'";
	$gresult = $mysqli->query($gsql);

	if(!empty($gresult->fetch_assoc())){
		$gsql2 = "UPDATE user SET id='".$_POST["id"]."' WHERE email='".$_POST["email"]."'";
	}else{
		$gsql2 = "INSERT INTO user (name, email, id) VALUES ('".$_POST["name"]."', '".$_POST["email"]."', '".$_POST["id"]."')";
	}

	$mysqli->query($gsql2);

	echo "Updated Successful";

	$_SESSION['email'] = $email;
	$_SESSION['status'] = "login";
?>