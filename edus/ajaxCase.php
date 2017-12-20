<?php 
/**
 * ajax案例
 */
define('EDUS_PATH', dirname(__FILE__).DIRECTORY_SEPARATOR);
define('PHPCMS_PATH',EDUS_PATH.'..'.DIRECTORY_SEPARATOR);
include PHPCMS_PATH.'phpcms/base.php';
//判断是否为ajax提交
if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'){
	$special_db = pc_base::load_model('special_model');
	if($_POST['key'] == 'scale'){
		$where = $_POST['key']." = '".$_POST['val']."'";
	}else{
		$where = $_POST['key']." like '%".urldecode($_POST['val'])."%'";
	}
	
	$result = $special_db->select($where);
	foreach ($result as $k => $v) {
		$result[$k]['scale'] = get_linkage($result[$k]['scale'],3370,'>>',0);
		$result[$k]['description'] = str_cut($result[$k]['description'],120,'...');
		$result[$k]['func_tags'] = str_cut($result[$k]['func_tags'],50,'...');
	}	
	
	echo json_encode($result);
}else{
	showmessage('非法请求',HTTP_REFERER);
}
?>