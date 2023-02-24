<?php
session_start();
if ($_SESSION['ok']==1) {
    echo '<script>window.location.replace("../User/index.php?ok='.$_SESSION["ok"].'")</script>';
    // code...
}

?>

<!DOCTYPE html>

<html  dir="ltr" lang="en" xml:lang="en">
<head>
    <title>Login - Voucher Asset</title>
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
  
        <!--
            ===Navigation Section //Start
                                        -->
            <nav id="header1 Light" class="navbar navbar-light bg-white navbar-expand moodle-has-zindex" aria-label="Site navigation">
            
                <div class="container-fluid">
            
                    <!-- Top Header Panel Start -->
            
                    <div class="top-header-panel">
                        <div class="left-header-panel float-left col-lg-5">
                           <!--  <div data-region="drawer-toggle" class="d-inline-block mr-3">
                                <button aria-expanded="false" aria-controls="nav-drawer" type="button" class="btn nav-link float-sm-left mr-1 btn-light bg-gray" data-action="toggle-drawer" data-side="left" data-preference="drawer-open-nav"><i class="icon fa fa-bars fa-fw " aria-hidden="true"  ></i><span class="sr-only">Side panel</span><span class="menu">Menu</span></button>
                            </div> -->
                            <div class="social-icon">
                              <ul class="social-icon-list">
                                  <li><a href="javascript:void(0)"><i class="fab fa-facebook-o"></i></a></li>
                                  <li><a href="javascript:void(0)"><i class="fab fa-twitter"></i></a></li>
                                  <li><a href="javascript:void(0)"><i class="fab fa-instagram"></i></a></li>
                                  <li><a href="javascript:void(0)"><i class="fab fa-linkedin"></i></a></li>
                              </ul>
                            </div>
                        </div>
                        <div class="right-header-panel float-right col-lg-7">
                            <ul class="call-us">
                                <li class="login-combo-wrapper"><label ><em class="question"> </em><em><i class="fa fa-call-icon"></i>Click Here to log in</em><label></li>
                            </ul>
                             <ul class="nav navbar-nav ml-auto login-combo-wrapper" id="g">
                                <!-- navbar_plugin_output -->
                                <li class="nav-item">
                                    
                                </li>
                                  <!-- user_menu -->
                                <li class="custom-login d-flex align-items-center">
                                    <div class="custom-login-wrapper"><a href="javascript:void(0)" class="login-link login-popup notloggedin" title="Log in"><i class="cb-loginlock-icon"></i></a><div class="ignite-login-section" style="display:none;"><div class="ignite-login-wrapper"><div class="login-section"><a href="#" class="cross-btn" title="Close">x</a><div class="left-panel"></div><div class="right-panel"><h1>Login</h1><form id="login-form-section" method="post" action="">

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
                        </div>
                    </div>
                </div>
            
                <!-- Top Header Panel End -->
            </nav>
            
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
                        <li class="custom-search-box">
                            <a id="search_icon__eventhandler" class="search_button__connection" href="javascript:void(0)"><i class="cb-search-icon"></i></a><div class="cc_search__wrapper"><div class="cc_search__overlay"><a href="javascript:void(0)" class="cc_search__close" id="search_screen__close"><i class="fa fa-times"></i></a><div class="cc_search__modal"><div class="cc_search__modal___inner"><span class='g_search__message'>Please enable global searching if you require.</span><form id="theme-search" class="form_search__container" action="https://ignite.themecms.com/course/search.php"><fieldset><input id="theme-coursesearchbox" class="input_search__field" type="text" name="search" placeholder="Search courses" tabindex="-1" size="15"><input type="hidden" name="context" value="2"><i class="cb-search-icon search_ic__icon"><input value="" type="submit"></i></fieldset></form></div></div></div></div></li>
                    </ul>
                    <ul class="navigation-main-wrapper">
                        <li class="home">
                            <a class="tst active" href="../index.html">Home</a>
                        </li>
                        <!-- custom_menu -->
                        <ul class="navigation-wrapper"><li class="nav-dropdown-menu"><a href="?courses" class=" tst" role="menuitem" data-toggle="dropdown-item">Voucher</a><li><a href="" class="dropdown-item tst">News</a></li><li><a href="" class="dropdown-item tst">Trade</a></li><li><a href="" class="dropdown-item tst">Register</a></li><li class="nav-dropdown-menu langmenu-item"><a href="" class="dropdown-item tst" role="menuitem" data-toggle="dropdown-item" title="Language"><span class="lang-flag en" style="background-image:url('https://ignite.themecms.com/theme/image.php/ignite/theme/1663148226/flags/48x32/EN');"></span><span class="sname">en</span><span class="fname">English ‎(en)‎</span></a><ul class="dropdown-list-item"><li><a href="https://ignite.themecms.com/?lang=de" class="dropdown-item tst" title="Deutsch ‎(de)‎"><span class="lang-flag de" style="background-image:url('https://ignite.themecms.com/theme/image.php/ignite/theme/1663148226/flags/48x32/DE');"></span><span class="sname">de</span><span class="fname">Deutsch ‎(de)‎</span></a></li><li><a href="https://ignite.themecms.com/?lang=en" class="dropdown-item tst" title="English ‎(en)‎"></a></li><li><a href="https://ignite.themecms.com/?lang=es" class="dropdown-item tst" title="Español - Internacional ‎(es)‎"><span class="lang-flag es" style="background-image:url('https://ignite.themecms.com/theme/image.php/ignite/theme/1663148226/flags/48x32/ES');"></span><span class="sname">es</span><span class="fname">Español - Internacional ‎(es)‎</span></a></li><li><a href="https://ignite.themecms.com/?lang=la" class="dropdown-item tst" title="Latin ‎(la)‎"><span class="lang-flag la" style="background-image:url('https://ignite.themecms.com/theme/image.php/ignite/theme/1663148226/flags/48x32/LA');"></span><span class="sname">la</span><span class="fname">Latin ‎(la)‎</span></a></li><li><a href="https://ignite.themecms.com/?lang=ro" class="dropdown-item tst" title="Română ‎(ro)‎"><span class="lang-flag ro" style="background-image:url('https://ignite.themecms.com/theme/image.php/ignite/theme/1663148226/flags/48x32/RO');"></span><span class="sname">ro</span><span class="fname">Română ‎(ro)‎</span></a></li><li><a href="https://ignite.themecms.com/?lang=ur" class="dropdown-item tst" title="اردو ‎(ur)‎"><span class="lang-flag ur" style="background-image:url('https://ignite.themecms.com/theme/image.php/ignite/theme/1663148226/flags/48x32/noflag');"></span><span class="sname">ur</span><span class="fname">اردو ‎(ur)‎</span></a></li></ul></ul>
                        <!-- page_heading_menu -->
                        
                        
                    </ul>
                    
                </div>
            </div>
<?php
include "csslogin.php";
?>
           <div class="login">

            <div class="create-account">

                <h1><b>Create an account</b></h1>
                <form class="login-form-section2" id="signupform" method="post" action="">

                                   

                                    <div class="login-form-branch2">
                                            <label id="userid">
                                                <i class="fa fa-user"></i>
                                            </label>
                                            <input id="userid" type="" name="username" placeholder="Username" />
                                            <i class="" aria-hidden="false"></i>
                                        </div>
                                               <div class="login-form-branch2">
                                            <label id="email-id">
                                                <i class="fa fa-envelope"></i>
                                            </label>
                                            <input id="email-id" type="email" name="email" placeholder="Email" />
                                            <i class="" aria-hidden="false"></i>
                                        </div>

                                    <div class="login-form-branch2">
                                            <label id="password-id">
                                                <i class="fa fa-lock"></i>
                                            </label>
                                            <input id="password-id-" type="password" name="password" placeholder="Password" />
                                            <i class="" aria-hidden="false"></i>
                                        </div>

                                    <div class="login-form-branch2">
                                            <label id="cpassword-id">
                                                <i class="fa fa-lock"></i>
                                            </label>
                                            <input id="cpassword-id" type="password" name="cpassword" placeholder="Confirm Password" />
                                            <i class="" aria-hidden="false"></i>
                                        </div>
                                          <button type="submit" id="log" class="submit_btn btn btn-primary">Sign Up</button>

                                          <div  class="topload">
                                            <div class="loadstop">
                                            
                                          </div>
                                      </div>


                </form>
            </div>

           </div>



      


        <!--
            ===Number Section //End
                                        -->                                                                    

    </div>
        <div id="page">
            <div id="page-content" class="pb-3">
                <div id="region-main-box" class="col-12">
                   
                </div>
            </div>
        </div>

    
<?php include 'footer.php';
?>
    <!-- End Back To Top -->
</div>


</body>
</html>