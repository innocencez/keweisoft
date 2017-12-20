//二级导航
jQuery(document).ready(function(){
	var qcloud={};
	$('[_t_nav]').hover(function(){
		var _nav = $(this).attr('_t_nav');
		clearTimeout( qcloud[ _nav + '_timer' ] );
		qcloud[ _nav + '_timer' ] = setTimeout(function(){
		$('[_t_nav]').each(function(){
		$(this)[ _nav == $(this).attr('_t_nav') ? 'addClass':'removeClass' ]('nav-up-selected');
		});
		$('#'+_nav).stop(true,true).slideDown(200);
		}, 150);
	},function(){
		var _nav = $(this).attr('_t_nav');
		clearTimeout( qcloud[ _nav + '_timer' ] );
		qcloud[ _nav + '_timer' ] = setTimeout(function(){
		$('[_t_nav]').removeClass('nav-up-selected');
		$('#'+_nav).stop(true,true).slideUp(200);
		}, 150);
	});
});
$(function(){	
	/*市场活动折叠效果*/
	$('.b1-fold').bind('mouseover',function(){
	  $(this).siblings('.fold').children('div').hide();
	  $(this).siblings('.fold').children('p').css('border-bottom','1px solid #d2d2d2');
	  $(this).children('div').show();
	  $(this).children('p').css('border','none');
	});	
	/*tab选项卡(block2)*/
    $(".tab-list li").mouseover(function(){
    $(".tab-list li").eq($(this).index()).addClass("cur").siblings().removeClass();
    $(".tab-con1").hide().eq($(this).index()).show();
    });	
	/*tab选项卡(block3)*/
    $(".tab-list2 li").mouseover(function(){
    $(".tab-list2 li").eq($(this).index()).addClass("cur").siblings().removeClass();
    $(".tab-con2").hide().eq($(this).index()).show();
    });
	/*tab选项卡(解决方案)*/
    $(".sc-list").mouseover(function(){
    $(".sc-list").eq($(this).index()).addClass("cur").siblings().removeClass("cur");
    $(".sc-item").hide().eq($(this).index()).show();
    });  
	/*tab选项卡(成功案例)*/
    $(".clh-list li").mouseover(function(){
    $(".clh-list li").eq($(this).index()).addClass("cur").siblings().removeClass("cur");
    $(".clh-con").hide().eq($(this).index()).show();
    });
    $(".clh1-list li").mouseover(function(){
    $(".clh1-list li").eq($(this).index()).addClass("cur").siblings().removeClass("cur");
    $(".clh1-con").hide().eq($(this).index()).show();
    });  
    /*tab选项卡 案例头部*/
    $(".cb1r-LeftTitle").mouseover(function(){
    	$(".cb1r-RightTitle").removeClass("cur");
    	$(this).addClass("cur");
    	$(".cb1r-con").eq(0).show().siblings(".cb1r-con").hide();
    })   
    $(".cb1r-RightTitle").mouseover(function(){
    	$(".cb1r-LeftTitle").removeClass("cur");
    	$(this).addClass("cur");
    	$(".cb1r-con").eq(1).show().siblings(".cb1r-con").hide();
    })                 	 
    /*服务手风琴js*/
			$("#box1 .hd1").click(
				function(){
					$(this).css('background','#7ecef4');
					$("#box2 .hd2").css('background','#d6d6d6');
					$("#box3 .hd3").css('background','#d6d6d6');
					$("#box2").stop();
					$("#box3").stop();
					$("#box2").animate({"left":736},1000);
					$("#box3").animate({"left":888},1000);
				}
			);

			$("#box2 .hd2").click(
				function(){
					$(this).css('background','#e59ea6');
					$("#box1 .hd1").css('background','#d6d6d6');
					$("#box3 .hd3").css('background','#d6d6d6');					
					$("#box2").stop();
					$("#box3").stop();
					$("#box2").animate({"left":152},1000);
					$("#box3").animate({"left":888},1000);
				}
			);

			$("#box3 .hd3").click(
				function(){
					$(this).css('background','#79d3d3');
					$("#box1 .hd1").css('background','#d6d6d6');
					$("#box2 .hd2").css('background','#d6d6d6');					
					$("#box2").stop();
					$("#box3").stop();
					$("#box2").animate({"left":152},1000);
					$("#box3").animate({"left":304},1000);
				}
			);       
});
//无缝滚动案例
$(function(){
 var _wrap=$('ul.rcase');//定义滚动区域
 var _interval=2000;//定义滚动间隙时间
 var _moving;//需要清除的动画
 _wrap.hover(function(){
  clearInterval(_moving);//当鼠标在滚动区域中时,停止滚动
 },function(){
  _moving=setInterval(function(){
   var _field=_wrap.find('li:first');//此变量不可放置于函数起始处,li:first取值是变化的
   var _h=_field.height();//取得每次滚动高度(多行滚动情况下,此变量不可置于开始处,否则会有间隔时长延时)
   _field.animate({marginTop:-_h+'px'},600,function(){//通过取负margin值,隐藏第一行
    _field.css('marginTop',0).appendTo(_wrap);//隐藏后,将该行的margin值置零,并插入到最后,实现无缝滚动
   })
  },_interval)//滚动间隔时间取决于_interval
 }).trigger('mouseleave');//函数载入时,模拟执行mouseleave,即自动滚动
});
//无缝滚动方案
$(function(){
 var _wrap=$('ul.rsolution');//定义滚动区域
 var _interval=2000;//定义滚动间隙时间
 var _moving;//需要清除的动画
 _wrap.hover(function(){
  clearInterval(_moving);//当鼠标在滚动区域中时,停止滚动
 },function(){
  _moving=setInterval(function(){
   var _field=_wrap.find('li:first');//此变量不可放置于函数起始处,li:first取值是变化的
   var _h=_field.height();//取得每次滚动高度(多行滚动情况下,此变量不可置于开始处,否则会有间隔时长延时)
   _field.animate({marginTop:-_h+'px'},600,function(){//通过取负margin值,隐藏第一行
    _field.css('marginTop',0).appendTo(_wrap);//隐藏后,将该行的margin值置零,并插入到最后,实现无缝滚动
   })
  },_interval)//滚动间隔时间取决于_interval
 }).trigger('mouseleave');//函数载入时,模拟执行mouseleave,即自动滚动
});