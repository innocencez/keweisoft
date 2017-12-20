$(function(){
//二级导航	
/*	$(".head-nav>li").hover(function(){	
		$(this).children('ul').stop(true,true).show(300);
	},function(){
		$(this).children('ul').stop(true,true).hide(300);
	})	*/	
//首页解决方案
	$(".solution-item").hover(function(){
		$(this).find("span").css('color','#fa8032');
	},function(){
		$(this).find("span").css('color','#232222');
	});
//edus教务选项卡
	$(".eli").hover(function(){
		$(".eri").eq($(this).index()).show().siblings().hide();
	});
//教务产品介绍选项卡
	$('.tab-list li').hover(function(){
		$(this).addClass('cur').siblings().removeClass('cur');
		$('.tab-con .each').hide().eq($(this).index()).show();
	});		
})