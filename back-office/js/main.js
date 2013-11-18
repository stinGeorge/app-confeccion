$(document).ready(function(){
//SCRIPT GLOBALES A LA WEB #############################################################################

	//Bloque aside e info al 100% de altura-------------------------------------------------------------
	var hg_elem = $('#cabecera').outerHeight() + $('#menu_bar').outerHeight() + $('#migas').outerHeight() + $('#footer').outerHeight() - 15;
	var hg_html = $(window).outerHeight();
	var hg_aside_info = hg_html - hg_elem;
	$('#info_aside, #info_block').outerHeight(hg_aside_info);
	$( window ).resize(function() {
		$('#info_aside, #info_block').outerHeight(hg_aside_info);
	});

//SCRIPT LOCALES A LA WEB - UNA PAGINA EN SINGULAR ####################################################

	//Menu de creacion de nueva produccion-------------------------------------------------------------
	var link_prod = function(number){
		$('#prod'+number).click(function(){
			$('div[id*=step]').css('display', 'none');
			$('a[id*=prod]').removeAttr('class');
			$('#step'+number).css('display', 'block');
			$('#prod'+number).attr('class', 'step_on');
		});
	};
	for(var i=1; i<=$("#info_aside > ul > li").length; i++){
		link_prod(i);
	}
});