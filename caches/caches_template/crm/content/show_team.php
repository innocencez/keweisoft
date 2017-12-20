<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html>
<html>
    <head>
        <title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
        <meta charset="utf-8" />
        <meta name="keywords" content="<?php echo $SEO['keyword'];?>" />
        <meta name="description" content="<?php echo $SEO['description'];?>" />
        <meta name="author" content="keweisoft.com" />
        <link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>crm/team-show.css" />       
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
			<a href="<?php echo siteurl($siteid);?>">首页</a> > <a href="<?php echo $CATEGORYS[$parentid]['url'];?>">精英团队</a> > <a><?php echo $title;?></a>
		</div>
		<div style="width:100%;height:15px;"></div>
		<div class="m-content">
			<div class="team-show-tit">精英团队</div>
			<div class="team-show-con">
				<div class="team-show-item1">
					<img src="<?php echo $pimage;?>" alt="<?php echo $title;?>" title="<?php echo $title;?>" width="361" height="429"  style="float:left;"/>
					<div class="team-show-c">
						<span style="font-size:24px;color:#666;margin-left:52px; margin-top:53px;display:block;"><?php echo $title;?></span>
						<span style="font-size:18px;color:#666;margin-left:52px; margin-top:13px;display:block;">职位：<?php echo $role;?></span>
						<span style="font-size:24px;color:#666;margin-left:52px; margin-top:53px;display:block;">联系方式：</span>
						<p style="font-size:18px; color:#666;margin-left:52px; line-height:35px;">
							<?php echo $pcontact;?>
						</p>
					</div>
				</div>
				<div class="team-show-item2">
					<div class="team-show-item2-tit">个人简介</div>
					<p style="margin-top:20px;font-size:14px;line-height:24px;text-indent:28px;">
						<?php echo $description;?>
					</p>
					<div class="team-show-item2-tit" style="margin-top:30px;">擅长领域</div>
					<p style="margin-top:20px;font-size:14px;line-height:24px;">
						<?php echo $major;?>
					</p>
					<div class="team-show-item2-tit" style="margin-top:30px;">项目经历</div>
					<p style="margin-top:20px;margin-bottom:70px;font-size:14px;line-height:24px;">
						<?php echo $experence;?>
					</p>
				</div>
			</div>
			<div class="team-show-news">
				<p style="width:100%;text-align:center;font-size:24px;color:#093a5e;">产品新闻</p>
				<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=6b44ed1edefa359bb674976c7f61c833&action=lists&catid=44&order=listorder+ASC&num=5\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'44','order'=>'listorder ASC','limit'=>'5',));}?>
				<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
				<img src="<?php echo $r['thumb'];?>" width="227" height="122" alt="<?php echo $r['title'];?>" title="<?php echo $r['title'];?>" style="margin-top:30px;" />
				<h2 style="width:100%;font-size:14px; text-align:center; font-weight:bold; margin-top:10px;"><?php echo str_cut($r[title],65,'...');?></h2>
				<p style="font-size:12px;line-height:18px;color:#666;margin-top:10px;"><?php echo str_cut($r[description],125,'...');?></p>
				<?php $n++;}unset($n); ?>
				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
			</div>
		</div>
	<?php include template("content","footer"); ?>		  	
	</body>	
</html>