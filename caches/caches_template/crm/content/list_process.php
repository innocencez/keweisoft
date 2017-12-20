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
	<div style="width:100%;height:15px;"></div>
		<div class="content-top">
		<div class="m-content">
			<div class="content-top-tit">企业历程</div>
		</div>
		</div>
		<div class="content-process">
			<div class="con-center">
				<div class="con-21">北京可为公司成立；创立“可为”品牌。</div>
				<div class="con-03">
					<div style="height:88px;padding-top:30px;">
						涉足教育信息化，自主开发研究“多媒体电子教室”系统并获国家专利证书。同时开始构思针对教育行业的EDUS教务管理系统、CRM系统、学员管理系统为主的产品战略布局。
					</div>
					<div class="con-03-pic"></div>
				</div>
				<div class="con-05">
					<div style="height:70px;">
						可为研发团队历经两年的努力，可为EDUS1.0版本成功问世，主要以培训行业纵深管理与业务应用为出发点，立志为教育行业提供最全面的信息化解决方案。
					</div>
					<div class="con-05-pic1"></div>
					<div class="con-05-pic2"></div>
				</div>
				<div class="con-07">
					 可为CRM系统正式推向市场，CRM K6版本完美应用于企业，短期内用户过千，完美荣获“2006年度中国管理软件行业最具发展潜力企业”奖。可为教务2.0版本完美应用于教育机构，受到同行业的高度关注。
				</div>
				<div class="con-08">
					针对客户复杂项目过程管控的可为CRM K8版本和可为CRM K9版本融会贯通更多重要功能，并成功上线应用于各个行业。
				</div>
				<div class="con-11">
					可为自主品牌研发软件+用友软件代理的业务模式，为各行各业提供全面的企业信息化解决方案，通过传递管理知识，推进信息化，助力企业大有可为，成功为上万家企业成功交付了信息化系统，并荣获“中国高新技术企业”荣誉称号。 
					<div class="con-11-pic"></div>
				</div>
				<div class="con-12">
					可为EDUS3.0教务系统成功推向教育培训行业，在推广应用后，得到了客户的一直好评，提高了客户管理效率和服务质量。
					<div class="con-12-pic"></div>
				</div>
				<div class="con-13">
					可为EDUS4.0教务系统成功发布，并为新航道国际教育集团进行一体化信息规划，大大提升了该企业运营、服务效率；可为CRM软件被广大用户称之为最实用的管理系统，助力企业信息化管理更轻松一致荣获“中国软件行业的标杆企业”称号。
				</div>
				<div class="con-14">
					<div style="height:55px;">可为时代经过十多年的努力，凭借专业的软件产品和真诚优质的服务咨询，可为软件从2001年开始至今在中国教育市场占有率一直保持前列，成为教育行业软件标杆企业，专为教育行业提供最全面的信息化解决方案。</div>
					<div class="con-14-pic1">更强战绩&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;值得期待</div>
 				</div>
			</div>
		</div>

		<div class="blank" style="margin-top:2900px;">
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