<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html>
<html>
    <head>
        <title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
        <meta charset="utf-8" />
        <link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>official/common.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>official/abcontact.css" />
        <link type="text/css" rel="stylesheet" href="<?php echo CSS_PATH;?>official/bootstrap.min.css">
        <link rel="stylesheet" href="http://api.map.baidu.com/library/SearchInfoWindow/1.5/src/SearchInfoWindow_min.css" />
        <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=HUDKY0GLSrVUAaIMxpRiYn3i"></script>
        <script type="text/javascript" src="http://api.map.baidu.com/library/SearchInfoWindow/1.5/src/SearchInfoWindow_min.js"></script>
        <script type="text/javascript" src="<?php echo JS_PATH;?>official/jquery-1.7.1.min.js"></script>
        <script type="text/javascript" src="<?php echo JS_PATH;?>official/index.js"></script>  
        <script type="text/javascript" src="<?php echo JS_PATH;?>official/nav.js"></script>     
    <!--百度统计-->
    <script>
    var _hmt = _hmt || [];
    (function() {
      var hm = document.createElement("script");
      hm.src = "//hm.baidu.com/hm.js?862c8265e86587e91bada5e06c1e576c";
      var s = document.getElementsByTagName("script")[0];
      s.parentNode.insertBefore(hm, s);
    })();
    </script>                      
    </head>
    <body>
<!--head-->
<?php include template("content","header"); ?>
    <div class="m-content temp"><embed width="1040" height="100" wmode="transparent" type="application/x-shockwave-flash" src="<?php echo IMG_PATH;?>keweisoft/melody.swf"><a href="#" class="temp-link" target="_blank"></a></div>
<!--head-->
		<div class="contact-con">
			<div class="m-content">
				<div class="contact-tit">
					<div class="contact-time"><span style="font-size:18px;color:#333;">工作时间：</span><span style="font-size:14px;">周一至周五（8:30-18:00）</span></div>
					<div class="contact-tel"><span style="font-size:18px;color:#333;">电话：</span><span style="font-size:14px;">010-51651266&nbsp;&nbsp;&nbsp;&nbsp;400-8101006</span><span style="font-size:18px;color:#333; margin-left:63px;">邮编：</span><span style="font-size:14px;">100080</span></div>
					<div class="contact-add"><span style="font-size:18px;color:#333;">地址：</span><span style="font-size:14px;">北京市海淀区海淀北二街8号 中关村SOHO 910室   乘坐4号线中关村站下车，向西500米即到 </span></div>
					<div class="contact-bus"><span style="font-size:18px;color:#333;">乘车路线：</span><span style="font-size:14px;">公交26路、47路、302路、384路、608路、641路、718路、740内、740外、751路、913路、944支、982路、983支、特9内、特9外、运通106、运通109、运通110、运通113等中关村西站下车西行至海淀西街，向南走100米即到 </span></div>
				</div>

				<div class="about_con_all">	
					<div id="allmap" style="overflow:hidden;zoom:1;position:relative;"> 
    					<div id="map" style="height:100%;-webkit-transition: all 0.5s ease-in-out;transition: all 0.5s ease-in-out;"></div>
    					<div id="panelWrap" style="width:0px;position:absolute;top:0px;right:0px;height:100%;overflow:auto;-webkit-transition: all 0.5s ease-in-out;transition: all 0.5s ease-in-out;">
        				<div style="width:20px;height:200px;margin:-100px 0 0 -10px;color:#999;position:absolute;opacity:0.5;top:50%;left:50%;">此处用于展示结果面板</div>
        				<div id="panel" style="position:absolute;"></div>
    				</div>
				</div>
				</div>
			</div>

		</div>		
<script type="text/javascript">

// 百度地图API功能
    var map = new BMap.Map('map');
    var poi = new BMap.Point(116.316654,39.989454);
    map.centerAndZoom(poi, 20);
    map.enableScrollWheelZoom();

    map.addControl(new BMap.NavigationControl());  //添加默认缩放平移控件
    map.addControl(new BMap.NavigationControl({anchor: BMAP_ANCHOR_TOP_RIGHT, type: BMAP_NAVIGATION_CONTROL_SMALL}));  //右上角，仅包含平移和缩放按钮
    map.addControl(new BMap.NavigationControl({anchor: BMAP_ANCHOR_BOTTOM_LEFT, type: BMAP_NAVIGATION_CONTROL_PAN}));  //左下角，仅包含平移按钮
    map.addControl(new BMap.NavigationControl({anchor: BMAP_ANCHOR_BOTTOM_RIGHT, type: BMAP_NAVIGATION_CONTROL_ZOOM}));  //右下角，仅包含缩放按钮

    var content = '<div style="margin:0;line-height:20px;padding:2px;">' +
                    '<img src="/statics/images/keweisoft/soho.png" alt="" style="float:right;zoom:1;overflow:hidden;width:100px;height:100px;margin-left:3px;"/>' +
                    '地址：北京市海淀北二街8号中关村soho大厦910室<br/>电话：(010)51651266<br/>简介：北京可为是教育行业信息化解决方案引领者' +
                  '</div>';

    //创建检索信息窗口对象
    var searchInfoWindow = null;
    searchInfoWindow = new BMapLib.SearchInfoWindow(map, content, {
            title  : "北京可为时代科技有限公司",      //标题
            width  : 290,             //宽度
            height : 105,              //高度
            panel  : "panel",         //检索结果面板
            enableAutoPan : true,     //自动平移
            searchTypes   :[
                BMAPLIB_TAB_SEARCH,   //周边检索
                BMAPLIB_TAB_TO_HERE,  //到这里去
                BMAPLIB_TAB_FROM_HERE //从这里出发
            ]
        });
    var marker = new BMap.Marker(poi); //创建marker对象
    marker.enableDragging(); //marker可拖拽
    marker.addEventListener("click", function(e){
        searchInfoWindow.open(marker);
    })
    map.addOverlay(marker); //在地图中添加marker
    searchInfoWindow.open(marker); //在marker上打开检索信息串口
    $("close").onclick = function(){
        searchInfoWindow.close();
    }
    $("open").onclick = function(){
        var enableSendToPhone = false;
        if ($("enableSendToPhone").checked) {
            enableSendToPhone = true;
        }
        searchInfoWindow = new BMapLib.SearchInfoWindow(map, content, {
            title  : "北京可为时代科技有限公司",      //标题
            width  : 290,             //宽度
            height : 105,              //高度
            panel  : "panel",         //检索结果面板
            enableAutoPan : true,     //自动平移
            enableSendToPhone: enableSendToPhone, //是否启用发送到手机
            searchTypes   :[
                BMAPLIB_TAB_SEARCH,   //周边检索
                BMAPLIB_TAB_TO_HERE,  //到这里去
                BMAPLIB_TAB_FROM_HERE //从这里出发
            ]
        });
        if ($("enableAutoPan").checked) {
            searchInfoWindow.enableAutoPan();
        } else {
            searchInfoWindow.disableAutoPan();
        };
        searchInfoWindow.open(marker);
    }
    $("show").onclick = function(){
        searchInfoWindow.show();
    }
    $("hide").onclick = function(){
        searchInfoWindow.hide();
    }
    $("getPosition").onclick = function(){
        var position = searchInfoWindow.getPosition();
        alert("经度：" + position.lng + "；纬度：" + position.lat);
    }
    $("setValue").onclick = function(){
        searchInfoWindow.setPosition(new BMap.Point($("lng").value, $("lat").value));
        searchInfoWindow.setTitle($("title").value);
        searchInfoWindow.setContent($("content").value);
    }
    $("getContent").onclick = function(){
        alert(searchInfoWindow.getContent());
    }
    $("getTitle").onclick = function(){
        alert(searchInfoWindow.getTitle());
    }
    function $(id){
        return document.getElementById(id);
    }


function openInfoWindow3() {
    searchInfoWindow3.open(new BMap.Point(116.328852,40.057031)); 
}


    var isPanelShow = false;
    //显示结果面板动作
    $("showPanelBtn").onclick = function(){
        if (isPanelShow == false) {
            isPanelShow = true;
            $("showPanelBtn").style.right = "300px";
            $("panelWrap").style.width = "300px";
            $("map").style.marginRight = "300px";
            $("showPanelBtn").innerHTML = "隐藏检索结果面板<br/>>";
        } else {
            isPanelShow = false;
            $("showPanelBtn").style.right = "0px";
            $("panelWrap").style.width = "0px";
            $("map").style.marginRight = "0px";
            $("showPanelBtn").innerHTML = "显示检索结果面板<br/><";
        }
    }
</script>
<?php include template("content","footer"); ?>

