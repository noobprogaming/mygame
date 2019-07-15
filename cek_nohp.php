<?php 
session_start();

include 'koneksi.php';

$my_id = $_POST['uname'];

$sql_id = mysqli_query($koneksi, "SELECT id, name FROM user WHERE id='$my_id'");

$cek = mysqli_num_rows($sql_id);

if($cek > 0){
	$sql_id = ("SELECT email, hp, password FROM user WHERE id='$my_id'");
	$result = $koneksi->query($sql_id);
	while($row=$result->fetch_assoc()){
		extract($row);
		$reset_email = $row ['email'];
		$reset_hp = $row ['hp'];
		$reset_pwd = $row ['password'];
	};
	echo "<p>$reset_email - $reset_hp - $reset_pwd</p>";
	

	$fields_string  =   "";
	$fields     =   array(
						'api_key'       =>  '11291943',
						'api_secret'    =>  '0g81JytCOiImK3J3',
						'to'            =>  $reset_hp,
						'from'          =>  "PunyaKita",
						'text'          =>  'Email: ' . $reset_email . ' - Password: ' . $reset_pwd
	);
	$url        =   "https://rest.nexmo.com/sms/json";

		//url-ify the data for the POST
	foreach($fields as $key=>$value) { 
			$fields_string .= $key.'='.$value.'&'; 
			}
	rtrim($fields_string, '&');

		//open connection
	$ch = curl_init();

	//set the url, number of POST vars, POST data
	curl_setopt($ch,CURLOPT_URL, $url);
	curl_setopt($ch,CURLOPT_POST, count($fields));
	curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);

	//execute post
	$result = curl_exec($ch);
	//close connection
	curl_close($ch);

		//echo "<pre>";
		//print_r($result); 
		//echo "</pre>";

		header("location:login.php");
}else{
	echo "<p>NOT FOUND<p>";
}
?>