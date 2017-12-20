<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html>
<html>
	<head>
		<title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>official/common.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>official/abteam.css" />
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
<!--head-->
<?php include template("content","header"); ?>
	<div class="m-content temp"><embed width="1040" height="100" wmode="transparent" type="application/x-shockwave-flash" src="<?php echo IMG_PATH;?>official/melody.swf"><a href="#" class="temp-link" target="_blank"></a></div>
<!--head-->
		<div class="top-link m-content">
			<a href="<?php echo siteurl($siteid);?>">首页</a> > <a href="<?php echo $CATEGORYS['13']['url'];?>">精英团队</a>
		</div>
		<div class="sales-team-tit">
			<div class="m-content">
				<img src="<?php echo IMG_PATH;?>keweisoft/sales-team-tit.png" />
				<div style="font-size:20px; margin-top:95px;margin-left:180px;">他们具备科学的咨询流程</div>
				<div style="font-size:20px; margin-top:35px;margin-left:100px;">他们拥有丰富的行业咨询规划经验</div>
				<div style="font-size:20px; margin-top:35px;margin-left:120px;">他们为您提供知识和智慧性的服务</div>
			</div>
		</div>
		<div class="sales-team-con">
			<div class="m-content">
				<div class="sales-team-con-items">
					<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=eb1a883b7c242e890ea76e0c9e05a2ce&action=lists&catid=38&num=12&order=listorder+ASC&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'38','order'=>'listorder ASC','moreinfo'=>'1','limit'=>'12',));}?>
					<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
					<a href="<?php echo $r['url'];?>"><div class="sales-team-con-item<?php echo $n;?>" id="s<?php echo $n;?>" onmouseover="show(this.id)" onmouseout="hide(this.id)"><div class="team-item-h" id="sh<?php echo $n;?>"><span class="team-item-name"><?php echo $r['title'];?></span><span class="team-item-job"><?php echo $r['job'];?></span></div></div></a>
					<?php $n++;}unset($n); ?>
					<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
				</div>
				<div class="sales-team-con-tel">010-51651266</div>
			</div>

		</div>
		<div class="implement-team-tit">
			<div class="m-content">
				<img src="<?php echo IMG_PATH;?>keweisoft/implement-team-tit.png" alt="" title="" style="margin-left:784px;" />
				<div style="font-size:20px; margin-top:12px;margin-left:640px;">他们有着一切为客户服务</div>
				<div style="font-size:20px; margin-top:30px;margin-left:665px;">他们拥有丰富的行业实施经验</div>
				<div style="font-size:20px; margin-top:27px;margin-left:670px;">他们为企业项目的成功上线保驾护航</div>
			</div>
		</div>
		<div class="implement-team-con">
			<div class="m-content">
				<div class="implement-team-con-items">
					<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=03a97aba819e5fb92341eb45e117d00b&action=lists&catid=39&order=listorder+ASC&num=20&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'39','order'=>'listorder ASC','moreinfo'=>'1','limit'=>'20',));}?>
					<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
					<a href="<?php echo $r['url'];?>"><div class="implement-team-con-item<?php echo $n;?>" id="m<?php echo $n;?>" onmouseover="show(this.id)" onmouseout="hide(this.id)"><div class="team-item-h" id="mh<?php echo $n;?>"><span class="team-item-name"><?php echo $r['title'];?></span><span class="team-item-job"><?php echo $r['job'];?></span></div></div></a>
					<?php $n++;}unset($n); ?>
					<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
				</div>
			</div>
		</div>
	<script type="text/javascript">
  	function show(id){
  		for(var i=1;i<=20;i++)
  		{
  			if(id == 's'+i)
  			{
  				document.getElementById('sh'+i).style.display = 'block';
  			}
  			if (id == 'm'+i) 
  			{
  				document.getElementById('mh'+i).style.display = 'block';
  			}
  		}
  	}
  	function hide(id){
  		for(var i=1;i<=20;i++)
  		{
  			if(id == 's'+i)
  			{
  				document.getElementById('sh'+i).style.display = 'none';
  			}
  			if (id == 'm'+i) 
  			{
  				document.getElementById('mh'+i).style.display = 'none';
  			}
  		}
  	}
  </script>				
<?php include template("content","footer"); ?>
