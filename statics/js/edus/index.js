$(function(){
	//banner轮播图
    $('.single-item').slick({
        dots: true,
        infinite: true,
        speed: 200,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true
    });	
	//微信关闭
	$('.wx-close').click(function(){
		$(this).parent('#in-wx').hide();
	})
	// //首页动画效果
	// $(window).scroll(function(){
	// 	if($(document).scrollTop()>=($('#flag1').offset().top+$('#flag1').outerHeight()-$(window).height()-30)){
	// 		$('#animate1,#animate2,#animate3').show().addClass('animated fadeIn');
	// 	}
	// 	if($(document).scrollTop()>=($('#flag2').offset().top+$('#flag2').outerHeight()-$(window).height()-30)){
	// 		$('#animate4,#animate5,#animate6').show().addClass('animated fadeIn');
	// 	}
	// 	if($(document).scrollTop()>=($('#flag3').offset().top+$('#flag3').outerHeight()-$(window).height()-250)){
	// 		$('#animate7').show().addClass('animated fadeInLeftBig');
	// 		$('#animate8').show().addClass('animated fadeInUpBig');
	// 		$('#animate9').show().addClass('animated fadeInRightBig');
	// 	}
	// 	// if($(document).scrollTop()>=($('#flag6').offset().top+$('#flag6').outerHeight()-$(window).height()-200)){
	// 	// 	$('#animate16').show().addClass('animated bounceInDown');
	// 	// 	setTimeout(function(){
	// 	// 		$('#animate17').show().addClass('animated bounceInDown');
	// 	// 		setTimeout(function(){
	// 	// 			$('#animate18').show().addClass('animated bounceInDown');
	// 	// 			setTimeout(function(){
	// 	// 				$('#animate19').show().addClass('animated bounceInDown');
	// 	// 			},100);	
	// 	// 		},100);
	// 	// 	},100);						
	// 	// }	
	// 	// if($(document).scrollTop()>=($('#flag7').offset().top+$('#flag7').outerHeight()-$(window).height()-30)){
	// 	// 	$('#animate20').show().addClass('animated slideInRight');
	// 	// }					
	// })
	/*视频模块hover
	$('.index-b5-con .img').hover(function(){
		$(this).find('.on-img').fadeIn(500);
	},function(){
		$(this).find('.on-img').fadeOut(500);
	});*/
	//申请试用点击滚动
	$('.scrolldown').click(function(){
		var scroll = $('#smark').offset().top;
		$('html,body').animate({
			scrollTop : scroll,
		},'slow');
	});
	//功能模块hover样式
	$('.inb2-item .im').hover(function(){
		$(this).addClass('hvr-float-shadow');
	});	
	//radio美化
	$('.index-b4-need-right').find('.ib').click(function(){
		$(this).addClass('on').siblings('.ib').removeClass('on');
	});
})