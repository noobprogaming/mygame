<?php 
$koneksi = mysqli_connect("localhost","root","","my_game");
 
if (mysqli_connect_errno()){
	echo "Database connection is error : " . mysqli_connect_error();
}
 
?>