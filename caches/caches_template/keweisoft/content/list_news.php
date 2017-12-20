<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html>
<html>
	<head>
		<title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
		<meta charset="utf-8" />
		<meta name="author" content="keweisoft.com" />
		<meta name="keywords" content="<?php echo $SEO['keyword'];?>" />
		<meta name="description" content="<?php echo $SEO['description'];?>" />
		<link type="text/css" rel="stylesheet" href="<?php echo CSS_PATH;?>official/common.css">
		<link type="text/css" rel="stylesheet" href="<?php echo CSS_PATH;?>official/news.css">
		<link type="text/css" rel="stylesheet" href="<?php echo CSS_PATH;?>official/hover.css">
		<link type="text/css" rel="stylesheet" href="<?php echo CSS_PATH;?>official/bootstrap.min.css">
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
		<?php include template("content","header"); ?>
		<div class="news-banner">
			<div class="news-banner-top"></div>
			<div class="news-banner-bottom">
				<div class="news-banner-center">
					<a href="http://kf2.immivip.com/new/client.php?unique_id=&unique_name=&arg=admin&style=7" target="_blank"><div class="nbc-btn">点击在线咨询</div></a>
				</div>
			</div>
		</div>
		<div class="news-b1 m-content">
			<p><a href="<?php echo siteurl($siteid);?>">首页</a>&nbsp;&nbsp;<span>></span>&nbsp;&nbsp;<span>可为动态</span></p>
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=5718959c144d57cac7392c0f2cdac925&action=lists&catid=%24catid&order=inputtime+DESC&num=6&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 6;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>$catid,'order'=>'inputtime DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$index_pages = index_pages($content_total, $page, $pagesize, $urlrule);$wz_pages = wz_pages($content_total, $page, $pagesize, $urlrule);$m_pages = m_pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>$catid,'order'=>'inputtime DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
			<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
			<div class="news-b1-item">
				<div class="nbi-left">
					<img src="<?php echo $r['thumb'];?>" width="504" height="224" alt="<?php echo $r['title'];?>" title="<?php echo $r['title'];?>" />
				</div>
				<div class="nbi-right">
					<p class="nbi-right-tit"><a href="<?php echo $r['url'];?>" target="_blank"><?php echo str_cut($r[title],64,'...');?></a></p>
					<p class="nbi-right-con"><?php echo str_cut($r[description],185,'...');?></p>
					<?php $db = pc_base::load_model('hits_model');?>
					<?php $_r = $db->get_one(array('hitsid'=>'c-'.$modelid.'-'.$r[id]));$views = $_r[views];?>
					<span class="nbi-date">点击次数：<?php echo $views;?></span>
					<a href="http://kf2.immivip.com/new/client.php?unique_id=&unique_name=&arg=admin&style=7" target="_blank" class="nbi-consult">点击咨询>></a>
					<a href="<?php echo $r['url'];?>" target="_blank"><div class="nbi-more">了解详情>></div></a>
				</div>
			</div>
			<?php $n++;}unset($n); ?>
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
			<div class="news-page"><?php echo $index_pages;?></div>
			<div class="news-b1-line"></div>
			<div class="news-sub-case">
				<div class="nsc-left">
					<a href="http://edus.keweisoft.com/case/" target="_blank"><div class="nsc-left-btn wobble-horizontal">查看更多</div></a>
				</div>
				<div class="nsc-right">
					<a href="http://edus.keweisoft.com/case/show_8_1.html" target="_blank"><div class="nsc-right-item1"><span class="nsc-right-tit1">北京金汉嘉教育咨询有限公司</span></div></a>
					<a href="http://edus.keweisoft.com/case/show_21_1.html" target="_blank"><div class="nsc-right-item2" style="margin-left:10px;"><span class="nsc-right-tit1">武汉荣昌仁和会计教育</span></div></a>
					<a href="http://edus.keweisoft.com/case/show_1_1.html" target="_blank"><div class="nsc-right-item3" style="margin-left:10px;"><span class="nsc-right-tit1">北京倍乐优学教育</span></div></a>
				</div>
			</div>															
		</div>
<?php include template("content","footer"); ?>