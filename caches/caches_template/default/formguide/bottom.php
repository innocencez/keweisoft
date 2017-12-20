<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?>		<div class="in-copyright">Copyright ©1993-2015   可为时代</div>	
		<div class="in-button">
			<a href="<?php echo siteurl($siteid);?>" target="_blank">
				<span class="ib-item1">首页</span>
			</a>
			<a href="javascript:void(0);" class="JS-show-share" >
				<span class="ib-item2">分享</span>
			</a>
			<a href="tel:010-51651266" >
				<span class="ib-item3">拨号</span>
			</a>
			<a href="http://www.keweisoft.com/index.php?m=formguide&c=index&a=show&formid=27&siteid=3">
				<span class="ib-item4">留言</span>
			</a>									
		</div>	

    <div id="JS-share-page" class="m-layer m-layer-show">
        <div class="lymask"></div>
        <table class="lytable"><tbody><tr><td class="lytd">
        <div class="lywrap">
<!--分享-->            
            <div class="lytt"><h2 class="u-tt">分享</h2><span class="lyclose">×</span></div>
            <div class="lyct">
                <div class="bshare-custom icon-medium-plus"><div class="bsPromo bsPromo1"></div>
                    <ul class="bshare-custom icon-medium-plus mg-sharePage-list">
                        <li><a title="分享到QQ空间" class="bshare-qzone"></a><span>QQ空间</span></li>
                        <li><a title="分享到朋友网" class="bshare-qqxiaoyou"></a><span>朋友网</span></li>
                        <li><a title="分享到腾讯微博" class="bshare-qqmb"></a><span>腾讯微博</span></li>
                        <li><a title="分享到微信" class="bshare-weixin"></a><span>微信</span></li>
                        <li><a title="分享到QQ好友" class="bshare-qqim"></a><span>QQ好友</span></li>
                    </ul>
                </div>
            </div>
            <div class="lycancel">
                取消
            </div>
        </div></td></tr></tbody></table>
    </div>

    <script type="text/javascript" charset="utf-8" src="http://static.bshare.cn/b/button.js#style=-1&amp;uuid=7e69fe40-5550-44e5-be51-468fae5d77db&amp;pophcol=2&amp;lang=zh"></script><a class="bshareDiv" onClick="javascript:return false;"></a>
    <script type="text/javascript" charset="utf-8" src="http://static.bshare.cn/b/bshareC0.js"></script>
	</div>    
<!--侧边栏菜单-->
	<div class="sidebar-left">
		<div class="sidebar-hide-scroll-left">
			<a href="<?php echo siteurl($siteid );?>" class="nav-item home-nav-icon" target="_blank">首页
			<em></em>
			</a>
			<div class="side-deco"></div>
			<a id="sub-menu-one" class="nav-item crm-nav-icon">
				可为CRM
				<strong></strong>
			</a>
			<div class="sub-menu-one" style="display:none;">
				<a class="sub-menu-item" href="<?php echo $CATEGORYS['144']['url'];?>" target="_blank">产品简介</a>
				<a class="sub-menu-item" href="<?php echo $CATEGORYS['146']['url'];?>" target="_blank">市场管理</a>
				<a class="sub-menu-item" href="<?php echo $CATEGORYS['147']['url'];?>" target="_blank">销售管理</a>
				<a class="sub-menu-item" href="<?php echo $CATEGORYS['148']['url'];?>" target="_blank">服务管理</a>
				<a class="sub-menu-item" href="<?php echo $CATEGORYS['149']['url'];?>" target="_blank">订单管理</a>
				<a class="sub-menu-item" href="<?php echo $CATEGORYS['150']['url'];?>" target="_blank">人员管理</a>
				<a class="sub-menu-item" href="<?php echo $CATEGORYS['151']['url'];?>" target="_blank">权限管理</a>
				<a class="sub-menu-item" href="<?php echo $CATEGORYS['152']['url'];?>" target="_blank">费用管理</a>
				<a class="sub-menu-item" href="<?php echo $CATEGORYS['153']['url'];?>" target="_blank">决策分析</a>
				<a class="sub-menu-item" href="<?php echo $CATEGORYS['154']['url'];?>" target="_blank">集成拓展</a>
			</div>
			<div class="side-deco"></div>
			<a id="sub-menu-two" class="nav-item edus-nav-icon">
				可为EDUS
				<strong></strong>
			</a>
			<div class="sub-menu-two" style="display:none">
				<a class="sub-menu-item" href="<?php echo $CATEGORYS['155']['url'];?>" target="_blank">产品简介</a>
				<a class="sub-menu-item" href="<?php echo $CATEGORYS['157']['url'];?>" target="_blank">多校区管理</a>
				<a class="sub-menu-item" href="<?php echo $CATEGORYS['158']['url'];?>" target="_blank">市场营销</a>
				<a class="sub-menu-item" href="<?php echo $CATEGORYS['159']['url'];?>" target="_blank">教务管理</a>
				<a class="sub-menu-item" href="<?php echo $CATEGORYS['160']['url'];?>" target="_blank">学员管理</a>
				<a class="sub-menu-item" href="<?php echo $CATEGORYS['161']['url'];?>" target="_blank">考勤管理</a>
				<a class="sub-menu-item" href="<?php echo $CATEGORYS['162']['url'];?>" target="_blank">财务管理</a>
				<a class="sub-menu-item" href="<?php echo $CATEGORYS['163']['url'];?>" target="_blank">一对一</a>
				<a class="sub-menu-item" href="<?php echo $CATEGORYS['164']['url'];?>" target="_blank">一对多</a>
				<a class="sub-menu-item" href="<?php echo $CATEGORYS['165']['url'];?>" target="_blank">决策分析</a>
				<a class="sub-menu-item" href="<?php echo $CATEGORYS['166']['url'];?>" target="_blank">集成拓展</a>				
			</div>
			<div class="side-deco"></div>
			<a  id="sub-menu-three" class="nav-item solution-nav-icon">
				解决方案
				<strong></strong>
			</a>
			<div class="sub-menu-three" style="display:none">	
				<a class="sub-menu-item" href="<?php echo $CATEGORYS['168']['url'];?>" target="_blank">CRM方案</a>
<!-- 				<div class="third-menu-one" style="display:none">
	<a class="sub-menu-item2" href="<?php echo $CATEGORYS['178']['url'];?>" target="_blank">教育培训</a>
	<a class="sub-menu-item2" href="<?php echo $CATEGORYS['182']['url'];?>" target="_blank">房产建筑</a>
	<a class="sub-menu-item2" href="<?php echo $CATEGORYS['183']['url'];?>" target="_blank">电商IT</a>
	<a class="sub-menu-item2" href="<?php echo $CATEGORYS['186']['url'];?>" target="_blank">文体娱乐</a>
	<a class="sub-menu-item2" href="<?php echo $CATEGORYS['189']['url'];?>" target="_blank">零售贸易</a>
	<a class="sub-menu-item2" href="<?php echo $CATEGORYS['192']['url'];?>" target="_blank">医药医疗</a>
	<a class="sub-menu-item2" href="<?php echo $CATEGORYS['194']['url'];?>" target="_blank">金融行业</a>
	<a class="sub-menu-item2" href="<?php echo $CATEGORYS['197']['url'];?>" target="_blank">餐饮旅游</a>
	<a class="sub-menu-item2" href="<?php echo $CATEGORYS['200']['url'];?>" target="_blank">仪表制造</a>
</div> -->
				<a class="sub-menu-item" href="<?php echo $CATEGORYS['202']['url'];?>" target="_blank">教务方案</a>	
<!-- 				<div class="third-menu-two" style="display:none">
				<a class="sub-menu-item2" href="<?php echo $CATEGORYS['203']['url'];?>" target="_blank">中小学培训</a>
				<a class="sub-menu-item2" href="<?php echo $CATEGORYS['204']['url'];?>" target="_blank">外语培训</a>
				<a class="sub-menu-item2" href="<?php echo $CATEGORYS['205']['url'];?>" target="_blank">少儿培训</a>
				<a class="sub-menu-item2" href="<?php echo $CATEGORYS['206']['url'];?>" target="_blank">职业资格培训</a>
				<a class="sub-menu-item2" href="<?php echo $CATEGORYS['207']['url'];?>" target="_blank">留学培训</a>
				<a class="sub-menu-item2" href="<?php echo $CATEGORYS['210']['url'];?>" target="_blank">艺术培训</a>
			</div>	 -->			
			</div>
			<div class="side-deco"></div>
			<a id="sub-menu-four" class="nav-item news-nav-icon">
				资讯中心
				<strong></strong>
			</a>
			<div class="sub-menu-four" style="display:none">
				<a class="sub-menu-item" href="<?php echo $CATEGORYS['211']['url'];?>" target="_blank">CRM</a>
				<!--<div class="third-menu-three" style="display:none">
					<a class="sub-menu-item2" href="<?php echo $CATEGORYS['212']['url'];?>" target="_blank">市场管理</a>
					<a class="sub-menu-item2" href="<?php echo $CATEGORYS['213']['url'];?>" target="_blank">销售管理</a>
					<a class="sub-menu-item2" href="<?php echo $CATEGORYS['214']['url'];?>" target="_blank">订单管理</a>
					<a class="sub-menu-item2" href="<?php echo $CATEGORYS['218']['url'];?>" target="_blank">服务管理</a>
					<a class="sub-menu-item2" href="<?php echo $CATEGORYS['215']['url'];?>" target="_blank">费用管理</a>
					<a class="sub-menu-item2" href="<?php echo $CATEGORYS['216']['url'];?>" target="_blank">权限管理</a>
					<a class="sub-menu-item2" href="<?php echo $CATEGORYS['217']['url'];?>" target="_blank">人员管理</a>
				</div>-->
				<a class="sub-menu-item" href="<?php echo $CATEGORYS['219']['url'];?>" target="_blank" >教务系统</a>
				<!--<div class="third-menu-four" style="display:none">
					<a class="sub-menu-item2" href="<?php echo $CATEGORYS['220']['url'];?>" target="_blank">市场营销</a>
					<a class="sub-menu-item2" href="<?php echo $CATEGORYS['221']['url'];?>" target="_blank">教务管理</a>
					<a class="sub-menu-item2" href="<?php echo $CATEGORYS['222']['url'];?>" target="_blank">学员管理</a>
					<a class="sub-menu-item2" href="<?php echo $CATEGORYS['223']['url'];?>" target="_blank">一对一</a>
					<a class="sub-menu-item2" href="<?php echo $CATEGORYS['224']['url'];?>" target="_blank">一对多</a>
					<a class="sub-menu-item2" href="<?php echo $CATEGORYS['225']['url'];?>" target="_blank">考勤管理</a>
					<a class="sub-menu-item2" href="<?php echo $CATEGORYS['226']['url'];?>" target="_blank">财务管理</a>
				</div>-->
			</div>
			<div class="side-deco"></div>
			<a id="sub-menu-five" class="nav-item news-nav-icon">
				客户案例
				<strong></strong>
			</a>
			<div class="sub-menu-five" style="display:none">
				<a class="sub-menu-item" href="<?php echo $CATEGORYS['227']['url'];?>" target="_blank">CRM案例</a>
				<a class="sub-menu-item" href="<?php echo $CATEGORYS['228']['url'];?>" target="_blank">教务案例</a>
			</div>
			<div class="side-deco"></div>
			<a class="nav-item about-nav-icon" href="<?php echo $CATEGORYS['229']['url'];?>" target="_blank">
				关于可为
				<em></em>
			</a>
			<div class="side-deco"></div>
		</div>
	</div> 
<!--右侧边栏-->	 
<div class="sidebar-right">
  <div class="sidebar-hide-scroll-right"  >

            <a href="#" class="nav-item fb-nav-icon" style="margin-top:10px;">微博<em></em></a>        	
            <div class="side-deco"></div>  
            <a href="#" class="nav-item tw-nav-icon">QQ<em></em></a>      	
            <div class="side-deco"></div>
            <a href="#" class="nav-item tw-nav-icon">微信<strong></strong></a>   
            <div class="side-deco"></div>
            
            <a href="contact.html" class="nav-item mail-nav-icon">联系<em></em></a>				
            <div class="side-deco"></div>
            <a href="tel:13500000000" class="nav-item call-nav-icon">电话<em></em></a>				
            <div class="side-deco"></div>
            <a href="sms:13500000000" class="nav-item text-nav-icon">短信<em></em></a>				
            <div class="side-deco"></div>
        </div>
    </div>  
</div>

	</div> 