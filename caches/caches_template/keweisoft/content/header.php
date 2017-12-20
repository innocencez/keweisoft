<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?>		<div class="head">
			<div class="m-content">
				<div class="head-logo">
					<a href="<?php echo siteurl($siteid);?>" ><img src="<?php echo IMG_PATH;?>official/logo.png" alt="可为时代" title="教育信息化解决方案引领者" width="166" height="46" /></a>
				</div>
				<!--<ul class="head-nav">
					<li><a href="<?php echo siteurl($siteid);?>" target="_blank">首页</a></li>
					<li><a>关于可为</a>
						<ul class="s-nav" style="display:none;">
							<li><a href="<?php echo $CATEGORYS['9']['url'];?>" target="_blank">可为简介</a></li>
							<li><a href="<?php echo $CATEGORYS['16']['url'];?>" target="_blank">可为历程</a></li>
							<li><a href="<?php echo $CATEGORYS['19']['url'];?>" target="_blank">精英团队</a></li>
						</ul>
					</li>
					<li><a>产品介绍</a>
						<ul class="s-nav" style="display:none;">
							<li><a href="<?php echo $CATEGORYS['250']['url'];?>" target="_blank">可为EDUS</a></li>
							<li><a href="<?php echo $CATEGORYS['251']['url'];?>" target="_blank">可为CRM</a></li>
							<li><a href="<?php echo $CATEGORYS['252']['url'];?>" target="_blank">移动CRM</a></li>
						</ul>		
					</li>
					<li><a href="<?php echo $CATEGORYS['249']['url'];?>" target="_blank">公司动态</a></li>
					<li><a href="<?php echo $CATEGORYS['13']['url'];?>" target="_blank">客户服务</a>
						<ul class="s-nav" style="display:none;">
							<li><a href="<?php echo $CATEGORYS['34']['url'];?>" target="_blank">咨询服务</a></li>
							<li><a href="<?php echo $CATEGORYS['35']['url'];?>" target="_blank">实施服务</a></li>
							<li><a href="<?php echo $CATEGORYS['36']['url'];?>" target="_blank">售后服务</a></li>
							<li><a href="<?php echo $CATEGORYS['37']['url'];?>" target="_blank">个性化定制开发</a></li>
						</ul>
					</li>
					<li><a href="<?php echo $CATEGORYS['17']['url'];?>" target="_blank">联系我们</a></li>
				</ul>-->
				<ul class="head-nav">
					<li><a href="<?php echo siteurl($siteid);?>" target="_blank">首页</a></li>
					<li><a _t_nav="aboutus">关于可为</a></li>
					<li><a _t_nav="product">产品介绍</a></li>
					<li><a href="<?php echo $CATEGORYS['249']['url'];?>" target="_blank">公司动态</a></li>
					<li><a href="<?php echo $CATEGORYS['13']['url'];?>" _t_nav="service" target="_blank">客户服务</a></li>
					<li><a href="<?php echo $CATEGORYS['17']['url'];?>" target="_blank">联系我们</a></li>
				</ul>	
				<?php $userid = param::get_cookie('_userid');?>
				<?php $nickname = param::get_cookie('_nickname');?>
				<?php if($userid) { ?>
				<div class="btn-group pull-right" style="margin-top:24px;">
					<a href="index.php?m=member&c=index&a=logout" class="btn btn-default">退出</a>
					<a href="index.php?m=member&c=index" style="max-width:95px;" class="btn btn-warning"><?php echo $nickname;?></a>
					<a class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
						<span class="caret"></span>
						<span class="sr-only">Toggle DropDown</span>
					</a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="index.php?m=member&c=index&a=account_manage_info&t=1">修改个人信息</a></li>
						<li><a href="index.php?m=member&c=index&a=account_manage_password&t=1">修改密码</a></li>
						<li><a href="index.php?m=member&c=index&a=account_manage_avatar&t=1">修改头像</a></li>
						<li><a href="index.php?m=guestbook&c=index">留言板</a></li>
					</ul>
				</div>									
				<?php } else { ?>
				<a href="index.php?m=member&c=index&a=login" target="_blank"><div class="head-login">会员登录</div></a>
				<a href="index.php?m=member&c=index&a=register" target="_blank"><div class="head-reg">免费注册</div></a>	
				<?php } ?>
			</div>
		</div>
		<div class="navigation-down">
			<ul class="s-nav nav-down-menu" id="aboutus" _t_nav="aboutus" style="display:none;">
				<div class="m-content">
					<li style="margin-left:272px;"><a href="<?php echo $CATEGORYS['9']['url'];?>" target="_blank">可为简介</a></li>
					<li><a href="<?php echo $CATEGORYS['16']['url'];?>" target="_blank">可为历程</a></li>
					<li><a href="<?php echo $CATEGORYS['19']['url'];?>" target="_blank">精英团队</a></li>
				</div>
			</ul>
			<ul class="s-nav nav-down-menu" id="product" _t_nav="product" style="display:none;">
				<div class="m-content">
					<li style="margin-left:370px;"><a href="<?php echo $CATEGORYS['250']['url'];?>" target="_blank">可为EDUS</a></li>
					<li><a href="<?php echo $CATEGORYS['251']['url'];?>" target="_blank">可为CRM</a></li>
					<li><a href="<?php echo $CATEGORYS['252']['url'];?>" target="_blank">移动CRM</a></li>
				</div>	
			</ul>
			<ul class="s-nav nav-down-menu" id="service" _t_nav="service" style="display:none;">
				<div class="m-content">
					<li style="margin-left:550px;"><a href="<?php echo $CATEGORYS['34']['url'];?>" target="_blank">咨询服务</a></li>
					<li><a href="<?php echo $CATEGORYS['35']['url'];?>" target="_blank">实施服务</a></li>
					<li><a href="<?php echo $CATEGORYS['36']['url'];?>" target="_blank">售后服务</a></li>
					<li><a href="<?php echo $CATEGORYS['37']['url'];?>" target="_blank">个性化定制开发</a></li>
				</div>
			</ul>									
		</div>