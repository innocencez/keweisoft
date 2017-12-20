$(function(){
	$('.case-title').find('.case-title-li').hover(function(){
		$(this).addClass('case-title-active').siblings().removeClass('case-title-active');
		$('.case-sub-all').find('.case-sub').eq($(this).index()).show().siblings('.case-sub').hide();
	});
})