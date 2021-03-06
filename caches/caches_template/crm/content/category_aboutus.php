<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html>
<html>
	<head>
		<title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
		<meta charset="utf-8" />
		<meta name="keywords" content="<?php echo $SEO['keyword'];?>" />
		<meta name="description" content="<?php echo $SEO['description'];?>" />
		<meta name="author" content="keweisoft.com" />
		<link href="<?php echo CSS_PATH;?>crm/aboutus.css" rel="stylesheet" type="text/css" />
		<script type="text/javascript" src="<?php echo JS_PATH;?>crm/jquery-1.7.1.min.js"></script>
		<script type="text/javascript" src="<?php echo JS_PATH;?>crm/product.js"></script>
	</head>	
	<body>
	<?php include template("content","header"); ?>
	<div class="aboutus-banner">
		<div class="aboutus-banner1"></div>
		<div class="aboutus-banner2"></div>
	</div>
	<?php include template("content","about_sub"); ?>
		<div class="top-link m-content">
			<a href="<?php echo siteurl($siteid);?>">首页</a> > <a href="<?php echo $CATEGORYS[$catid]['url'];?>">公司简介</a>
		</div>
		<div class="content">
			<div class="ab-tit m-content"></div>
			<div class="m-content ab-brief">
				<div class="ab-brief-tit">可为时代科技有限公司</div>
				<p class="ab-brief-con">
					       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;北京可为时代科技有限公司成立于1993年，是国内领先的提供整体解决方案的企业管理咨询公司。公司拥有近140人的专业咨询和专家团队，专注于为企业提供系统的企业管理咨询与业务解决方案。我们和客户一起，通过对企业管理过程中所遇问题的不断改进，帮助客户实现持续、稳定、健康的发展，达成战略目标。<br/>
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;作为中国本土管理咨询业的先行者和领导者，我们不仅熟悉深奥的管理理论和管理规律；更是把世界上先进、成熟、实用的管理理念和工具方法软件产品迅速介绍及运用于企业，变成对管理实践有指导意义的可操作、可执行的解决方案，助力企业大有可为。<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;从公司成立之初就是用友软件最大的授权服务经销商，依靠多年服务企业客户的实践经验，加上独特的项目管理和ERP实施方法论指导，以跨行业咨询和服务专家为实施队伍，从企业客户的实际需求出发，为其量身规划、快速实施ERP系统，使企业的经营管理更高效，保障企业的ERP投资回报最大化。<br />
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;公司从2001年着手研发自主品牌，EDUS教务系统和可为CRM系统，并成功将自主研发软件应用于教育培训行业，目前可为自主研发的教务系列软件、客户关系管理软件已成功应用于各行各业，为企业的发展提供了专业的信息化解决方案。<br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;目前可为公司已经迎来了它的第21个年头，在为客户度身订制的企业管理咨询解决方案中，可为软件已经为几十个行业上万家客户提供了高质量的管理软件产品和解决方案，获得了客户的一致好评，并与公司建立起了长期合作关系。<br />
       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;未来，可为软件将继续运用营销管理的最新理论，结合软件技术的深厚积淀，提供满足客户需求的信息化解决方案和服务目标，公司也将继续秉承“服务创造价值、服务创造未来”的经营理念，以专业的视角为客户提供优质服务，通过传递管理知识，推进信息化，助力企业大有可为，让每一家企业信息化管理更轻松！打造中国企业管理软件第一品牌！成就中国最具规模的综合型管理咨询服务机构！
				</p>
				<div class="ab-con-mission">
					<img src="<?php echo IMG_PATH;?>edus/ab-con-vis.png" alt="" title="" />
					<span>可为公司的使命与愿景</span>
					<a>010-51651266</a>
				</div>
			</div>
			<div class="ab-vision">
				<div class="m-content">
					<div class="vision1">
						<div class="vision-motto">可为公司的使命</div>
						<div class="vision-line"></div>
						<div class="vision1-con">传递管理知识  推动信息化  助力企业大有可为</div>
					</div>
					<div class="vision2">
						<div class="vision-motto">可为公司的口号</div>
						<div class="vision-line"></div>
						<div class="vision1-con">广阔天地  大有可为</div>
					</div>
					<div class="vision3">
						<div class="vision-motto">可为公司的企业愿景</div>
						<div class="vision-line"></div>
						<div class="vision1-con">让每一家企业信息化管理更轻松</div>
					</div>
					<div class="vision4">
						<div class="vision-motto">可为公司的经营理念</div>
						<div class="vision-line"></div>
						<div class="vision2-con">前进、行动、勤奋、学习、高效、参与、专
业、服务、科学、系统、和谐、传承</div>
					</div>
					<div class="vision5">
						<div class="vision-motto">服务宗旨</div>
						<div class="vision-line"></div>
						<div class="vision2-con">以客为尊，卓越服务，力争第一，赢得企业信
赖，做一个让最终企业用户满意的软件服务公司！</div>
					</div>
				</div>
			</div>
			<a href="http://tb.53kf.com/webCompany.php?arg=10140145&style=5" target="_blank"><div class="ab-ads"></div></a>
			<div class="m-content">
				<div class="ab-sub">
					<img src="<?php echo IMG_PATH;?>edus/ab-pic1.jpg" alt="" title="" style="float:left;" />
					<div class="ab-sub-con">
						<h1>可为—专业的教务管理软件服务商</h1>
						<p style="font-size:14px;margin-top:20px;line-height:25px;text-indent:28px;">北京可为时代是国内领先的提供整体解决方案的企业管理咨询公司。专注于为企业提供系统的管理咨询与业务解决方案。公司从2001年着手研发自主品牌EDUS教务管理系统，并成功应用于教育培训行业，为广大教育培训行业的客户提供先进的管理思想和管理工具，为教育培训行业提供专业的信息化解决方案。</p>
					</div>
				</div>
				<div class="sub-con-line"></div>
				<div class="ab-sub1">
					<div class="ab-sub-con1">
						<p style="font-size:14px;margin-top:20px;line-height:25px;text-indent:28px;">可为edus教务管理系统可以满足任意培训机构、学校、家教行业，实现高效的教务管理工作。该系统涉及学生信息、学习信息、教务信息、教师管理、财务管理、考勤管理、培训管理等很多相关信息的综合，进而将相关信息集成至此操作系统。帮助企业解决管理难、管理分散的问题，是教育培训机构管理软件的领先品牌。</p>
					</div>
					<img src="<?php echo IMG_PATH;?>edus/ab-pic2.jpg" alt="" title="" style="float:left; margin-left:150px;" />  
				</div>
				<div class="ab-sub1-case">
					<div class="ab-sub1-case-tit">可为EDUS教务系统客户案例</div>
					<div class="ab-sub1-case-line"></div>
				</div>
				<div class="ab-sub1-case-item1">
					<div class="ab-sub1-case-item1-items"><a><img src="<?php echo IMG_PATH;?>edus/ab-case1.jpg" alt="" title="" /></a></div>
					<div class="ab-sub1-case-item1-items" style="margin-left:25px;"><a><img src="<?php echo IMG_PATH;?>edus/ab-case2.jpg" alt="" title="" /></a></div>
					<div class="ab-sub1-case-item1-items" style="margin-left:83px;"><a><img src="<?php echo IMG_PATH;?>edus/ab-case3.jpg" alt="" title="" /></a></div>
				</div>
				<div class="ab-sub1-case-item2">
					<div class="ab-sub1-case-item2-items"><a><img src="<?php echo IMG_PATH;?>edus/ab-case4.jpg" alt="" title="" /></a></div>
					<div class="ab-sub1-case-item2-items" style="margin-left:25px;"><a><img src="<?php echo IMG_PATH;?>edus/ab-case5.jpg" alt="" title="" /></a></div>
					<div class="ab-sub1-case-item2-items" style="margin-left:83px;"><a><img src="<?php echo IMG_PATH;?>edus/ab-case6.jpg" alt="" title="" /></a></div>
				</div>
				<div class="ab-case-line"></div>
			</div>
			<a href="http://kf2.immivip.com/new/client.php?unique_id=&unique_name=&arg=admin&style=6" target="_blank"><div class="ab1-ads"></div></a>
			<div class="m-content">
				<div class="ab-sub">
					<div class="ab-sub-con" style="margin-left:0px;">
						<h1>可为—定制专属您的客户管理系统</h1>
						<p style="font-size:14px;margin-top:20px;line-height:25px;text-indent:28px;">公司从2001年着手研发自主品牌可为CRM系统，如今已成功应用于各行各业，可为CRM专业咨询顾问，根据您的实际需求和个性需求，定制专属您的客户关系管理系统，为企业的发展提供专业的信息化解决方案。目前已为几十个行业上万家客户提供了高质量的管理软件产品和解决方案，获得了客户的一致好评，并与公司建立起了长期合作关系。
</p>
					</div>
					<img src="<?php echo IMG_PATH;?>edus/ab-pic3.jpg" alt="" title="" style="float:left;margin-left:152px;" />
				</div>
				<div class="sub-con-line"></div>
				<div class="ab-sub1" style="margin-top:35px;">
					<img src="<?php echo IMG_PATH;?>edus/ab-pic4.jpg" alt="" title="" style="float:left;" />
					<div class="ab-sub-con1" style="margin-left:150px; margin-top:30px;">
						<p style="font-size:14px;margin-top:20px;line-height:25px;text-indent:28px;">哪里能够接入互联网，哪里就可以做业务，可为CRM强大的扩展性和开放性，轻松实现移动办公和分布式管理，可为CRM凭借灵活的技术架构，全平台化的管理理念，帮您打造成行业的风向标。可为CRM让一切尽在掌握中。十年专注教育行业，倾心打造教育行业客户关系管理解决方案。相信可为CRM与中国教育行业一起共铸辉煌。</p>
					</div>
				</div>
				<div class="ab-sub1-case">
					<div class="ab-sub1-case-tit" style="width:274px;">可为CRM系统客户案例</div>
					<div class="ab-sub1-case-line" style="width:750px;margin-left:15px;"></div>
				</div>
				<div class="ab-sub1-case-item1">
					<div class="ab-sub1-case-item1-items"><a href=""><img src="<?php echo IMG_PATH;?>edus/ab-case1.jpg" alt="" title="" /></a></div>
					<div class="ab-sub1-case-item1-items" style="margin-left:25px;"><a href=""><img src="<?php echo IMG_PATH;?>edus/ab-case2.jpg" alt="" title="" /></a></div>
					<div class="ab-sub1-case-item1-items" style="margin-left:83px;"><a href=""><img src="<?php echo IMG_PATH;?>edus/ab-case3.jpg" alt="" title="" /></a></div>
				</div>
				<div class="ab-sub1-case-item2">
					<div class="ab-sub1-case-item2-items"><a href=""><img src="<?php echo IMG_PATH;?>edus/ab-case4.jpg" alt="" title="" /></a></div>
					<div class="ab-sub1-case-item2-items" style="margin-left:25px;"><a href=""><img src="<?php echo IMG_PATH;?>edus/ab-case5.jpg" alt="" title="" /></a></div>
					<div class="ab-sub1-case-item2-items" style="margin-left:83px;"><a href=""><img src="<?php echo IMG_PATH;?>edus/ab-case6.jpg" alt="" title="" /></a></div>
				</div>
				<div class="ab-case-line"></div>
			</div>
		<a href="http://tb.53kf.com/webCompany.php?arg=10140145&style=5" target="_blank"><div class="ab2-ads"></div></a>
	<div class="m-content">
		<div class="ab-sub">
					<div class="ab-sub-con" style="margin-left:0px;">
						<h1>可为—全程提供最优质服务支持</h1>
						<p style="font-size:14px;margin-top:20px;line-height:25px;text-indent:28px;">可为提供全程最优质的服务支持，从企业管理解决方案的制定到软件的成功上线，从软件的项目实施到软件的售后保障体系，可为秉承“以客户为中心，为客户创造价值”的服务宗旨，形成了一套专业、全面的服务体系。同时设立优质服务部，监督、保障客户服务价值的实现。从而帮助企业从容面对不确定危机环境带来的挑战，确保企业持续、健康、快速发展。
</p>
					</div>
					<img src="<?php echo IMG_PATH;?>edus/ab-pic5.jpg" alt="" title="" style="float:left;margin-left:152px;" />
		</div>
		<div class="ab-ads1">
			<span>咨询服务</span>
			<a href="http://tb.53kf.com/webCompany.php?arg=10140145&style=5" target="_blank">点击了解详情</a>
		</div>
		<div class="ab-consult">
			<img src="<?php echo IMG_PATH;?>edus/ab-con-tel.jpg" alt="" title="" style="margin-left:29px;float:left;" />
			<div class="ab-consult-con">可为拥有最优质的咨询顾问服务团队，他们拥有多年的行业纵深经验，对企业的业务流程和盈利模式都有较深的了解，通过可为专业的咨询顾问，我们协助企业找到管理现状中存在的问题、优化企业现有流程中的各个环节、针对企业当前的管理问题给出全方位的解决方案，包括行业现状的分析、企业流程的优化、管理思想的应用以及最终的软件落地执行。</div>
		</div>
		<div class="ab-consult-process">
			咨询服务流程：
			<div class="ab-consult-process-con">
				<div class="ab-process-con1" onmouseover="this.style.backgroundImage='url(<?php echo IMG_PATH;?>edus/ab-consult-hover1.jpg)';document.getElementById('at1').style.display='none'" onmouseout="this.style.backgroundImage='url(<?php echo IMG_PATH;?>edus/ab-consult1.jpg)';document.getElementById('at1').style.display='block'"><div style="margin-top:125px;" id="at1">需求调研</div></div>
				<div id="ah1"></div>
				<div class="ab-process-arrow"></div>
				<div class="ab-process-con2" onmouseover="this.style.backgroundImage='url(<?php echo IMG_PATH;?>edus/ab-consult-hover2.jpg)';document.getElementById('at2').style.display='none'" onmouseout="this.style.backgroundImage='url(<?php echo IMG_PATH;?>edus/ab-consult2.jpg)';document.getElementById('at2').style.display='block'"><div style="margin-top:125px;" id="at2">需求分析</div></div>
				<div class="ab-process-arrow"></div>
				<div class="ab-process-con3" onmouseover="this.style.backgroundImage='url(<?php echo IMG_PATH;?>edus/ab-consult-hover3.jpg)';document.getElementById('at3').style.display='none'" onmouseout="this.style.backgroundImage='url(<?php echo IMG_PATH;?>edus/ab-consult3.jpg)';document.getElementById('at3').style.display='block'"><div style="margin-top:125px;" id="at3">需求确认</div></div>
				<div class="ab-process-arrow"></div>
				<div class="ab-process-con4" onmouseover="this.style.backgroundImage='url(<?php echo IMG_PATH;?>edus/ab-consult-hover4.jpg)';document.getElementById('at4').style.display='none'" onmouseout="this.style.backgroundImage='url(<?php echo IMG_PATH;?>edus/ab-consult4.jpg)';document.getElementById('at4').style.display='block'"><div style="margin-top:125px;" id="at4">价值确认</div></div>
			</div>
		</div>
		<div class="ab-ads1">
			<span>实施服务</span>
			<a href="http://tb.53kf.com/webCompany.php?arg=10140145&style=5" target="_blank">点击了解详情</a>
		</div>
		<div class="ab-consult">	
			<div class="ab-consult-con" style="margin-left:0px">可为软件凭借多年的项目成功实施经验，为企业提供标准的管理软件实施服务方案，引入专业的项目管理模式，可为一直坚持五分软件，五分实施，通过实施把企业的流程与软件流程相结合，搭建信息化平台；通过系统的培训，培养用户自己的信息管理者，从而使软件良好运作。</div>
			<img src="<?php echo IMG_PATH;?>edus/ab-con-ico.jpg" alt="" title="" style="margin-left:35px;float:left;" />
		</div>
		<div class="ab-consult-process">
			实施服务流程：
		<div class="ab-implement">
			<div class="ab-implement-item1"></div>
			<div class="ab-implement-item2"></div>
			<div class="ab-implement-item3"></div>
			<div class="ab-implement-item4"></div>
			<div class="ab-implement-item5"></div>
			<div class="ab-implement-item6"></div>
			<div class="ab-implement-item7"></div>
			<div class="ab-implement-item8"></div>
		</div>
		<div class="ab-ads1">
			<span>售后服务</span>
			<a href="http://tb.53kf.com/webCompany.php?arg=10140145&style=5" target="_blank">点击了解详情</a>
		</div>
		<div class="ab-consult">
			<img src="<?php echo IMG_PATH;?>edus/ab-con-ico9.jpg" alt="" title="" style="margin-left:20px;float:left;" />
			<div class="ab-consult-con">可为售后服务面向所有可为客户（包括可为伙伴客户）提供可为产品版本更新、版本升级、 知识库查询以及以热线、远程、在线等非现场方式提供的软件应用指导、问题诊断与解决等一站式服务。共同打造服务生态链，满足客户的各类需求，帮助客户实现系统持续优化的运行。为此可为设立优质服务部，其目的就是监督和提高员工的服务质量，为软件成功上线保驾护航。</div>
		</div>
		<div class="ab-aftersale-process">
			售后服务类型：
			<div class="ab-aftersale-process-type">
				<a class="ab-afersale-process-item1">网上自助服务</a>
				<a class="ab-afersale-process-item2">400电话服务</a>
				<a class="ab-afersale-process-item3">远程维护服务</a>
				<a class="ab-afersale-process-item4">系统巡检服务</a>
				<a class="ab-afersale-process-item5">网上在线支持</a>
				<a class="ab-afersale-process-item6">标准现场维护</a>
			</div>
		</div>
		<div class="ab-ads1">
			<span>个性开发服务</span>
			<a href="http://tb.53kf.com/webCompany.php?arg=10140145&style=5" target="_blank">点击了解详情</a>
		</div>
		<div class="ab-consult">	
			<div class="ab-consult-con" style="margin-left:0px">市场上软件的通用模块无法满足您企业的要求？需要只针对您企业独有的管理系统？别担心，可为金牌研发团队蓄势待发，根据企业自身需求设计开发方案，设计软件系统，选择相应的开发平台及数据库的软件开发服务。实现企业及行业的专属应用的软件管理系统，致力于帮助企业打造真正属于自己的信息化管理平台。</div>
			<img src="<?php echo IMG_PATH;?>edus/ab-con-ico10.jpg" alt="" title="" style="margin-left:35px;float:left;" />
		</div>
	</div>
		</div>
	</div>
		<div class="blank">
			<div class="m-content">
				<div class="sline"></div>
				<div class="scon">
					<p style="font-size:28px; color:#45454a">而这一切，只是可为的一个开始!</p>
					<p style="font-size:24px; color:#45454a;line-height:55px;">提供卓越领先的产品，是我们的骄傲！</p>
					<p style="font-size:24px; color:#45454a;line-height:35px;">可为产品让繁杂的信息化管理变得更简单，简单并不简单。</p>
				</div>
			</div>
		</div>
		<?php include template("content","footer"); ?>	
	</body>		
</html>