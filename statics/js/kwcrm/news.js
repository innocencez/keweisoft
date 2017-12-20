function exchange1(){
	document.getElementById('title_opt1').style.backgroundImage = 'url(http://crm.keweisoft.com/statics/images/kwcrm/title_opt.jpg)';document.getElementById('a3').style.color = '#ffffff';document.getElementById('title_opt2').style.backgroundImage = 'url(http://crm.keweisoft.com/statics/images/kwcrm/title_opt1.jpg)'; document.getElementById('a4').style.color = '#000000';
}
function exchange2(){
	document.getElementById('title_opt1').style.backgroundImage = 'url(http://crm.keweisoft.com/statics/images/kwcrm/title_opt1.jpg)';document.getElementById('a3').style.color = '#000000';document.getElementById('title_opt2').style.backgroundImage = 'url(http://crm.keweisoft.com/statics/images/kwcrm/title_opt.jpg)'; document.getElementById('a4').style.color = '#ffffff';

}
function Tab_menu(value){
	for(var i=1;i<=4;i++)
	{
		if(i == value)
		{
			document.getElementById('menu'+value).style.color="#ffffff";
			document.getElementById('l'+value).className = "after_bg";
		}
	}
}