<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html>
<html>
	<head>
		<title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
		<meta charset="utf-8" />
		<meta name="author" content="keweisoft.com" />
		<meta name="keywords" content="<?php echo $SEO['keyword'];?>" />
		<meta name="description" content="<?php echo $SEO['desription'];?>" />
		<link type="text/css" rel="stylesheet" href="<?php echo CSS_PATH;?>official/common.css">
		<link type="text/css" rel="stylesheet" href="<?php echo CSS_PATH;?>official/app.css">
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
		<div class="app-banner">
			<div class="app-banner-center">
				<a href="http://kf2.immivip.com/new/client.php?unique_id=&unique_name=&arg=admin&style=7" target="_blank"><div class="app-banner-btn">点击在线咨询</div></a>
			</div>
		</div>
		<div class="app-b1 m-content">
			<div class="app-b1-left">
				<p class="abl-tit">使用可为CRM移动端，随时随地办公</p>
				<p class="abl-con">销售人员工作的时间和地点大都不确定，他们需要随时查阅客户，项目信息，及时获得团队支援，更新数据和上报信息。简单易用的手机应用，让销售随时同团队保持联系，并成为其移动办公和打单的利器。可为CRM移动应用正式基于这种需求开发而出的。</p>
			</div>
			<div class="app-b1-pic1"></div>
		</div>
		<a href="http://kf2.immivip.com/new/client.php?unique_id=&unique_name=&arg=admin&style=7" target="_blank"><div class="app-ads1"></div></a>
		<div class="app-b2 m-content">
			<div class="app-b2-item">
				<div class="app-b2-pic1"></div>
				<div class="app-b2-conR">
					<p class="app-b2-tit" style="margin-top:105px;">线索、商机、客户、联系人管理</p>
					<p class="app-b2-con">相关人员可以随时随地的对线索类型、商机内容、客户信息记录入系统中，而不需要登录pc端系统，即可完成相同的工作。</p>
					<p class="app-b2-link"><a href="http://kf2.immivip.com/new/client.php?unique_id=&unique_name=&arg=admin&style=7" target="_blank">咨询详情>></a></p>
				</div>
			</div>
			<div class="app-b2-item">
				<div class="app-b2-pic2"></div>
				<div class="app-b2-conL">
					<p class="app-b2-tit" style="margin-top:144px;">日程任务管理</p>
					<p class="app-b2-con">随时随地创建、接收、查看任务，个性化时间轴展示，内置任务代办/过期提醒。完美日程安排+智能提醒，让办公人员有条不紊，保证不遗忘。</p>
					<p class="app-b2-link"><a href="http://kf2.immivip.com/new/client.php?unique_id=&unique_name=&arg=admin&style=7" target="_blank">咨询详情>></a></p>
				</div>
			</div>	
			<div class="app-b2-item">
				<div class="app-b2-pic3"></div>
				<div class="app-b2-conR">
					<p class="app-b2-tit" style="margin-top:130px;">客户查找定位</p>
					<p class="app-b2-con">可为CRM可准确及时的定位和获取客户的所在位置，并给出前往路线。方便轻松，为销售人员外出办公提供便利。</p>
					<p class="app-b2-link"><a href="http://kf2.immivip.com/new/client.php?unique_id=&unique_name=&arg=admin&style=7" target="_blank">咨询详情>></a></p>
				</div>
			</div>	
			<div class="app-b2-item">
				<div class="app-b2-pic4"></div>
				<div class="app-b2-conL">
					<p class="app-b2-tit" style="margin-top:145px;">短信邮件汇报</p>
					<p class="app-b2-con">用户可在可为CRM系统中直接以短信、邮件的形式进行日报、周报等的工作。不局限于时间、地点，并可关联相关事项和拜访任务等。</p>
					<p class="app-b2-link"><a href="http://kf2.immivip.com/new/client.php?unique_id=&unique_name=&arg=admin&style=7" target="_blank">咨询详情>></a></p>
				</div>
			</div>	
			<div class="app-b2-item">
				<div class="app-b2-pic5"></div>
				<div class="app-b2-conR">
					<p class="app-b2-tit" style="margin-top:120px;">移动客户笔记</p>
					<p class="app-b2-con">销售人员可通过可为CRM移动应用全方位记录客户跟进记录。语音、文字、图片、关联客户、碎片化信息随手记录不再丢失。服务过程清晰明确记录，让销售业绩飞起来。</p>
					<p class="app-b2-link"><a href="http://kf2.immivip.com/new/client.php?unique_id=&unique_name=&arg=admin&style=7" target="_blank">咨询详情>></a></p>
				</div>
			</div>
			<div class="app-b2-item">
				<div class="app-b2-pic6"></div>
				<div class="app-b2-conL">
					<p class="app-b2-tit" style="margin-top:142px;">销售漏斗分析</p>
					<p class="app-b2-con">可为CRM移动应用全面集成数据决策分析功能，销售人员可及时查看阶段性的销售目标完成情况、丢单量、拜访次数分析、同比/环比考核分析等。以数据带动业绩，真实可靠。</p>
					<p class="app-b2-link"><a href="http://kf2.immivip.com/new/client.php?unique_id=&unique_name=&arg=admin&style=7" target="_blank">咨询详情>></a></p>
				</div>
			</div>												
		</div>
<?php include template("content","footer"); ?>