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

    <link rel='stylesheet' type='text/css'  href='css/style.css'>
    <script src='../theme/jquery.php/core/jquery-3.2.1.min.js'></script>
    <script src='js/main.js'></script>

</head>
<body>
    <style>
        #app ,aside ,.sidebar,header{
            background:<?php echo $bgcolor;?>;
        }
        .darkblue,.text-d{
            color: <?php echo $bgcolorText;?> !important


        }
        .voucer_1{
            background-color:<?php echo $boxcolorwhite;?>

        }
        .voucer_1 span{
           color:<?php echo $co;?>

        }
        .black{
            color: <?php echo $co;?> !important

        }
        .voucher_market{
            background:<?php echo $bgcolor;?>;
        }
        .voucher_market h3{
            color: <?php echo $co;?> !important

        }
        .box,.boxAgent{
            background-color:<?php echo $boxcolor;?>


        }
        .row-tabs{
            background:<?php echo $boxcolor;?>
 
        }
    </style>
    <div id="app" >
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