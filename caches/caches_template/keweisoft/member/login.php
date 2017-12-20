<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html >
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=7" />
<title>可为官网--会员登录</title>
<link href="<?php echo CSS_PATH;?>official/common.css" rel="stylesheet" type="text/css" />
<link href="<?php echo CSS_PATH;?>official/log.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo JS_PATH;?>jquery.min.js"></script>
<script type="text/javascript" src="<?php echo JS_PATH;?>cookie.js"></script>
<script type="text/javascript" src="<?php echo JS_PATH;?>member_common.js"></script>
<script type="text/javascript" src="<?php echo JS_PATH;?>dialog.js"></script>
<script type="text/javascript" src="<?php echo JS_PATH;?>formvalidator.js" charset="UTF-8"></script>
<script type="text/javascript" src="<?php echo JS_PATH;?>formvalidatorregex.js" charset="UTF-8"></script>
<script language="JavaScript">
<!--
$(function(){
	$.formValidator.initConfig({autotip:true,formid:"myform",onerror:function(msg){}});
	$("#username").formValidator({onshow:"<?php echo L('input').L('username');?>",onfocus:"<?php echo L('between_2_to_20');?>"}).inputValidator({min:2,max:20,onerror:"<?php echo L('between_2_to_20');?>"}).regexValidator({regexp:"ps_username",datatype:"enum",onerror:"<?php echo L('username').L('format_incorrect');?>"});
	$("#password").formValidator({onshow:"<?php echo L('input').L('password');?>",onfocus:"<?php echo L('password').L('between_6_to_20');?>"}).inputValidator({min:6,max:20,onerror:"<?php echo L('password').L('between_6_to_20');?>"});

});
//-->
</script>
</head>
<body>
<?php include template("content","header"); ?>
	<div class="login-banner">
		<div class="login-con">
			<div class="login-panel">
				<p class="login-tit">会员登陆</p>
				<form method="post" action="" onsubmit="save_username();" id="myform" name="myform">
					<input type="hidden" name="forward" id="forward" value="<?php echo $forward;?>">				
					<div class="input-l" style="margin-top:20px;"><label>用户名：</label><input type="text" id="username" name="username" class="input-text"></div>
					<div class="input-l"><label>密码：</label><input type="password" id="password" name="password" class="input-text"></div>	
					<div class="input-l"><label>验证码：</label><input type="text" id="code" name="code" style="width:128px; margin-right:8px;" size="10" class="input-text"><?php echo form::checkcode('code_img', '4', '14', 120, 38);?></div>
					<div class="input-l" style="height:20px; margin-top:10px;"><label></label><input id="cookietime" type="checkbox" value="2592000" name="cookietime">记住密码</div>
					<div class="submit"><label></label><input type="submit" id="submit" name="dosubmit" value="立即登录"></div>		
				</form>							
			</div>
		</div>
	</div>
<script language="JavaScript">
<!--

	$(function(){
		$('#username').focus();
	})

	function save_username() {
		if($('#cookietime').attr('checked')==true) {
			var username = $('#username').val();
			setcookie('username', username, 3);
		} else {
			delcookie('username');
		}
	}
	var username = getcookie('username');
	if(username != '' && username != null) {
		$('#username').val(username);
		$('#cookietime').attr('checked',true);
	}

	function show_login(site) {
		if(site == 'sina') {
			art.dialog({lock:false,title:'<?php echo L('sina_login');?>',id:'protocoliframe', iframe:'index.php?m=member&c=index&a=public_sina_login',width:'500',height:'310',yesText:'<?php echo L('close');?>'}, function(){
			});
		} else if(site == 'snda') {
			art.dialog({lock:false,title:'<?php echo L('snda_login');?>',id:'protocoliframe', iframe:'index.php?m=member&c=index&a=public_snda_login',width:'500',height:'310',yesText:'<?php echo L('close');?>'}, function(){
			});
		} else if(site == 'qq') {
			art.dialog({lock:false,title:'<?php echo L('qq_login');?>',id:'protocoliframe', iframe:'index.php?m=member&c=index&a=public_qq_login',width:'500',height:'310',yesText:'<?php echo L('close');?>'}, function(){
			});
		}
	}
//-->
</script>

<?php include template('content', 'footer'); ?>