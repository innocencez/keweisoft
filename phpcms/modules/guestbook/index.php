<?php
defined('IN_PHPCMS') or exit('No permission resources.');
class index {
	function __construct() {
		pc_base::load_app_func('global');
		$siteid = isset($_GET['siteid']) ? intval($_GET['siteid']) : get_siteid();
  		define("SITEID",$siteid);
  		$this->guestbook_db = pc_base::load_model('guestbook_model');
  		$this->_userid = param::get_cookie('_userid');
  		$this->_username = param::get_cookie('_username');
	}
	
	public function init() {
		$siteid = SITEID; 
 		$setting = getcache('guestbook', 'commons');
		$SEO = seo(SITEID, '', L('guestbook'), '', '');
		include template('guestbook', 'index');
	}
	
	 /**
	 *	留言板列表页
	 */
	public function list_type() {
		$siteid = SITEID;
  		$type_id = trim(urldecode($_GET['type_id']));
		$type_id = intval($type_id);
  		if($type_id==""){
 			$type_id ='0';
 		}
   		$setting = getcache('guestbook', 'commons');
		$SEO = seo(SITEID, '', L('guestbook'), '', '');
  		include template('guestbook', 'list_type');
	} 
	/*
	*	我的留言
	*/
	public function my_list(){
		if(!$this->_userid){
			showmessage(L('illegal_operation'),HTTP_REFERER);
		}else{
			$where = array('siteid'=>SITEID,'userid'=>$this->_userid);
			$r = $this->guestbook_db->select($where);
			$data = new_html_special_chars($r);
			include template('guestbook','my_list');
		}
	}
 	
	 /**
	 *	留言板留言 
	 */
	public function register() { 
		if(!$this->_userid || !$this->_username){
				showmessage(L('please_login'),"?m=member&c=index&a=login");
			}else{
		 		$siteid = SITEID;
		 		if(isset($_POST['dosubmit'])){
					if($_POST['introduce']==""){
		 				showmessage(L('introduce_noempty'),"?m=guestbook&c=index&a=register&siteid=$siteid");
		 			}
		 			$guestbook_db = pc_base::load_model(guestbook_model);
		 			 
					 /*添加用户数据*/
		 			$sql = array('siteid'=>$siteid,'userid'=>$this->_userid,'username'=>$this->_username,'introduce'=>$_POST['introduce'],'addtime'=>time());
		 			 
		 			$guestbook_db->insert($sql);
		 			showmessage(L('add_success'), "?m=guestbook&c=index&siteid=$siteid");
		 		}else {
		  			$setting = getcache('guestbook', 'commons');
		 			if($setting[$siteid]['is_post']=='0'){
		 				showmessage(L('suspend_application'), HTTP_REFERER);
		 			}
		 			$username = $this->_username;
		 			pc_base::load_sys_class('form', '', 0);
		 			$setting = getcache('guestbook', 'commons');
		 			$SEO = seo(SITEID, '', L('application_guestbook'), '', '');
		   			include template('guestbook', 'register');			
				}
			}

	}	
}
?>