$(document).ready(function(){
	//Menu de creacion de neuva produccion-------------------------------------------------------------
	var link_prod = function(number){
		$('#prod'+number).click(function(){
			$('div[id*=step]').css('display', 'none');
			$('a[id*=prod]').removeAttr('class');
			$('#step'+number).css('display', 'block');
			$('#prod'+number).attr('class', 'step_on');
		});
	};
	for(var i=1; i<=6; i++){
		link_prod(i);
	}
});