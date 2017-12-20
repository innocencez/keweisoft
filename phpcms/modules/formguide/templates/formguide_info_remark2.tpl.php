<?php 
defined('IN_ADMIN') or exit('No permission resources.');
$show_header = 1;
include $this->admin_tpl('header', 'admin');
?>
<div class="pad-10">
<form method="post" action="index.php?m=formguide&c=formguide_info&a=public_remark&formid=<?php echo $formid;?>&did=<?php echo $did;?>" name="myform" id="myform">	
<table width="100%" cellspacing="0" class="table-list">
	<thead>
		<tr>
			<th width="15%" align="right"><?php echo L('selects')?></th>
			<th align="left"><?php echo L('values')?></th>
		</tr>
	</thead>
<tbody> 
	<tr>
		<td><?php echo "姓名"?>:</td>
		<td><?php echo $name;?></td>		
	</tr>
	<tr>
		<td><?php echo "联系电话"?>:</td>
		<td><?php echo $tel;?></td>		
	</tr>

	<tr>
		<td><?php echo "公司名称"?>:</td>
		<td><?php echo $Company;?></td>		
	</tr>
	<tr>
		<td><?php echo "邮箱"?>:</td>
		<td><?php echo $mail;?></td>		
	</tr>
	<tr>
		<td><?php echo "需求"?>:</td>
		<td><?php echo $need;?></td>		
	</tr>	
	<tr>
		<td><?php echo "备注"?>:</td>
		<td><textarea name="info[remarks]" cols="65" rows="8" ><?php echo $remarks; ?></textarea></td>		
	</tr>				
<input name="dosubmit" type="hidden" value="dosubmit" />
<tr>
      <th width="80">
	  </th>
      <td><input type="submit" class="button"  value=" <?php echo L('ok')?> "></td>
    </tr>
</tbody>
</table>
</form>
</div>
</body>
</html>