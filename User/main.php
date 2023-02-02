<main class="app-side ">
<div class="display ok" style="width:100%">
<div class="main" >
    <div class="row-1 display">
        <div class="box-home">

            <div class="box">
                <div class="row-gap" >
                <span class="color-site font-w-none">
                        Sales
                        <br>
                        <span class="f12 font-w-none">Total Sales a day</span>
                    </span>
                    <br> <br>
                  
                    <span class="black f25">
                        $1,000
                    </span>

                </div>

<style>

.circle-wrap {
margin: 100px auto;
width: 100px;
height: 100px;
background: #fefcff;
border-radius: 200px;
}

.circle-wrap .circle .mask,
.circle-wrap .circle .fill {
width: 100px;
height: 100px;
position: absolute;
border-radius: 50%;
}

.circle-wrap .circle .mask {
clip: rect(0px, 100px, 100px, 45px);
}
.circle-wrap .inside-circle {
width: 80px;
height: 80px;
border-radius: 50%;
background: #d2eaf1;
line-height:80px;
text-align: center;
margin-top: 10px;
margin-left: 10px;
color: #1e51dc;
position: absolute;
z-index: 100;
font-weight: 700;
}

/* color animation */

/* 3rd progress bar */
.mask .fill {
clip: rect(0px, 70px, 70px, 0px);
background-color: #603a6ee6;
}
.secondfill{
background-color: red !important;

}
.fouthfill{
background-color: orange !important;
clip: rect(0px, 70px, 120px, 0px) !important;;

}
.thirdfill{
background-color: lightblue !important;

}

.mask.full,
.circle .fill {
animation: fill ease-in-out 1.5s;
transform: rotate(140deg);
}

@keyframes fill{
from {
transform: rotate(0deg);
}
to {
transform: rotate(140deg);
}
}
</style>

            <div class="circle-wrap">
            <div class="circle">
            <div class="mask full">
            <div class="fill"></div>
            </div>
            <div class="mask half">
            <div class="fill"></div>
            </div>
            <div class="inside-circle f15"> 75% </div>
            </div>
            </div>
            </div>
            <div class="box">
                <div class="row-gap" >
                <span class="color-site font-w-none">
                        Sales
                        <br>
                        <span class="f12 font-w-none">Total Sales a day</span>
                    </span>
                    <br> <br>
                    <span class="black f25">
                        $1,000
                    </span>

                </div>
                <div class="circle-wrap">
                    <div class="circle">
                      <div class="mask full secondfill">
                        <div class="fill secondfill"></div>
                      </div>
                      <div class="mask half">
                        <div class="fill secondfill"></div>
                      </div>
                      <div class="inside-circle f15"> 75% </div>
                    </div>
                  </div>


            </div>
            <div class="box">
                <div class="row-gap" >
                <span class="color-site font-w-none">
                        Sales
                        <br>
                        <span class="f12 font-w-none">Total Sales a day</span>
                    </span>
                    <br> <br>
                    <span class="black f25">
                        $1,000
                    </span>
                      

                </div>
                <div class="circle-wrap">
                    <div class="circle">
                      <div class="mask full thirdfill">
                        <div class="fill thirdfill"></div>
                      </div>
                      <div class="mask half">
                        <div class="fill thirdfill"></div>
                      </div>
                      <div class="inside-circle f15"> 75% </div>
                    </div>
                  </div>

            </div>
            <div class="box">
                <div class="row-gap" >
                    <span class="color-site font-w-none">
                        Sales
                        <br>
                        <span class="f12 font-w-none">Total Sales a day</span>
                    </span>
                    <br> <br>
                    <span class="black f25">
                        $1,000
                    </span>

                </div>
              
                <div class="circle-wrap">
                    <div class="circle">
                      <div class="mask full fouthfill">
                        <div class="fill fouthfill"></div>
                      </div>
                      <div class="mask half">
                        <div class="fill fouthfill"></div>
                      </div>
                      <div class="inside-circle f15"> 75% </div>
                    </div>
                  </div>

            </div>

        </div>
        <div class="propt-box">
            <div class="border-shap-bg display flex-direction align-items">
                <h3 class="white font-w-none">Revenue</h3>

                <h2 class="white font-w-none">$3.23</h2>

                <p class="text-align white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Est tenetur magnam. </p>

            </div>

        </div>
    </div>
    <div class="row-2">
<style>
table  td{
padding:0px !important;
border-bottom:1px solid #9aa0ac  !important;
font-size:12px !important;
color:#9aa0ac  !important;
margin:0px  !important;
border-collapse: none !important
}
tr{
cursor:pointer;
height:50px
}

</style>
    <table class=" row-tabs"  >
    <h4>Top bestsellers</h4>
     
        <tbody id="rows">
        <tr >
            <td>No</td>
            <td>Name</td>
            <td>Rate Per 1000</td>
            <td>Min / Max Order</td>
            <td>Description</td>

</tr>
<script>
for (let index = 0; index < 3; index++) {
$("#rows").append(`
<tr>
            <td>18546</td>
            <td> [Medium quality]🔆</td>
            <td> [Medium quality]🔆</td>
            <td> [Medium quality]🔆</td>
            <td> [Medium quality]🔆</td>
</tr>
`)

}


</script>



</tbody>

        </table>

    </div>

</div>
<div class="main-right" >
    <span class=" f17 color-site ">Overral</span>
    <div id="show-row">


    </div>


    

    <span class="color-site f17">Revenue by channel</span>
    <div style="width:93%;padding: 5px;">
        <div style="width:100%;display:flex" class="justify-space-between">
        <p class="f14 color-site">Direct</p>
    <p class="f14 lightblue">70%</p></div>
    <div class="row-chart" >
        <div class="chart-row wi-70 orangebg" >

        </div>

    </div>

    </div>
    <div style="width:93%;padding: 5px;">
        <div style="width:100%;display:flex" class="justify-space-between">
        <p class="f14 color-site">External Search</p>
    <p class="f14 orange">50%</p></div>
    <div class="row-chart" >
        <div class="chart-row wi-50 orangebg" >

        </div>

    </div>

    </div>
    <div style="width:93%;padding: 5px;">
        <div style="width:100%;display:flex" class="justify-space-between">
        <p class="f14 color-site">Direct</p>
    <p class="f14 red">20%</p></div>
    <div class="row-chart" >
        <div class="chart-row wi-20 redbg" >

     

        </div>

    </div>

    </div>

</div>



</div>

<div style="width:98%;height:auto;padding: 10px;">

<div class="row-col-table wi-100 display wrap justify-space-between">
<div class="boxAgent display align-items"> 
        <div class="wi-100 display justify-space-between align-items">
            <i class="fa fa-list color-site f25"></i>
            <div class="wi-30 display flex-direction justify-content align-end">
                <span class="black f20">2</span>
                <span class="color-site f12">Total Voucher</span>
            </div>
        </div>
    </div>
    <div class="boxAgent display align-items"> 
        <div class="wi-100 display justify-space-between align-items">
            <i class="fa fa-check color-site f25"></i>
            <div class="wi-30 display flex-direction justify-content align-end">
                <span class="black f20">2</span>
                <span class="color-site f12">Completed</span>
            </div>
        </div>
    </div>
    <div class="boxAgent display align-items"> 
        <div class="wi-100 display justify-space-between align-items">
            <i class="fa fa-line-chart color-site f25"></i>
            <div class="wi-30 display flex-direction justify-content align-end">
                <span class="black f20">2</span>
                <span class="color-site f12">Total Trade</span>
            </div>
        </div>
    </div>
    <div class="boxAgent display align-items"> 
        <div class="wi-100 display justify-space-between align-items">
            <i class="fa fa-signal color-site f25"></i>
            <div class="wi-30 display flex-direction justify-content align-end">
                <span class="black f20">2</span>
                <span class="color-site f12">Signal</span>
            </div>
        </div>
    </div>
    <div class="boxAgent display align-items"> 
        <div class="wi-100 display justify-space-between align-items">
            <i class="fa fa-bar-chart color-site f25"></i>
            <div class="wi-30 display flex-direction justify-content align-end">
                <span class="black f20">2</span>
                <span class="color-site f12">Subscription</span>
            </div>
        </div>
    </div>
    <div class="boxAgent display align-items"> 
        <div class="wi-100 display justify-space-between align-items">
            <i class="fa fa-pie-chart color-site f25"></i>
            <div class="wi-30 display flex-direction justify-content align-end">
                <span class="black f20">2</span>
                <span class="color-site f12">Pending</span>
            </div>
        </div>
    </div>
    <div class="boxAgent display align-items"> 
        <div class="wi-100 display justify-space-between align-items">
            <i class="fa fa-hourglass-half color-site f25"></i>
            <div class="wi-30 display flex-direction justify-content align-end">
                <span class="black f20">2</span>
                <span class="color-site f12">Partial</span>
            </div>
        </div>
    </div>
    <div class="boxAgent display align-items"> 
        <div class="wi-100 display justify-space-between align-items">
            <i class="fa fa-star red f25"></i>
            <div class="wi-30 display flex-direction justify-content align-end" >
                <span class="black f20">2</span>
                <span class="color-site f12">Canceled</span>
            </div>
        </div>
    </div>
    
     
</div>



<!-- 

templeate open lines

 -->

            <div id="voucher" class="voucher_market">
                <div class="wi-100 row-voucher">
                <div class="row-item-api flex-direction">
                    <div class="wi-100">
                        <label>
                            <h3>&nbsp;&nbsp;&nbsp;Active Forum</h3>
                        </label>
                </div>
                 <?php 
                    if ($forum1==null && empty($forum1)) {
                    }else{
                    ?>
                <div class="voucer_1 align-items justify-space-around ">
                <img src="../images/voucher.png" width="80"> 
                <label>
                    <span>Trade Forum <strike>N</strike>200N
                </label>
                <label> 
                    <span>Last for 4 Hours <strike>3 Hours</strike> Now
                </label>

                </div>
            <?php
                    }                   
                    if ($forum2==null && empty($forum2)) {
                    }else{
                    ?>
            <div class="voucer_1 align-items justify-space-around">
                <img src="../images/voucher2.png" width="80"> 
                <label>
                    <span>Trade Forum <strike>N</strike>500N
                </label>
                <label>
                    <span>Last for 4 Hours <strike>3 Hours</strike> Now
                </label>

            </div>
            <?php
                    }
                    if ($forum3==null && empty($forum3)) {
                    }else{
                    ?>
            <div class="voucer_1 align-items justify-space-around">
                <img src="../images/voucher3.png" width="80"> 
                <label>
                    <span>Trade Forum <strike>N</strike>1000N
                </label>
                <label>
                    <span>Last for 4 Hours <strike>3 Hours</strike> Now
                </label>

            </div>
            <?php
                }
                    ?>

            <div class="row_id_Advert">
                <div class="advert_promo">
                
                    <div class="advert_rotation">
                    <div class="box-rotate">
                        <img src="../images/animate1.png" width="180">
                    </div>
                    <div class="box-rotate">
                    <img src="../images/animate2.png" width="180">

                    </div>
                    <div class="box-rotate">
                    <img src="../images/animate1.png" width="180">

                    </div>
                    <div class="box-rotate">
                    <img src="../images/animate2.png" width="180">

                    </div>                  
                    </div>
                </div>             
            </div>
            </div>
            </div>
            </div>
 <!-- 
    close lines
  -->
            <div class="payemt-system" id="payment">

            </div>

</div>
<footer>
<h5 class="color-site">Coppywright</h5>
</footer>
</main>