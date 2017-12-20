<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><script type="text/javascript" src="<?php echo JS_PATH;?>jquery.min.js"></script>
<script type="text/javascript" src="<?php echo JS_PATH;?>dialog.js"></script>
<script type="text/javascript" src="<?php echo JS_PATH;?>formvalidator.js" charset="UTF-8"></script>
<script type="text/javascript" src="<?php echo JS_PATH;?>formvalidatorregex.js" charset="UTF-8"></script>
<script type="text/javascript">
$(function(){
	$.formValidator.initConfig({autotip:true,formid:"myform",onerror:function(msg){}});

	$("#pername").formValidator({onshow:"<?php echo L('input').L('username');?>",onfocus:"用户名长度2-20位之间"}).inputValidator({min:2,max:20,onerror:"用户名长度应在2-20位之间"}).regexValidator({regexp:"ps_username",datatype:"enum",onerror:"用户名不合法"});
	
	$("#mobile").formValidator({onshow:"请输入手机号码",onfocus:"请输入手机号码"}).inputValidator({min:1,max:11,onerror:"请输入正确的手机号码"});

	$("#mobile_verify").formValidator({onshow:"请输入手机收到的验证码",onfocus:"请输入手机收到的验证码"}).inputValidator({min:1,onerror:"请输入手机收到的验证码"}).ajaxValidator({
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
<form method="post" action="<?php echo APP_PATH;?>index.php?m=formguide&c=index&a=show&formid=<?php echo $formid;?>&siteid=<?php echo $this->siteid;?>"<?php if($no_allowed) { ?> target="member_login"<?php } ?> name="myform" id="myform">
<div class="index-b4-need-left" id="animate20">
<p class="dev" style="margin-top:29px;"><span class="left">联系人：</span>
<?php $n=1; if(is_array($forminfos_data)) foreach($forminfos_data AS $field => $info) { ?>	
 <?php if($n==1) { ?>
 	<?php echo $info['form'];?>
	<?php if($info['star']) { ?> <span class="star">*</span><?php } ?> 
	<br /> 
<?php } ?>
<?php $n++;}unset($n); ?>
</p>
<p class="dev" style="margin-top:56px;"><span class="right">联系方式：</span>	
<?php $n=1; if(is_array($forminfos_data)) foreach($forminfos_data AS $field => $info) { ?>	
 <?php if($n==2) { ?>
 		
 	<?php echo $info['form'];?>
	<?php if($info['star']) { ?> <span class="star">*</span><?php } ?> <br>
<?php } ?>
<?php $n++;}unset($n); ?>	
</p>
<div class="dev" style="margin-top:56px;">
<button onclick="get_verify()" type="button" class="hqyz">获取短信验证码</button>	
	<script type="text/javascript">
		var times = 120;
		var isinerval;
		function get_verify() {
			var mobile = $("#mobile").val();
			var partten = /^1[3-9]\d{9}$/;
			if(!partten.test(mobile)){
				alert("请输入正确的手机号码");
				$('#mobile').focus();
				return false;
			}	
			$.get("api.php?op=sms",{ mobile: mobile,random:Math.random()}, function(data){
				if(data=="0") {
					$('#mobile_verifyTip').html('短信验证码已发送，请注意查收');
					times = 120;
					$(".hqyz").attr("disabled", true);
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
				$(".hqyz").html("获取短信验证码").attr("disabled", false);
				clearInterval(isinerval);
				return;
			}
			$(".hqyz").html(times+"秒后重新获取");
			times--;
		}
		
	</script>
		<div class="input"><label class="jym">短信校验码：</label><input type="text" name="mobile_verify" id="mobile_verify" value="" size="14" class="input-text"></div>	
</div>
<p class="dev" style="margin-top:13px;"><span class="left">产品版本：</span><span class="select-style">
<?php $n=1; if(is_array($forminfos_data)) foreach($forminfos_data AS $field => $info) { ?>	
 <?php if($n==6) { ?>
 	<?php echo $info['form'];?><br /> 
<?php } ?>
<?php $n++;}unset($n); ?>	
</span>
</p>
</div>
<div class="index-b4-need-right">
	<div class="scale">
		<span class="left">机构规模：</span>
		<div class="right">
			<?php $n=1; if(is_array($forminfos_data)) foreach($forminfos_data AS $field => $info) { ?>	
				<?php if($n==7) { ?>
				 	<?php echo $info['form'];?><br /> 
				<?php } ?>
			<?php $n++;}unset($n); ?>	
			<p class="word">（请正确选择机构规模，便于申请适用的产品版本！）</p>
		</div>
	</div>
	<div class="need">
		<div class="left">管理需求：</div>
		<div class="right">
			<?php $n=1; if(is_array($forminfos_data)) foreach($forminfos_data AS $field => $info) { ?>	
				<?php if($n==5) { ?>
				 	<?php echo $info['form'];?><br /> 
				<?php } ?>
			<?php $n++;}unset($n); ?>				
		</div>
	</div>
	<p class="dev-btn">
	<input type="submit"<?php if($no_allowed) { ?> disabled=""<?php } ?> name="dosubmit" id="dosubmit" value="免费申请" class="submit hvr-box-shadow-outset">
	<a href="http://www.keweisoft.com/login/login.html" target="_blank"><span class="login hvr-box-shadow-outset">会员登录</span></a>
	</p>	
</div>
</form>