<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html>
<html>
	<head>
		<title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>official/common.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>official/service.css" />
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
		<div class="service-banner">
			<div class="banner-mid">
				<a href="http://kf2.immivip.com/new/client.php?unique_id=&unique_name=&arg=admin&style=7" target="_blank"><div class="banner-mid-btn">点击在线演示</div></a>
			</div>
		</div>	
		<div class="m-content">
			<div class="db1-tit">
				<span class="db1-tit-item">选择可为个性化定制开发服务</span>
				<span class="db1-tit-item1">拥有企业专属的管理软件</span>
				<a href="" target="_blank"><div class="db1-tit-btn">
					在线咨询
				</div></a>
				<div class="db1-tit-tel"></div>
			</div>
			<div class="db1-con">
				<div class="db1-item1"></div>
				<div class="db1-item2">
					<div class="db1-ico1">市场上的软件功能千篇一律，无法满足企业更个性化的管理需求？</div>
					<div class="db1-ico2">想要的功能没有，多余的功能太多，软件的价值无法很好的体现？</div>
					<div class="db1-ico3">公司业务结构调整，旧的管理系统需要做相应改变，软件服务商又不提供开发服务？</div>
					<div class="db1-ico4">需要更精细化的业务流程管控？</div>
					<div class="db1-ico5">需要更全面的数据分析反馈？</div>
					<div class="db1-btns">
						<a href="" target="_blank"><div class="db1-btn1">资讯可为开发团队</div></a>
						<a href="" target="_blank"><div class="db1-btn2">在线预约产品演示</div></a>
					</div>
				</div>
			</div>
			<div class="db1-motto">可为是唯一提供原厂标准支持服务的软件厂商，可为拥有100余人的专业开发团队，负责用户的个性化定制开发，提供的服务包括<font color="#f36c12">应用软件开发服务、应用软件测试服务</font>和<font color="#f36c12">产品维护服务</font>。企业通过获取以上服务，满足自己的个性化定制需求。</div>
		</div>
		<a href=""><div class="deve-ads" style="margin-top:20px;"></div></a>
		<div class="m-content">
			<div class="db2-tit">
				<a class="db2-tit-left">软件开发服务</a>
				<a href=""><div class="db2-tit-btn">在线咨询</div></a>
				<div class="db2-tit-tel"></div>
			</div>
			<div class="db2-con">
				<div class="db2-item1"></div>
				<div class="db2-item2">可为研发团队采用先进的技术架构，协助客户加速新产品开发或升级产品的推出，并保证质量，有效管理开发成本，从而助力客户实现业务目标。我们的工程师与客户方通过双方工作流程的有效整合来确保每一个项目都能实现最佳的交付成果。专业的质量保证工程师对项目提供精心的管理，通过常规报告和日常沟通，客户可以全面了解项目进展和项目状态。 </div>
			</div>
		</div>
		<div class="db2-sub">
			<div class="m-content db2-sub1">
				<div class="deve-btit1">开发团队优势</div>
				<p class="db2-tits">我们拥有专业素质过硬的开发团队，为客户的软件开发负责到底</p>
				<div class="db2-co">
					<div class="db2-it1">
						<div class="db2-it1-pic"></div>
						<div class="db2-it1-con">
							<span style="color:#333;font-size:16px;">全面的技术能力：</span>包括应用软件的设计、开发、测试、实施、管理和维护
						</div>
					</div>
					<div class="db2-it1" style="margin-left:30px;">
						<div class="db2-it2-pic"></div>
						<div class="db2-it1-con">
							<span style="color:#333;font-size:16px;">严格开发流程：</span>需求分析、设计、编码、测试、部署以及实施后的支持
						</div>
					</div>
					<div class="db2-it1" style="margin-left:30px;">
						<div class="db2-it3-pic"></div>
						<div class="db2-it1-con">
							<span style="color:#333;font-size:16px;">开发解决方案：</span>帮助客户简化业务流程，开发专门的解决方案
						</div>
					</div>					
				</div>
				<div class="db2-co" style="margin-top:50px;">
					<div class="db2-it1">
						<div class="db2-it4-pic"></div>
						<div class="db2-it1-con">
							<span style="color:#333;font-size:16px;">架构灵活：</span>通过面向服务的架构(SOA)在目标平台上实现旧有系统的移植和现代化
						</div>
					</div>
					<div class="db2-it1" style="margin-left:30px;">
						<div class="db2-it5-pic"></div>
						<div class="db2-it1-con">
							<span style="color:#333;font-size:16px;">经验丰富：</span>多年对大型机以及开源系统的开发和维护经验
						</div>
					</div>
					<div class="db2-it1" style="margin-left:30px;">
						<div class="db2-it6-pic"></div>
						<div class="db2-it1-con">
							<span style="color:#333;font-size:16px;">现代化软件平台：</span>实现基
于Web的现代化应用软件
						</div>
					</div>					
				</div>				
			</div>
			<div class="m-content">	
			<div class="db2-sub2">
				<div class="deve-btit2">定制开发流程</div>
			</div>
			</div>
		</div>

		<div class="m-content">
			<div class="db2-tit">
				<a class="db2-tit-left">软件测试服务</a>
				<a href=""><div class="db2-tit-btn">在线咨询</div></a>
				<div class="db2-tit-tel"></div>
			</div>
			<div class="db4-con">
				<div class="db4-item1"></div>
				<div class="db4-item2">
					<p class="db4-item2-con">可为一直不遗余力的专注于质量优化服务，擅长专业的测试咨询和管理，高效的测试执行，权威的自动化测试，能够为客户提供灵活的、定制化的测试服务，确保客户产品高质量的交付。可为以严格的质量与安全标准为基础，为客户提供全方位的测试服务</p>
					<div style="width:100%;height:42px;margin-top:25px;">
					<div class="db4-item2-btn">咨询可为开发团队</div>
					<div class="db4-item2-btn" style="margin-left:20px;">在线预约产品演示</div>
					</div>
				</div>
			</div>
			<div class="db4-sub">
				<div class="db4-sub-con">
					可为开发团队测试组在规定的条件下对软件源程序进行操作，以发现程序错误，衡量软件质量，并对其是否能满足设计要求进行评估的过程
				</div>
				<div class="db4-sub-item1">测试咨询</div>
				<div class="db4-sub-item2">测试生命<br />周期管理</div>
				<div class="db4-sub-item3">测试战略和<br />架构设计</div>
				<div class="db4-sub-item4">功能测试</div>
				<div class="db4-sub-item5">非功能测试</div>
				<div class="db4-sub-item6">可能性测试</div>
				<div class="db4-sub-item7">性能测试</div>
				<div class="db4-sub-item8">负载/压力测试</div>
				<div class="db4-sub-item9">兼容性测试</div>
				<div class="db4-sub-item10">自动化测试</div>
			</div>
			<div class="db2-tit">
				<a class="db2-tit-left">软件维护服务</a>
				<a href=""><div class="db2-tit-btn">在线咨询</div></a>
				<div class="db2-tit-tel"></div>
			</div>
			<div class="db4-con">
				<div class="db5-item1"></div>
				<div class="db4-item2">
					<p class="db4-item2-con">可为团队对企业软件的整个生命周期负责。根据需求的变化或硬件环境的变化对软件程序进行整体或部分的修改，使产品完全适用于企业，依靠源程序，而不改变源程序。可为提供多种服务，为您量身定做解决方案，免除您的后顾之忧。</p>
					<div style="width:100%;height:42px;margin-top:25px;">
					<div class="db5-item2-btn">咨询实施顾问</div>
					<div class="db5-item2-btn" style="margin-left:20px;">提交需求表单</div>
					</div>
				</div>
			</div>
			<div class="db5-sub">
				<div class="db5-sub-items">
					<div class="db5-sub-item1" onmouseover="document.getElementById('mtd1').style.color='#ff9b38'" onmouseout="document.getElementById('mtd1').style.color='#488af6'"></div>
					<div class="db5-sub-con1">
						<p style="width:100%;font-size:18px;color:#75a3d6;text-align:center;" id="mtd1">校正性维护</p>
						<p style="font-size:14px;line-height:24px;padding:0px 15px;margin-top:5px;">改正在系统开发阶段已发生而系统测试阶段尚未发现的错误</p>
					</div>
				</div>
				<div class="db5-sub-items">
					<div class="db5-sub-item1" onmouseover="document.getElementById('mtd2').style.color='#ff9b38'" onmouseout="document.getElementById('mtd2').style.color='#488af6'"></div>
					<div class="db5-sub-con1">
						<p style="width:100%;font-size:18px;color:#75a3d6;text-align:center;" id="mtd2">适应性维护</p>
						<p style="font-size:14px;line-height:24px;padding:0px 15px;margin-top:5px;">使用软件适应信息技术变化和管理需求变化而进行修改</p>
					</div>
				</div>
				<div class="db5-sub-items">
					<div class="db5-sub-item1" onmouseover="document.getElementById('mtd3').style.color='#ff9b38'" onmouseout="document.getElementById('mtd3').style.color='#488af6'"></div>
					<div class="db5-sub-con1">
						<p style="width:100%;font-size:18px;color:#75a3d6;text-align:center;" id="mtd3">完善性维护</p>
						<p style="font-size:14px;line-height:24px;padding:0px 15px;margin-top:5px;">对已有的软件系统增加一些在系统分析和设计阶段中没有规定的功能与性能特征</p>
					</div>
				</div>
				<div class="db5-sub-items">
					<div class="db5-sub-item1" onmouseover="document.getElementById('mtd4').style.color='#ff9b38'" onmouseout="document.getElementById('mtd4').style.color='#488af6'"></div>
					<div class="db5-sub-con1">
						<p style="width:100%;font-size:18px;color:#75a3d6;text-align:center;" id="mtd4">预防性护</p>
						<p style="font-size:14px;line-height:24px;padding:0px 15px;margin-top:5px;">为了适应未来的软硬件环境的变化，应主动增加预防性的新的功能，以使应用系统适应各类变化而不被淘汰</p>
					</div>
				</div>
			</div>
		</div>
		<a href="" target="_blank"><div class="deve-ads1"></div></a>
			<p class="cb3-tit" style="margin-top:35px;">他们携手可为一起，获得了巨大的成功...</p>
			<div style="clear:both"></div>
			<div class="consult-case">
				<div class="m-content">
				<?php $i=1;?>
				<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=095b9e2d9baf160ab33ffc08775f1410&sql=select+c.url%2Cc.title%2Cd.logo%2Cc.thumb%2Cc.description%2Cc.updatetime%2Cl.name%2Cd.scale+from+kewei_case_e+c%2Ckewei_case_e_data+d%2Ckewei_linkage+l+where+c.id%3Dd.id+and+d.industry%3Dl.linkageid+order+by+c.listorder+desc&num=5&return=data&cache=3600\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$tag_cache_name = md5(implode('&',array('sql'=>'select c.url,c.title,d.logo,c.thumb,c.description,c.updatetime,l.name,d.scale from kewei_case_e c,kewei_case_e_data d,kewei_linkage l where c.id=d.id and d.industry=l.linkageid order by c.listorder desc',)).'095b9e2d9baf160ab33ffc08775f1410');if(!$data = tpl_cache($tag_cache_name,3600)){pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select c.url,c.title,d.logo,c.thumb,c.description,c.updatetime,l.name,d.scale from kewei_case_e c,kewei_case_e_data d,kewei_linkage l where c.id=d.id and d.industry=l.linkageid order by c.listorder desc LIMIT 5");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
				<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
				<div class="case1" <?php if($i!=1 && $i!=5) { ?>style="margin-left:10px;"<?php } ?>>
					<p class="case1-tit"><?php echo str_cut($r[title],34,'...');?></p>
					<p class="case1-thumb"><img src="<?php echo $r['logo'];?>" style="margin-left:35px;" alt="<?php echo $r['title'];?>" title="<?php echo $r['title'];?>" width="108" height="121" /></p>
					<p class="case1-industry"><strong style="color:#333;">所属行业：</strong><?php echo $r['name'];?></p>
					<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=2a91b722811c463244a247af8d9b6cc5&sql=select+name+from+kewei_linkage+where+kewei_linkage.linkageid%3D%24r%5Bscale%5D&num=1&return=da&cache=3600\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$tag_cache_name = md5(implode('&',array('sql'=>'select name from kewei_linkage where kewei_linkage.linkageid=$r[scale]',)).'2a91b722811c463244a247af8d9b6cc5');if(!$da = tpl_cache($tag_cache_name,3600)){pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select name from kewei_linkage where kewei_linkage.linkageid=$r[scale] LIMIT 1");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$da = $a;unset($a);if(!empty($da)){setcache($tag_cache_name, $da, 'tpl_data');}}?>
					<?php $n=1;if(is_array($da)) foreach($da AS $v) { ?>
					<p class="case1-industry" style="margin-top:5px;"><strong style="color:#333;">公司规模：</strong><?php echo $v['name'];?></p>
					<?php $n++;}unset($n); ?>
					<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
					<p class="case1-industry" style="margin-top:5px;"><strong style="color:#333;">上线时间：</strong><?php echo date('Y-m-d',$r[updatetime]);?></p>
					<p class="case1-con"><?php echo str_cut($r[description],104,'...');?></p>
					<p style="text-align:right;padding-right:10px;margin-top:15px;"><a href="<?php echo $r['url'];?>" target="_blank" style="color:#13558f;font-size:14px;">详情>></a></p>
				</div>
				<?php $i++;?>
				<?php $n++;}unset($n); ?>
				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
			</div>
		</div>
		<div style="clear:both;height:20px;"></div>
<?php include template("content","footer"); ?>	