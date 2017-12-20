$(document).ready(function(){
	// 专题页面第一屏图片轮播效果
		var subL = $(".subj1_mid").length;
	$(".subj_larrow").click(function(){
			var _index = $(".subj1 .subj1_mid:visible").index('.subj1_mid');
			if(_index !=0)
				$(".subj1_mid").eq(_index-1).show().siblings(".subj1_mid").hide();
			else
				$(".subj1_mid").eq(subL-1).show().siblings(".subj1_mid").hide();
	});
	$(".subj_rarrow").click(function(){
			var _index = $(".subj1 .subj1_mid:visible").index('.subj1_mid');
			if(_index !=subL-1)
				$(".subj1_mid").eq(_index+1).show().siblings(".subj1_mid").hide();
			else
				$(".subj1_mid").eq(0).show().siblings(".subj1_mid").hide();
	});
	
		// 产品页第二屏轮播
		var pro2_con_L= $(".pro2_con").length;
	$(".problock2_arrl").click(function(){
			var _index = $(".problock2_cons .pro2_con:visible").index('.pro2_con');
		if(_index !=0)
				$(".pro2_con").eq(_index-1).show().siblings(".pro2_con").hide();
			else
				$(".pro2_con").eq(pro2_con_L-1).show().siblings(".pro2_con").hide();
				
	});
	$(".problock2_arrr").click(function(){
			var _index = $(".problock2_cons .pro2_con:visible").index('.pro2_con');
			if(_index !=pro2_con_L-1)
				$(".pro2_con").eq(_index+1).show().siblings(".pro2_con").hide();
			else
				$(".pro2_con").eq(0).show().siblings(".pro2_con").hide();
	});

//设置满屏section高度
 var wholescreen = $(window).height();
 $(".wholescreen").height(wholescreen);

	
// 产品页第七块滑过效果	
		$(".pro7_mid").find("a").hover(
			
			function(){
				var $newA = $("<img class='pro7_link' src='http://www.keweisoft.com/statics/images/kwcrm/pro6_img_h.png' />");
				//alert($(this).children().length);
				if($(this).children().length < 2){
					$(this).append($newA);
				}else{
					$newA = $(this).find(".pro7_link");
				}
				$newA.animate({
					left:0
				},400)
			},
			function(){
				$(this).find(".pro7_link").animate({
					left:-400+'px'
				},200);
			}
		);
// 产品优势页圆形选项卡滑过效果		
		$(".advup3_cons").find("a").each(function(i){
			$(this).mouseover(function(){
				$(".advup3_con").eq(i).show().siblings(".advup3_con").hide()
			});
		});
// 产品优势页第三屏选项卡滑过效果		
		$(".advup4_imgs").find("a").each(function(i){
			$(this).mouseover(function(){
				$(this).find(".advup4_imgarr").show().parent().siblings().find(".advup4_imgarr").hide();
				$(".advup4_con").eq(i).show().siblings(".advup4_con").hide()
			});
		});
// 产品优势页第五块滑过效果
		$(".adv5_con,.adv5_conb").each(function(i){
			if(i%2 != 0){
				$(this).hide();
			}
		});
		$(".adv5_con:visible,.adv5_conb:visible").mouseover(function(){
			$(this).next().show();
		});
		$(".adv5_con1_h,.adv5_con2_h").mouseleave(function(){
			$(this).hide();
		});
		
// 服务页第二屏滑过切换背景	
		$(".serv2_imgs").find("img").each(function(i){
			$(this).hover(function(){
				$(".serv2_comments").find("span").eq(i).addClass("serv2_comment_h")
			},function(){
				$(".serv2_comments").find("span").eq(i).removeClass("serv2_comment_h")
			});
		});
		
// 服务页第八块选项卡滑过效果		
		$(".serv8_leftTop").find("a").each(function(i){
			$(this).mouseover(function(){
				$(".serv8_left").find(".serv8_leftBottom").eq(i).show().siblings(".serv8_leftBottom").hide()
			});
		});
		
		$(".serv8_nav").each(function(){
			$(this).hover(function(){
				$(this).css("background","url(http://crm.keweisoft.com/statics/images/kwcrm/serv5_06.png)")
			},function(){
				$(this).css("background","url(http://crm.keweisoft.com/statics/images/kwcrm/serv5_08.png)")
			});
		});
		
	
	// 决策分析选项卡滑过效果		
		$(".proanaly2_lul").each(function(i){
			$(this).mouseover(function(){
				$(".proanaly2_rightcons").eq(i).show().siblings().hide()
			});
		});
		
        
   /*  $(window).resize(function(){
		  // $(window).innerWidth();
		  var width  = 0;
		  if($(window).innerWidth){
		  		width = $(window).innerWidth();
		  	
		  }else{
		  		width = $(window).clientWidth();
		  	
		  }*/
		  
		   //hlider 待审批滑动效果
		    var maxCount = $(".pro5_cons").find(".pro5_con").length;
			var nowNum = 0;   //当前页的索引
			var btnItemOuterWidth = $(".pro5_con").outerWidth(true);
			if(maxCount > 5){
				$('.pro5_arrr').css("display","block");
			}
			$(".pro5_arrl").click(function(){
			    if(nowNum > 0&&(nowNum+5)<=maxCount){
					$('.pro5_arrr').css("display","block");
			        $(".pro5_conall .pro5_conallmid").animate({left:'+='+btnItemOuterWidth,opacity:1},400);
					nowNum--;
			    }
				if(nowNum==0){
						$('.pro5_arrl').css("display","none");
					}
			
			});
			if(nowNum==0){
					$('.pro5_arrl').css("display","none");
				}
			
			$(".pro5_arrr").click(function(){
				if(nowNum<maxCount&&(maxCount-nowNum)>5){
					$('.pro5_arrl').css("display","block");
					$(".pro5_conall .pro5_conallmid").animate({left:'-='+btnItemOuterWidth,opacity:1},400);
					nowNum++;
				}
				if((maxCount-nowNum)==5){
					$('.pro5_arrr').css("display","none");
				}
			});
			
			
			// 市场管理第一屏划过效果；
			$(".promark1_link").hover(function(){
				$(this).find(".promark1_linkimg > img").eq(0).hide().next().show();
			},function(){
				$(this).find(".promark1_linkimg > img").eq(0).show().next().hide();
			});
		  
        
	});
	
/*


var firefox = navigator.userAgent.indexOf('Firefox') != -1;
    function MouseWheel(e) {
    ///对img按下鼠标滚路，阻止视窗滚动
        e = e || window.event;
        if (e.stopPropagation) e.stopPropagation();
        else e.cancelBubble = true;
        if (e.preventDefault) e.preventDefault();
        else e.returnValue = false;
 
        //其他代码
    }
    window.onload = function () {
        var img = document.getElementById('img');
        firefox ? img.addEventListener('DOMMouseScroll', MouseWheel, false) : (img.onmousewheel = MouseWheel);
    }



*/

















