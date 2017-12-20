<?php
/**
 *  position_api.class.php 推荐至栏目接口类
 *
 * @copyright			(C) 2005-2010 PHPCMS
 * @license				http://www.phpcms.cn/license/
 * @lastmodify			2010-10-14
 * 重新修改，可推送附表字段，并去除转向链接
 * 推送相关的两个栏目需相同字段模型
 * @author kewei innocence_zhang
 *  
 */

defined('IN_PHPCMS') or exit('No permission resources.');

class push_api {
 	private $db, $pos_data; //数据调用属性
 	
	public function __construct(){
		$this->db = pc_base::load_model('content_model');  //加载数据模型
	}
	
	/**
	 * 接口处理方法
	 * @param array $param 属性请求时，为模型、栏目数组。提交添加为二维信息数据 。例：array(1=>array('title'=>'多发发送方法', ....))
	 * @param array $arr 参数 表单数据，只在请求添加时传递。 例：array('modelid'=>1, 'catid'=>12); 
	 */
	public function category_list($param = array(), $arr = array()) {
		if ($arr['dosubmit']) {
			$id = $_POST['id'];
			if(empty($id)) return true;
			$id_arr = explode('|',$id);
			if(count($id_arr)==0) return true;
			$old_catid = intval($_POST['catid']);
			if(!$old_catid) return true;
			$ids = $_POST['ids'];
			if(empty($ids)) return true;
			$ids = explode('|', $ids);
			$siteid = intval($_POST['siteid']);
			$siteids = getcache('category_content','commons');
			$oldsiteid = $siteids[$old_catid];
			$this->categorys = getcache('category_content_'.$oldsiteid,'commons');

			$modelid = $this->categorys[$old_catid]['modelid'];
			$this->db->set_model($modelid);
			$tablename = $this->db->table_name;
			$this->hits_db = pc_base::load_model('hits_model');
			foreach($id_arr as $id) {
	            $this->db->table_name = $tablename;
	            $r = $this->db->get_one(array('id'=>$id));
				//获取副表数据
	            $this->db->table_name = $tablename.'_data';
	            $r1 = $this->db->get_one(array('id'=>$id));
	            
	            $linkurl = preg_match('/^http:\/\//',$r['url']) ? $r['url'] : siteurl($siteid).$r['url'];
	            foreach($ids as $catid) {
	                    $siteid = $siteids[$catid];
	                    $this->categorys = getcache('category_content_'.$siteid,'commons');
	                    $modelid = $this->categorys[$catid]['modelid'];
	                    $this->db->set_model($modelid);
	                    
	                    //重置字段
	                    $inserts = $r;
	                    $inserts['url']=$linkurl;
	                    $inserts['catid']=$catid;
	                    $inserts['sysadd']=1;
	                    $inserts['islink']=0;
	                    unset($inserts['id']);//需要删除id,插入后获取新id
	                            $newid = $this->db->insert(
	                            $inserts,true);
	                    //副表相关
	                            $this->db->table_name = $this->db->table_name.'_data';

	                    $indata=$r1;
	                            $indata['id']=$newid;
	                            unset($indata['fxinfo']);//不需要的副表字段,用这个删除
	                            $this->db->insert($indata,true);//插入副表
	                            
	                            $hitsid = 'c-'.$modelid.'-'.$newid;
	                            $this->hits_db->insert(array('hitsid'=>$hitsid,'catid'=>$catid,'updatetime'=>SYS_TIME));
	                        }
			}
			return true;
		} else {
			$siteid = get_siteid();
			$this->categorys = getcache('category_content_'.$siteid,'commons');
			$tree = pc_base::load_sys_class('tree');
			$tree->icon = array('&nbsp;&nbsp;&nbsp;│ ','&nbsp;&nbsp;&nbsp;├─ ','&nbsp;&nbsp;&nbsp;└─ ');
			$tree->nbsp = '&nbsp;&nbsp;&nbsp;';
			$categorys = array();
			$this->catids_string = array();
			if($_SESSION['roleid'] != 1) {
				$this->priv_db = pc_base::load_model('category_priv_model');
				$priv_result = $this->priv_db->select(array('action'=>'add','roleid'=>$_SESSION['roleid'],'siteid'=>$siteid,'is_admin'=>1));
				$priv_catids = array();
				foreach($priv_result as $_v) {
					$priv_catids[] = $_v['catid'];
				}
				if(empty($priv_catids)) return '';
			}

			foreach($this->categorys as $r) {
				if($r['siteid']!=$siteid || $r['type']!=0) continue;
				if($_SESSION['roleid'] != 1 && !in_array($r['catid'],$priv_catids)) {
					$arrchildid = explode(',',$r['arrchildid']);
					$array_intersect = array_intersect($priv_catids,$arrchildid);
					if(empty($array_intersect)) continue;
				}
				if($r['child']) {
					$r['checkbox'] = '';
					$r['style'] = 'color:#8A8A8A;';
				} else {
					$checked = '';
					if($typeid && $r['usable_type']) {
						$usable_type = explode(',', $r['usable_type']);
						if(in_array($typeid, $usable_type)) {
							$checked = 'checked';
							$this->catids_string[] = $r['catid'];
						}
					}
					$r['checkbox'] = "<input type='checkbox' name='ids[]' value='{$r[catid]}' {$checked}>";
					$r['style'] = '';
				}
				$categorys[$r['catid']] = $r;
			}
			$str  = "<tr>
						<td align='center'>\$checkbox</td>
						<td style='\$style'>\$spacer\$catname</td>
					</tr>";
			$tree->init($categorys);
			$categorys = $tree->get_tree(0, $str);
			return $categorys;
		}
 }
}
 ?>