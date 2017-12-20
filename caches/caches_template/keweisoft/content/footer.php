<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><div class="bottom">
			<div class="m-content">
				<div class="b-news">
					<span class="b-news-tit">最新动态：</span><div id="intrends">
						<div id="trends">
							<div id="trend1">
								<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=6a1cf2ab6aca1efa9b4f6cdbaa65ab8a&action=lists&catid=249&order=listorder+DESC&num=7\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'249','order'=>'listorder DESC','limit'=>'7',));}?>
								<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
								<a href="<?php echo $r['url'];?>" target="_blank" class="adv1_movingLink"><?php echo str_cut($r[title],52,'...');?></a>
								<?php $n++;}unset($n); ?>
								<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
							</div>
							<div id="trend2"></div>
						</div>
						<script type="text/javascript">
							function scrollLeftPanel(){
							var speed = 30;
							var demo = document.getElementById("trends");
							var demo1 = document.getElementById("trend1");
							var demo2 = document.getElementById("trend2");
							demo2.innerHTML = demo1.innerHTML;
							function marquee(){
								if(demo2.offsetWidth-demo.scrollLeft<=0) 
									demo.scrollLeft-=demo.offsetWidth; 
								else 
									demo.scrollLeft++; 
								}
							var MyMar=setInterval(marquee,speed); 
							demo.onmouseover=function() {clearInterval(MyMar);} 
							demo.onmouseout=function() {MyMar=setInterval(marquee,speed);} 
							}
						</script>
						<script type="text/javascript">scrollLeftPanel();</script> 						
					</div>
				</div>
				<p class="b-link"><a href="">关于可为</a><span>&nbsp;|&nbsp;</span><a href="">可为CRM</a><span>&nbsp;|&nbsp;</span><a href="">可为教务软件</a><span>&nbsp;|&nbsp;</span><a href="">客户服务</a><span>&nbsp;|&nbsp;</span><a href="">联系我们</a><span>&nbsp;|&nbsp;</span><a href="">网站地图</a></p>
				<p class="b-cright">京ICP备08006041号-3北京市公安局海淀分局网监中心备案编号：11010802015396 </p>
			</div>
		</div>
		<script type="text/javascript" src="<?php echo JS_PATH;?>official/bootstrap.min.js"></script>
	</body>
</html>