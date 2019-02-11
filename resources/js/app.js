require('./bootstrap');
require('materialize-css/dist/js/materialize.min');

$(document).ready(function(){
	$('.dropdown-trigger').dropdown({
		coverTrigger:false
	});

	$('.sidenav').sidenav();

	$('.scrollspy').scrollSpy({
		throttle:10,	
	});

	$('select').formSelect({
		dropdownOptions:{
			coverTrigger:false
		}
	});
});



