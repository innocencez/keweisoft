<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?>		<div class="bottom">
			<div class="m-content">
				<div class="bottom-mid">
					<dl>
						<dt><a href="<?php echo $CATEGORYS['40']['url'];?>" target="_blank">产品中心</a></dt>
						<dd><a href="<?php echo $CATEGORYS['233']['url'];?>" target="_blank">市场管理</a></dd>
						<dd><a href="<?php echo $CATEGORYS['234']['url'];?>" target="_blank">客户池管理</a></dd>
						<dd><a href="<?php echo $CATEGORYS['235']['url'];?>" target="_blank">销售管理</a></dd>
						<dd><a href="<?php echo $CATEGORYS['237']['url'];?>" target="_blank">教学服务</a></dd>
						<dd><a href="<?php echo $CATEGORYS['236']['url'];?>" target="_blank">财务管理</a></dd>
					</dl>
					<dl style="margin-left:124px;">
						<dt><a href="<?php echo $CATEGORYS['41']['url'];?>" target="_blank">解决方案</a></dt>
						<dd><a href="" target="_blank">中小学辅导</a></dd>
						<dd><a href="" target="_blank">英语培训</a></dd>
						<dd><a href="" target="_blank">留学培训</a></dd>
						<dd><a href="" target="_blank">管理咨询</a></dd>
						<dd><a href="" target="_blank">艺术辅导</a></dd>
					</dl>
					<dl style="margin-left:124px;">
						<dt><a href="<?php echo $CATEGORYS['43']['url'];?>" target="_blank">可为服务</a></dt>
						<dd><a href="<?php echo $CATEGORYS['43']['url'];?>" target="_blank">服务概述</a></dd>
						<dd><a href="<?php echo $CATEGORYS['93']['url'];?>" target="_blank">咨询服务</a></dd>
						<dd><a href="<?php echo $CATEGORYS['92']['url'];?>" target="_blank">实施服务</a></dd>
						<dd><a href="<?php echo $CATEGORYS['91']['url'];?>" target="_blank">售后服务</a></dd>
						<dd><a href="<?php echo $CATEGORYS['102']['url'];?>" target="_blank">服务团队</a></dd>
					</dl>
					<dl style="margin-left:124px;">
						<dt><a href="<?php echo $CATEGORYS['45']['url'];?>" target="_blank">关于可为</a></dt>
						<dd><a href="<?php echo $CATEGORYS['98']['url'];?>" target="_blank">公司简介</a></dd>
						<dd><a href="<?php echo $CATEGORYS['99']['url'];?>" target="_blank">企业历程</a></dd>
						<dd><a href="<?php echo $CATEGORYS['105']['url'];?>" target="_blank">企业活动</a></dd>
						<dd><a href="<?php echo $CATEGORYS['99']['url'];?>" target="_blank">资质荣誉</a></dd>
						<dd><a href="<?php echo $CATEGORYS['106']['url'];?>" target="_blank">联系我们</a></dd>
					</dl>
					<div class="QRcode">
						<img src="<?php echo IMG_PATH;?>crm/QRcode.png" width="97" height="97" alt="关注可为CRM" />
						<span>扫一扫，关注可为官方微信</span>
					</div>															
				</div>
			</div>
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"link\" data=\"op=link&tag_md5=4ac678106263fa11d2eeee6d2336c68c&action=lists&typeid=0&siteid=%24siteid&linktype=0&order=desc\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$link_tag = pc_base::load_app_class("link_tag", "link");if (method_exists($link_tag, 'lists')) {$data = $link_tag->lists(array('typeid'=>'0','siteid'=>$siteid,'linktype'=>'0','order'=>'desc','limit'=>'20',));}?>
			<?php if($data) { ?>
			<div class="f-link m-content">
				<span>友情链接：</span><?php $n=1;if(is_array($data)) foreach($data AS $r) { ?><a href="<?php echo $r['url'];?>" target="_blank"><?php echo $r['name'];?></a>
				<?php $n++;}unset($n); ?>
			</div>
			<?php } ?>
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
			<p class="c-right">京ICP备08006041号-3北京市公安局海淀分局网监中心备案编号：11010802015396</p>
			<div style="width:1000px;margin:0 auto; text-align:center;">
			<!--百度统计代码-->
			<script type="text/javascript">
			var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
			document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3Fea84e95166c00533f89844e44b8a4767' type='text/javascript'%3E%3C/script%3E"));
			</script>
			</div>			
		</div>	
		<script type="text/javascript" src="<?php echo JS_PATH;?>crm/scrolltopcontrol.js"></script>
		<!--53聊天代码-->
		<script>
		(function() {
			  var _53code = document.createElement("script");
			  _53code.src = "//tb.53kf.com/code/code/10140145/5";
			  var s = document.getElementsByTagName("script")[0]; 
			  s.parentNode.insertBefore(_53code, s);
		})();
		</script>