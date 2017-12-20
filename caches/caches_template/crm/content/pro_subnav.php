<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?>		<div class="sub-nav">
			<div class="m-content">
				<ul class="sub-nav-list"> 
					<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=0f68ceb7acf55630706990a060141c50&action=category&catid=40&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'40','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'20',));}?>
					<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
					<li <?php if($r[catid] == $catid) { ?>style="background:#fa8032"<?php } ?>><a href="<?php echo $r['url'];?>" <?php if($r[catid] == $catid) { ?>style="color:#fff"<?php } ?>><?php echo $r['catname'];?></a></li>
					<?php $n++;}unset($n); ?>
					<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>												
				</ul>
			</div>
		</div>
		<div class="sub-nav-down" id="snd" style="display:none;">
			<div class="m-content">
				<ul class="sub-nav-down-list"> 
					<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=0f68ceb7acf55630706990a060141c50&action=category&catid=40&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'40','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'20',));}?>
					<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
					<li <?php if($r[catid] == $catid) { ?>style="background:#fa8032"<?php } ?>><a href="<?php echo $r['url'];?>"><?php echo $r['catname'];?></a></li>
					<?php $n++;}unset($n); ?>
					<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>											
				</ul>				
			</div>
		</div>