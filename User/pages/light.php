<?php
session_start();
include "../config.php";

$light = $_POST['light'];
$my=$conn->query("UPDATE signup SET color = '$light' WHERE email='".$_SESSION['email']."'");
if($my){
    $arr["result"]="changestate"; 
}else{
    $arr["result"]="Error in state";
}

header("Content-type:application/json");
header("Access-Control-Allow-Origin: *");
echo json_encode($arr);

?>