<?php
	session_start();

	include 'koneksi.php';

	$email = $_POST["email"];
	$_SESSION["id"] = $_POST["id"];
	$_SESSION["name"] = $_POST["name"];
	$_SESSION["email"] = $_POST["email"];
	$_SESSION["pp"] = $_POST["pp"];

	$gsql = "SELECT email FROM user WHERE email='".$_POST["email"]."'";
	$gresult = $mysqli->query($gsql);

	if(!empty($gresult->fetch_assoc())){
		$gsql2 = "UPDATE user SET id='".$_POST["id"]."', name='".$_POST["name"]."', pp='".$_POST["pp"]."' WHERE email='".$_POST["email"]."'";
	}else{
		$gsql2 = "INSERT INTO user (id, name, email, pp) VALUES ('".$_POST["id"]."', '".$_POST["name"]."', '".$_POST["email"]."', '".$_POST["pp"]."')";
		$gsql3 = "INSERT INTO rig VALUES ('".$_POST["id"]."','1','1','1','60','60','1','1','1')";
		$mysqli->query($gsql3);
	}

	$mysqli->query($gsql2);

	$_SESSION['status'] = "login";
?>