<?php
	session_start();

	include 'koneksi.php';

	$email = $_POST["email"];
	$_SESSION["id"] = $_POST["id"];
	$_SESSION["name"] = $_POST["name"];
	$_SESSION["email"] = $_POST["email"];
	$_SESSION["pp"] = $_POST["pp"];

	$gsql = "SELECT email FROM user WHERE email='".$_POST["email"]."'";
	$gresult = $koneksi->query($gsql);

	if(!empty($gresult->fetch_assoc())){
		$gsql2 = "UPDATE user SET id='".$_POST["id"]."', name='".$_POST["name"]."', pp='".$_POST["pp"]."' WHERE email='".$_POST["email"]."'";
	}else{
		$gsql2 = "INSERT INTO user VALUES ('".$_POST["id"]."', '".$_POST["name"]."', '".$_POST["email"]."', '".$_POST["pp"]."',now())";
		$gsql3 = "INSERT INTO rig VALUES ('".$_POST["id"]."','1','1','1','60','60','1','1','1')";
		$koneksi->query($gsql3);
	}

	$koneksi->query($gsql2);

	$_SESSION['status'] = "login";
	$_SESSION['google'] = "true";
?>