<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html>
<html>
    <head>
        <title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
        <meta charset="utf-8" />
        <meta name="keywords" content="<?php echo $SEO['keyword'];?>" />
        <meta name="description" content="<?php echo $SEO['description'];?>" />
        <meta name="author" content="keweisoft.com" />
        <link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>crm/abact.css" />       
        <script type="text/javascript" src="<?php echo JS_PATH;?>crm/jquery-1.7.1.min.js"></script>
        <script src="<?php echo JS_PATH;?>edus/jquery.carouFredSel-6.0.4-packed.js" type="text/javascript"></script>
        <script type="text/javascript" src="<?php echo JS_PATH;?>crm/act.js"></script>
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
			<a href="<?php echo siteurl($siteid);?>">首页</a> > <a href="<?php echo $CATEGORYS[$catid]['url'];?>">企业活动</a>
		</div>		
		<div class="m-content ab-act-con">
			<div class="ab-act-con1">
				<div class="ab-act-con1-act">
					<div class="ab-act-con1-tit">
						<span style="font-size:24px; color:#900000;" >市场活动</span>
						<a href="<?php echo $CATEGORYS['28']['url'];?>" style="font-size:18px;color:#900000;float:right;">More >></a>
					</div>
					<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=2bc36f6059450438af646da963f50d60&action=lists&catid=44&order=listorder+DESC&num=4\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'44','order'=>'listorder DESC','limit'=>'4',));}?>
					<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
					<div class="ab-act-con1-con">
						<img src="<?php echo $r['thumb'];?>" alt="$r[title]" title="<?php echo $r['title'];?>" width="240" height="155" style="float:left;margin-top:5px;" />
						<div class="ab-act-con1-item">
							<div style="width:100%;height:24px;"><a href="" style="color:#ff6600;font-size:16px;"><?php echo str_cut($r[title],65,'...');?></a><span style="color:#333;font-size:14px;float:right;"><?php echo date('Y-m-d',$r[inputtime]);?></span></div>
							<p><?php echo $r['description'];?></p>
							<a href="<?php echo $r['url'];?>" style="color:#ff6600;font-size:14px;float:right;margin-top:15px;">查看详情>></a>
						</div>
					</div>
					<?php $n++;}unset($n); ?>
					<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
				</div>
				<div class="ab-act-con1-news">
					<div class="ab-act-con1-news-tit">客户案例</div>
					<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=73d5f9226ace21be6d7470bb2eaf22f6&action=lists&catid=42&order=listorder+DESC&num=4\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'42','order'=>'listorder DESC','limit'=>'4',));}?>
					<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
					<div class="ab-act-con1-news-item">
						<img src="<?php echo $r['thumb'];?>" alt="<?php echo $r['title'];?>" title="<?php echo $r['title'];?>" width="190" height="99" />
						<a href="<?php echo $r['url'];?>" style="width:98%;height:62px;color:#777;line-height:20px;font-size:12px;padding-left:2%; margin-top:15px; display:block;"><?php echo str_cut($r[description],65,'...');?></a>
					</div>
					<?php $n++;}unset($n); ?>
					<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
				</div>
			</div>
			<div class="ab-act-ads">传递管理知识，推动信息发展</div>
			<div class="ab-act-pics">
				<p style="text-align:center;color:#3a4352;font-size:40px;">员工风采</p>
				<p style="text-align:center;margin-top:20px;"><img src="<?php echo IMG_PATH;?>edus/ab-act-line.png" alt="" title="" /></p>
				<p style="text-align:center;margin-top:30px;color:#3a4352;font-size:24px;line-height:35px;">在这里，我们共同成长和欢笑，与公司一起，经历过大大小小的挫折，也饱尝过丰收的喜悦。那些伴随光影定格的过去，正见证着可为的崛起与我们的成熟......，记录在这里的，属于可为人的，点点滴滴</p>
				<p style="text-align:center;margin-top:40px;"><img src="<?php echo IMG_PATH;?>edus/ab-act-dot.png" alt="" title="" /></p>
				<div id="wrapper">
					<div id="carousel">
						<div><img src="<?php echo IMG_PATH;?>edus/1.jpg" alt="图片1" width="687" height="451" /></div>
						<div><img src="<?php echo IMG_PATH;?>edus/2.jpg" alt="图片2" width="687" height="451" /></div>
						<div><img src="<?php echo IMG_PATH;?>edus/3.jpg" alt="图片3" width="687" height="451" /></div>
						<div><img src="<?php echo IMG_PATH;?>edus/4.jpg" alt="图片4" width="687" height="451" /></div>
						<div><img src="<?php echo IMG_PATH;?>edus/5.jpg" alt="图片5" width="687" height="451" /></div>
					</div>
				</div>				
			</div>			
		</div>
	<?php include template("content","footer"); ?>		
 	<!--53客服代码-->  	
	</body>	
</html>