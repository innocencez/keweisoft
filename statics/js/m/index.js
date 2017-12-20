/*首页轮播图（支持触屏）*/
function lunbo(){
  TouchSlide({slideCell:"#slideBox",titCell:".hd ul",mainCell:".bd ul",effect:"left",delayTime:500,autoPage:true,autoPlay:true})
}
/*crm页优势轮播*/
function slide(){
  TouchSlide({slideCell:"#slideAdv",mainCell:".bd ul",titCell:".hd ul",effect:"left",delayTime:800,prevCell:".prev",nextCell:".next",autoPage:true,autoPlay:true})
}
$(function(){
/*产品，查看更多*/	
	$(".pro-edu:gt(5)").hide();
	$(".pro-crm:gt(5)").hide();
	$("#edu-more").click(function(){
		var $category = $(".pro-edu:gt(5)");
		if(!$category.is(":visible")){
			$category.show();
			$(this).find('a').addClass("inb1-up").text('点击收起');		
      //css('background','url(../statics/images/m/in-more-ico-up.png) right center no-repeat')
		}
		else{
			$category.hide();
			$(this).find('a').removeClass("inb1-up").text('点击查看更多');
      //css('background','url(../statics/images/m/in-more-ico.png) right center no-repeat')
		}
		
	})
	$("#crm-more").click(function(){
		var $category = $(".pro-crm:gt(5)");
		if(!$category.is(":visible")){
			$category.show();
			$(this).find('a').addClass("inb1-up").text('点击收起');		
		}
		else{
			$category.hide();
			$(this).find('a').removeClass("inb1-up").text('点击查看更多');
		}
		
	})	
/*解决方案*/
	$(".solu-tit").click(function(){
		if($(this).find('.solu-sub').is(":visible")){
			$(this).find('.solu-sub').slideUp("3000");
			$(this).find('.scc-right').removeClass("scc-right-sub"); 
		}
		else{
			$(this).find('.solu-sub').slideDown("3000");
			$(this).find(".scc-right").addClass("scc-right-sub");
			$(this).siblings().find('.solu-sub').slideUp("3000");
			$(this).siblings().find(".scc-right").removeClass("scc-right-sub");
		}

	})
	$(".ist-item").click(function(){
		$(".s-conb").eq($(this).index()).show().siblings(".s-conb").hide();
		$(this).addClass('ist-on').siblings().removeClass('ist-on');
	})
/*成功案例*/
	$(".ich-st").click(function(){
		$(".ich-con").eq($(this).index()).show().siblings(".ich-con").hide();
		$(this).addClass("ich-on").siblings().removeClass("ich-on");
	})	
/*分享*/
    $(".JS-show-share").click(function(){
        $('#JS-share-page').show();
    });

    $("body").on('click', '.lyclose, .lycancel', function(){
        $(this).parents('.m-layer').hide();
    });

    $("#JS-show-game-categories").click(function(){
        $("#JS-game-categories").toggle();
    });
/*侧边栏菜单*/
  $( '.sidebar-left' ).simpleSidebar({
    settings: {
      opener: '.open-left-sidebar',
      wrapper: '.wrapper',
      animation: {
        duration: 300,
        easing: 'easeOutQuint'
      }
    },
    sidebar: {
      align: 'left',
      width: 240,
      closingLinks: 'a',
    }
  });
  $('.sidebar-right').hide();
  $('#sub-menu-one').click(function(){
    $('.sub-menu-one').toggle(200);
  });  
  $('#sub-menu-two').click(function(){
    $('.sub-menu-two').toggle(200);
  });
  $('#sub-menu-three').click(function(){
    $('.sub-menu-three').toggle(200);
  });
  $('#sub-menu-five').click(function(){
    $('.sub-menu-five').toggle(200);
  });
  $('#third-menu-one').click(function(){
    $('.third-menu-one').toggle(200);
  });
  $('#third-menu-two').click(function(){
    $('.third-menu-two').toggle(200);
  }); 
  $('#third-menu-three').click(function(){
    $('.third-menu-three').toggle(200);
  });
  $('#third-menu-four').click(function(){
    $('.third-menu-four').toggle(200);
  });    
/*crm频道页*/
$(".csc-item").hover(function(){
  $(".csc-more").css('background','url(../statics/images/m/pro-crm-solu-more.png) left center no-repeat');
  $(this).next().css('background','url(../statics/images/m/pro-crm-solu-moreH.png) left center no-repeat');
}) 	
$(".cst-item").click(function(){
  $(this).addClass("cst-on").siblings().removeClass("cst-on");
  $(".cs-con ul").eq($(this).index()-1).show().siblings("ul").hide();
})
$(".cst-item1").click(function(){
  $(this).addClass("cst-on").siblings().removeClass("cst-on");
  $(".cs-con1 ul").eq($(this).index()-1).show().siblings("ul").hide();
})
$(".cst-item2").click(function(){
  $(this).addClass("cst-on").siblings().removeClass("cst-on");
  $(".cs-con2 ul").eq($(this).index()-1).show().siblings("ul").hide();
})

/*crm资讯选项卡*/
$(".nca-head a").click(function(){
  $(this).addClass('nh-item-on').siblings().removeClass('nh-item-on');
  $(".nc-item").eq($(this).index()).show().siblings().hide();
})
$(".nea-head a:lt(2)").click(function(){
  $(this).addClass('nh-item-on').siblings().removeClass('nh-item-on');
  $(".ne-item").eq($(this).index()).show().siblings().hide();
})

/*关于我们*/
$(".a-item").click(function(){
  if(!$(this).next().is(":visible")){
    $(this).find("span").addClass("abt-active-sub");
    $(this).siblings().find("span").removeClass("abt-active-sub");
    $(this).next().slideDown("3000");
    $(this).siblings(".a-item").next().slideUp("3000");
  }
  else{
    $(this).find("span").removeClass("abt-active-sub");
    $(this).next().slideUp("3000");
  }
})
/*crm集成拓展*/
$(".ep1-head li").click(function(){
  $(this).addClass("ep-on").siblings().removeClass("ep-on");
  $(".ep1-con-item").eq($(this).index()).show().siblings().hide();
})
$(".ep2-head li").click(function(){
  $(this).addClass("ep-on").siblings().removeClass("ep-on");
  $(".ep2-con-item").eq($(this).index()).show().siblings().hide();
})
/*crm决策分析*/
$(".ath-item").click(function(){
  $(this).addClass("ath-on").siblings().removeClass("ath-on");
  $(".atc-item").eq($(this).index()).show().siblings().hide();
})
/*edus财务管理*/
$(".fth-item").click(function(){
  $(this).addClass("fth-on").siblings().removeClass("fth-on");
  $(".ftc-item").eq($(this).index()).show().siblings().hide();
})

/*edus决策分析*/
$(".ath1-item").click(function(){
  $(this).addClass("fth-on").siblings().removeClass("fth-on");
  $(".atc-item1").eq($(this).index()).show().siblings().hide();  
})
$(".ath2-item").click(function(){
  $(this).addClass("fth-on").siblings().removeClass("fth-on");
  $(".atc-item2").eq($(this).index()).show().siblings().hide();  
})
/*crm推广页*/
$(".Rth-item").click(function(){
  $(this).addClass("Rth-on").siblings().removeClass("Rth-on");  
  $(".Rtcon-item").eq($(this).index()).show().siblings().hide();
})

})
/*服务页面*/
function showSource(src,width,height){
  var wrap = $('.pic-wrap');
  wrap.css({
    'width' : width,
    'height' : height,
  });
  wrap.append('<img src='+src+'>');
}