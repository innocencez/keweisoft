<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><form method="post" action="<?php echo APP_PATH;?>index.php?m=formguide&c=index&a=show&formid=<?php echo $formid;?>&siteid=<?php echo $this->siteid;?>"<?php if($no_allowed) { ?> target="member_login"<?php } ?> name="myform" id="myform">
<p class="inb5-r-name">姓名</p>
<?php $n=1; if(is_array($forminfos_data)) foreach($forminfos_data AS $field => $info) { ?>
<?php if($n == 1) { ?>
<?php echo $info['form'];?>  
<?php } ?>
<?php $n++;}unset($n); ?>
<p class="inb5-r-name" style="margin-top:6px;">联系电话</p>
<?php $n=1; if(is_array($forminfos_data)) foreach($forminfos_data AS $field => $info) { ?>
<?php if($n == 2) { ?>
<?php echo $info['form'];?>  
<?php } ?>
<?php $n++;}unset($n); ?>
<p class="inb5-r-name" style="margin-top:6px;">公司名称</p>
<?php $n=1; if(is_array($forminfos_data)) foreach($forminfos_data AS $field => $info) { ?>
<?php if($n == 3) { ?>
<?php echo $info['form'];?>  
<?php } ?>
<?php $n++;}unset($n); ?>
<p class="inb5-r-name" style="margin-top:6px;">您的需求</p>
<?php $n=1; if(is_array($forminfos_data)) foreach($forminfos_data AS $field => $info) { ?>
<?php if($n == 4) { ?>
<?php echo $info['form'];?>  
<?php } ?>
<?php $n++;}unset($n); ?>
<br />
<input type="submit" name="dosubmit" id="dosubmit" value="提交" class="inb5-submit box-shadow-outset" />
</form>

