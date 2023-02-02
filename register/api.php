<?php
include 'config.php';
$array=array('id'=>1,'username'=>'jackson','to'=>'jackson','chelsea'=>'jackson');

    // while ($a = $cr) {
    //     $username=$a['username'];
    //     $email=$a['email'];
    //     $password=$a['password'];
    //     $access_token=$a['access_token'];
    //     $id=$a['id'];
    //     $myownreferrid=$a['myownreferrid'];
    //     $date=$a['date'];


    //     # code...
    // }
    $result[]=$array;




header("Content-type:application/json");
header("Access-Control-Allow-Origin: *");
echo json_encode($result);


?>