<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html>
<html>
	<head>
		<title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
		<meta charset="utf-8" />
		<meta name="author" content="keweisoft.com" />
		<meta name="keywords" content="<?php echo $SEO['keyword'];?>" />
		<meta name="description" content="<?php echo $SEO['description'];?>" />
		<link type="text/css" rel="stylesheet" href="<?php echo CSS_PATH;?>official/common.css">
		<link type="text/css" rel="stylesheet" href="<?php echo CSS_PATH;?>official/product.css">
		<link type="text/css" rel="stylesheet" href="<?php echo CSS_PATH;?>official/hover.css">
		<link type="text/css" rel="stylesheet" href="<?php echo CSS_PATH;?>official/bootstrap.min.css">
		<script type="text/javascript" src="<?php echo JS_PATH;?>official/slider.js"></script>
		<script type="text/javascript" src="<?php echo JS_PATH;?>official/jquery-1.7.1.min.js"></script>
		<script type="text/javascript" src="<?php echo JS_PATH;?>official/scroll.js"></script>
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
		<div class="crm-banner">
			<div class="crm-banner1"></div>
			<div class="crm-banner2">
				<div class="cb-center">
					<a href="http://kf2.immivip.com/new/client.php?unique_id=&unique_name=&arg=admin&style=7" target="_blank"><div class="crm-banner-btn">点击在线咨询</div></a>
				</div>
			</div>
		</div>
		<div class="pro-sub-nav m-content">
			<div class="psn-item">
				<a href="#cb1" class="psn-link1">概述</a>
			</div>
			<div class="psn-item">
				<a href="#cb2" class="psn-link2">核心功能</a>
			</div>
			<div class="psn-item">
				<a href="#cb3" class="psn-link3">行业方案</a>
			</div>
			<div class="psn-item">
				<a href="#cb4" class="psn-link4">应用价值</a>
			</div>
			<div class="psn-item">
				<a href="#cb5" class="psn-link5">客户案例</a>
			</div>
		</div>
		<div class="h-nav-outer" style="display:none;">
			<div class="h-nav">
				<div class="psn-item hn">
					<a class="psn-link1">概述</a>
				</div>
				<div class="psn-item hn">
					<a class="psn-link2">核心功能</a>
				</div>
				<div class="psn-item hn">
					<a class="psn-link3">行业方案</a>
				</div>
				<div class="psn-item hn">
					<a class="psn-link4">应用价值</a>
				</div>
				<div class="psn-item hn">
					<a class="psn-link5">客户案例</a>
				</div>
			</div>	
		</div>		
		<div class="crm-b1 m-content" id="cb1">
			<div class="crm-b1-left">
				<p class="cbl-con">可为CRM是可为积累数十年教育行业服务、管理经验而开发出的一套客户关系管理系统。以学员的生命周期为核心，围绕市场管理、销售管理、服务管理，对培训机构的业务进行全面的管理。可为CRM强大的扩展性和开放性，轻松实现移动办公和分布式管理，凭借灵活的技术架构，全平台化的管理理念，帮企业打造行业的风向标。十年专注教育行业，倾心打造教育行业客户关系管理解决方案。相信可为CRM与中国教育行业一起共铸辉煌。</p>
			</div>
			<div class="crm-b1-right"></div>
			<div style="clear:both"></div>
			<div class="crm-b1-bottom"></div>
			<div class="crm-b1-sub">
				<div class="cbs-left"></div>
				<div class="cbs-right">
					<div class="cbs-right-item1">
						<p class="cri-tit1">全面提升业务数量</p>
						<p class="cri-con">专门针对教育培训行业而设计的CRM，独有的市场营销效果分析功能，帮助企业找到最有效的推广手段，全面提升业务数量。</p>
					</div>
					<div class="cbs-right-item2">
						<p class="cri-tit2">促进销售成单率</p>
						<p class="cri-con">销售过程的全方位管控，从销售计划制定到目标跟进记录、防撞单功能、销售合同管理，层层把控，提高销售成单率。</p>
					</div>	
					<div class="cbs-right-item3">
						<p class="cri-tit3">提供优质客户服务</p>
						<p class="cri-con">流程化服务管理思想，全面提升教师、班级、学员、课程等的管理效率，切实提升教学服务质量，提高学员满意度。</p>
					</div>	
					<div class="cbs-right-item4">
						<p class="cri-tit4">数据分析支撑</p>
						<p class="cri-con">可为CRM强大的数据分析报表功能，提供市场、销售、教学、财务等数据报表&图表，多维度分析视角，为决策层提供强有力的数据支撑。</p>
					</div>															
				</div>
			</div>
		</div>
		<a href="http://kf2.immivip.com/new/client.php?unique_id=&unique_name=&arg=admin&style=7" target="_blank"><div class="crm-ads1"></div></a>
		<div class="crm-b2 m-content" id="cb2">
			<div class="crm-b2-tit"></div>
			<div class="crm-b2-item">
				<div class="cbi-con">
					<p class="cbi-con-tit"><a href="http://crm.keweisoft.com/market/" target="_blank">市场管理</a></p>
					<p class="cbi-con-word">可为CRM市场管理模块围绕市场招生展开，全面管控包括线索来源、营销活动、线下地推活动等相关内容，并可对营销效果做出全面的评测分析，让培训机构找到最合适的营销方式和推广渠道。</p>
					<p class="cbi-con-link"><a href="http://crm.keweisoft.com/market/" target="_blank">咨询详情>></a></p>
				</div>
				<div class="cbi-pic1"></div>
			</div>
			<div class="crm-b2-item">
				<div class="cbi-con" style="float:right">
					<p class="cbi-con-tit"><a href="http://crm.keweisoft.com/client/" target="_blank">客户池管理</a></p>
					<p class="cbi-con-word">按客户的不同状态，将客户定义为不同类型。销售人员可对不同客户池内的客户做不同的操作，线索池、私有池、邀约池、订金池、签约池......充分的挖掘各类潜在学员线索，帮助机构提升销售跟进效率和学员转化率。</p>
					<p class="cbi-con-link"><a href="http://crm.keweisoft.com/client/" target="_blank">咨询详情>></a></p>
				</div>
				<div class="cbi-pic2"></div>
			</div>	
			<div class="crm-b2-item">
				<div class="cbi-con" style="margin-top:93px;">
					<p class="cbi-con-tit"><a href="http://crm.keweisoft.com/sales/" target="_blank">销售管理</a></p>
					<p class="cbi-con-word">全面提升培训机构的销售业务管理，从销售机会的创建到销售计划的执行，到销售合同的签订和财务收费。实现全面的销售自动化管理，并针对特定的销售目标做出销售预测分析，全面提升销售业绩。</p>
					<p class="cbi-con-link"><a href="http://crm.keweisoft.com/sales/" target="_blank">咨询详情>></a></p>
				</div>
				<div class="cbi-pic3"></div>
			</div>
			<div class="crm-b2-item">
				<div class="cbi-con" style="float:right;margin-top:93px;">
					<p class="cbi-con-tit"><a href="http://crm.keweisoft.com/financial/" target="_blank">财务管理</a></p>
					<p class="cbi-con-word">可为CRM集成财务管理功能，可帮助企业实现财务工作的全方位信息化管理，帮助财务人员从繁杂的学员收费、退费、转班、分期费用的不同类型的财务工作，大幅度提升财务管理工作效率。</p>
					<p class="cbi-con-link"><a href="http://crm.keweisoft.com/financial/" target="_blank">咨询详情>></a></p>
				</div>
				<div class="cbi-pic4"></div>
			</div>	
			<div class="crm-b2-item">
				<div class="cbi-con">
					<p class="cbi-con-tit"><a href="http://crm.keweisoft.com/pro-service/" target="_blank">客服管理</a></p>
					<p class="cbi-con-word">可为CRM服务管理模块全面帮助企业提升学员服务工作，学员正式签约后，即建立一条学员服务工单，教务人员凭借服务工单执行后续的教师分配、班级分配、课表安排等工作。严格按照服务工单执行各项工作，规划服务流程，提升学员体验。</p>
					<p class="cbi-con-link"><a href="http://crm.keweisoft.com/pro-service/" target="_blank">咨询详情>></a></p>
				</div>
				<div class="cbi-pic5"></div>
			</div>	
			<div class="crm-b2-item">
				<div class="cbi-con" style="float:right;">
					<p class="cbi-con-tit"><a href="http://crm.keweisoft.com/teaching/" target="_blank">教学服务</a></p>
					<p class="cbi-con-word">全面管理培训机构的后端学员服务工作，包括教师、班级、课程、教室、学员等的管理，可按时间、课程阶段、课时任务做学员回访工作，提升学员成绩的同时提升机构的服务质量。</p>
					<p class="cbi-con-link"><a href="http://crm.keweisoft.com/teaching/" target="_blank">咨询详情>></a></p>
				</div>
				<div class="cbi-pic6"></div>
			</div>	
			<div class="crm-b2-item">
				<div class="cbi-con" style="margin-top:106px;">
					<p class="cbi-con-tit"><a href="http://crm.keweisoft.com/oa/" target="_blank">办公自动化</a></p>
					<p class="cbi-con-word">可为CRM集成oa系统功能，针对培训机构的日常业务和工作，提供日程任务管理、工作计划管理、奖励激励管理、事项提醒管理、知识管理、绩效管理等功能。</p>
					<p class="cbi-con-link"><a href="http://crm.keweisoft.com/oa/" target="_blank">咨询详情>></a></p>
				</div>
				<div class="cbi-pic7"></div>
			</div>			
			<div class="crm-b2-item">
				<div class="cbi-con" style="float:right; margin-top:84px;">
					<p class="cbi-con-tit"><a href="http://crm.keweisoft.com/analysis/" target="_blank">决策分析</a></p>
					<p class="cbi-con-word">可为CRM为各模块提供灵活、可完全定制的报表&统计图表，CRM统计图表可实时显示企业的关键数据，可以很方便地图形化显现有关销售、市场、客户服务、财务等数据的对照、发展和趋势给培训机构决策层提供强有力的数据支撑，同时也为协调各部门工作、合理控制费用支出、全面评估企业运作水平提供多方位的分析依据。</p>
					<p class="cbi-con-link"><a href="http://crm.keweisoft.com/analysis/" target="_blank">咨询详情>></a></p>
				</div>
				<div class="cbi-pic8"></div>
			</div>															
		</div>
		<a href=""><div class="crm-ads2"></div></a>
		 <div class="crm-b3 m-content" id="cb3">
		 	<div class="crm-b3-tit"></div>
		 	<div class="crm-b3-con">
		 		<div class="cbc-left">
		 			<div class="cbc-left-item">
		 				<a href="http://crm.keweisoft.com/solu-vocation/" target="_blank"><p class="cbc-tit1">职业资格培训解决方案</p></a>
		 				<p class="cli-con">培训机构需要对学员和教师档案清晰的管理，方便查询，要求教师和学生能够方便上线查询到自己的课表以及对应的教室和上课时间......</p>
		 				<p class="cli-link"><a href="http://crm.keweisoft.com/solu-vocation/" target="_blank">咨询更多>></a></p>
		 			</div>
		 			<div class="cbc-left-item" style="margin-top:5px;">
		 				<a href="http://crm.keweisoft.com/solu-art/" target="_blank"><p class="cbc-tit2">艺术培训解决方案</p></a>
		 				<p class="cli-con">通过多样化的市场营销活动，收集更多的有效线索，对线索进行分类管理，分配到相应的咨询顾问手里，进行及时跟进......</p>
		 				<p class="cli-link"><a href="http://crm.keweisoft.com/solu-art/" target="_blank">咨询更多>></a></p>		 				
		 			</div>
		 		</div>
		 		<div class="cbc-center">
		 			<a href="http://crm.keweisoft.com/solu-primary/" target="_blank"><p class="cbc-center-tit">中小学培训解决方案</p></a>
		 			<p class="cbc-center-pic"></p>
		 			<p class="cbc-center-con">从教育培训机构市场，销售，报名，咨询，选课，分配，排班，排课，考勤，学员评价，报表统计，刷卡，短信等方面进行整体的管控......</p>
		 			<p class="cbc-center-link"><a href="http://crm.keweisoft.com/solu-primary/" target="_blank">咨询更多>></a></p>
		 		</div>
		 		<div class="cbc-right">
		 			<div class="cbc-left-item">
		 				<a href="http://crm.keweisoft.com/solu-children/" target="_blank"><p class="cbc-tit3">少儿培训解决方案</p></a>
		 				<p class="cli-con">有课程整体规划，让管理轻松掌控。教师对课程不再有迷茫，学员的课程一目了然，让教室资源得到充分利用。有效解决了教师的课量评估，学员进......</p>
		 				<p class="cli-link"><a href="http://crm.keweisoft.com/solu-children/" target="_blank">咨询更多>></a></p>
		 			</div>
		 			<div class="cbc-left-item" style="margin-top:5px;">
		 				<a href="http://crm.keweisoft.com/solu-foreign/" target="_blank"><p class="cbc-tit4">外语辅导解决方案</p></a>
		 				<p class="cli-con">随着著名品牌英语培训机构的不断进入，众多的培训机构面临着巨大挑战，如何提升教学品质、加强师资力量、进行服务创新已成为培训机构谋求长远......</p>
		 				<p class="cli-link"><a href="http://crm.keweisoft.com/solu-foreign/" target="_blank">咨询更多>></a></p>		 				
		 			</div>
		 		</div>		 		
		 	</div>
		 </div>
		 <div class="crm-b4 m-content" id="cb4">
		 	<div class="crm-b4-tit"></div>
		 	<div class="crm-b4-con">
		 		<div id="slider">
		 			<div class="slide" id="crm-b4-item1">
		 				<img class="diapo" src="<?php echo IMG_PATH;?>official/cbi-pic1.jpg" width="586" height="462" />	
		 				<div class="text"></div>
		 			</div>
		 			<div class="slide" id="crm-b4-item2">
		 				<img class="diapo" src="<?php echo IMG_PATH;?>official/cbi-pic2.jpg" width="586" height="462" />	
		 				<div class="text"></div>		 				
		 			</div>
		 			<div class="slide" id="crm-b4-item3">
		 				<img class="diapo" src="<?php echo IMG_PATH;?>official/cbi-pic3.jpg" width="586" height="462" />	
		 				<div class="text"></div>		 				
		 			</div>
		 			<div class="slide" id="crm-b4-item4">
		 				<img class="diapo" src="<?php echo IMG_PATH;?>official/cbi-pic4.jpg" width="586" height="462" />	
		 				<div class="text"></div>		 				
		 			</div>
		 			<div class="slide" id="crm-b4-item5">
		 				<img class="diapo" src="<?php echo IMG_PATH;?>official/cbi-pic5.jpg" width="586" height="462" />	
		 				<div class="text"></div>		 				
		 			</div>
		 			<div class="slide" id="crm-b4-item6">
		 				<img class="diapo" src="<?php echo IMG_PATH;?>official/cbi-pic6.jpg" width="586" height="462" />	
		 				<div class="text"></div>		 				
		 			</div>
		 			<div class="slide" id="crm-b4-item7">
		 				<img class="diapo" src="<?php echo IMG_PATH;?>official/cbi-pic7.jpg" width="586" height="462" />	
		 				<div class="text"></div>		 				
		 			</div>
		 			<div class="slide" id="crm-b4-item8">
		 				<img class="diapo" src="<?php echo IMG_PATH;?>official/cbi-pic8.jpg" width="586" height="462" />	
		 				<div class="text"></div>		 				
		 			</div>		 					 								 					 			
		 		</div>
		 	</div>
		 </div>
<script type=text/javascript>
/* ==== start script ==== */
slider.init();
</script>		 
		<div class="edus-b5 m-content" id="cb5">
			<div class="edus-b5-tit"></div>
			<div class="edus-b5-con">
				<div class="ebc-top">
					<div class="ebc-top-left">
						<img src="<?php echo IMG_PATH;?>official/crm-b5-pic1.jpg" width="434" height="249" alt="" title="" />
					</div>
					<div class="ebc-top-right">
						<p class="etr-tit"><a href="http://crm.keweisoft.com/case/show_8_1.html" target="_blank">北京新年华教育集团</a></p>
						<p class="etr-con">新年华教育集团自2001年创立以来，以“打造未来社会精英”为宗旨，以提高学生的综合素质，适应未来社会要求为目标，以高度负责的态度，凭借科学的教育理念和...</p>
						<p class="etr-link"><a href="http://crm.keweisoft.com/case/show_8_1.html" target="_blank">查看详情>></a></p>
						<a href="http://crm.keweisoft.com/case/index.html" target="_blank"><div class="etr-btn1">查看相似案例</div></a><a href="http://crm.keweisoft.com/solution/" target="_blank"><div class="etr-btn2">咨询行业方案</div></a>
					</div>
				</div>
				<div class="ebc-bottom">
					<div class="ebc-bottom-item">
						<a href="http://crm.keweisoft.com/case/show_11_1.html" target="_blank"><div class="ebi-pic"><img src="<?php echo IMG_PATH;?>official/crm-b5-pic2.jpg" width="324" height="180" alt="" title="" /></div></a>
						<p class="ebi-tit"><a href="http://crm.keweisoft.com/case/show_11_1.html" target="_blank">北京金汉嘉教育</a></p>
						<p class="ebi-word">北京金汉嘉教育咨询有限公司，简称金汉嘉英语，成立于2003年，是国内最早从事外教一对一教学的培训机构之一，首创“老外家教”服务品牌，随后将其专业化、市......</p>
						<p class="ebi-link"><a href="http://crm.keweisoft.com/case/show_11_1.html" target="_blank">详情>></a></p>
					</div>
					<div class="ebc-bottom-item" style="margin-left:33px;">
						<a href="http://crm.keweisoft.com/case/show_9_1.html" target="_blank"><div class="ebi-pic"><img src="<?php echo IMG_PATH;?>official/crm-b5-pic3.jpg" width="324" height="180" alt="" title="" /></div></a>
						<p class="ebi-tit"><a href="http://crm.keweisoft.com/case/show_9_1.html" target="_blank">武汉荣昌仁和会计</a></p>
						<p class="ebi-word">逾十年来，仁和会计教育一直坚持“诚信办学，严谨治校”，努力打造行业品质，建立资深名师团队，实施社会服务。仁和会计拥有专职讲师团队500余人，还特邀众多...</p>
						<p class="ebi-link"><a href="http://crm.keweisoft.com/case/show_9_1.html" target="_blank">详情>></a></p>
					</div>
					<div class="ebc-bottom-item" style="margin-left:33px;">
						<a href="http://crm.keweisoft.com/case/show_13_1.html" target="_blank"><div class="ebi-pic"><img src="<?php echo IMG_PATH;?>official/crm-b5-pic4.jpg" width="324" height="180" alt="" title="" /></div></a>
						<p class="ebi-tit"><a href="http://crm.keweisoft.com/case/show_13_1.html" target="_blank">前程百利教育</a></p>
						<p class="ebi-word">前程百利一对一考试辅导机构是百利天下教育旗下一对一出国考试辅导品牌，致力于出国留学考试一对一辅导，为客户打造最有效的成绩提升服务。公司提供IBT、IELT...... </p>
						<p class="ebi-link"><a href="http://crm.keweisoft.com/case/show_13_1.html" target="_blank">详情>></a></p>
					</div>										
				</div>
			</div>
		</div>
<?php include template("content","footer"); ?>