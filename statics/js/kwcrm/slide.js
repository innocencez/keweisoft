   
    (function(win){
        if($.browser.msie){
            return;
        }
        var utility = {
            animating : true,
            curScrollTop : 0,
            _sectionIndex : 0,
            getObjInView : function (obj,total) {
                var _container = $.browser.mozilla ? $("html,body") : $(document.body),
                    _height = $(obj).height(),
                    _scrollTop = _container.scrollTop() - _height,
                    _totalTop = $(win).height() + _container.scrollTop(),
                    _criticality = $(obj).offset().top,
                    _cache1,					
                    _cache2;
                if(total){
                    if((_cache1 = _criticality - _scrollTop) > 0 && (_cache2 = _totalTop - _criticality) > 0){
                        if(_cache1/_height > 0.95 && _cache2/_height > 0.95){
                            return true;
                        }
                    } 
                    return false;
                }
                if((_cache1 = _criticality - _scrollTop) > 0 && (_cache2 = _totalTop - _criticality) > 0){
                    if(_cache1/_height > 0.6 && _cache2/_height > 0.6)					
					{
                        return true;
                    }
                } 
                return false;
            },
     
            testSectionInView : function (total) {
                var that = this;
                $.each(
                    $("section").find(".sub_conl"),
                    function (i) {
                        var _that = $(this);
                        if(that.getObjInView(_that,total)){
                            if(!_that.hasClass("sub_con_left")){
                                _that.animate({opacity:1},1000);
                                _that.addClass("sub_con_left");
                            }
                        }
                    } 
                );
                 $.each(
                    $("section").find(".sub_imgl"),
                    function (i) {
                        var _that = $(this);
                        if(that.getObjInView(_that,total)){
                            if(!_that.hasClass("sub_con_left")){
                                _that.animate({opacity:1},1000);
                                _that.addClass("sub_con_left");
                            }
                        }
                    } 
                 );
                  $.each(
                    $("section").find(".sub_conr"),
                    function (i) {
                        var _that = $(this);
                        if(that.getObjInView(_that,total)){
                            if(!_that.hasClass("sub_img_right")){
                                _that.animate({opacity:1},1000);
                                _that.addClass("sub_img_right");
                            }
                        }
                    } 
                 );
                 $.each(
                    $("section").find(".sub_imgr"),
                    function (i) {
                        var _that = $(this);
                        if(that.getObjInView(_that,total)){
                            if(!_that.hasClass("sub_img_right")){
                                _that.animate({opacity:1},1000);
                                _that.addClass("sub_img_right");
                            }
                        }
                    } 
                 );
            },
     
	 
            scrollFunc : function(e){
                if(utility.animating){
                    utility.animating = false;
                    e=e || window.event;
                    var driection = false;//设置滚动方向
                    if(e.wheelDelta){//IE/Opera/Chrome
                        if(e.wheelDelta<0){direction = false;}else if(e.wheelDelta>0){driection = true;}
                        utility.animate(driection);
                    }else if(e.detail){//Firefox
                        if(e.detail>0){direction = false;}else if(e.detail<0){driection = true;}
                        utility.animate(driection);
                    }
                    
                }else{
                    if(e && e.preventDefault){
                        e.preventDefault();
                    }else{
                        window.event.returnValue=false;
                    }
                    return false;
                }
            },

            setIndex : function (direction) {
                var _cacheArr = [],
                    that = this;
                $.each(
                    $("section"),
                    function (i) {
                        var _that = $(this);
                        if(that.getObjInView(_that)){
                            _cacheArr.push(i);
                        }
                    } 
                 )
                return direction ? _cacheArr[0] : _cacheArr[_cacheArr.length - 1];
            },
     
            animate : function (up) {
                this._sectionIndex = this.setIndex(up);
                if (!(up && this._sectionIndex == 0) && !(!up && this._sectionIndex == 6)) {
                    this._sectionIndex += up ? -1 : 1;
                }
     
                var _that = this,
                    _scrollDis;
                if(this._sectionIndex == 0) {
                    _scrollDis = 0;
                } else {
                     _scrollDis = $(document.getElementsByTagName("section")[this._sectionIndex]).offset().top;
                }
     				
				$("html,body").animate({scrollTop:_scrollDis}, 1000, 'swing',function(){
						_that.animating = true;
						_that.curScrollTop = $(document.body).scrollTop();
						utility.testSectionInView();
				});                
            }
        }
     
        if(document.addEventListener){
            document.addEventListener('DOMMouseScroll',utility.scrollFunc,false);
        }
        window.onmousewheel=document.onmousewheel = utility.scrollFunc;//IE/Opera/Chrome/Safari
     
        utility.testSectionInView();
    })(this)
	
	