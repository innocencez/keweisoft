$(document).ready(function(){
	var hash = window.location.hash;
	hash = hash.replace('#','');
	document.getElementById(hash).scrollIntoView(true);		
})