<?php
session_start();
include "../config.php";
$result = array();



$username = $_POST['username'];
$email = $_POST['email'];
$addr = $_POST["address"];
$id= $_POST['id'];
$amount = $_POST['amount'];

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
if($rows<1){
    $result["result"]="invalid Id ";  
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

  elseif($imageFileType == "mp3" || $imageFileType == "mp4" || $imageFileType == "MP4"
    || $imageFileType == "MP3" ) {
        $result["result"]=  "Sorry, only JPG, JPEG, PNG & GIF files are allowed.".$id;
        $Ok = 0;

    }
    elseif (file_exists($file)) {
        $result["result"]="Sorry, file already exists.";
        $Ok = 0;
      }
else{

    $result["result"]=  "Sorry";



// else{
//  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
// && $imageFileType != "gif" ) {
//     $result["result"]=  "Sorry, only JPG, JPEG, PNG & GIF files are allowed.".$id;
// }else{

//     $dateofcreation = time();
//     $recieptId=md5(uniqid(true)).time();
//     $voucherForum = "200 trade Forum";
   
   
// //    if (move_uploaded_file($_FILES["file"]["tmp_name"], $file)) {
// //        $result["result"]= "The file  has been uploaded.";
// //    } else {
// //    }
//     $uploadOk = $conn->query("INSERT INTO deposithistory(access_token,amount,forum,dateofcreation,confirm,recieptId)VALUES('$id','$amount','$voucherForum','$dateofcreation','pending','$recieptId')");
//     if($uploadOk){
//         $result["result"]= "Payment successful";
        
//     }else{
//         $result["result"]= "Payment failed";

//        }
//        }
    }

       header("Content-type:application/json");
       header("Access-Control-Allow-Origin: *");
       echo json_encode($result);




?>