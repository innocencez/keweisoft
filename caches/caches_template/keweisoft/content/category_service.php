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
			<div class="serv-tit">可为为您提供的是这样的服务</div>
			<div class="block1">
				<div class="b1-normal1">
					<div style="width:231px; height:201px;">
					<div class="b1-ico"></div>
					<span class="b1-con">可为专业咨询顾问团队为企业管理出谋划策</span>
					</div>
				</div>
				<div class="b1-normal2">
					<div style="width:231px; height:201px;">
					<div class="b2-ico"></div>
					<span class="b1-con">企业管理解决方案提出与制定</span>
					</div>
				</div>
				<div class="b1-normal2">
					<div style="width:231px; height:201px;">
					<div class="b3-ico"></div>
					<span class="b1-con">软件项目实施</span>
					</div>
				</div>
				<div class="b1-normal3">
					<div style="width:231px; height:201px;">
					<div class="b4-ico"></div>
					<span class="b1-con">软件成功上线</span>
					</div>
				</div>
				<div class="b1-normal4">
					<div class="b5-ico"></div>
					<span class="b1-con" style="margin-left:65px;">售后服务保障</span>	
				</div>
				<div class="b1-normal5">
					<div class="b6-ico"></div>
					<a class="b1-con" style="margin-left:45px;" href="">点击详细咨询</a>	
				</div>
				<div class="b1-normal6">
					<p style="font-size:14px;color:#333;padding:20px;">可为秉承“<span style="font-size:24px;color:#f36c12;">以客户为中心，为客户创造价值</span>”的服务宗旨，并建立优质服务部，保证服务的质量，为客户带来价值。</p>	
				</div>
			</div>
			<div class="serv-tit">客户通过可为提供的服务能获取哪些价值？</div>
			<div class="block2">
				<div class="b2-item1">
					<div class="b2-item1-con"><span class="b2-item1-ico"></span></div>
					<div class="b2-item1-motto">丰富业务实践经验</div>
				</div>
				<div class="b2-item1" style="margin-left:50px;">
					<div class="b2-item1-con"><span class="b2-item2-ico"></span></div>
					<div class="b2-item1-motto">提升应用能力</div>
				</div>
				<div class="b2-item1" style="margin-left:50px; width:180px;">
					<div class="b2-item1-con" style="width:180px;"><span class="b2-item3-ico"></span></div>
					<div class="b2-item1-motto">提高信息化管理水平</div>
				</div>
				<div class="b2-item1" style="margin-left:50px;">
					<div class="b2-item1-con"><span class="b2-item4-ico"></span></div>
					<div class="b2-item1-motto">简化业务流程</div>
				</div>
				<div class="b2-item1" style="margin-left:50px;">
					<div class="b2-item1-con"><span class="b2-item5-ico"></span></div>
					<div class="b2-item1-motto">降低管理成本</div>
				</div>
			</div>
		</div>
		<div class="m-content">
			<a href=""><div class="servin-ads1"></div></a>
		</div>
		<div class="m-content block3">
			<div class="b3-item1">
				<img src="<?php echo IMG_PATH;?>keweisoft/serv-pic1.png" alt="" title="" style="float:left; margin-left:37px;" />
				<div class="b3-item1-left" style="margin-left:78px;">
					<p class="b3-item1-tit">我们提供顾问式的咨询服务</p>
					<p class="b3-item1-con">可为拥有最优质的咨询顾问服务团队，他们拥有多年的行业纵深经验，对企业的业务流程和盈利模式都有较深的了解，通过可为专业的咨询顾问，我们协助企业找到管理现状中存在的问题、优化企业现有流程中的各个环节、针对企业当前的管理问题给出全方面的解决方案，包括行业现状的分析、企业流程的优化、管理思想的应用以及最终的软件落地执行。</p>
					<a href="" class="b3-item1-link">查看更多>></a>
				</div>
			</div>
			<div class="b3-item1" style="margin-top:59px;">
				<img src="<?php echo IMG_PATH;?>keweisoft/serv-pic2.jpg" alt="" title="" style="float:left; margin-left:37px;" />
				<div class="b3-item2-left">
					<p class="b3-item1-tit">我们专注最优质的实施服务</p>
					<p class="b3-item1-con">可为软件凭借多年的项目成功实施经验，为企业提供标准的管理软件实施服务方案，引入专业的项目管理模式，可为一直坚持五分软件，五分实施，通过实施把企业的流程与软件流程相结合，搭建信息化平台；通过系统的培训，培养用户自己的信息管理者，从而使软件良好运作。</p>
					<a href="" class="b3-item1-link" style="margin-top:48px;">查看更多>></a>
				</div>	
			</div>
			<div class="b3-item1" style="margin-top:59px;">
				<img src="<?php echo IMG_PATH;?>keweisoft/serv-pic3.jpg" alt="" title="" style="float:left; margin-left:37px;" />
				<div class="b3-item3-left">
					<p class="b3-item1-tit">我们坚持让客户满意的售后服务</p>
					<p class="b3-item1-con">可为售后服务面向所有可为客户（包括可为伙伴客户）提供可为产品版本更新、版本升级、 知识库查询以及以热线、远程、在线等非现场方式提供的软件应用指导、问题诊断与解决等一站式服务。共同打造服务生态链，满足客户的各类需求，帮助客户实现系统持续优化的运行。为此可为设立优质服务部，其目的就是监督和提高员工的服务质量，为软件成功上线保驾护航。</p>
					<a href="" class="b3-item1-link" style="margin-top:30px;">查看更多>></a>
				</div>	
			</div>
			<div class="b3-item1" style="margin-top:59px;">
				<img src="<?php echo IMG_PATH;?>keweisoft/serv-pic4.jpg" alt="" title="" style="float:left; margin-left:37px;" />
				<div class="b3-item4-left">
					<p class="b3-item1-tit">个性化定制开发服务</p>
					<p class="b3-item1-con">市场上软件的通用模块无法满足您企业的要求？需要只针对您企业独有的管理系统？别担心，可为金牌研发团队蓄势待发，根据企业自身需求设计开发方案，设计软件系统，选择相应的开发平台及数据库的软件开发服务。实现企业及行业的专属应用的软件管理系统，致力于帮助企业打造真正属于自己的信息化管理平台。</p>
					<a href="" class="b3-item1-link" style="margin-top:50px;">查看更多>></a>
				</div>	
			</div>
		</div>
		<div class="m-content">
			<a href=""><div class="servin-ads2"></div></a>
		</div>
		<div class="m-content block4">
			<div class="serv-tit">可为服务流程</div>
			<div class="b4-con">
				<span class="b4-item1">可为用户</span>
				<span class="b4-item2">可为服务中心</span>
				<span class="b4-item3">400电话服务</span>
				<span class="b4-item4">网上在线服务</span>
				<span class="b4-item5">专家会诊团队</span>
				<span class="b4-item6">一线服务工程师</span>
				<span class="b4-item7">二线专家</span>
				<span class="b4-item8">数据处理</span>
				<span class="b4-item9">现场服务</span>
				<span class="b4-item10">提单处理</span>
				<span class="b4-item11">数据处理专家</span>
				<span class="b4-item12">服务交付顾问</span>
				<span class="b4-item13">服务反馈</span>
				<span class="b4-item14">服务监督</span>
				
			</div>
			<div class="serv-tit">可为服务内容</div>
			<p class="block5-tit">可为知识库查询+热线、远程、在线等软件应用指导+问题诊断与解决等一站式服务=客户软件成功运行。</p>
			<img src="<?php echo IMG_PATH;?>keweisoft/ab-con-subline.jpg" width="1040" style="margin-top:20px;"/>
			<div class="fclear"></div>
			<div class="b5-con">
				<div class="b5-con-ico1"></div>
				<div class="b5-con-tit1">持续改进</div>
				<p class="b5-con-fn">
					<strong>版本升级：</strong>通过版本升级客户可获得同一产品在服务生命周期内的可使用版本（仅提供软件许可，不包含升级服务）
				</p>
				<p class="b5-con-fn" style="margin-top:15px;">
					<strong>版本更新：</strong>通过版本跟新可获得与产品相关的软件修正补丁、产品功能包等（仅提供软件许可或补丁不包含跟新服务）
				</p>
				<p class="b5-con-fn">
					<strong>需求反馈：</strong>客户在软件使用中可通过在线方式即时向可为反馈软件应用问题及功能需求、建议等
				</p>
			</div>
			<div class="b5-con" style="margin-left:20px;">
				<div class="b5-con-ico2"></div>
				<div class="b5-con-tit1">问题分析</div>
				<p class="b5-con-fn">
					<strong>故障诊断：</strong>
					为客户诊断可为软件并提供处理建议，保障客户软件正常使用
				</p>
				<p class="b5-con-fn" style="margin-top:35px;">
					<strong>应用指导：</strong>指导客户进行软件设置、打印设置、功能操作（不包括业务流程实现），提升客户软件应用能力
				</p>
				<p class="b5-con-fn">
					<strong>服务预约：</strong>
					客户可通过在线方式进行服务预约，可为将按照客户选定的时间给予服务
				</p>
			</div>
			<div class="b5-con" style="margin-left:20px;">
				<div class="b5-con-ico3"></div>
				<div class="b5-con-tit1">知识传递</div>
				<p class="b5-con-fn">
					<strong>知识库：</strong>
					客户可通过查询检索方式在可为知识库中查询已知问题的解决方案、行业最佳实践、业务流程、产品应用等多方面知识
				</p>
				<p class="b5-con-fn" style="margin-top:15px;">
					<strong>在线问答：</strong>客户通过在线方式进行知识问答与知识共享
				</p>
				<p class="b5-con-fn" style="margin-top:60px;">
					<strong>在线课程：</strong>
					客户可通过在线方式学习可为产品视频课程，包括产品功能介绍、操作方式、应用技巧等
				</p>
			</div>
			<div class="b5-con" style="margin-left:20px;">
				<div class="b5-con-ico4"></div>
				<div class="b5-con-tit1">质量管理</div>
				<p class="b5-con-fn">
					<strong>系统监控：</strong>
					通过专业的检测工具主动预警目前可能存在的各种风险和隐患避免由于隐患产生严重后果，保障客户IT系统稳定高效运行
				</p>
				<p class="b5-con-fn" style="margin-top:15px;">
					<strong>应用评估：</strong>通过可为应用评估工具对软件应用状况进行评估，发现应用不顺畅的症结点，并生成评估报告
				</p>
				<p class="b5-con-fn" style="margin-top:20px;">
					<strong>服务工具：</strong>
					客户可使用应用工具，如系统检测、ERP应用评估工具
				</p>
			</div>
			<div class="fclear" style="margin-left:20px;"></div>
			<div class="serv-tit">服务回访</div>
			<p class="block5-tit">可为设立优质服务部，监督和提高员工的服务质量，为企业软件的成功上线保驾护航</p>
			<img src="<?php echo IMG_PATH;?>keweisoft/ab-con-subline.jpg" width="1040" style="margin-top:20px;"/>
			<div class="block6">
				<span class="b6-item1">专设优质服务部门</span>
				<span class="b6-item2">每月回访客户</span>
				<span class="b6-item3">客户特殊需要时</span>
				<span class="b6-item4">方式：上门、电话、邮件（据情况而定）</span>
				<span class="b6-item5">想要获得的信息：</span>
				<span class="b6-item6">软件是否正常运行</span>
				<span class="b6-item7">员工的态度是否能让客户满意</span>
				<span class="b6-item8">员工的服务结果是否能让客户满意</span>
				<span class="b6-item9">客户不满意可直接联系优质服务部进行处理</span>
				<span class="b6-item10">客户联系公司总机，问题反馈到优质服务部进行处理</span>
			</div>
			<div class="serv-tit">服务监督</div>
			<div class="block7">
				<div class="b7-con">
					可为客户服务中心通过服务质量抽检、技术质量抽检、客户满意度分析、监督回访等严格的质量监控体系对热线服务和现场服务进行监督，提升客户满意度；并通过在线知识库、软件知识论坛等内部知识管理体系与知识共享平台提高可为内部的服务能力，保证可为的服务质量。
				</div>
			</div>
		</div>
<?php include template("content","footer"); ?>		