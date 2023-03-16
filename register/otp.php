<?php  session_start();
if (isset($_SESSION['ok'])==1) {
    echo '<script>window.location.replace("../User/index.php")<script>';
    // code...
}
?>

<!DOCTYPE html>

<html  dir="ltr" lang="en" xml:lang="en">
<head>
    <title>OTP - Voucher Asset</title>
    <link rel="shortcut icon" href="logo.png" />
    
    <link href="//fonts.googleapis.com/css?family=Open+Sans:400" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Jost" rel="stylesheet">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="moodle, Ignite" />
<link rel="stylesheet" type="text/css" href="../theme/styles.php/ignite/1663148226_1/all.css" />
<link rel="stylesheet" type="text/css" href="../theme/ignite/assets/social-icons.css" />
<link rel="stylesheet" type="text/css" href="../theme/ignite/assets/foronlydemo.css" />
<link rel="stylesheet" href="../css/all.css" />
<link rel="stylesheet" href="../css/mystyle.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/all.css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body  id="page-site-index" class="format-site course path-site chrome dir-ltr lang-en yui-skin-sam yui3-skin-sam ignite-themecms-com pagelayout-frontpage course-1 context-2 notloggedin cb_home_wrapper, cb_home_footer, cb_home_navigation, course-grid-widget">

	
    <a class="sr-only sr-only-focusable" href="#maincontent">Skip to main content</a>
</div><script src="../lib/javascript.php/1662375728/lib/mdn-polyfills/polyfill.js"></script>
<script src="../theme/jquery.php/core/jquery-3.2.1.min.js"></script>
<script src="../theme/javascript.php/ignite/1663148226/head.js"></script>
<script src="js/login.js"></script>


<div id="app">

<div class="preloaders">
    <img src="../images/preloader-white.png" class="logpreloader"/>

            </div>

    <div class="container-fluid p0" style="display:block;">
  
            
            <!-- Navigation Panel Start -->
            <div class="fixed-nav-element"></div>
            <div id="nav-main" class="navigation-panel">
                <div class="d-flex navigation-inner container-fluid">
                    <!-- Logo -->
                     <style type="text/css">
	.logprops{
	 	width:258px;
	 	height:65px;
 	}
    @media(max-width:600px){
        .ro{
     width: 80px !important;
        height:80px;
    }
    }
</style>

 <div class="site-logo logprops">
	<a href="../index.html" title="Ignite">
		<img src="logo.png" width="80" height="80" alt="Ignite" class="ro">
	</a>
</div>
<ul class="mobile_menu__container">
                        <li>
                            <a class="mobile-home" href="" title="Trending">
                                <i class="fa fa-home"></i>
                            </a>
                            <a class="show-menu" href="#">
                             <i class="fa fa-bars"></i>
                            </a>
                        </li>
                    </ul>


                    <ul class="search_container">
                        <li class="custom-search-box display align-items" style="width:100%;height:100%;">
                     
                        
                                    <div class="custom-login-wrapper" >
                                        <a style="width:100px;height:40px;background:#0796c6;border-radius:4px;color:white" href="javascript:void(0)" class="display align-items justify-content login-link login-popup notloggedin" title="Log in"></i>Login</a>
                                        <div class="ignite-login-section" style="display:none;"><div class="ignite-login-wrapper"><div class="login-section"><a href="#" class="cross-btn" title="Close">x</a><div class="left-panel"></div><div class="right-panel"><h1>Login</h1><form id="login-form-section" method="post" action="">

                                        <div class="login-form-branch">
                                            <label id="password-id">
                                                <i class="fa fa-user"></i>
                                            </label>
                                            <input id="email-j" type="email" name="email" placeholder="Email" />
                                            <i class="" aria-hidden="false"></i>
                                        </div>

                                        <div class="login-form-branch">
                                            <label id="user">
                                                <i class="fa fa-lock"></i></label>
                                                <input id="login-password" type="password" name="password" placeholder="Enter Your Password" /></div>
                                        <button type="submit" class="submit_btn btn btn-primary">Login</button><input type="hidden" name="logintoken" value="VCxgOx8BfDjAQelwoBqqajyQ6YXVjH5j" /></form><div class="autharrlist-section"></div></div></div></div></div></div>
                                </li>       
                        
                        
                   
                    </ul>
                   
                    <ul class="navigation-main-wrapper">
                        <li class="home">
                            <a class="tst active" href="../index.html">Home</a>
                        </li>
                        <!-- custom_menu -->
                        <ul class="navigation-wrapper"><li class="nav-dropdown-menu"><a href="?courses" class=" tst" role="menuitem" data-toggle="dropdown-item">Voucher</a><li><a href="" class="dropdown-item tst">News</a></li><li><a href="" class="dropdown-item tst">Trade</a></li><li><a href="" class="dropdown-item tst">Register</a></li></ul></ul>
                        <!-- page_heading_menu -->
                        
                        
                    </ul>
                    
                </div>
            </div>
          <?php
include "csslogin.php";
?>
           <div class="login">

            <div class="create-account">

                <h1><b>Enter OTP </b></h1>
                <form class="login-form-section2" id="otpform" method="post" action="">

                                   

                                    <div class="login-form-branch2">
                                            <label id="userid">
                                                <i class="fa fa-key"></i>
                                            </label>
                                            <input id="userid"  name="code" placeholder="Enter OTP" value="<?php echo $_SESSION['otp'];  ?>"/>
                                            <i class="" aria-hidden="false"></i>
                                        </div>
                                            

                                 
                                          <button type="submit" class="submit_btn btn btn-primary">Enter OTP</button>

                                          <div  class="topload">
                                            <div class="loadstop">
                                            
                                          </div>
                                      </div>


                </form>
            </div>

           </div>                                                                 

    </div>
        <div id="page">
            <div id="page-content" class="pb-3">
                <div id="region-main-box" class="col-12">
                   
                </div>
            </div>
        </div>

    

 <?php
//include "footer.php";
 ?>

        <div id="back_to__top" style="display: none;"> 
         <a class="scrollup" href="javascript:void(0);" title="Go to top">
            <em>Top</em>
         </a>
        </div>
    <!-- End Back To Top -->
</div>


</body>
</html>