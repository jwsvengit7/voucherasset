<?php
session_start();
include "../config.php";

$otp=$_POST['code'];
if ($otp===$_SESSION['otp']) {

	
	// code...
	$username=$_SESSION['username'];
	$email=$_SESSION['email'];
	$password=$_SESSION['password'];
	$error=array();
	$checkinsertTwice=$conn->query("SELECT * FROM signup WHERE email='$email'");
	// check if you inserted twice
	if($checkinsertTwice->num_rows>0){

// pass the error to json
		$error['error'] = "Already Inserted";
		
	}
	 else{
	 	$time=time();
	 	// insert new record
			$insertNewRecord=$conn->query("INSERT INTO signup(email,username,password,`dob`)VALUES('$email','$username','$password','$time')");
	 		if($insertNewRecord){
				$insertLastId=$conn->insert_id;
				$generateAccessToken = substr(md5(uniqid(true)),0,18).$insertLastId;
				$myownreferrid = "http://localhost/voucherasset/User/?refererid=".$insertLastId;
	 				$updateRecord=$conn->query("UPDATE signup SET myownreferrid='$myownreferrid',access_token='$generateAccessToken' WHERE id='$insertLastId'");
	 				if ($updateRecord) {
	 					$_SESSION['ok']=1;

	 					$error['status'] = 'success';
						$error['ok'] = $_SESSION['ok'];
						$error['url'] = "index.php?ok=".$_SESSION['ok'];						
					} else {
							$error['status'] = 'error';
							$error['ok'] = 0;
							$error['url'] = "otp.php";			
					}			
	 		}
	 }
} else {
	$error['error'] = "Invalid OTP";
	
}
		header("Content-type:application/json");
		header("Access-Control-Allow-Origin: *");
		echo json_encode($error);


?>