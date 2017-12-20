$(function(){
    /*****主导航****/
    jQuery(".lx-nav .lx-navBD").slide({type:"menu",titCell:".nav-item",targetCell:".nav-bd",delayTime:0,triggerTime:0,defaultPlay: false,returnDefault:true});
    /***********轮播**************/
    jQuery(".g_wrap3").slide({titCell: ".ban-hd", mainCell: ".ban-bd ul", effect: "fold", autoPlay: true, autoPage: true,interTime:3000});
    /***********************目的轮播*******************/
    jQuery(".slideBox").slide({mainCell: ".bd ul", effect: "leftLoop", autoPlay: false});
})

