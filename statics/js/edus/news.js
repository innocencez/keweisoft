	//左右切换
	var oMorecase=document.getElementById('sub-case');
	var oUlCase=oMorecase.getElementsByTagName('ul')[0];
	var aLiCase=oMorecase.getElementsByTagName('li');
	var oLBtnCase=document.getElementById('l-btn');
	var oRBtnCase=document.getElementById('r-btn');

	oUlCase.innerHTML+=oUlCase.innerHTML;
	var oneWidth=parseInt(getStyle(aLiCase[0], 'width'))+13;
	oUlCase.style.width=oneWidth*aLiCase.length+'px';
	var iNum=0;			
		
	oLBtnCase.onmouseover=function(){
		  this.style.cursor='pointer';		
	 };
	  
	oRBtnCase.onmouseover=function(){
		this.style.cursor='pointer';		
	};	
	  
	oLBtnCase.onclick=function(){
		if(iNum==0){
			iNum=(aLiCase.length/2)-1;
			oUlCase.style.left=-oUlCase.offsetWidth/2+'px';		
		}else{
			iNum--;	
		}
		startMove(oUlCase,{left:-iNum*oneWidth});
	};
	
	oRBtnCase.onclick=function(){
		if(iNum==aLiCase.length/2){
			iNum=0;
			oUlCase.style.left=0;
		}
		iNum++;
		
		startMove(oUlCase,{left:-iNum*oneWidth});
	};
		function startMove(obj,json,fn){
			clearInterval(obj.timer);
			obj.timer = setInterval(function(){
				 var bStop=true;
				 
				 for(var attr in json){
					  var iCur = 0;
		
					  if(attr == 'opacity'){
						  if( Math.round(getStyle(obj,attr)*100) == 0){
							  iCur = 0;
						  }else{
							  iCur = Math.round(getStyle(obj,attr)*100) || 100;
						  }
					  }else{
						  iCur = parseInt(getStyle(obj,attr)) || 0;
					  }
					  
					  var iSpeed = (json[attr] - iCur)/8;
					  iSpeed = iSpeed>0 ?  Math.ceil( iSpeed ) : Math.floor(iSpeed);					
					
					
					  if(iCur != json[attr]){		
						  bStop = false;
					  }
						  
					  if(attr == 'opacity'){
						  obj.style[attr] = (iCur + iSpeed)/100;
						  obj.style.filter = 'alpha(opacity='+(iCur + iSpeed)+')';
					  }else{
						  obj.style[attr] = iCur + iSpeed + 'px';
					  }					 
				 }
				 
				 if(bStop){
					 clearInterval(obj.timer);
					 if(fn){
					  	fn.call(obj);
					  }
					 
				}
			},15);
		}
		
		function getStyle(obj,attr){
			if(obj.currentStyle){
				return obj.currentStyle[attr];
			}else{
				return getComputedStyle(obj,false)[attr];
			}
	}