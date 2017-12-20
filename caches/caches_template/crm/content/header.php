<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?>		<div class="head">
			<div class="head-logo"><a href="<?php echo siteurl($siteid);?>" target="_blank"><img src="<?php echo IMG_PATH;?>crm/logo.png" width="166" height="46" alt="教育培训CRM" title="可为CRM" /></a></div>
			<ul class="head-nav">
				<li><a href="<?php echo siteurl($siteid);?>" target="_blank">首页</a></li>
				<li><a href="<?php echo $CATEGORYS['40']['url'];?>" target="_blank">产品中心</a>
					<ul class="s-nav">
						<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=0f68ceb7acf55630706990a060141c50&action=category&catid=40&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'40','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'20',));}?>
						<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
						<li><a href="<?php echo $r['url'];?>" target="_blank"><?php echo $r['catname'];?></a></li>
						<?php $n++;}unset($n); ?>
						<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
					</ul>
				</li>
				<li><a href="<?php echo $CATEGORYS['41']['url'];?>" target="_blank">解决方案</a>
					<ul class="s-nav">
						<li><a href="<?php echo $CATEGORYS['241']['url'];?>" target="_blank">中小学培训</a></li>
						<li><a href="<?php echo $CATEGORYS['242']['url'];?>" target="_blank">外语培训</a></li>
						<li><a href="<?php echo $CATEGORYS['243']['url'];?>" target="_blank">少儿培训</a></li>
						<li><a href="<?php echo $CATEGORYS['244']['url'];?>" target="_blank">职业资格培训</a></li>
						<li><a href="<?php echo $CATEGORYS['245']['url'];?>" target="_blank">体育培训</a></li>
						<li><a href="<?php echo $CATEGORYS['246']['url'];?>" target="_blank">艺术培训</a></li>
						<li><a href="<?php echo $CATEGORYS['247']['url'];?>" target="_blank">留学培训</a></li>
					</ul>
				</li>
				<li><a href="<?php echo $CATEGORYS['42']['url'];?>" target="_blank">成功案例</a></li>
				<li><a href="<?php echo $CATEGORYS['43']['url'];?>" target="_blank">服务体系</a>
					<ul class="s-nav">
						<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=6ccb8a094dc9933a2135cdf16ea76025&action=category&catid=43&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'43','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'20',));}?>
						<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
						<li><a href="<?php echo $r['url'];?>" target="_blank"><?php echo $r['catname'];?></a></li>
						<?php $n++;}unset($n); ?>
						<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
					</ul>
				</li>
				<li><a href="<?php echo $CATEGORYS['44']['url'];?>" target="_blank">产品资讯</a></li>
				<li><a href="<?php echo $CATEGORYS['45']['url'];?>" target="_blank">关于我们</a>
					<ul class="s-nav">
						<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=3410b4cc727398dd520992401a767843&action=category&catid=45&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'45','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'20',));}?>
						<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
						<li><a href="<?php echo $r['url'];?>" target="_blank"><?php echo $r['catname'];?></a></li>
						<?php $n++;}unset($n); ?>
						<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
					</ul>
				</li>
			</ul>
			<a href="javascript:void(0)" class="head-right">申请试用</a>
		</div>