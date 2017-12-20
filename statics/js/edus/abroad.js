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

    //申请试用按钮
    $('.header-right,#moquu_wmaps,#ab1-btn').click(function(){
        window.location.href = "http://edus.keweisoft.com#smark";
    });
	/*应用价值选项卡*/
	$('.tab-head').find('.head-item').hover(function(){
		var num = $(this).index()/2;
		$(this).addClass('head-item-active').siblings('.head-item').removeClass('head-item-active');
		$('.tab-sub').find('.tab-sub-item').eq(num).show().siblings('.tab-sub-item').hide();
	});
	//侧边栏导航
	$(".menu-product-all").hover(function(){
		$(this).find('.menu-product-wrap').show();
	},function(){
		$(this).find('.menu-product-wrap').hide();
	});
	$(window).scroll(function(){
        var top = $(document).scrollTop();          //定义变量，获取滚动条的高度
        var menu = $("#menu");                      //定义变量，抓取#menu
        var subMenu = $("#product-list");
        var items = $('body').find(".block");    //定义变量，查找.item
        var subItems = $('body').find(".pro-block");

        var curId = ""; 
        var subCurId = "";                            //定义变量，当前所在的楼层item #id 
        if(top > 710) {
            menu.fadeIn();
        }else{
            menu.fadeOut();
        }
        items.each(function(){
            var m = $(this);                        //定义变量，获取当前类
            var itemsTop = m.offset().top;        //定义变量，获取当前类的top偏移量
            if(top > itemsTop-100){
                curId = "#" + m.attr("id");
            }else{
                return false;
            }
        });
        subItems.each(function(){
        	var m = $(this);                        //定义变量，获取当前类
            var itemsTop = m.offset().top;        //定义变量，获取当前类的top偏移量
            if(top > itemsTop-100){
                subCurId = "#" + m.attr("id");
            }else{
                return false;
            }
        });

        //给相应的楼层设置cur,取消其他楼层的cur
        var curLink = menu.find(".menu-cur");
        var subCurLink = subMenu.find(".link-cur") ? subMenu.find(".link-cur") : subMenu.find('a')[0]; 
        if( curId && curLink.find('a').attr("href") != curId ){
            curLink.removeClass("menu-cur");
            menu.find( "[href=" + curId + "]" ).parent('li').addClass("menu-cur");
        }
        if(subCurId && subCurLink.attr("href") != subCurId){
        	subCurLink.removeClass('link-cur');
        	subMenu.find( "[href=" + subCurId + "]" ).addClass('link-cur');
        }
        // console.log(top);
    });
})