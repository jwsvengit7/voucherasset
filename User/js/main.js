


$(()=>{
    var x=0;
    $("#slideDownLink").on("click", ()=>{
        x++
    $("#show-hide").slideDown(100)
    if(x==2){
        $("#show-hide").fadeOut(100)
        x=0   
    }
})

var obj = [
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
        console.log(obj)
       obj.forEach((item,index)=>{
            $("#show-row").append(`
            <div class="row-level justify-space-between">
                 <div class="display justify-content align-items" 
                 style="width:40px;
                 height:40px;
                 border-radius:40px;
                 background-color: #ddd;">
                  <i class="${item.icon} darkblue f17"></i>                    
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
            $("#voucher").fadeOut(100)
            
        })
        $("#l2").on("click",function () {
            $("#voucher").toggle(100)
            
        })

        var ard=$(".advert_rotation");
var x=0
setInterval(() => {
    x++
    ard.css({"right": 50*x+"%"})
    if(x==2){
        x=-1
   }
}, 4000);
})



