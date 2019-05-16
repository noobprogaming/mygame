<?php 
<<<<<<< HEAD
/*$koneksi = mysqli_connect("localhost","u614737895_pk","dev_varokah","u614737895_pk");*/
$koneksi = mysqli_connect("localhost","root","","my_game");
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
?>
=======
$koneksi = mysqli_connect("localhost","u614737895_pk","dev_varokah","u614737895_pk");
 
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
 
?>
>>>>>>> d53a0245293947bdc443834dcbe164168ecc76f1
