window.onload = function() {
    screenLocation();
    pointer();
    timeSet();
    start();
    dropDown();
    var items = document.getElementsByClassName("item");
    // console.log(imgs); 
}
var index = 0;
var time = 0;

// 侧边栏下拉菜单
function dropDown(){
    $(".leftDropdown").mouseenter(function(){
        $(".leftDropdownContent").css("display","block");
    })
    $(".leftDropdown").mouseleave(function(){
        $(".leftDropdownContent").css("display","none");
    })
    $(".leftDropdownContent").mouseenter(function(){
        $(this).css("display","block");
        $(".leftNav").css({
            "border-top-right-radius":0,
            "border-bottom-right-radius":0
        })
    })
    $(".leftDropdownContent").mouseleave(function(){
        $(this).css("display","none");
        $(".leftNav").css({
            "border-radius": "10px"
        })
    })

 
}



//点击导航点跳到相应的图片
function pointer(){
    var points = document.getElementsByClassName("point");
    for(var i = 0;i < points.length ; i++){
        points[i].addEventListener("mouseover",function(){
            var pointindex = this.getAttribute("data-index");
            console.log(pointindex);
            index = pointindex;
            goindex();
            time = -10;
        })
    }
}

//定时器 设置自动跳转的时间
function timeSet(){
    setInterval(function(){
        time++;
        if(time == 10){
        
        }
    },500)
}


