<?php
session_start();
include "config.php";
include 'accessToken.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <link rel="shortcut icon" href="logo.png" />
    <title>Dashboard - VoucherAsset</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css'  href='../css/mystyle.css'>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <link rel='stylesheet' type='text/css'  href='css/style.css'>
    <script src='../theme/jquery.php/core/jquery-3.2.1.min.js'></script>
    <script src='js/main.js'></script>

</head>
<body>
    <style>
         .fullcolor,.main-right{
            background:<?php echo $bgcolor;?> ;
        }
        .textBg,.darkblue,.text-d{
            color: <?php echo $bgcolorText;?> !important
        }
        .bgsidebg,.app-container{
            background-color:<?php echo $sidebg;?>
        } 
        .check_voucer,.voucer_1, .row-tabs{
            background-color:<?php echo $boxcolor;?>
        }
        .co,.voucer_1 span,.black,.voucher_market h3{
           color:<?php echo $co;?> !important;
        }         
    </style>
    <div id="app" class="fullcolor">
        <?php
        include "header.php";
        ?>
        <div class="app-container display">
            <?php
            include "sidebar.php";
            ?>          
         
          <?php
          include "main.php";
          ?>
          
        </div>
    </div>

</body>
</html>