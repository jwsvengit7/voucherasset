<?php
session_start();
include "config.php";
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$cpass = $_POST['cpassword'];
$results=array();
$response = [];

if (empty($username) && strlen($username)<5) {
	$response['status'] = 'username sholud more than 4';


}
elseif (empty($email)) {
	$response['status'] = 'email is empty';


}
elseif (empty($password) || strlen($password)<7) {
	$response['status'] = 'password should be more than 7';


}
elseif ($password!==$cpass) {
	$response['status'] = 'password does not match';


}
else{
	$check_record=$conn->query("SELECT * FROM signup WHERE email = '$email' ");
	if ($check_record->num_rows>0) {
		$response['status'] = 'Email Already Exist';

	 }else{
		$_SESSION['otp']=substr(md5(uniqid(true)),0,5);
		if($_SESSION['otp']){
			$_SESSION['email']=$email;
			$_SESSION['username']=$username;
			$_SESSION['password']=$password;
			


			$response['status'] = 'success';
			$response['ok'] = 1;
			$response['url'] = "otp.php";

	}
}
}
header("Content-type:application/json");
header("Access-Control-Allow-Origin: *");
		echo json_encode($response);




?>