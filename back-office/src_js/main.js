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
	//Agregar nuevos paquetes en creacion de produccion------------------------------------------------
	var count = 1;
	$('#add_paquete').click(function(){
		count++;
		var string = '<tr>'+
						'<td style="border-bottom:1px solid olive; padding-top:10px" colspan="2"><label>PAQUETE '+ count +': </label></td>'+
					'</tr>'+
					'<tr>'+
						'<td><label for="talla'+ count +'">Talla: </label></td>'+
						'<td><input name="talla'+ count +'" id="talla'+ count +'" type="number"></td>'+
					'</tr>'+
					'<tr>'+
						'<td><label for="sucantidad'+ count +'">Cantidad: </label></td>'+
						'<td><input name="sucantidad'+ count +'" id="sucantidad'+ count +'" type="number"></td>'+
					'</tr>'+
					'<tr>'+
						'<td><label for="num_paquetes'+ count +'">Número de paquetes: </label></td>'+
						'<td><input name="num_paquetes'+ count +'" id="num_paquetes'+ count +'" type="number"></td>'+
					'</tr>';
		$('#grupo_categorias').append(string);
	});
	//Funcion para reconocer la informacion de las imagenes--------------------------------------------
	$("#imagen").change(function(){
		var files = $('input[name="imagen[]"]');
		var txt;
	    for(var i=0; i < files.length; i++){
	        txt += files.val();
	    }
	    alert(files.length);
	});
});