$(function(){
//二级导航	
	$(".head-nav>li").hover(function(){	
		$(this).children('ul').stop(true,true).show(300);
	},function(){
		$(this).children('ul').stop(true,true).hide(300);
	})	
//申请试用
	$('.head-right').click(function(){
		window.location.href = "http://crm.keweisoft.com#mark";
	});
//首页js
	$(".in-b1-item").hover(function(){
		$(this).stop(true);
		$(this).find(".ibi-front").fadeIn('normal');
	},function(){
		$(this).stop(true);
		$(this).find(".ibi-front").fadeOut('normal');
	})	
//产品页二级菜单效果	
	$(".sub-nav-list li").hover(function(){
		$(this).stop();
		$(this).css('background-color','#fa8032');
		$(this).find('a').css('color','#fff');
	},function(){
		$(this).stop();
		$(this).css('background-color','#f8f8f8');
		$(this).find('a').css('color','#333');		
	})
	$(".sub-nav-down-list li").hover(function(){
		$(this).css('background-color','#fa8032');
	},function(){
		$(this).css('background-color','#089cf7');		
	})	
	$(window).scroll(function(){
		if($(window).scrollTop() > '640')
			{$("#snd").fadeIn();
			 $("#snd").css('position','fixed');
			 $("#snd").css('top','0');
			 $("#snd").css('z-index','9999');	
	}
		else
			{$("#snd").fadeOut();}
	})	
//产品首页选项卡1
	$(".pb2i").hover(function(){
		$(".pb2-word1").eq($(this).index()).show().siblings().hide();
	})	
//产品首页选项卡2
	$(".pcl-item").hover(function(){
		$(".pb4-right-item").eq($(this).index()).show().siblings().hide();
	})		
//解决方案页
	$(".sbt-item").hover(function(){
		$(this).find(".sbt-item-sub").css('background-color','#3c80f2');
	},function(){
		$(this).find(".sbt-item-sub").css('background-color','#ed9b1b');
	})	
//解决方案案例滚动	
	$(".sb5-mid").imgscroll({
        speed: 20, //图片滚动速度
        amount: 0, //图片滚动过渡时间
        width: 1, //图片滚动步数
        dir: "left" // "left" 或 "up" 向左或向上滚动
    });	
})