/****tab选项卡****/
  $(function(){
        $(".tab-list li").mouseover(function(){
        $(".tab-list li").eq($(this).index()).addClass("cur").siblings().removeClass('cur');
        $(".tab-con1").hide().eq($(this).index()).show();
       //另一种方法: $("div").eq($(".tab li").index(this)).addClass("on").siblings().removeClass('on'); 
        });
    })