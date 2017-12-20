$(function(){
	var len0 = 708;
	var len1 = len0 + $(".edus-b1").height() + 56 + $(".edus-ads1").height() + 38;
	var len2 = len1 + $(".edus-b2").height() + $(".edus-b2-sec2").height() + $(".edus-b2-sec3").height() + 37 + $(".edus-ads2").height();
	var len3 = len2 + $(".edus-b3").height() + 38;
	var len4 = len3 + $(".edus-b4-tit").height() + 38 + $(".edus-b4").height() + 53;
	var nav = $(".h-nav-outer");	
	$(window).scroll(function(){
		if($(window).scrollTop() > 708){
			nav.fadeIn(200);
			$(".hn").each(function(i){
				var index = i+1;
				$(this).css('background','#f8f8f8');
				$(this).find("a").removeClass("psn-link"+index+"-h");
			})			
			$(".hn").eq(0).css('background','#fa8032').find("a").addClass("psn-link1-h");
		}
		if($(window).scrollTop() > len1){
			$(".hn").each(function(i){
				var index = i+1;
				$(this).css('background','#f8f8f8');
				$(this).find("a").removeClass("psn-link"+index+"-h");
			})
			$(".hn").eq(1).css('background','#fa8032').find("a").addClass("psn-link2-h");
		}	
		if($(window).scrollTop() > len2){
			$(".hn").each(function(i){
				var index = i+1;
				$(this).css('background','#f8f8f8');
				$(this).find("a").removeClass("psn-link"+index+"-h");
			})
			$(".hn").eq(2).css('background','#fa8032').find("a").addClass("psn-link3-h");			
		}
		if($(window).scrollTop() > len3){
			$(".hn").each(function(i){
				var index = i+1;
				$(this).css('background','#f8f8f8');
				$(this).find("a").removeClass("psn-link"+index+"-h");
			})
			$(".hn").eq(3).css('background','#fa8032').find("a").addClass("psn-link4-h");			
		}
		if($(window).scrollTop() > len4){
			$(".hn").each(function(i){
				var index = i+1;
				$(this).css('background','#f8f8f8');
				$(this).find("a").removeClass("psn-link"+index+"-h");
			})
			$(".hn").eq(4).css('background','#fa8032').find("a").addClass("psn-link5-h");			
		}					
		if($(window).scrollTop() < 708){
			nav.fadeOut(200);
		}			
	})
	$(".hn").click(function(){
		var index = $(this).index()+1;
		var top =eval('len'+$(this).index())+50;		
		$('html').animate({scrollTop:top+'px'},800);

	})
})