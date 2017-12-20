$(document).ready(function(){

// 产品优势页第五块滑过效果
		$(".adv5_con,.adv5_conb").each(function(i){
			if(i%2 != 0){
				$(this).hide();
			}
		});
		$(".adv5_con:visible,.adv5_conb:visible").mouseover(function(){
			$(this).next().show();
		});
		$(".adv5_con1_h,.adv5_con2_h").mouseleave(function(){
			$(this).hide();
		});
		
	});

















