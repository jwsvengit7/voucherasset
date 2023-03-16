$(()=>{
let change =0;
const obj = [
    {
    id:"300k",
    icon:"fa fa-line-chart"},
    {
    id:"240k",
    icon:"fa fa-pie-chart"},
    {
    id:"500k",
    icon:"fa fa-refresh"},
    {
    id:"350k",
    icon:"fa fa-motorcycle"
    }
]
        console.log(JSON.stringify(obj))
       obj.forEach((item,index)=>{
            $("#show-row").append(`
            <div class="row-level justify-space-between">
                 <div class="display justify-content align-items" 
                 style="width:40px;
                 height:40px;
                 border-radius:40px;
                 background-color: #ddd;">
                  <i class="${item.icon} real-darkblues f17"></i>                    
                </div>
                <div style="width: 40%;height: auto;">
                <div class="f15 color-site font-weight">Orders</div>
                <div class="f13 font-w-none color-site" style="padding-top: 5px;">${item.id}
                </div>
                </div>
            </div>
            `)
        })
        $("#l1").on("click",function () {
            hideAll()     
            showIndex()          
        })
        $("#l2").on("click",function () {
            hideAll()
            $("#voucher").toggle(50)   
            showIndex()        
        })
        $("#l3").on("click",function () {   
            hideAll()  
            $("#payment").toggle(50)  
            showIndex()         
        })
        $("#l4").on("click",function () {
            hideAll()
            $("#voucherId").toggle(50)   
            showIndex()        
        })
        $("#l5").on("click",function () {
            hideAll()
            $("#initial").toggle(50)  
            showIndex()         
        })
        // show Profile
        $("#l6").on("click",()=>{
            hideAll()
            $("#profile").show()
            showIndex()
        })

        function hideAll() {
            $("#voucher").fadeOut("fast")
            $("#payment").fadeOut("fast")
            $("#voucherId").fadeOut("fast")
            $("#initial").fadeOut("fast")     
            $("#profile").fadeOut("fast") 
            $(".voucher_market").css({"z-index":"100"})          
        }
        function showIndex() {
            if($("aside").css('position')== 'fixed') {
                reacts();
                change=0;
            }
       
        }

        let ard=$(".advert_rotation");
        let x=0
setInterval(() => {
    x++
    ard.css({"right": 50*x+"%"})
    if(x==2){
        x=-1
   }
}, 4000);
const changestateColor=$("#light-dark");
changestateColor.on("submit", function (e) {
    e.preventDefault()
    $.ajax({
        type:"POST",
        url:"pages/light.php",
        data:new FormData(this),
        cache:false,
        contentType:false,
        processData:false,
        beforeSend:()=>{$(".row-loader").show()},
        success:(data)=>{
            var x=0
           setInterval(() => {
            x++      
             if (x==3 && data.result=="changestate") {
               window.location.reload("http://localhost/voucherasset/User/index.php?ok=1");
             } 
            }, 1000);
        },
        error:(er)=>{
            alert("error")
        }
    })   
})
const previewImage = $("#uploadfile");
previewImage.on("change",(event)=>{
    const imageFiles = event.target.files;
    const imageFilesLength = imageFiles.length; 
    console.log(imageFiles)
    if (imageFilesLength > 0) {  
        const imageSrc = URL.createObjectURL(imageFiles[0]);     
        const imagePreviewElement = $("#preview-selected-image");
        const show = $(".image-preview-container");     
        imagePreviewElement.attr("src",imageSrc);    
        show.css({"display" :"block"});
        imagePreviewElement.css({"display" :"block"});
        imagePreviewElement.css({"width" :"100%"});
        imagePreviewElement.css({"height" :"100%"});
        imagePreviewElement.css({"border-radius" :200+"px"});
    }
});
const subscribe=$("#subscribe-payment");
subscribe.on("submit",function(e){
    e.preventDefault();
    $.ajax({
        type:"POST",
        url:"pages/paySubscription.php",
        data:new FormData(this),
        cache:false,
        processData:false,
        contentType:false,
        beforeSend:()=>{
            
        },
        success:(data)=>{
            console.log(data)
            swal("Alert",data.result,"success");
        }
    })
})


//** Mobile Responsiveness *///

$("#showSidemedia").on("click",()=>{
    change++
    $("#showSidemedia i").removeClass("fa-bars")
    $("#showSidemedia i").addClass("fa-times")
    $("aside").css({
        "left":"0px",
        "z-index": "101"
    })
    if(change==2){
        reacts()
        change=0;
    }
})

function reacts() {
    $("#showSidemedia i").addClass("fa-bars")
        $("#showSidemedia i").removeClass("fa-times")
        $("aside").css({
            "left":"-100%"
        })
       
}
})

let xx=0;
function shows(x) {
     x=x;
    xx++
       console.log(xx)
    $(".show-hide").eq(x).slideDown(100)
    if(xx==2){
        $(".show-hide").eq(x).fadeOut(100)
        xx=0   
    }    
}


   


