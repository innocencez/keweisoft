/*本脚本工具基于jquery,所以在您使用时需要引入jquery*/
/*----------------------------------------------------------------------------------*/
/*
* 全选/全不选checkbox
* name:				checkbox名称
* flag:				true=全选,false=全不选
* ctrlBoxId:		控制checkbox全选/全不选的复选框id(非必须)
* includeDisabled	disabled的复选框是否也控制选中/不选(非必须)
*/
function ctrlCheckBoxAll(name,flag,ctrlBoxId,includeDisabled){
	if(name){
		$("input[type='checkbox'][name='"+name+"']").each(function(i){
			if($(this).attr("disabled")){
				if(!includeDisabled){
					return true;//false时相当于break, 如果return true 就相当于continue
				}
			}
			$(this).attr("checked",flag);
			if(ctrlBoxId){
				$("#"+ctrlBoxId).attr("checked",flag);
			}
		});
	}
}


/* 点击跳转至查看日志页面
 * $div:修改弹出层存放div的jquery对象
 * tableId：当前对象的id
 * mainId:当前数据的id
 * tableIds：当前对象的id
 * pageId:当前页面的id
 */
function showUpdatePage($div, tableId, mainId, tableIds, pageId){
	if(!isNaN(mainId) && !isNaN(tableId) && !isNaN(pageId)){
		//alert(tableId+"-tableId-mainId-"+mainId+"  $div-"+$($div).attr("id")+" pageId-"+pageId);
		var oldHtml = $($div).html();  //当前记录的最新数据
		$.ajax({
			type:'post',
			url:'log_toLogView.do',
			data:{"mainId":mainId,"tableId":tableId,"pageId":pageId,"oldHtml":oldHtml},
			success : function (data) {
				var newDivId = $($div).attr("id")+"_log";  //存放日志div的id
				if($("#"+$($div).attr("id")).find("div[id='"+ newDivId +"_tab']").length == 0 && data != ""){
					$("#"+$($div).attr("id")).append("<div id ='"+ newDivId +"_tab' style='display:none'><ul id='"+ newDivId +"_ul'></ul></div>");
					var updatelog = JSON.parse(data);
					for(var i =0 ;i<updatelog.length;i++){
						//修改页面可能有多个页面 点击保存时时循环form的type=7的时候才提交的 所以在这要将heml的from type，name清空
						//var divHtml = $(updatelog[i].updatePageLog).find("form").html();
						$("#"+newDivId+"_tab").append("<div id='tab"+ i +"'><div class='edus_add'>"+ updatelog[i].updatePageLog+"</div></div>");
						$("#"+newDivId+"_tab").find("ul[id='"+ newDivId +"_ul']").append("<li><a href='#tab"+ i +"'>日志("+ i +"-修改人:"+ updatelog[i].userName +")--"+ updatelog[i].updateTime +"</a></li>");
					}
					$("#"+newDivId+"_tab").find("form").removeAttr("type");
					$("#"+newDivId+"_tab").find("form").removeAttr("name");
					//将页面中的弹出层、下拉树、多选的事件去掉
					$("#"+newDivId+"_tab").find("input[type='text']").attr("readonly","readonly");
					$("#"+newDivId+"_tab").find("input").unbind("click");
					$("#"+newDivId+"_tab").find(".om-combo").children().eq(0).omCombo({'disabled':true});
					
					//检查 变色
					$("div[id='"+ newDivId +"_tab']").children("div[id^='tab']").each(function(i,one){
						 inspectColor($("#"+$($div).attr("id")).find("table[name='addTab_"+ tableId +"_"+ pageId +"']"),$(one).find("table[name='addTab_"+ tableId +"_"+ pageId +"']"));
					});
					
					$("#"+newDivId+"_tab").show();
					$('#'+newDivId+'_tab').omTabs({
		                width: 'auto',
		                height: 'auto',
		                closable : true
		            });
				}
			}
		});
	}
}

/* 检查日志中对比 将不一样的东西都变色
 * $newDiv:当前数据存在的div对象
 * $oldDiv：日志数据的html
 */	
function inspectColor($newTable,$oldTable){
	$newTable.find("tbody").children("tr").each(function(m,trOne){
		$(trOne).children("td").each(function(i,one){
			var $oldTd = $oldTable.find("tbody").children('tr:eq('+m+')').children('td:eq('+i+')');
			if($(one).children("table").length > 0){
				if($oldTd.children("table").attr("id") == $(one).children("table").attr("id")){
					inspectColor($(one).children("table"),$oldTd.children("table"));
				}
			}else{
				var fieldrole = $(one).find("input[type!='hidden']").attr("fieldrole");
				//alert("td:i--"+i+"---fieldrole:"+fieldrole);
				if(!isNaN(fieldrole) && fieldrole*1 > 0){
					var newInputName = $(one).find("input[fieldrole='"+ fieldrole +"']").attr("name");
					var newHidvalue = $(one).find("input[fieldrole='"+ fieldrole +"']").attr("hidvalue");  //内部对象,内部对象多值才有的属性
					var newDicchildshow = $(one).find("input[fieldrole='"+ fieldrole +"']").attr("dicchildshow");//单选、多选才有的属性
					
					//alert(newHidvalue + '----i:'+ i +'-----' + newDicchildshow);
					if(newHidvalue == undefined && newDicchildshow == undefined){
						var newInputValue = $(one).find("input[name='"+ newInputName +"']").val();
						var oldInputValue = $oldTd.find("input[name='"+ newInputName +"']").val();
						if(newInputValue != oldInputValue){
							$oldTd.find("input[name='"+ newInputName +"'],[fieldrole='"+ fieldrole +"']").css("background","#FFE4B5");
						}
					}else if(newHidvalue != undefined){
						//弹出层
						var oldHidvalue = $oldTd.find("input[name='"+ newInputName +"']").attr("hidvalue"); //日志中的hidValue
						
						var newHidvalueArr = newHidvalue.split(" ");
						var newHidvalueArray =  new Array;
						for(var i =0;i< newHidvalueArr.length;i++){
							newHidvalueArray[i] = newHidvalueArr[i].substr(newHidvalueArr[i].indexOf(","));
						}
						var oldHidvalueArr = (oldHidvalue==undefined?"":oldHidvalue.split(" "));
						var oldHidvalueArray =  new Array;
						for(var i =0;i< oldHidvalueArr.length;i++){
							oldHidvalueArray[i] = oldHidvalueArr[i].substr(oldHidvalueArr[i].indexOf(","));
						}
						//alert(newHidvalueArray.join(",")+"--------"+oldHidvalueArray.join(","));
						if(newHidvalueArray.join(",") != oldHidvalueArray.join(",")){
							$oldTd.find("input[name='"+ newInputName +"'],[fieldrole='"+ fieldrole +"']").css("background","#FFE4B5");
						} 
					}else if(newDicchildshow != undefined){
						//获取值
						var newValue = $(one).find("input[name='"+ newInputName +"']").omCombo('value');
						var lodValue = $oldTd.find("input[name='"+ newInputName +"']").omCombo('value');
						//alert(newValue + "  : 现在单选旧的 ： "+lodValue);
						if(newValue != lodValue){
							$oldTd.find("input[name='"+ newInputName +"'],[fieldrole='"+ fieldrole +"']").css("background","#FFE4B5");
						}
					}
				}
			}
		});
	});
}

/*
* 全选/反选复选框
* cboxId:       	控制全选/反选的复选框
* cbName:       	复选框名称
* includeDisabled	disabled的复选框是否也选中
*/
function tabCheckbox(cboxId,cbName,includeDisabled){
	if(cboxId && cbName){
		$("input[type='checkbox'][name='"+cbName+"']").each(function(i){
			if($(this).attr("disabled")){
				if(!includeDisabled){
					return true;//false时相当于break, 如果return true 就相当于continue
				}
			}
			$(this).attr("checked",$("#"+cboxId).is(":checked"));
		});
		var f_str="callback4CheckAll_"+cboxId,f_=null;//选中所有指定名称的复选框后的回调函数,如果存在则调用它
		if(objIsFunction(f_str)){
			eval(f_str)($("#"+cboxId).is(":checked"));
		}
	}
}
function objIsFunction(obj){
	return obj&&(obj in window)&&(typeof(obj)=="function"||typeof(eval(obj))=="function");
}
/*
* 点击复选框时控制主checkbox是否选中
* cboxId:       	控制全选/反选的复选框
* cbName:       	复选框名称
*/
function ifCtrlCbChecked(cboxId,cbName){
	if(cboxId && cbName){
		$("input[type='checkbox']#"+cboxId).attr("checked",
			$("input[type='checkbox'][name='"+cbName+"']:not(:checked)").length<=0&&
			$("input[type='checkbox'][name='"+cbName+"']").length>0);
	}
}
/*
* 根据选择过的值默认选中指定复选框
* cbName:       	复选框名称
* checkedVals：             选择过的值集合(数组格式)
*/
function subCbsChecked(cbName,checkedVals){
	if(cbName&&checkedVals&&checkedVals.length>0){
		$("input[type='checkbox'][name='"+cbName+"']").each(function(i){
			if($.inArray($(this).val(), checkedVals)!=-1){
				$(this).attr("checked",true);
			}else{
				$(this).attr("checked",false);
			}
		});
	}
}
/*
* 得到复选框值的数组
* cbName: 复选框名称
* 返回数组
*/
function selectedValues(cbName){
	var ids=[];
	if(cbName){
		$("input[type='checkbox'][name='"+cbName+"']").each(function(i){
			if($(this).attr("checked")){
				ids.push($(this).val());
			}
		});
	}
	return ids;
}
/*
* 阻止event的默认动作(IE,safari,chrome有event对象,firefox没有)
*/
function preventEventDefault(evt){
	evt=evt ? evt : (window.event ? window.event : null);
	if(evt){
		if(window.event){
			evt.returnValue=false;
		}else{
			evt.preventDefault();
		}
	}
}
/*
* 复制一个form中的参数到另外一个form
*/
function copyFormParams2Other(srcFormId,destFormId){
	if(srcFormId&&destFormId){
		var destForm_0=$("#"+destFormId);
		var paramStr=$("#"+srcFormId).serialize();
		if(destForm_0&&paramStr){
			var splits0=paramStr.split("&");
			if(splits0){
				$("form#"+destFormId+" > input[type='hidden']").remove();
				for(var i0=0;i0<splits0.length;i0++){
					var sp0=splits0[i0];
					if(sp0){
						var splits1=sp0.split("=");
						if(splits1){
							var k=splits1[0];
							if(k){
								var v=splits1[1];
								destForm_0.append("<input type='hidden' name='"+k+"' value='"+decodeURIComponent(v)+"'/>");
							}
						}
					}
				}
			}
		}
	}
}

/*
* 序列化表单，传递表单id;转换成JSON格式
*/
function copyFormParams2Json(srcFormId){
	var resultStr = "{";
	if(srcFormId){
		var paramStr=$("#"+srcFormId).serialize();
		if(paramStr){
			var splits0=paramStr.split("&");
			if(splits0){
				for(var i0=0;i0<splits0.length;i0++){
					var sp0=splits0[i0];
					if(sp0){
						var splits1=sp0.split("=");
						if(splits1){
							var k=splits1[0];
							if(k){
								var v=splits1[1];
								var b = v.replace(/\+/g," ");
								resultStr += "" + k + ":" + "'" + decodeURIComponent(b) + "',"
							}
						}
					}
				}
			}
		}
	}
	if(resultStr.lastIndexOf(",") == (resultStr.length-1)) {
		resultStr = resultStr.substring(0,resultStr.length-1);
	}
	resultStr += "}";
	eval("var tmp=" + resultStr);
	return tmp;
}


/*
* 取消选择指定名称的单选按钮
*/
function uncheckRadio(radioName){
	if(radioName){
		$("input[type='radio'][name='"+radioName+"']").each(function(i){
			$(this).attr("checked",false);
		});
	}
}
/*
* 取消选择指定名称的单选按钮
*/
function uncheckCheckBox(cbName){
	if(cbName){
		$("input[type='checkbox'][name='"+cbName+"']").each(function(i){
			$(this).attr("checked",false);
		});
	}
}

/*-------------------------------基于artDialog,页面需要引入对应文件--------------------------------------*/
/*
* 关闭artDialog的弹出层
*/
function closeArtDialog(dialogId){
	if(dialogId){
		art.dialog({id: dialogId}).close();
	}
}
/*
* 给class=table的表格的偶数行添加class值为tr_alt
*/
function tabTrColor(){
	$("table.table").find("tr").removeClass("tr_alt");
	$("table.table").find("tr").filter(":even").addClass("tr_alt");
}
function bind2CloseStartMenu(docIframe_jq){
	var evtname_2bind="mousedown.hideStartMenu";//namespace=hideStartMenu,防止重复绑定
	if(docIframe_jq!=null){
		var top_=window.top;
		if(top_ != null && top_!=window.self && "edus_home_page" == top_.name){
			docIframe_jq.unbind(evtname_2bind);
			docIframe_jq.bind(evtname_2bind,function(){
				//alert("hide start menu in login-success.jsp!!");
				//top_.hideStartMenu();
			});
		}
	}
}
function bind2SetWin2Top(docIframe_jq){
	var evtname_2bind="mousedown.setWin2Top";//namespace=setWin2Top,防止重复绑定
	if(docIframe_jq!=null){
		var top_=window.top;
		if(top_ != null && top_!=window.self && "edus_home_page" == top_.name){
			var parent_=window.parent;
			var iframe_win=window;
			while(parent_ != null && parent_ != window.self){
				if("edus_home_page" != parent_.name){
					iframe_win=parent_;
					parent_=parent_.parent;
				}else{
					break;
				}
			}
			var iframe_=iframe_win.frameElement;
			if(iframe_ && iframe_.id){
				var pre_="iframe_extWin_";
				var idx_=iframe_.id.indexOf(pre_);
				if(idx_ == 0){
					docIframe_jq.unbind(evtname_2bind);
					docIframe_jq.bind(evtname_2bind,function(){
						top_.setExtWin2Top(iframe_.id.substr(idx_+pre_.length));
					});
				}
			}
		}
	}
}
/*隐藏WdatePicker日期控件框(此日期框只有1个)*/
function bind2HideWdatePicker(docIframe_jq){
	if(docIframe_jq){
		var evtname_2bind="mousedown.hideDatePickerDiv";
		var top_=window.top;
		if(top_ != null && "edus_home_page" == top_.name){
			docIframe_jq.unbind(evtname_2bind);
			docIframe_jq.bind(evtname_2bind,function(){
				$(top_.document).find("div.WdatePicker4Edus_notExists").each(function(i){
					$(this).hide();
				});
			});
		}
	}
}
/*
String.prototype.startsWith=function(str){
	if(str==null||str==""||this.length==0||str.length>this.length){
		return false;
	}
	if(this.substr(0,str.length)==str){
		return true;
	}else{
		return false;
	}
	return true;
}
String.prototype.endsWith=function(str){
	if(str==null||str==""||this.length==0||str.length>this.length){
		return false;
	}
	if(this.substring(this.length-str.length)==str){
		return true;
	}else{
		return false;
	}
	return true;
}*/
/*
* 
*/
if((typeof $) != "undefined"){
	$(document).ready(function(){
		/*$("table.table tr").mouseover(function(){
			//$(this).children("td").find('.more_action').show();//显示隐藏掉的更多操作单元格
			$(this).addClass("tr_mouse_over");})
		.mouseleave(function(){
			//$(this).children("td").find('.more_action').hide();
			$(this).removeClass("tr_mouse_over");
		});*/
		tabTrColor();
		//bind2CloseStartMenu($(this));
		bind2SetWin2Top($(this));
		bind2HideWdatePicker($(this));
		fixPng4IE6();
		//触发浏览器预先缓存 art dialog 背景图片(将artDialog.js中的代码屏蔽:查找"-9999em"那一段)
		if(! window._count_edus_art_dialog){
			window._count_edus_art_dialog=0;
		}
		if(window._count_edus_art_dialog===0){
			if((typeof art) != "undefined"){
				window._count_edus_art_dialog=1;
				artDialog({left: '-9999em',time: 1,fixed: false,lock: false,focus: false});
			}
		}
	});
}
function fixPng4IE6(cfg){
	if($.browser.msie){
		var v_=$.browser.version;
		if ((v_<=6) && (document.body.filters) && (typeof unitPngFix!="undefined")){
			unitPngFix(cfg);
		}
	}
}
function isIE6OrLess(){
	return $.browser.msie && $.browser.version<=6;
}
function bindEnter2Input(eleIdsArr, callback){
	if(eleIdsArr && $.isFunction(callback)){
		var evt_name_="keyup.enter2DoSome";
		if($.isArray(eleIdsArr)){
			$.each(eleIdsArr,function(i, v){
				$("#"+v).unbind(evt_name_).bind(evt_name_, function(e){
					if(e.which==13){
						$(this).blur();
						callback();
					}
				});
			});
		}
	}
}
/*
* 给指定元素的子元素(input text类型)绑定enter事件(搜索时使用)
* parentNodeId	指定的元素的id
* callback		回调函数
*/
function bindEnter2SubInputs(parentNodeId, callback){
	if(parentNodeId && $.isFunction(callback)){
		var evt_name_="keyup.enter2DoSome";
		$("#"+parentNodeId).find("input[type='text']").each(function(i, v){
			$(this).unbind(evt_name_).bind(evt_name_, function(e){
				if(e.which==13){
					$(this).blur();
					callback();
				}
			});
		});
	}
}
var loading_tip="<div class='loading'><span><div>正在获取数据,请稍等...</div></span></div>";
var server_error_tip="<div style='text-align:center;'><span><div>抱歉,服务器发生错误</div></span></div>";
/*
* 将&#21556;转换为显示字
*/
function myEscape(str){
	if(str==null){
		return "";
	}
	var tmp_0=str.replace(/\&\#\d+\;/g,function(str){return String.fromCharCode(str.substring(2,str.length-1));});
	return unescape(escape(tmp_0));
}
function closeWebPage(){
	if($.browser.msie){
		if($.browser.version<=6){
			window.opener=null;
			window.close();
		}else{
			window.open('', '_top');
			window.top.close();
		}
	}else if($.browser.mozilla){
		//window.location.href='about:blank';
		try{
			//netscape.security.PrivilegeManager.enablePrivilege('UniversalXPConnect');
			netscape.security.PrivilegeManager.enablePrivilege("UniversalBrowserRead");
		}catch(e){
			alert('无法关闭该网页,由于浏览器安全设置.为了克服这一点,请按照下列步骤操作:'+
			'\n(1) 在地址栏输入"about:config"'+
			'\n(2) 然后搜索:"dom.allow_scripts_to_close_windows"'+
			'\n(3) 右键该选项,选择切换,将值修改为true即可');
		}
		window.close();
	}else{
		window.opener=null;
		window.open('', '_self', '');
		window.close();
	}
}
/*
* 判断某个dom对象是否在指定容器元素之中(即:ele_的所有父级元素中是否包括指定的容器元素)
* ele_				要判断的dom对象
* container_ele_id	容器元素id
* flag				true:包括ele_就是指定容器元素的情况,否则,不包括
*/
function isEleInContainer(ele_,container_ele_id,flag){
	if(!ele_||!container_ele_id){
		return false;
	}
	var p_=flag?ele_:ele_.parentElement;
	while(p_!=null){
		if(container_ele_id==p_.getAttribute("id")){
			return true;
		}
		p_=p_.parentElement;
	}
	return false;
}
/*跳转组织机构图共通js add by liuhj 20120721*/
function jumpOrgChart(url){
	if(url){
		eval("window.location.href = '" +url + "'");
	}

}
/*返回js add by liuhj 20120721*/
function returnBack(){
  window.history.go(-1);
}

/*树菜单的展开定位实现step01  add by liuhj 20120926
 * 存放已经展开的节点的编号数组
 */
function saveTreeExpend(treeId){
	var _expArr = [] ;
  	var treeObj = $.fn.zTree.getZTreeObj(treeId);
  	if(treeObj){
  		var nodes = treeObj.transformToArray(treeObj.getNodes());
		for( var _i in nodes){
			if(nodes[_i].open){
			_expArr.push(nodes[_i].id);
			}
		}
  	}
	return _expArr;
}

/*树菜单的展开定位实现step02 add by liuhj 20120926
 *根据节点数组，展开节点
 */
function expend4Tree(_expArr,treeId){
	if(_expArr){
		if(_expArr.length > 0){
			var treeObj = $.fn.zTree.getZTreeObj(treeId);
	  		if(treeObj){
	  			var nodes = treeObj.transformToArray(treeObj.getNodes());
				for(var _j in _expArr){
					for(var _m in nodes){
						if(nodes[_m].id == _expArr[_j]){
							treeObj.expandNode(nodes[_m], true, false, true);
						}
					}
				}
	  		}
		}
	}
}

/*
* 序列化表单，传递表单id;转换成JSON格式
*/
function copyFormParams2Json(srcFormId){
	var resultStr = "{";
	if(srcFormId){
		var paramStr=$("#"+srcFormId).serialize();
		if(paramStr){
			var splits0=paramStr.split("&");
			if(splits0){
				for(var i0=0;i0<splits0.length;i0++){
					var sp0=splits0[i0];
					if(sp0){
						var splits1=sp0.split("=");
						if(splits1){
							var k=splits1[0];
							if(k){
								var v=splits1[1];
								var b = v.replace(/\+/g," ");
								resultStr += "" + k + ":" + "'" + decodeURIComponent(b) + "',"
							}
						}
					}
				}
			}
		}
	}
	if(resultStr.lastIndexOf(",") == (resultStr.length-1)) {
		resultStr = resultStr.substring(0,resultStr.length-1);
	}
	resultStr += "}";
	eval("var tmp=" + resultStr);
	return tmp;
}

/**
 *	日期格式化
 */
Date.prototype.format = function(format){ 
	var o = { 
	"M+" : this.getMonth()+1, //month 
	"d+" : this.getDate(), //day 
	"h+" : this.getHours(), //hour 
	"m+" : this.getMinutes(), //minute 
	"s+" : this.getSeconds(), //second 
	"q+" : Math.floor((this.getMonth()+3)/3), //quarter 
	"S" : this.getMilliseconds() //millisecond 
	} 
	
	if(/(y+)/.test(format)) { 
	format = format.replace(RegExp.$1, (this.getFullYear()+"").substr(4 - RegExp.$1.length)); 
	} 
	
	for(var k in o) { 
	if(new RegExp("("+ k +")").test(format)) { 
	format = format.replace(RegExp.$1, RegExp.$1.length==1 ? o[k] : ("00"+ o[k]).substr((""+ o[k]).length)); 
	} 
	} 
	return format; 
} 

/**
*求两个数组之间的差集
*/
Array.prototype.contains = function(item){
    return RegExp(item).test(this);
};

/**
* each是一个集合迭代函数，它接受一个函数作为参数和一组可选的参数
* 这个迭代函数依次将集合的每一个元素和可选参数用函数进行计算，并将计算得的结果集返回
     var a = [1,2,3,4].each(function(x){return x > 2 ? x : null});
     var b = [1,2,3,4].each(function(x){return x < 0 ? x : null});
     alert(a);
     alert(b);
* @param {Function} fn 进行迭代判定的函数
* @param more ... 零个或多个可选的用户自定义参数
* @returns {Array} 结果集，如果没有结果，返回空集
*/
Array.prototype.each = function(fn){
    fn = fn || Function.K;
     var a = [];
     var args = Array.prototype.slice.call(arguments, 1);
     for(var i = 0; i < this.length; i++){
         var res = fn.apply(this,[this[i],i].concat(args));
         if(res != null) a.push(res);
     }
     return a;
};

/**
* 得到一个数组不重复的元素集合<br/>
* 唯一化一个数组
* @returns {Array} 由不重复元素构成的数组
*/
Array.prototype.uniquelize = function(){
     var ra = new Array();
     for(var i = 0; i < this.length; i ++){
         if(!ra.contains(this[i])){
            ra.push(this[i]);
         }
     }
     return ra;
};
	
	Array.minus = function(a, b){
     return a.uniquelize().each(function(o){return b.contains(o) ? null : o});
};


/**
* 获得某一元素在数组中的位置
* 如果不在数组中，返回-1
*/
Array.prototype.indexOf = function(Object){  
    for(var i = 0;i<this.length;i++){  
        if(this[i] == Object){  
            return i;  
        }  
    }  
    return -1;  
};



	/*
	* 全选/反选复选框
	* cboxId:       	控制全选/反选的复选框
	* cbName:       	复选框名称
	* includeDisabled	disabled的复选框是否也选中
	*/
	function tabCheckboxDownFiel(cboxId,cbName,includeDisabled){
		var nowCheck = document.getElementById(cboxId).checked;
		if(cboxId && cbName){
			$("input[type='checkbox'][name='"+cbName+"']").each(function(i){
				if($(this).attr("disabled")){
					if(!includeDisabled){
						return true;//false时相当于break, 如果return true 就相当于continue
					}
				}
				if(nowCheck == undefined) {
					nowCheck = false;
				}
				$(this).attr("checked",nowCheck);
			});
		}
	}
	
	/**打开弹层的方法**/
	function omDialogFun(divId, tname, width, buttons, data,closeRemove,autoOpen, modal) {
		var windowHeight = $(document.body).outerHeight(true);
		var initHeight = windowHeight * 0.9;
		if(closeRemove == null) {
            closeRemove = true;
        }
        if(autoOpen == null){
            autoOpen = true;
        }
		if(modal == null) {
			modal = true;
		}
		var divObj=(typeof divId=='string')?$("#" + divId):divId;
        if(data != null) {
			divObj.html(data);
		}
      	divObj.omDialog({
			autoOpen: autoOpen,
			title: tname,
			width: width,
			maxHeight: initHeight,
			closeRemove : closeRemove,
			minHeight:200,
			modal: modal,
			buttons:buttons
		});
	}
	
	function closeDialogFun(divId) {
		var divObj=(typeof divId=='string')?$("#" + divId):divId;
		divObj.omDialog("closeAndRemove");
	}
	
	
		/*保存班型*/
	function XQY_saveCheckFlow(){
		var toHouTai = "";
		$("#cpMainDivId").find("select[name='fuType']").each(function () {
			toHouTai += "&frId=" + $(this).attr("frId");
			toHouTai += "&dataCheckId=" + $(this).attr("dataCheckId");
			toHouTai += "&fuType=" + $(this).val();
			toHouTai += "&flowRemark=" + $(this).closest("tr").find("input[name='flowRemark']").val();
		});
		$.ajax({
			type: "post",
			url: "newflow_userCheck.do",
			data: toHouTai,
			success: function(data){
				if(data != null && data.length > 0) {
					$.omMessageTip.show({
				    	title : '审核通过',
				    	content : '正在开始保存数据！',			    	
				        timeout : 3000
	        		});
	        		$.ajax({
						type: "post",
						url: data,
						data:{
							'ifNoIntercept':1
						},
						success: function(data){
							$.omMessageTip.show({
						    	title : '保存数据结束',
						    	content : '保存数据结束,可去相应模块查看数据！',			    	
						        timeout : 3000
			        		});
						}
					});
				} else {
					$.omMessageTip.show({
				    	title : '操作成功',
				    	content : '审核信息已保存！',			    	
				        timeout : 3000
	        		});
				}
				//refreshTab();
				$(".om-buttonbar").find('.om-btn-txt').each(function(){
					if($(this).text() == "查询") {
						$(this).omButton('click');
					}
				});						
				
				closeDialogFun("xqy_flow_check");
			},
			 error: function(){}
		});
		
	}
	
	
	/**
	 * 跳转至审核的页面
	 * dataId 当前记录主键
	 * tableId 表主键
	 * XQY_FR_DATA 所有审核的详细信息
	 * NEXT_USER_ID 审核流程当前需要审核的人
	 */
	function onXqyFlowCheck(dataId,tableId,XQY_FR_DATA,NEXT_USER_ID){
		if($("body").find("#xqy_flow_check").length == 0) {
			$("body").append('<div id="xqy_flow_check" ></div>');
		}
		$.ajax({
		   		type:'post',
		   	  	url:'newflow_toUserCheck.do',	
		   	  	data: {"dataId":dataId,"tableId":tableId,"XQY_FR_DATA":XQY_FR_DATA,"NEXT_USER_ID":NEXT_USER_ID},	
			  	success:function (data){
			  		$("#xqy_flow_check").html(data);
			  	 	omDialogFun('xqy_flow_check', '审核', '70%',[
						{
							text : "保存",
							id : "saveStuId", 
							click :function(){
								XQY_saveCheckFlow();
							}
						},{
							text : "取消", 
							click :function(){
								closeDialogFun("xqy_flow_check");
							}
						}
					]);
			  	}	
		    });
		$("#dialog-modal").omDialog('isopen');
	}
	
	
	
	function addXqyFlowCheck(FLOW_LMF_REAL_ID,TABLE_ID,XQY_FR_DATA, NEXT_USER_ID) {
		if($("body").find("#xqy_flow_check").length == 0) {
			$("body").append('<div id="xqy_flow_check" ></div>');
		}
		$.ajax({
	   		type:'post',
	   	  	url:'newflow_toCfFlow.do',	
	   	  	data: {"FLOW_LMF_REAL_ID":FLOW_LMF_REAL_ID,"XQY_FR_DATA" : XQY_FR_DATA, "NEXT_USER_ID" : NEXT_USER_ID, "TABLE_ID" : TABLE_ID},	
		  	success:function (data){
		  		$("#xqy_flow_check").html(data);
		  	 	omDialogFun('xqy_flow_check', '触发审核', '500px',[
					{
						text : "保存",
						id : "saveStuId", 
						click :function(){
							var flowId = $("#xqy_flow_check").find('select[name="flowId"]').val();
							$("#saveStuId").omButton('disable');
							var shFrmCom = $("#autoPageFlowFrm").serialize();
							$.ajax({
						   		type:'post',
						   	  	url:'autoUpdatePage_toUpdatePage.do?' + shFrmCom,	
						   	  	data: {"dataId":$("#dataInputId").val(),"toUpdateTableId":$("#toUpdateTableId").val(),"flowId":flowId},	
							  	success:function (data){
							  		//refreshTab();
									$(".om-buttonbar").find('.om-btn-txt').each(function(){
										if($(this).text() == "查询") {
											$(this).omButton('click');
										}
									});			
									closeDialogFun("xqy_flow_check");
							  	}
							})
						}
					},{
						text : "取消", 
						click :function(){
							closeDialogFun("xqy_flow_check");
						}
					}
				],data);
		  	}	
	    });
	}
	
	//批量打印方法
	function toPldBatchPrintData(tableId,eleId,printType,divId) {
   		
		//获取要打印的记录
		var dels =  $("#" + tableId).omGrid('getSelections',true);
		if(dels == null || "" == dels || dels == undefined) {
			$.omMessageBox.alert({
				content:'您还没有选择要打印的记录',
				onClose:function(v){
				}
			});
		}else {
			var tempArray = [];
			$(dels).each(function(index , value){
				var regularNumId = value[eleId];			 
				tempArray.push(regularNumId);					           
			});
			var mokMainId = tempArray.join(",");
			
			toPldPrintData(mokMainId,printType,divId);
		}
	}
	    
	//打印模块中学员相关信息的方法
	function toPldPrintData(mokMainId,printType,divId,event) {
		$.ajax({
			type:'post',
			url:'newPrint_judgePrintNum.do',	
			data: {"printType" : printType},	
			success:function (data) {
				var result = data.split("!");
				var printNum = result[0];
				var newPId = result[1];
				if(printNum == 2) {
					$.ajax({
						type:'post',
						url:'newPrint_toPrintTypeData.do',	
						data: {"printType" : printType,
								"moKuaiMainId": mokMainId},	
						success:function (data) {
							$("#"+divId).css("width", "90%");
					  		$("#"+divId).html(data);
					  	 	omDialogFun(divId, '类型打印模块', '90%', [
								{
									text : "取消", 
								  	click : function(){
										closeDialogFun(divId);
									}
								}
							]);
						}	
					});
				}else if(printNum ==1) {
					window.location.href="newPrint_toPrintOne.do?mainId="+mokMainId+"&printType="+printType+"&printId="+newPId;
				}else {
					$.omMessageTip.show({
				    	title : '提示',
				    	content : '抱歉,没有该类型的打印模版！',	
				        timeout : 2000
		        	});	
				}
			}	
		});
		if(event != null && event != undefined && !""== event) {
			if (event.stopPropagation) {
				event.stopPropagation();
			} else if (window.event) {
				window.event.cancelBubble = true;
			}
		}
    }
    //查看日志
    function toSeeLog(mokMainId,tableId,divId,event) {
        $.ajax({
				type:'post',
				url:'log_toSeeLog.do',	
				data: {"tableId" : tableId,
						"moKuaiMainId": mokMainId},	
				success:function (data) {
					$("#"+divId).css("width", "90%");
			  		$("#"+divId).html(data);
			  	 	omDialogFun(divId, '查看操作日志', '90%', [
						{
							text : "取消", 
						  	click : function(){
								closeDialogFun(divId);
							}
						}
					]);
				}	
			});
		
		if(event != null && event != undefined && !""== event) {
			if (event.stopPropagation) {
				event.stopPropagation();
			} else if (window.event) {
				window.event.cancelBubble = true;
			}
		}
    }
    
    //获取导出列表的列名
    var tySelect_xqy = 0;
    function getColModelName() {
		var headerFinal = "";
		var nameFinal = "";
		if(tySelect_xqy.length > 0) {
			var headerStr = "";
			var nameStr = "";
			for(var i = 0; i < tySelect_xqy.length; i++) {
				var newName = "";
				if("operate"==tySelect_xqy[i].name || "操作"==tySelect_xqy[i].header) {
				}else {
					headerStr += tySelect_xqy[i].header + ",";
					if("dic" == tySelect_xqy[i].type) {
						var nameDic = tySelect_xqy[i].name.substr("DIC_".length,tySelect_xqy[i].name.length)
						newName = "dic:"+nameDic;
					}else if("date" == tySelect_xqy[i].type) {
						newName = "date:"+tySelect_xqy[i].name+":yyyy-MM-dd";
					}else if("closeOpen" == tySelect_xqy[i].type) {
						newName = "closeOpen:"+tySelect_xqy[i].name;
					}else {
						newName = tySelect_xqy[i].name;
					}
					nameStr += newName + ",";
				}
			}
			headerFinal = headerStr.substring(0,headerStr.length-1);
			nameFinal = nameStr.substring(0,nameStr.length-1);
		}
		var result = headerFinal+"!"+nameFinal;
		return result;
	}
	
	function alertManage(content){
		animation_prompt_fun(content);//ztx更改提示消息样式
		//'output_ok'代表成功提示消息'output_no'代表错误提示消息'output_prompt'代表其他类型提示消息。
	
	/*	$.omMessageTip.show({
    		title : '操作提示',
      		content : content,
      		timeout : 2000
    	});*/
	}
	
	 /**
      * 初始化按钮组
      * gridId 表格id
      */
    function initButtonArr($grid,buttonShowStyle) {
    	//判断是否为按钮组，是则处理按钮为按钮组形式
    	$grid.find('tr').each(function (i,one) {
    			var $buttonHtml=$("<div></div>");
    			var firstTd = $(one).find('td[class="col0"]');
    			var lastRowCol = "";
    			firstTd.find('div').children().each(function (j,td) {
    				var rowCol = $(td).attr('rowCol');//行列下标
    				//判断是否为已经处理过的
    				if (rowCol == lastRowCol && lastRowCol!=null && lastRowCol!=undefined && lastRowCol.length>0) {
    					return;
    				}
    				lastRowCol = rowCol;
    				rowCol = (rowCol==null || rowCol==undefined)?0:rowCol;
    				//获取合并的按钮组
    				var tda = $(one).find("[rowCol='"+rowCol+"']");
    				//判断是否为自定义模块的按钮组形式
    				if (buttonShowStyle!=null && buttonShowStyle!=undefined && buttonShowStyle==1) {
    					if (j>0) {
    						return false;
    					}
    					tda = firstTd.find('div').children();
    				}
    				//判断是否有和当前按钮在同一组的
    				if (tda==null || tda==undefined || tda.length<=1) {
    					$buttonHtml.append(td);
    				} else {
    					//按钮组名称
    				    var buttonTabName="";
    					var buttonDiv = $("<div  class='op-menu' name='opmenu_"+rowCol+"_"+i+"'></div>");
    					tda.each(function (c,a){
    						buttonTabName = $(a).attr('buttonTabName');
    						buttonDiv.append("<div onclick=\""+($(a).attr('onclick'))+"\">"+$(a).text()+"</div>");
    					});
    					buttonTabName=(buttonTabName!=null && buttonTabName!=undefined)?buttonTabName:"操作";
    					$buttonHtml.append(buttonDiv);
    					$buttonHtml.append("<a href='javascript:void(0);' op_menu='opmenu_"+rowCol+"_"+i+"' class='op-btn edus_tboperate'>"+buttonTabName+"</a>");
    				}
    			});
    			if ($buttonHtml.html().length>0) {
    				$(one).find('td[class="col0"]').find('div').html($buttonHtml.html());
    			}
    	});
       $grid.find("a.op-btn").each(function(i,one){
        	var $btn = $(one); 
        	// 初始化表格里面的操作按钮
       	 	$btn.omButton({
        	// icons : {left : 'style/image/tbbtnset_03.png'},
            	// width : 100,
           	 	onClick : function(event){
           	 		$('.op-menu').hide();
            		var v = $grid.find("div[name='"+$btn.attr('op_menu')+"']:visible");
                	var $opMenu = $(event.currentTarget.previousSibling);
                	// 重新计算菜单的位置
                	var btnleft = $btn.offset().left - $grid.offset().left + $btn.width() + 11 + "px";
                	var btntop = $btn.parent().offset().top - $btn.closest(".bDiv").offset().top + $btn.closest(".bDiv").scrollTop();
                	var bodyH = $(document.body).outerHeight(true);
                	if($opMenu.css("display") == "none"){
                		var opmenuH = $btn.closest(".dialogbtns").prev().height();
                		if((bodyH-$btn.parent().offset().top)>$('.op-menu').outerHeight()){
	                		$opMenu.show().css({'position':'absolute','left':btnleft,'top':btntop});
                		}else{
                			$opMenu.show().css({'position':'absolute','left':btnleft,'top':btntop - opmenuH + $btn.height()});
                		}
                	} else{
                		$opMenu.hide();
                	}
                	v.hide();
                	event.stopPropagation();
                	//绑定移除按钮组事件
                	$(document).click(function(e){
                		var target = e.target;
						var $el = $(target);
						if (!$el.parent().hasClass('op-menu')) {
							$('.op-menu').hide();
						} 
                	});
                	return false;
            	}
         	});
       });
       //获取按钮组宽度，获取当前页中按钮列最大宽度
       var header = $grid.closest('.om-grid').find('th[class="col0"]').children('div');
       var maxWidth = header.text().length*15;
       $grid.find('tr').each(function (i,one) {
    		var firstTd = $(one).find('td[class="col0"]');
    		var dqRowWidth = 0;
    		firstTd.children('div').children().each(function (i,one) {
    			dqRowWidth+=$(one).hasClass('op-menu')?40:$(one).width()+10;
    		});
    		if (dqRowWidth==0 && firstTd.text()!=null) {
    			dqRowWidth = firstTd.children('div').width();
    		}
    		if (dqRowWidth>maxWidth) {
    			maxWidth = dqRowWidth;
    		}
       });
       //设置按钮列宽度
       $grid.find('tr').each(function (i,one) {
       		var firstTd = $(one).find('td[class="col0"]');
    		firstTd.children('div').width(maxWidth);
       });
       //设置表头宽度
       header.width(maxWidth);
    }
    /**
      * 调用拨打电话页面
      * phoneNumber 手机号
      */
    function toPhonebar(phoneNumber,phoneTableId,phonePageId,glValue,listTableId,listPageId,rowIndex) {
    	 $.ajax({
                type:'post',
                url:'model_toPhoneBar.do',
                data:{"phone":phoneNumber,
                "phoneTableId":phoneTableId,
                "glValue":glValue,
                "listTableId":listTableId
                },
                success:function (data){
                	var $dialogDiv = $('body').find("div[flag='dialog1']")
    				if($dialogDiv===null || $dialogDiv==undefined || $dialogDiv.length<=0) {
    					$dialogDiv = $("<div flag='dialog1'></div>");
						$('body').append($dialogDiv);
    				}
    				var phoneButtonArr = []; 
    				if (phoneTableId>0 && phonePageId>0) {
                    	phoneButtonArr[phoneButtonArr.length] = {
                                text : "通话信息完善", 
                                id:"closeomDialog",
                                click : function(){
                                    //跳转至通话回调页面
                                    if (phoneTableId>0 && phonePageId>0) {
                                    	$.ajax({
                							type:'post',
                							url:'addRelation_toAddRelationPage.do',
                							data:{
                							"tableId":phoneTableId,
                							"pageId":phonePageId,
                							"mainId":glValue,
                							"mainTableId":listTableId,
                							"mainPageId":listPageId
                							},success:function (data2){
                								var $dialogDiv1 = $('body').find("div[flag='dialog2']")
    											if($dialogDiv1===null || $dialogDiv1==undefined || $dialogDiv1.length<=0) {
    												$dialogDiv1 = $("<div flag='dialog2'></div>");
													$('body').append($dialogDiv1);
    											}
                							    var buttonArray=[];
                							    var userId = document.getElementById('operamaskJs');
                							    var domId = listTableId+"_"+listPageId;
        										if(userId!=null && userId.getAttribute('data') == 0) {//根据登录人过滤显示列设置按钮
                							    	buttonArray[buttonArray.length]={text : '添加页面设置', 
                							    		click : function(){
                							    			setAddPage($dialogDiv1,phoneTableId,phonePageId,$dialogDiv1,domId,18);
                							    	}};
                							    }	
                							    buttonArray[buttonArray.length]={text : '保存',
                							        id : "button_"+ domId + "_0",
                							    	click : function(){
                							    		eval("addInfo_"+phoneTableId+"_"+phonePageId+"($dialogDiv1,"+phoneTableId+","+phonePageId+","+glValue+",'" + domId + "',0);");
                							    }};
                							    buttonArray[buttonArray.length]={text : '取消', 
                							    	click : function(){
                							    		$dialogDiv1.omDialog("closeAndRemove");
                							    }};
                								omDialogFun($dialogDiv1, "呼叫信息完善", '90%', buttonArray,data2);
                						     }
                						  });
                					}
                                    
                                }
                        	};
                        }
    					phoneButtonArr[phoneButtonArr.length] = {
                               text : "取消", 
                               id:"closeomDialog",
                               click : function(){
                               		//判断通话是否有效
                               		if (phone!=null) {
                                		//挂断电话
                                    	phone.hangup();
                                    	//通话退出
                                    	phone.destroy(true);
                                    }
                                	//关闭页面
                                    closeDialogFun($dialogDiv);
                                    //关闭页面后5秒再次执行通话记录完善方法
                                    setTimeout(completPhoneHistoryToDqPage(phoneNumber,phoneTableId,glValue,listTableId),2000);
                                    
                               }
                    	};
                        omDialogFun($dialogDiv, "电话呼叫", '30%', phoneButtonArr,data);
                }
         });
    	
    }
    
    /**
      * 完善通话历史记录到当前页面
      * phoneNumber 通话手机号
      * phoneTableId 通话信息完善页面主表id
      * phoneObjId 通话对象id
      * relationPhoneTableId 关联通话对象主表id
      */
    function completPhoneHistoryToDqPage(phoneNumber,phoneTableId,phoneObjId,relationPhoneTableId) {
    	$.ajax({
             type:'post',
               url:'add_completPhoneHistoryToDqPage.do',
               data:{ 
               "phoneNumber":phoneNumber,
               "phoneTableId":phoneTableId,
               "phoneObjId":phoneObjId,
               "relationPhoneTableId":relationPhoneTableId},
               success:function (data){
               }
        }); 							 							  							
    }
    //清除搜索条件的 所有选中内容 弹出层的隐藏域 及 下拉框的选中值
    function clearSearchForm(domId) {
    	$('#listFrmId_' + domId).find(':input').not(':button, :submit, :reset, :hidden').val('').removeAttr('checked').removeAttr('selected');
    	$('#listFrmId_' + domId).find("[name$='_searchEleId']").val('');
    	$('#listFrmId_' + domId).find("[name$='strCond_dic']").omCombo('value', '');
    	$('#listFrmId_' + domId).find("[name$='_dicCond_pld']").val('');
    	$('#listFrmId_' + domId).find("[name$='searSelInfo']").find(".edus_selImitliact").attr('class','edus_selImitli');
    	$('#listFrmId_' + domId).find("[name$='defaultSearchSetSelect']").val('');//清空常用搜索
    	$('#listFrmId_' + domId).find("[name$='defSearchUl']").find(".edus_selImitliact").attr('class','edus_selImitli');//清空常用搜索
    }
    //日期的联动显示
	function pickedEndDate(obj,fieldAliasName){
        var value=$(obj).val();
        $(obj).attr('value',value);
        var inputName=fieldAliasName+"_endDates_pld";
       $(obj).closest("li").find("input[name="+inputName+"]").attr('value',value);
    }
    //ztx新的提示消息样式及设置
    //ztx更改提示消息样式//'output_ok'代表成功提示消息'output_no'代表错误提示消息'output_prompt'代表其他类型提示消息。
    //animation_prompt_fun(content,'output_ok')代表成功提示消息
    //animation_prompt_fun(content,'output_no')代表错误提示消息
	//animation_prompt_fun(content,'output_prompt')代表其他类型提示消息
	function animation_prompt_fun(content,prompt_type){
	if(prompt_type === undefined){
		prompt_type = 'output_ok';
	    if(RegExp('成功').test(content)){
	    	prompt_type='output_ok';//表示这个是成功数据
	    }else if(RegExp('失敗|失败|请保证|请按要求|请按照提示|请输入|请正规|请根据|请正确输入|请至少|请将表单填写完整|请将信息填写完整').test(content)){
	    	prompt_type='output_no';//表示这个是失败数据
	    }else{
	    	prompt_type='output_prompt';//表示这个是其他类型数据
	    };
	};
	
	var animation_prompt_ZTX = document.createElement('div'),
	animation_prompt_box = document.createElement('div'),
	prompt_box =  document.createElement('div'),
	head_ztx = document.getElementsByTagName("head")[0],
	body_ztx = document.getElementsByTagName("body")[0];
	animation_prompt_box.className = 'animation_prompt_box';
	animation_prompt_ZTX.className = 'animation_prompt_ZTX';
	prompt_type = prompt_type || 'output_prompt';
	prompt_box.className = prompt_type;
	prompt_box.innerHTML = '<i class="animated_ztx prompt_icon"></i><em>' + content + '</em><del></del>';
	prompt_box.className += ' animated_ztx prompt_box';
	setTimeout(function(){$(prompt_box).stop().slideUp(500,function(){$(this).remove()});},4000);
	animation_prompt_ZTX.innerHTML = 
	'.<style>.animation_prompt_box{position:fixed; top:52px; right:0px; z-index: 9999999; width:450px;}' + 
	'.prompt_box{width:420px; height:40px;margin:4px 0px; float:right;}' + 
	'.prompt_box i{float:left;width:20px; height:20px; margin:7px 15px 0 10px; background:url(style/images_modify/prompt.png) no-repeat 0 0;}' + 
	'.prompt_box del{float:right; width:20px; height:100%; background: url(style/images_modify/prompt_box_icon.png) no-repeat 0 15px; cursor: pointer;}.prompt_box del:hover{background-position:-70px 15px;}' + 
	'.prompt_box em{float:left; margin:10px 0 0 0; font-size:14px; font-style:normal; color:#fff;}' + 
	'.output_ok{background:#7ccc4f;}.output_no{background:#ef595a;}.output_prompt{background:#4e82d6; }' + 
	'.output_no i{background-position:0px -50px; margin-top: 10px;}.animation_prompt_ZTX{display:none; width:0px; height:0px;}' + 
	'@-webkit-keyframes fadeInRight {0% {opacity: 0;-webkit-transform: translateX(20px)}100% {opacity: 1;-webkit-transform: translateX(0)}}' + 
	'@-moz-keyframes fadeInRight {0% {opacity: 0;-moz-transform: translateX(20px)}100% {opacity: 1;-moz-transform: translateX(0)}}' + 
	'@-o-keyframes fadeInRight {0% {opacity: 0;-o-transform: translateX(20px)}100% {opacity: 1;-o-transform: translateX(0)}}' + 
	'@keyframes fadeInRight {0% {opacity: 0;transform: translateX(20px)}100% {opacity: 1;transform: translateX(0)}}' + 
	'@-webkit-keyframes bounce {0%,100%,20%,50%,80% {-webkit-transform: translateY(0)}40% {-webkit-transform: translateY(-30px)}60% {-webkit-transform: translateY(-15px)}}' + 
	'@-moz-keyframes bounce {0%,100%,20%,50%,80% {-moz-transform: translateY(0)}40% {-moz-transform: translateY(-30px)}60% {-moz-transform: translateY(-15px)}}' + 
	'@-o-keyframes bounce {0%,100%,20%,50%,80% {-o-transform: translateY(0)}40% {-o-transform: translateY(-30px)}60% {-o-transform: translateY(-15px)}}' + 
	'@keyframes bounce {0%,100%,20%,50%,80% {transform: translateY(0)}40% {transform: translateY(-30px)}60% {transform: translateY(-15px)}}' + 
	'.prompt_box {-webkit-animation-name: fadeInRight;-moz-animation-name: fadeInRight;-o-animation-name: fadeInRight;animation-name: fadeInRight}' + 
	'.prompt_icon {-webkit-animation-name: bounce;-moz-animation-name: bounce;-o-animation-name: bounce;animation-name: bounce}' + 
	'.animated_ztx {-webkit-animation-duration: 1s;-moz-animation-duration: 1s;-o-animation-duration: 1s;animation-duration: 1s;-webkit-animation-fill-mode: both;-moz-animation-fill-mode: both;-o-animation-fill-mode: both;animation-fill-mode: both}</style>'
	if($('head .animation_prompt_ZTX').length <=0.1 ){head_ztx.appendChild(animation_prompt_ZTX);};
	if($('body .animation_prompt_box').length <=0.1){body_ztx.appendChild(animation_prompt_box);};
	$(prompt_box).find('del').click(function(){$(this).parents('.prompt_box').stop().slideUp(100,function(){$(this).remove()});});
	$('body .animation_prompt_box')[0].appendChild(prompt_box);
	if($('.animation_prompt_box .prompt_box').length > 5){$('.animation_prompt_box .prompt_box:lt(1)').stop().slideUp(100,function(){$(this).remove()});};
};
function divpop_box_center(a){//ztx添加值插件的居中定位。
	var ulDivBodyHeight = parseInt($('body').height()),
   	ulDivHeight = parseInt($(a).height()),
   	ulDivTop = (ulDivBodyHeight - ulDivHeight)/2,
   	ulDivBodyWidth = parseInt($('body').width()),
   	ulDivWidth = parseInt($(a).width()),
   	ulDivLeft = (ulDivBodyWidth - ulDivWidth)/2;
	$(a).css({
		"left" : ulDivLeft,
		"top" : ulDivTop,
		"max-width":ulDivBodyWidth*.9
	});
};
