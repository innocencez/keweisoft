<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html>
<html>
	<head>
		<title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
		<meta charset="utf-8" />
		<meta name="author" content="keweisoft.com" />
		<meta name="keywords" content="<?php echo $SEO['keyword'];?>" />
		<meta name="description" content="<?php echo $SEO['description'];?>" />
		<link type="text/css" rel="stylesheet" href="<?php echo CSS_PATH;?>official/common.css">
		<link type="text/css" rel="stylesheet" href="<?php echo CSS_PATH;?>official/index.css">
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
		<div class="index-banner">
			<div class="banner-mid">
				<a href="http://tb.53kf.com/webCompany.php?arg=10140145&style=5" target="_blank"><div class="banner-btn">点击在线咨询</div></a>
			</div>
		</div>
		<div class="index-b1 m-content">
			<div class="index-b1-tit"></div>
			<p class="index-b1-sub">专业从事软件行业，满足培训机构多方面管理需求，为多家培训机构提供专业的解决方案。</p>
			<div class="index-b1-con">
				<div class="index-b1-item">
					<a href="http://edus.keweisoft.com" target="_blank"><div class="ib1-pic pulse-grow"></div></a>
					<a href="http://edus.keweisoft.com" target="_blank"><p class="ib1-tit">教育培训ERP系统</p></a>
					<p class="ib1-desc">一站式教育培训管理软件</p>
				</div>
				<div class="index-b1-item" style="margin-left:37px;">
					<a href="http://edus.keweisoft.com/mapp" target="_blank"><div class="ib2-pic pulse-grow"></div></a>
					<a href="http://edus.keweisoft.com/mapp" target="_blank"><p class="ib1-tit">教务移动APP</p></a>
					<p class="ib1-desc">真正实现无纸化办公</p>
				</div>
				<div class="index-b1-item" style="margin-left:37px;">
					<a href="<?php echo $CATEGORYS['252']['url'];?>" target="_blank"><div class="ib3-pic pulse-grow"></div></a>
					<a href="<?php echo $CATEGORYS['252']['url'];?>"><p class="ib1-tit">CRM移动版</p></a>
					<p class="ib1-desc">方便移动办公，让效率随行</p>
				</div>
				<div class="index-b1-item">
					<a href="http://edus.keweisoft.com/crm/" target="_blank"><div class="ib4-pic pulse-grow"></div></a>
					<a href="http://edus.keweisoft.com/crm/"><p class="ib1-tit">留学CRM</p></a>
					<p class="ib1-desc">打造留学行业第一CRM品牌</p>
				</div>	
				<div class="index-b1-item" style="margin-left:37px;">
					<a href="http://edus.keweisoft.com/souke/" target="_blank"><div class="ib5-pic pulse-grow"></div></a>
					<a href="http://edus.keweisoft.com/souke/"><p class="ib1-tit">在线选课报名系统</p></a>
					<p class="ib1-desc">培训机构信息化招生新模式</p>
				</div>
				<div class="index-b1-item" style="margin-left:37px;">
					<a href="http://edus.keweisoft.com/app/" target="_blank"><div class="ib6-pic pulse-grow"></div></a>
					<a href="http://edus.keweisoft.com/app/"><p class="ib1-tit">家校通系统</p></a>
					<p class="ib1-desc">教育培训机构的家校互通神器</p>
				</div>							
			</div>
		</div>
		<div class="index-b2">
			<div class="m-content">
				<div class="index-b2-tit"></div>
				<p class="index-b2-sub">专注教育行业，提供至臻解决方案，帮您提供丰富的咨询经验，提炼业务价值！</p>
				<div class="index-b2-con"> 
					<a href="index.php?m=content&c=index&a=lists&catid=126" target="_blank"><div class="in-b2-left solution-item">
						<span class="ibl-con">中小学辅导机构解决方案</span>
					</div></a>
					<div class="in-b2-right">
						<div class="ibr-top">
							<a href="index.php?m=content&c=index&a=lists&catid=127"  target="_blank"><div class="ibr-item1 solution-item">
								<span class="ibr-con">外语辅导机构解决方案</span>
							</div></a>
							<a href="index.php?m=content&c=index&a=lists&catid=128"  target="_blank"><div class="ibr-item2 solution-item">
								<span class="ibr-con">少儿培训机构解决方案</span>
							</div></a>							
						</div>
						<div class="ibr-bottom">
							<a href="index.php?m=content&c=index&a=lists&catid=129"  target="_blank"><div class="ibr-item3 solution-item">
								<span class="ibr-con">职业资格培训机构解决方案</span>
							</div></a>
							<a href="index.php?m=content&c=index&a=lists&catid=133"  target="_blank"><div class="ibr-item4 solution-item">
								<span class="ibr-con">艺术培训机构解决方案</span>
							</div></a>							
						</div>						
					</div>
				</div>
			</div>
		</div>
		<div class="index-b3 m-content">
			<div class="index-b3-tit"></div>
			<div class="in-b3-con">
				<div class="in-b3-left">
					<a href="http://tb.53kf.com/webCompany.php?arg=10140145&style=5" class="in-b3-btn wobble-horizontal" target="_blank">点击在线咨询</a>
				</div>
				<div class="in-b3-right">
					<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=037b5847c31f597d9207fd2d0a705591&action=lists&catid=140&order=listorder+DESC&num=4&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'140','order'=>'listorder DESC','moreinfo'=>'1','limit'=>'4',));}?>
					<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
					<div class="inb3-item" <?php if($n != 1) { ?>style="margin-top:12px;"<?php } ?>>
						<a href="<?php echo $r['url'];?>" target="_blank"><div class="index-case-logo">
							<img src="<?php echo $r['logo'];?>" height="80" alt="" title="<?php echo $r['title'];?>" />
						</div></a>
						<div class="inb3-item-right">
							<a href="<?php echo $r['url'];?>"><p class="index-case-tit"><?php echo $r['title'];?></p></a>
							<?php $db = pc_base::load_model('hits_model'); $_r = $db->get_one(array('hitsid'=>'c-18'.'-'.$r[id])); $views = $_r[views]; ?>
							<span class="index-case-views">【点击：<?php echo $views;?>】</span>
							<p class="index-case-desc"><?php echo str_cut($r['description'],205,'...');?></p>
						</div>
					</div>
					<?php $n++;}unset($n); ?>
					<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>															
				</div>
			</div>
		</div>
		<div class="index-b4">
			<div class="m-content">
				<div class="index-b4-tit"></div>
				<div class="index-b4-con">
					<div class="index-b4-item">
						<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=56142407c1692896f3236fd57818df82&action=lists&catid=249&order=listorder+DESC&start=0&num=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'249','order'=>'listorder DESC','limit'=>'1',));}?>
						<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
						<div class="ibi-top">
							<div class="ibi-top-left">
								<img src="<?php echo $r['thumb'];?>" width="146" height="110" alt="<?php echo $r['title'];?>" title="<?php echo $r['title'];?>" />
							</div>
							<div class="ibi-top-right">
								<p class="itr-tit"><a href="<?php echo $r['url'];?>" target="_blank"><?php echo str_cut($r[title],46,'...');?></a></p>
								<p class="itr-con"><a href="<?php echo $r['url'];?>" target="_blank"><?php echo str_cut($r[description],'96','...');?></a></p>
							</div>
						</div>
						<?php $n++;}unset($n); ?>
						<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
						<ul class="ibi-con">
							<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=464bc34ccaef9757f05ed23724bb723b&action=lists&catid=249&order=listorder+DESC&start=1&num=6\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'249','order'=>'listorder DESC','limit'=>'1,6',));}?>
							<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
							<?php $db = pc_base::load_model('hits_model'); $_r = $db->get_one(array('hitsid'=>'c-1'.'-'.$r[id])); $views = $_r[views]; ?>
							<li class="ibi-list"><a class="ibi-link" href="<?php echo $r['url'];?>" target="_blank"><?php echo str_cut($r[title],46,'...');?></a><span class="ibi-date">【点击次数：<?php echo $views;?>】</span></li>
							<?php $n++;}unset($n); ?>
							<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
						</ul>
					</div>
					<div class="index-b4-item" style="margin-left:28px;">
						<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=fca3208774d865dff527826b804ca49f&action=lists&catid=249&order=listorder+ASC&start=0&num=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'249','order'=>'listorder ASC','limit'=>'1',));}?>
						<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
						<div class="ibi-top">
							<div class="ibi-top-left">
								<img src="<?php echo $r['thumb'];?>" width="146" height="110" alt="<?php echo $r['title'];?>" title="<?php echo $r['title'];?>" />
							</div>
							<div class="ibi-top-right">
								<p class="itr-tit"><a href="<?php echo $r['url'];?>" target="_blank"><?php echo str_cut($r[title],46,'...');?></a></p>
								<p class="itr-con"><a href="<?php echo $r['url'];?>" target="_blank"><?php echo str_cut($r[description],'96','...');?></a></p>
							</div>
						</div>
						<?php $n++;}unset($n); ?>
						<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
						<ul class="ibi-con">
							<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=26468d120dc9d2b6acaed06f5fa248ac&action=lists&catid=249&order=listorder+ASC&start=1&num=6\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'249','order'=>'listorder ASC','limit'=>'1,6',));}?>
							<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
							<?php $db = pc_base::load_model('hits_model'); $_r = $db->get_one(array('hitsid'=>'c-1'.'-'.$r[id])); $views = $_r[views]; ?>							
							<li class="ibi-list"><a class="ibi-link" href="<?php echo $r['url'];?>" target="_blank"><?php echo str_cut($r[title],46,'...');?></a><span class="ibi-date">【点击次数：<?php echo $views;?>】</span></li>
							<?php $n++;}unset($n); ?>
							<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
						</ul>
					</div>					
				</div>	
			</div>
		</div>
		<div class="index-b5 m-content">
			<div class="index-b5-tit"></div>
			<div class="inb5-con">
				<div class="inb5-left">
					<div class="inb5-l-top">
						<div class="inb5-Rcode"><img src="<?php echo IMG_PATH;?>official/index-b5-rc.jpg" width="139" height="187" /></div>
						<div class="inb5-contact">
							<p class="inb5-tel">咨询电话：010-51651266</p>
							<p class="inb5-site">教务网址：<a href="http://edus.keweisoft.com">http://edus.keweisoft.com</a></p>
							<p class="inb5-siteS">CRM网址：<a href="http://crm.keweisoft.com">http://crm.keweisoft.com</a></p>
							<p class="inb5-mail">邮政编码：100080</p>
							<p class="inb5-add">公司地址：北京市海淀区海淀北二街8号中关村SOHO 910室</p>
						</div>
					</div>
					<div class="inb5-map">
						<img src="<?php echo IMG_PATH;?>official/index-b5-map.jpg"  wdith="429" height="193" alt="" title=""  />
					</div>
				</div>
				<div class="inb5-right">
					<script language='javascript' src='<?php echo APP_PATH;?>index.php?m=formguide&c=index&a=show&formid=30&action=js&siteid=1'></script>
				</div>
			</div>
		</div>
		<?php include template("content","footer"); ?>