<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html>
<html>
	<head>
		<title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
		<meta charset="utf-8" />
		<meta name="keywords" content="<?php echo $SEO['keyword'];?>" />
		<meta name="description" content="<?php echo $SEO['description'];?>" />
		<meta name="author" content="keweisoft.com" />
		<link href="<?php echo CSS_PATH;?>crm/product.css" rel="stylesheet" type="text/css" />
		<script type="text/javascript" src="<?php echo JS_PATH;?>crm/jquery-1.7.1.min.js"></script>
		<script type="text/javascript" src="<?php echo JS_PATH;?>crm/scrolltopcontrol.js"></script>
		<script type="text/javascript" src="<?php echo JS_PATH;?>crm/product.js"></script>
	</head>	
	<body>
	<?php include template("content","header"); ?>
		<div class="pro-banner" id="delink">
			<div class="m-content banner-mid">
				<a href="http://tb.53kf.com/webCompany.php?arg=10140145&style=5" target="_blank"><div class="pbanner-btn"></div></a>
			</div> 
		</div>
		<?php include template("content","pro_subnav"); ?>
		<div class="service-b1">
			<div class="m-content">
				<div class="sb1-con" id="serv1">
					<p class="sb1-tit">教学服务请求</p>
					<p class="sb1-item1">全方位、立体式地服务请求管理模式，在最短的时间内提供教学服务支持，减少中间环节、提升学员体验。</p>
					<p class="sb1-item2">服务请求录入与服务队列的处理并行执行，快速指定学员负责老师，及时为学员分班、排课。</p>
				</div>
				<div class="sb1-pic"><img src="<?php echo IMG_PATH;?>crm/service-pic1.png" width="437" height="300" alt="" /></div>
			</div>
		</div>
		<div class="service-b2">
			<div class="m-content">
				<div class="sb2-con" id="serv2">
					<p class="sb1-tit">学员服务计划</p>
					<p class="sb1-item1">有效的帮助培训机构制定有针对性的学员服务计划，教学老师可以根据实际需要制定个性化辅导、教学回访、学员沟通等计划。</p>
					<p class="sb1-item2">结合服务工单及行动，服务计划得到了有效的保障执行，培训机构能更好的对学员服务工作进行管理和优化。</p>
				</div>
				<div class="sb2-pic"><img src="<?php echo IMG_PATH;?>crm/service-pic2.png" width="418" height="278" alt="" /></div>
			</div>
		</div>	
		<div class="service-b1">
			<div class="m-content">
				<div class="sb1-con">
					<p class="sb1-tit" id="serv3">服务队列</p>
					<p class="sb1-item1">当学员服务请求&计划生成后，会根据请求&计划的优先级进入不同的队列，由不同的教务人员进行处理，服务在队列中可以根据优先级和处理情况进行切换。</p>
					<p class="sb1-item2">可为CRM服务队列功能帮助培训机构有条不紊的安排各类学员服务工作，根据优先级不同合理配置人力、物力，保证服务质量。</p>
				</div>
				<div class="sb3-pic"><img src="<?php echo IMG_PATH;?>crm/service-pic3.png" width="506" height="275" alt="" /></div>
			</div>
		</div>	
		<div class="service-b2">
			<div class="m-content">
				<div class="sb2-con" style="margin-top:120px;">
					<p class="sb1-tit" id="serv4">服务工单</p>
					<p class="sb1-item1">服务工单详细记录服务学员姓名、相关负责人、费用审批、服务状态、持续时间、服务结果等信息，对服务全过程进行精细化管控。</p>
					<p class="sb1-item2">服务工单的流程管理思想，更好的实现服务过程中费用成本的控制、全面提升学员的满意度。</p>
				</div>
				<div class="sb4-pic"><img src="<?php echo IMG_PATH;?>crm/service-pic4.png" width="431" height="243" alt="" /></div>
			</div>
		</div>	
		<div class="service-b1">
			<div class="m-content">
				<div class="sb1-con" style="margin-top:138px;">
					<p class="sb1-tit">学员回访与反馈</p>
					<p class="sb1-item1">培训学校的教务人员主动回访学员对教学服务的评价，及时收集学员对教学的反馈，提高教师和机构的服务质量。</p>
					<p class="sb1-item2">电子邮件转学员反馈功能，机构内部可将指定邮箱收到的学员反馈邮件自动建立到学员反馈列表中，客服人员进行跟进。</p>
				</div>
				<div class="sb5-pic"><img src="<?php echo IMG_PATH;?>crm/service-pic5.png" width="452" height="304" alt="" /></div>
			</div>
		</div>		
		<div class="service-b2">
			<div class="m-content">
				<div class="sb2-con" style="margin-top:120px;">
					<p class="sb1-tit">服务满意度调查</p>
					<p class="sb1-item1">通过服务满意度调查，培训学校可以更好的了解自身在客户群体中占有的地位、加深了解学员对教学服务的需求。</p>
					<p class="sb1-item2">可以灵活制定调查问卷的主题、题目类型、得分原则等，之后通过调查结果分析，最终为培训学校的业务水准提高起到指导性作用。 </p>
				</div>
				<div class="sb6-pic"><img src="<?php echo IMG_PATH;?>crm/service-pic6.png" width="397" height="350" alt="" /></div>
			</div>
		</div>	
		<div class="service-b1">
			<div class="m-content">
				<div class="sb1-con" style="margin-top:136px;">
					<p class="sb1-tit">可为CRM接触中心</p>
					<p class="sb1-item1">培训学校的教务人员主动回访学员对教学服务的评价，及时收集学员对教学的反馈，提高教师和机构的服务质量。</p>
					<p class="sb1-item2">电子邮件转学员反馈功能，机构内部可将指定邮箱收到的学员反馈邮件自动建立到学员反馈列表中，客服人员进行跟进。</p>
				</div>
				<div class="sb7-pic"><img src="<?php echo IMG_PATH;?>crm/service-pic7.png" width="433" height="270" alt="" /></div>
			</div>
		</div>
		<div class="m-content" style="overflow:hidden;">
			<a href="http://tb.53kf.com/webCompany.php?arg=10140145&style=5" target="_blank"><div class="pro-btn">点击在线咨询</div></a><a href="http://tb.53kf.com/webCompany.php?arg=10140145&style=5" target="_blank"><div class="pro-btn" style="margin-left:153px;">点击预约演示</div></a>						
		</div>
		<?php include template("content","footer"); ?>	
	</body>	
</html>