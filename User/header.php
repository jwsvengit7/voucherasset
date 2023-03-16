<header class="header display fullcolor">

            <a  href="../index.html" style="width:17%;height:100%;align-items:center;display: flex;justify-content: center;">
                 <img width="80" height="80" alt="Ignite" class="ro" src="logo.png">

</a>
            <div class="side-header" >
                <div class="display align-items bars-con ">
                    <style type="text/css">
                         @media(max-width:600px){
        .ro{
     width: 50px !important;
        height:50px;
    }
    }
                    </style>
                 
                    <div class="bars display align-items justify-content cursor " id="showSide">
                        
                        <i class="fa fa-bars f25"></i>								
                    </div>

                    <div class="bars display align-items justify-content cursor " id="showSidemedia">
                    <i class="fa fa-bars f25"></i>										
                    </div>
                        <div class="inp cursor iconhide">
                            <input type="" class="inpcursor">
                            <i class="fa fa-search f15"></i>
                        </div>							
                </div>

            </div>
            <div class="app-header">

                <nav class="display">
                
                    <li class="iconhide">
                        <i class="fa fa-bell darkblue f25"></i>
                        
                    </li>
                    <li id="l6" class="openProfile">
                       
                       <div class="perfectcircle">
                           <img src="profile/<?php echo $profile;?>" class="hunderdpercent">
                       </div>
                       <div>
                       <span class="darkblue f11 pad-left-10">HI! <?php echo strtoupper($username);?></span>
                       <br>
                       
                       <span class="darkblue f16 pad-left-10">$<?php echo $amount;?></span>
</div>

                   </li>
                    <li class="iconhide" onclick="window.location.href='logout.php'">
                        <i class="fa fa-sign-out darkblue f25"></i>
                        <div>
                        <span class="darkblue f13 pad-left-10">Sign Out</span>
                        <br> 
                        <b><i class="fa fa-angle-down darkblue f20 " style="padding-left:30px"></i></b>

</div>
                    </li>

                </nav>

            </div>

        </header>