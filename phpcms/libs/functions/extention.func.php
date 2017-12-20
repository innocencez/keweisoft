<?php
/**
 *  extention.func.php 用户自定义函数库
 *
 * @copyright			(C) 2005-2010 PHPCMS
 * @license				http://www.phpcms.cn/license/
 * @lastmodify			2010-10-27
 */
/**
* 根据box类型字段获取显示名称
* @param $field 字段名称
* @param $value 字段值
* @param $modelid 字段所在模型id
* @param $flag 模型类型 0 普通模型 1 表单向导模型
*/
function box($field, $value, $modelid='',$flag=0) {
	if($flag == 1){
		$fields = getcache('formguide_field_'.$modelid,'model');
	}else{
		$fields = getcache('model_field_'.$modelid,'model');
	}
	extract(string2array($fields[$field]['setting']));
	$options = explode("\n",$fields[$field]['options']);
	foreach($options as $_k) {
		$v = explode("|",$_k);
		$k = trim($v[1]);
		$option[$k] = $v[0];
	}
	$string = '';
	switch($fields[$field]['boxtype']) {
		case 'radio':
			$string = $option[$value];
		break;
		case 'checkbox':
			$value_arr = explode(',',$value);
		foreach($value_arr as $_v) {
			if($_v) $string .= $option[$_v].' 、';
		}
		break;
		case 'select':
			$string = $option[$value];
		break;
		case 'multiple':
			$value_arr = explode(',',$value);
		foreach($value_arr as $_v) {
			if($_v) $string .= $option[$_v].' 、';
		}
		break;
	}
	return $string;
}

function get_guanlian($industry,$scale,$title){
	$conn = mysql_connect('localhost','root','51ecom') or die('cannot connect mysql.');
	$i = 0;
	$where = " 1=1";
	if(!empty($industry))
	{
		$where .= " and kwcrm_case.industry in(select kwcrm_linkage.linkageid from kwcrm_linkage where kwcrm_linkage.parentid = '".$industry."')";
	}
	if(!empty($scale))
	{
		$where .= " and kwcrm_case.scale = '".$scale."'";
	}
	if(!empty($title))
	{
		$where .=" and kwcrm_case.title like '%".$title."%'";
	}
	$sql = "select * from kwcrm_case where".$where;

	$result = mysql_query($sql,$conn);

	$arr = array();

	while($res = mysql_fetch_array($result,MYSQL_ASSOC))
	{
		$arr[$i] = $res;
		$i++;
	}

	return $arr;

}

function my_catpos($catid, $symbol=' > '){
	$category_arr = array();
	$siteids = getcache('category_content','commons');
	$siteid = $siteids[$catid];
	$category_arr = getcache('category_content_'.$siteid,'commons');
	if(!isset($category_arr[$catid])) return '';
	$pos = '';
	$siteurl = siteurl($category_arr[$catid]['siteid']);
	$arrparentid = array_filter(explode(',', $category_arr[$catid]['arrparentid'].','.$catid));
	foreach($arrparentid as $catid) {
		$url = $category_arr[$catid]['url'];
		if(strpos($url, '://') === false) $url = $siteurl.$url;
		$pos .= '<a href="'.$url.'">'.$category_arr[$catid]['catname'].'</a>'.$symbol;
	}
	return substr($pos,0,-2);
}

?>