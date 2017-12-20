<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?>﻿<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0">
		<title>提交需求</title>
		<link type="text/css" href="<?php echo CSS_PATH;?>m/common.css" rel="stylesheet" />
		<link type="text/css" href="<?php echo CSS_PATH;?>m/need.css" rel="stylesheet" />
		<script type="text/javascript" src="<?php echo JS_PATH;?>m/jquery.js"></script>
		<script type="text/javascript" src="<?php echo JS_PATH;?>m/jquery-ui.min.js"></script>
		<script type="text/javascript" src="<?php echo JS_PATH;?>m/jquery.simplesidebar.js"></script>
		<script type="text/javascript" src="<?php echo JS_PATH;?>m/index.js"></script>
	</head>
	<body>
		<div id="page-body">
		<div class="content">	
		<div class="top">
			<a href="#" class="open-left-sidebar"><div class="in-top-left"></div></a>
			<a href="#" class="open-right-sidebar"><div class="in-top-right"></div></a>
			<div class="clearfix"></div>
			<div class="in-top-center">
				<a href="" ><img src="<?php echo IMG_PATH;?>m/logo.png" width="111" height="" alt="" title="" /></a>
			</div>
		</div>
		<div class="in-tel">
			<div class="in-tel-con">
				<a href="tel:010-51651266" class="itc-link">010-51651266</a>
			</div>
		</div>
		<div class="news-head">
			<a href="javascript:history.go(-1)" class="nh-his"></a>
			<a href="index.html" target="_blank" class="nh-home"></a>
		</div>
		<p class="news-head-tit">提交需求</p>
		<div class="need-con">
			<form action="?m=formguide&c=index&a=show&formid=<?php echo $formid;?>&siteid=<?php echo $this->siteid;?>" method="post" name="myform" id="myform">
			<div class="need-con-center">
				<p class="need-tit">姓名</p>
				<?php $n=1; if(is_array($forminfos_data)) foreach($forminfos_data AS $field => $info) { ?>	
				<?php if($n==1) { ?>
				<?php echo $info['form'];?>
				<span class="ncc-tip"><?php echo $info['tips'];?></span>
				<?php } ?>
				<?php $n++;}unset($n); ?>
				<p class="need-tit" style="margin-top:10px;">联系电话</p>
				<?php $n=1; if(is_array($forminfos_data)) foreach($forminfos_data AS $field => $info) { ?>	
				<?php if($n==2) { ?>
				<?php echo $info['form'];?>
				<span class="ncc-tip"><?php echo $info['tips'];?></span>
				<?php } ?>
				<?php $n++;}unset($n); ?>
				<p class="need-tit" style="margin-top:10px;">公司名称</p>
				<?php $n=1; if(is_array($forminfos_data)) foreach($forminfos_data AS $field => $info) { ?>	
				<?php if($n==3) { ?>
				<?php echo $info['form'];?>
				<?php } ?>
				<?php $n++;}unset($n); ?>
				<p class="need-tit" style="margin-top:10px;">邮箱</p>
				<?php $n=1; if(is_array($forminfos_data)) foreach($forminfos_data AS $field => $info) { ?>	
				<?php if($n==4) { ?>
				<?php echo $info['form'];?>	
				<?php } ?>
				<?php $n++;}unset($n); ?>
				<p class="need-tit" style="margin-top:10px;">需求</p>	
				<?php $n=1; if(is_array($forminfos_data)) foreach($forminfos_data AS $field => $info) { ?>	
				<?php if($n==5) { ?>
				<?php echo $info['form'];?>	
				<?php } ?>
				<?php $n++;}unset($n); ?>
				<input type="submit" name="dosubmit" id="dosubmit" value="提交" class="ncc-btn" />								
			</div>
			</form>
		</div>

		<div class="news-yanshi">
			<a href="" target="_blank"><div class="ny-btn">立即预约演示</div></a>
		</div>
	<?php include template("formguide","bottom_top"); ?>
	<?php include template("formguide","bottom"); ?>
	</body>
</html>