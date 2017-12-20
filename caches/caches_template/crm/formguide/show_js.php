<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><script type="text/javascript" src="<?php echo JS_PATH;?>jquery.min.js"></script>
<script type="text/javascript" src="<?php echo JS_PATH;?>dialog.js"></script>
<script type="text/javascript" src="<?php echo JS_PATH;?>formvalidator.js" charset="UTF-8"></script>
<script type="text/javascript" src="<?php echo JS_PATH;?>formvalidatorregex.js" charset="UTF-8"></script>
<script type="text/javascript">
$(function(){
	$.formValidator.initConfig({autotip:true,formid:"myform",onerror:function(msg){}});

	$("#pername").formValidator({onshow:"<?php echo L('input').L('username');?>",onfocus:"姓名长度2-20位之间"}).inputValidator({min:2,max:20,onerror:"姓名长度应在2-20位之间"}).regexValidator({regexp:"ps_username",datatype:"enum",onerror:"姓名不合法"});
	
	$("#ptelphone").formValidator({onshow:"请输入手机号码",onfocus:"请输入手机号码"}).inputValidator({min:1,max:11,onerror:"请输入正确的手机号码"});
	$("#pcname").formValidator({onshow:"请输入公司名称",onfocus:"请输入公司名称"}).inputValidator({min:1,onerror:"请输入公司名称"});
	$("#pmail").formValidator({onshow:"请输入邮箱地址",onfocus:"请输入邮箱地址"}).inputValidator({min:1,onerror:"请输入邮箱地址"});
	$("#verify").formValidator({onshow:"请输入手机收到的验证码",onfocus:"请输入手机收到的验证码"}).inputValidator({min:1,onerror:"请输入手机收到的验证码"}).ajaxValidator({
			type : "get",
			url : "api.php",
			data :"op=sms_idcheck&action=id_code",
			datatype : "html",
			<?php if($member_setting['mobile_checktype']=='2') { ?>
			getdata:{mobile:"mobile"},
			<?php } ?>
			async:"false",
			success : function(data){
				if( data == "1" ) {
					return true;
				} else {
						return false;
				}
			},
			buttons: $("#dosubmit"),
			onerror : "验证码错误",
			onwait : "请稍候...",
			error:function(XMLResponse){alert(XMLResponse.responseText);},
		});

});
</script>
<link href="<?php echo CSS_PATH;?>table_form.css" rel="stylesheet" type="text/css" />
<link href="<?php echo CSS_PATH;?>dialog.css" rel="stylesheet" type="text/css" />
<form method="post" action="<?php echo APP_PATH;?>index.php?m=formguide&c=index&a=show&formid=<?php echo $formid;?>&siteid=<?php echo $this->siteid;?>"<?php if($no_allowed) { ?> target="member_login"<?php } ?> name="myform" id="myform" class="inb6-form">	
	<p class="item1">
		<label for="pname" style="margin-left:36px;">联系人：</label>
		<?php $n=1; if(is_array($forminfos_data)) foreach($forminfos_data AS $field => $info) { ?>	
			<?php if($n==3) { ?>
		    	<?php echo $info['form'];?>
			<?php } ?>
		<?php $n++;}unset($n); ?>
		<span class="star">*</span>
		<label for="company" style="margin-left:18px;">公司名称：</label>
		<?php $n=1; if(is_array($forminfos_data)) foreach($forminfos_data AS $field => $info) { ?>	
			<?php if($n==2) { ?>
			    <?php echo $info['form'];?>
			<?php } ?>
		<?php $n++;}unset($n); ?>	
	</p>
	<p class="item1" style="margin-top: 20px;">
		<label for="telphone" style="margin-left:18px;">联系方式：</label>
		<?php $n=1; if(is_array($forminfos_data)) foreach($forminfos_data AS $field => $info) { ?>	
			<?php if($n==4) { ?>
			    <?php echo $info['form'];?>
			<?php } ?>
		<?php $n++;}unset($n); ?>
		<span class="star">*</span>
		<label for="mail" style="margin-left:18px;">公司邮箱：</label>
		<?php $n=1; if(is_array($forminfos_data)) foreach($forminfos_data AS $field => $info) { ?>	
			<?php if($n==5) { ?>
		    	<?php echo $info['form'];?>
			<?php } ?>
		<?php $n++;}unset($n); ?>	
	</p>
	<p class="item2">
		<button class="get_verify" onclick="get_verify()">获取验证码</button>
		<script type="text/javascript">
		var times = 120;
		var isinerval;
		function get_verify() {
			var mobile = $("#ptelphone").val();
			var partten = /^1[3-9]\d{9}$/;
			if(!partten.test(mobile)){
				alert("请输入正确的手机号码");
				$('#ptelphone').focus();
				return false;
			}	
			$.get("api.php?op=sms",{ mobile: mobile,random:Math.random()}, function(data){
				if(data=="0") {
					$('#verifyTip').html('短信验证码已发送，请注意查收');
					times = 120;
					$(".get_verify").attr("disabled", true);
					isinerval = setInterval("CountDown()", 1000);
				} else if(data=="-1") {
					alert("你今天获取验证码次数已达到上限");
				} else if(data=="-100") {
					$('#code').val('');
					alert("验证码已失效，请点击图片验证码获取新的验证码！");
					$('#code').focus();
				} else if(data=="-101") {
					alert("验证码错误！");
					$('#code').focus();
				} else {
					alert("短信发送失败");
				}
			});
			
		}
		function CountDown() {
			if (times < 1) {
				$(".get_verify").html("获取验证码").attr("disabled", false);
				clearInterval(isinerval);
				return;
			}
			$(".get_verify").html(times+"秒后获取");
			times--;
		}	
		</script>
		<label for="verify" class="verify-label">短信校验码：</label>
		<input type="text" name="mobile_verify" id="verify">
		<label for="need" id="label-need">管理需求：</label>
		<?php $n=1; if(is_array($forminfos_data)) foreach($forminfos_data AS $field => $info) { ?>	
			<?php if($n==6) { ?>
			    <?php echo $info['form'];?>
			<?php } ?>
		<?php $n++;}unset($n); ?>	
	</p>
	<button class="btn1" type="submit"<?php if($no_allowed) { ?> disabled=""<?php } ?> name="dosubmit" id="dosubmit">免费申请</button><a href="http://www.keweisoft.com/login/login.html" target="_blank"><div class="btn2">会员登录</div></a>		
</form>