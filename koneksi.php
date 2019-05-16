<?php 
/*$koneksi = mysqli_connect("localhost","u614737895_pk","dev_varokah","u614737895_pk");*/
$koneksi = mysqli_connect("localhost","root","","my_game");
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
?>