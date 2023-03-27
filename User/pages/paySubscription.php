<?php
session_start();
include "../config.php";
$result = array();



$username = $_POST['username'];
$email = $_POST['email'];
$addr = $_POST["address"];
$id= $_POST['id'];
$amount = $_POST['amount'];
$voucherForum = $amount." Trade Forum";
$accountname = $_POST['accountname'];
$accountnumber = $_POST['accountnumber'];
$checked  = $_POST['sameadr'];
$bank = $_POST['bank'];
$dir = "uploadProof/";
$Ok = 1;
$random = mt_rand().time();
$file = $dir.$random.basename($_FILES['file']['name']);
$imageFileType = pathinfo($file,PATHINFO_EXTENSION);
$check = $conn->query("SELECT * FROM signup WHERE access_token ='$id' and email='".$_SESSION['email']."'");
$rows = $check->num_rows;

if($imageFileType == "mp3" || $imageFileType == "mp4" || $imageFileType == "MP4" || $imageFileType == "MP3" ) {
    $result["result"] =  "Sorry, only JPG, JPEG, PNG & GIF files are allowed.".$id;
    $Ok = 0;
}
if($rows<1){
    $result["result"]="invalid Id ";  
    $Ok = 0;
}
elseif(empty($amount)){
    $result["result"]="invalid amount";  
    $Ok = 0;
}
elseif(empty($username)){
    $result["result"]="empty username";
    $Ok = 0;
}
elseif(empty($id)){
    $result["result"]="invalid Id preference";
    $Ok = 0;
}
elseif (file_exists($file)) {
    $result["result"]="Sorry, file already exists.";
    $Ok = 0;
}
else{
    $dateofcreation=time();
    $recieptId=substr(md5(uniquid(true)).time(),0,8);

    $uploadOk = $conn->query("INSERT INTO deposit(access_token,amount,forum,dateofcreation,confirm,recieptId)VALUES('$id','$amount','$voucherForum','$dateofcreation','pending','$recieptId')");
    if($uploadOk){
        $result["result"]= "Payment successful";
        $Ok = 1;
        
    }else{
        $result["result"]= "Payment failed".$conn->connect_error;
        $Ok = 0;

       }
//        }
    }

       header("Content-type:application/json");
       header("Access-Control-Allow-Origin: *");
       echo json_encode($result);


?>