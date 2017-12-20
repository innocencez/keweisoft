<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><div class="bottom">
	<div class="m-content">
		<dl class="bottom-items">
			<dt><a href="<?php echo $CATEGORYS['107']['url'];?>">关于可为</a></dt>
			<dd><a href="<?php echo $CATEGORYS['107']['url'];?>">可为简介</a></dd>
			<dd><a href="<?php echo $CATEGORYS['109']['url'];?>">企业历程</a></dd>
			<dd><a href="<?php echo $CATEGORYS['110']['url'];?>">企业活动</a></dd>
			<dd><a href="<?php echo $CATEGORYS['108']['url'];?>">联系我们</a></dd>
			<dd><a>资质荣誉</a></dd>
		</dl>
		<dl class="bottom-items items2">
			<dt><a href="<?php echo $CATEGORYS['125']['url'];?>">解决方案</a></dt>
			<dd><a href="<?php echo $CATEGORYS['129']['url'];?>">职业资格</a></dd>
			<dd><a href="<?php echo $CATEGORYS['126']['url'];?>">中小学辅导</a></dd>
			<dd><a href="<?php echo $CATEGORYS['127']['url'];?>">英语辅导</a></dd>
			<dd><a href="<?php echo $CATEGORYS['128']['url'];?>">少儿培训</a></dd>
			<dd><a href="<?php echo $CATEGORYS['133']['url'];?>">艺术培训</a></dd>
		</dl>
		<dl class="bottom-items items3">
			<dt><a>产品中心</a></dt>
			<dd><a href="<?php echo $CATEGORYS['115']['url'];?>">营销管理</a></dd>
			<dd><a href="<?php echo $CATEGORYS['119']['url'];?>">教务管理</a></dd>
			<dd><a href="<?php echo $CATEGORYS['116']['url'];?>">学员端管理</a></dd>
			<dd><a href="<?php echo $CATEGORYS['120']['url'];?>">考勤管理</a></dd>
			<dd><a href="<?php echo $CATEGORYS['121']['url'];?>">财务管理</a></dd>
		</dl>
		<dl class="bottom-items items4">
			<dt><a href="<?php echo $CATEGORYS['140']['url'];?>">客户案例</a></dt>
			<dd><a href="<?php echo $CATEGORYS['140']['url'];?>">中小学辅导</a></dd>
			<dd><a href="<?php echo $CATEGORYS['140']['url'];?>">少儿培训</a></dd>
			<dd><a href="<?php echo $CATEGORYS['140']['url'];?>">出国留学</a></dd>
			<dd><a href="<?php echo $CATEGORYS['140']['url'];?>">英语辅导</a></dd>
			<dd><a href="<?php echo $CATEGORYS['140']['url'];?>">艺术培训</a></dd>
		</dl>
		<dl class="bottom-items items5">
			<dt><a href="<?php echo $CATEGORYS['134']['url'];?>">可为服务</a></dt>
			<dd><a href="<?php echo $CATEGORYS['135']['url'];?>">咨询服务</a></dd>
			<dd><a href="<?php echo $CATEGORYS['136']['url'];?>">实施服务</a></dd>
			<dd><a href="<?php echo $CATEGORYS['137']['url'];?>">售后服务</a></dd>
			<dd><a href="<?php echo $CATEGORYS['138']['url'];?>">个性化开发服务</a></dd>
			<dd><a href="<?php echo $CATEGORYS['111']['url'];?>">服务团队</a></dd>
		</dl>
		<div class="bottom-line"></div>
		<p style="text-align:center;color:#fff; margin-top:20px;">
			友情链接：
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"link\" data=\"op=link&tag_md5=84da51d88a9ef140ded0c4b1e36c62a2&action=lists&typeid=0&siteid=%24siteid&linktype=0&order=desc&return=da\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$link_tag = pc_base::load_app_class("link_tag", "link");if (method_exists($link_tag, 'lists')) {$da = $link_tag->lists(array('typeid'=>'0','siteid'=>$siteid,'linktype'=>'0','order'=>'desc','limit'=>'20',));}?>
			<?php $n=1;if(is_array($da)) foreach($da AS $r) { ?>
			<a href="<?php echo $r['url'];?>" target="_blank"><?php echo $r['name'];?></a>&nbsp;&nbsp;
			<?php $n++;}unset($n); ?>
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
		</p>
		<p style="text-align:center;color:#fff; margin-top:20px;">
			京ICP备08006041号-3北京市公安局海淀分局网监中心备案编号：11010802015396
		</p>
	</div>
<div style="width:100%; margin:10px auto 0px;text-align:center;background:#394350">	
<!--53聊天软件代码-->
<script>
(function() {
  var _53code = document.createElement("script");
  _53code.src = "//tb.53kf.com/code/code/10140145/5";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(_53code, s);
})();
</script>
<!--360-cnzz统计代码-->
<script src='http://stat.e.tf.360.cn/search/c.js?u=1447661989' language='JavaScript' ></script><script src='http://pw.cnzz.com/tongji_360.php?id=1254779984&pid=e360&l=2  ' language='JavaScript' charset='gb2312'></script>
<!--百度统计代码-->
<script type="text/javascript">
var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3Ff04c7f91750adccf43be0882905bb320' type='text/javascript'%3E%3C/script%3E"));
</script>
</div>	
</div>

	
