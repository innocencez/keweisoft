/****tab选项卡****/
  $(document).ready(function(){
        $(".tab-list li").mouseover(function(){
        var i = $(this).index()+1;
        $(".tab-list li").eq($(this).index()).addClass("cur"+i).siblings().removeClass();
        $(".tab-con1").hide().eq($(this).index()).show();
       //另一种方法: $("div").eq($(".tab li").index(this)).addClass("on").siblings().removeClass('on');      		
        });
    });
  /**客户价值选项卡*************************************/
    $(document).ready(function(){
        $(".at-list li").mouseover(function(){
        $(".at-conb").hide().eq($(this).index()).show();
       //另一种方法: $("div").eq($(".tab li").index(this)).addClass("on").siblings().removeClass('on');      		
        });
    });