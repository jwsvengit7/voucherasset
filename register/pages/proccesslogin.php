<?php
session_start();
include "../config.php";

$email=$_POST['email'];
$password=$_POST['password'];
$sel=$conn->query("SELECT * FROM signup WHERE email='$email' and password='$password'");

if (empty($email)) {
					$error['status'] = 'empty email';
	
}
elseif (empty($password)) {
 	$error['status'] = 'empty password';
 } 
 elseif ($sel->num_rows<1) {
 	$error['status'] = 'Email/Password Combination Error';
 } 
else {
			$_SESSION['ok']=1;
			$_SESSION['email']=$email;
			$error['ok'] = $_SESSION['ok'];
			$error['status'] = 'success';
			$error['url'] = "index.php?ok=".$_SESSION['ok'];
						
}
						header("Content-type:application/json");
						header("Access-Control-Allow-Origin: *");
						echo json_encode($error);
?>