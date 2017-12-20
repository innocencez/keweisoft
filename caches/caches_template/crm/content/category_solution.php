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
		<script type="text/javascript" src="<?php echo JS_PATH;?>crm/imgScroll.js"></script>
		<script type="text/javascript" src="<?php echo JS_PATH;?>crm/product.js"></script>
	</head>	
	<body>
	<?php include template("content","header"); ?>
		<div class="solution-banner">
			<div class="solution-banner1"></div>
			<div class="solution-banner2">
				<div class="solution-banner-btn">
					<a href="http://tb.53kf.com/webCompany.php?arg=10140145&style=5" target="_blank"><div class="sbt-item1">点击在线咨询</div></a>
					<a href="http://tb.53kf.com/webCompany.php?arg=10140145&style=5" target="_blank"><div class="sbt-item2">点击预约演示</div></a>
				</div>
			</div>
		</div>
		<div class="m-content">
			<p class="micro-nav">
				<a href="<?php echo siteurl($siteid);?>">首页</a> > <span>解决方案</span>
			</p>
		</div>
		<div class="m-content">
			<div class="solution-b2-tit"></div>
			<div class="solution-b2-top">
				<div class="sbt-item">
					<a href="<?php echo $CATEGORYS['241']['url'];?>" target="_blank"><div class="sbt-item-pic1"></div></a>
					<a href="<?php echo $CATEGORYS['241']['url'];?>" target="_blank"><div class="sbt-item-sub">中小学辅导机构解决方案</div></a>
				</div>
				<div class="sbt-item" style="margin-left:14px;">
					<a href="<?php echo $CATEGORYS['242']['url'];?>" target="_blank"><div class="sbt-item-pic2"></div></a>
					<a href="<?php echo $CATEGORYS['242']['url'];?>" target="_blank"><div class="sbt-item-sub">外语辅导机构解决方案</div></a>
				</div>
				<div class="sbt-item" style="margin-left:14px;">
					<a href="<?php echo $CATEGORYS['243']['url'];?>" target="_blank"><div class="sbt-item-pic3"></div></a>
					<a href="<?php echo $CATEGORYS['243']['url'];?>" target="_blank"><div class="sbt-item-sub">少儿培训机构解决方案</div></a>
				</div>
				<div class="sbt-item" style="margin-left:14px;">
					<a href="<?php echo $CATEGORYS['244']['url'];?>" target="_blank"><div class="sbt-item-pic4"></div></a>
					<a href="<?php echo $CATEGORYS['244']['url'];?>" target="_blank"><div class="sbt-item-sub">职业资格培训解决方案</div></a>
				</div>												
			</div>
			<div class="solution-b2-top" style="margin-top:30px;">
				<div class="sbt-item">
					<a href="<?php echo $CATEGORYS['245']['url'];?>" target="_blank"><div class="sbt-item-pic5"></div></a>
					<a href="<?php echo $CATEGORYS['245']['url'];?>" target="_blank"><div class="sbt-item-sub">体育培训机构解决方案</div></a>
				</div>
				<div class="sbt-item" style="margin-left:14px;">
					<a href="<?php echo $CATEGORYS['246']['url'];?>" target="_blank"><div class="sbt-item-pic6"></div></a>
					<a href="<?php echo $CATEGORYS['246']['url'];?>" target="_blank"><div class="sbt-item-sub">艺术培训机构解决方案</div></a>
				</div>
				<div class="sbt-item" style="margin-left:14px;">
					<a href="<?php echo $CATEGORYS['247']['url'];?>" target="_blank"><div class="sbt-item-pic8"></div></a>
					<a href="<?php echo $CATEGORYS['247']['url'];?>" target="_blank"><div class="sbt-item-sub">留学培训解决方案</div></a>
				</div>
				<div class="sbt-item" style="margin-left:14px;">
					<a href="http://tb.53kf.com/webCompany.php?arg=10140145&style=5" target="_blank"><div class="sbt-item-pic7"></div></a>
					<a href="http://tb.53kf.com/webCompany.php?arg=10140145&style=5" target="_blank"><div class="sbt-item-sub">咨询更多行业方案</div></a>
				</div>												
			</div>			
		</div>
		<div class="m-content solution-b3">
			<div class="solution-b3-tit"></div>
		</div>
		<div class="m-content">
			<div class="solution-b4">
				<div class="sb4-top">
					<div class="sb4-pic1"></div>
					<div class="sb4-pic2"></div>
					<div class="sb4-pic3"></div>
					<div class="sb4-pic4"></div>
				</div>
				<div class="sb4-sub">
					<div  class="sb4-sub-item">
						<p class="ssi-tit">咨询服务</p>
						<p class="ssi-con">可为CRM提供咨询服务，帮助企业梳理流程，规划属于自己的教务管理系统。</p>
					</div>
					<div  class="sb4-sub-item" style="margin-left:58px;">
						<p class="ssi-tit">实施服务</p>
						<p class="ssi-con">实施服务团三分软件，七分实施，可为团队帮助企业打造自己的信息化管理专家。</p>
					</div>	
					<div  class="sb4-sub-item" style="margin-left:75px;">
						<p class="ssi-tit">售后服务</p>
						<p class="ssi-con">可为集团提供的售后服务，以多种信息载体第一时间内向用户传递信息化知识。</p>
					</div>	
					<div  class="sb4-sub-item" style="margin-left:60px;">
						<p class="ssi-tit">定制开发</p>
						<p class="ssi-con">金牌研发团队可满足企业个性化管理需求进行二次开发。</p>
					</div>															
				</div>
			</div>
		</div>
		<div class="solution-b5">
			<div class="m-content">
				<div class="sb5-tit"></div>
				<div class="sb5-con">
					<div class="sb5-mid">
						<ul style="display:inline-block;">
						<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=e544cafe22c432d29fc812e9979f2f18&action=lists&catid=42&num=6&order=listorder+DESC&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'42','order'=>'listorder DESC','moreinfo'=>'1','limit'=>'6',));}?>
						<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
							<li style="margin-right:30px;"><a href="<?php echo $r['url'];?>" target="_blank"><img src="<?php echo $r['logo'];?>" width="217" height="151" alt="<?php echo $r['title'];?>" /></a></li>
						<?php $n++;}unset($n); ?>
						<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<?php include template("content","footer"); ?>	
	</body>	
</html>