<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html>
<html>
	<head>
		<title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
		<meta charset="utf-8" />
		<meta name="keywords" content="<?php echo $SEO['keyword'];?>" />
		<meta name="description" content="<?php echo $SEO['description'];?>" />
		<meta name="author" content="keweisoft.com" />
		<link href="<?php echo CSS_PATH;?>crm/solution.css" rel="stylesheet" type="text/css" />
		<script type="text/javascript" src="<?php echo JS_PATH;?>crm/jquery-1.7.1.min.js"></script>
		<script type="text/javascript" src="<?php echo JS_PATH;?>crm/product.js"></script>	
	</head>	
	<body>
	<?php include template("content","header"); ?>
		<div class="news-banner">
			<div class="news-banner-mid"></div>
		</div>
		<div class="m-content">
			<p class="micro-nav">
				<a href="<?php echo siteurl($siteid);?>"> 首页</a> > <span>产品资讯</span>
			</p>
		</div>
		<div class="news-con m-content">
			<div class="news-con-left">
				<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=fb1adbbb0f0045bcfae6c3c948e31b20&action=lists&catid=%24catid&num=5&order=updatetime+DESC&page=%24page&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 5;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>$catid,'order'=>'updatetime DESC','moreinfo'=>'1','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$index_pages = index_pages($content_total, $page, $pagesize, $urlrule);$wz_pages = wz_pages($content_total, $page, $pagesize, $urlrule);$m_pages = m_pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>$catid,'order'=>'updatetime DESC','moreinfo'=>'1','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
				<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
				<div class="ncl-item">
					<div class="ncl-item-pic"><a href="<?php echo $r['url'];?>" target="_blank"><img src="<?php echo $r['thumb'];?>" width="278" height="180" alt="<?php echo $r['title'];?>" /></a></div>
					<div class="ncl-item-right">
						<p class="nir-tit"><?php echo str_cut($r[title],56,'...');?></p>
						<p class="nir-con"><?php echo str_cut(strip_tags($r[content]),225,'...');?></p>
						<p class="nir-sub">
							<span style="float:left"><font color="#ED992C" style="margin-right:5px;">author:</font><?php echo $r['username'];?></span>
							<?php $keywords = explode(' ',$r[keywords]);?>
							<?php $n=1;if(is_array($keywords)) foreach($keywords AS $keyword) { ?>
							<?php if($n==1) { ?>
							<span style="float:right"><font color="#ED992C" style="margin-right:5px;">tags:</font><?php echo $keyword;?></span>
							<?php } ?>
							<?php $n++;}unset($n); ?>
						</p>
						<a href="<?php echo $r['url'];?>" target="_blank"><div class="nir-more">了解详情</div></a>
					</div>
				</div>
				<?php $n++;}unset($n); ?>
				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>	
				<div style="text-align:center;margin-bottom:20px;"><?php echo $pages;?></div>														
			</div>
			<div class="news-con-right">
				<div class="ncr-top">
					<div class="ncr-top-tit">热门文章</div>
					<div class="ncr-top-con">
						<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=ce811e01599fed33ad64f53582d26239&action=lists&catid=%24catid&siteid=%24siteid&order=listorder+DESC&num=7\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>$catid,'siteid'=>$siteid,'order'=>'listorder DESC','limit'=>'7',));}?>
						<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
						<div class="ntc-item">
							<div class="ntc-item-pic"><a href="<?php echo $r['url'];?>" target="_blank"><img src="<?php echo $r['thumb'];?>" width="63" height="63" alt="" /></a></div>
							<div class="ntc-item-con">
								<p class="nic-tit"><a href="<?php echo $r['url'];?>" target="_blank"><?php echo str_cut($r[title],40,'...');?></a></p>
								<p class="nic-date"><?php echo date('Y.m.d',$r[updatetime]);?></p>
							</div>							
						</div>
						<?php $n++;}unset($n); ?>
						<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>																			
					</div>
				</div>
				<div class="ncr-sub">
					<div class="ncr-top-tit">标签分类</div>	
					<div class="ncr-sub-con">
						<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=36964358cf843adcfb8aab40d008bdb2&sql=SELECT+keyword%2Cvideonum+FROM+kewei_keyword+order+by+videonum+desc&start=1&num=16&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT keyword,videonum FROM kewei_keyword order by videonum desc LIMIT 1,16");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
						<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
						<a href="<?php echo APP_PATH;?>index.php?m=content&c=tag&a=lists&tag=<?php echo urlencode($r[keyword]);?>" target="_blank"><span class="nsc-item"><?php echo str_cut($r[keyword],12,'');?></span></a>
						<?php $n++;}unset($n); ?>
						<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
					</div>				
				</div>
			</div>
		</div>
		<?php include template("content","footer"); ?>	
	</body>	
</html>