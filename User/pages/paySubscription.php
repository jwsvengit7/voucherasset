<?php
session_start();
include "../config.php";
if($_SERVER["REQUEST_METHOD"]=="POST"){

$username = $_POST['username'];
$email = $_POST['email'];
$addr = $_POST["address"];
$id= $_POST['id'];
$result = array();

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

if(empty($username)){
    $result["result"]="empty username";
}
elseif(empty($email)){
    $result["result"]="empty email";
}
elseif(empty($addr)){
    $result["result"]="empty address";
}
elseif(empty($id) && $check->num_rows<1){
    $result["result"]="invalid Id preference";
}else{
//     $check = getimagesize($_FILES["file"]["tmp_name"]);
//     if($check !== true) {
//         $result["result"]="File is not an image ". $check["mime"];
//       $uploadOk = 1;
// }
// else
if (file_exists($file)) {
    $result["result"]="Sorry, file already exists.";
    $Ok = 0;
  }
  elseif($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    $result["result"]=  "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $Ok = 0;
}
else {
    if (move_uploaded_file($_FILES["file"]["tmp_name"], $file)) {
        $result["result"]= "The file  has been uploaded.";
    } else {
        $result["result"]= "Sorry, there was an error uploading your file.";
    }
}
}
header("Content-type:application/json");
header("Access-Control-Allow-Origin: *");
echo json_encode($result);

}


?>