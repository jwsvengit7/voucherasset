<?php

$result = array();
$array =array(
"MoneyCash"=>23,"Users"=>121,"404-authenticated results --****8--- fail"=>54,
"open"=>array("people"=>3,"give"=>121,"fail"=>4),
"House"=>array("people"=>43,"give"=>2,"fail"=>4),
"baby"=>array("child"=>3,"give"=>121,"fail"=>46),
"bank"=>array("swett"=>3,"make"=>121,"hope"=>42)
);
//while($r=count($array)){
    $result[]['result']=$array;

    header("Content-type:application/json");
header("Access-Control-Allow-Origin: *");
echo json_encode($result);
    ?>