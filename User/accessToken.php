<?php
if ($_GET['ok']==isset($_SESSION['ok']) && isset($_SESSION['email'])) {    

    $loopQuery=$conn->query("SELECT * FROM signup WHERE email='".$_SESSION['email']."'");
    if ($loopQuery->num_rows>0) {
        $loopAll=$loopQuery->fetch_assoc();
        $username=$loopAll['username'];
        $firstname=$loopAll['firstname'];
        $email=$loopAll['email'];
        $password=$loopAll['password'];
        $dob=$loopAll['dob'];
        $access_token=$loopAll['access_token'];
        $myownreferrid=$loopAll['myownreferrid'];
        $referrerid=$loopAll['referrerid'];
        $profile=$loopAll['profile'];
        $bgcolor=$loopAll['color'];
        if($bgcolor!="light"){
            $bgcolorText="#ccc"; 
            $bgcolor="#0c151a";
            $boxcolor="rgb(21, 32, 43)";
            $co="white";
            $sidebg="rgb(21, 32, 43)";
            $bgcolorto = "light";
        }else{
            $bgcolorText="#003366";
            $sidebg="#f8f8f8";
            $bgcolor="#fff";
            $boxcolor="#fff";
            $co="black";
            $bgcolorto = "dark";

        }
          

        $select_amount=$conn->query("SELECT * FROM deposit WHERE access_token='$access_token'");
        if($select_amount->num_rows>0){
            $record=$select_amount->fetch_assoc;
            $amount=number_format($record['amount']).'.00';        
        }else{
            $amount=number_format(0).'.00';
        }

        $active_forum=$conn->query("SELECT * FROM `voucher_market` ");
        $my=$active_forum->fetch_array();
        $forum1=$my['trade_forum_1'];
        $forum2=$my['trade_forum_2'];
        $forum3=$my['trade_forum_3'];

        $bankDeteails =$conn->query("SELECT * FROM `bankdetails`");
     
        $fetchAll = $bankDeteails->fetch_assoc();

        $accountnumber = $fetchAll['accountnumber'];
        $accountname = $fetchAll['accountname'];
        $bankname = $fetchAll['bankname'];
    }else{
            echo '<script>window.location.href="../register/"</script>';
    }
} else {
    die('Error 404 Handling');
}


?>