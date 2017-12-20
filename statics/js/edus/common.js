$(function(){
	//二级导航
	$('.header-nav>li').hover(function(){
		$(this).children('ul').stop(true,true).show();
	},function(){
		$(this).children('ul').stop(true,true).hide();
	});
    $('#pro-edus').hover(function(){
        $(this).find('.right').show();
    },function(){
        $(this).find('.right').hide();
    });
    $('#product>li').hover(function(){
        $(this).css('backgroundColor','#f7f7f7');
        $(this).find('a').css('color','#f60');
    },function(){
        $(this).css('backgroundColor','#fff');
        $(this).find('a').css('color','#343434');
    });
    //成功案例选项卡
    $('.case-title').find('.case-title-li').hover(function(){
        $(this).addClass('case-title-active').siblings().removeClass('case-title-active');
        $('.case-sub-all').find('.case-sub').eq($(this).index()).show().siblings('.case-sub').hide();
    });
    //案例加载ajax
    $('.case-sub-all').find('.case-sub-li').click(function(){
        var item,key,val;
        item = $(this).find('a');
        key = $(this).parent('.case-sub').attr('data-origin');
        val = encodeURI(item.html());
        if(key == 'scale'){
            val = $(this).find('a').attr('data-origin');
        }
        item.css('color','#eb552d');
        $(this).siblings('.case-sub-li').find('a').css('color','#333');        
        $.ajax({
            url : "../ajaxCase.php",
            data : {
                key : key,
                val : val
            },
            dataType : 'json',
            type : 'POST',
            beforeSend : function(){
                $('.case-each').children('li').remove();
                $('.case-each').append('<li class="case-li-load"></li>');
            },
            success : function(data,response,status){
                if(data){
                   $('.case-each').children('li').remove();  //清除之前的元素
                   $.each(data,function(index,content){
                         $('.case-each').append('<li class="case-each-li"><div class="case-img"><a href="'+content.url+'" target="_blank"><img src="'+content.thumb+'" width="380" height="200"></a></div><div class="case-text"><div class="case-text-subtitle"><span>'+content.indus+'</span>|<span>'+content.scale+'</span></div><p class="case-text-title"><a href="'+content.url+'" target="_blank">'+content.title+'</a></p><p class="case-text-desc">'+content.description+'</p><hr class="case-text-hr"><p class="case-text-sub">应用模块：'+content.func_tags+'</p></div></li>');     
                   });      
                }           
            }
        });
    });
    
	//申请试用按钮
	$('.header-right,#moquu_wmaps').click(function(){
		window.location.href = "http://edus.keweisoft.com#smark";
	});


    
})