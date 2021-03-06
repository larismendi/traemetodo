$(document).ready(function(){
	ConsultaDatos();
	$("#consulta tbody tr").mouseover(function(){
		$(this).addClass("over");
	}).mouseout(function(){
		$(this).removeClass("over");
	});
});

function ConsultaDatos(){
	var str = $("#frm_buscar").serialize();
	$.ajax({
		url: 'consulta.php',
		cache: false,
		type: "GET",
		data: str,
		success: function(datos){
			$("#div_listar").html(datos);
		}
	});
}

function fn_paginar(var_div, url){
	var div = $("#" + var_div);
	$(div).load(url);
}

function Mail(id){
	jConfirm('Desea envíar el correo de registro manual?','Mensaje de Confirmacion',function(r){
		if(r){
			$.ajax({
				url: 'mail.php',
				type: "GET",
				data: "id="+id,
				success: function(datos){
					jAlert(datos, 'Mensaje del sistema');
				}
			});
		}		
	});
	return false;
}

function EliminarDato(id){
	jConfirm('Desea eliminar este dato?','Mensaje de Confirmacion',function(r){
		if(r){
			$.ajax({
				url: 'eliminar.php',
				type: "GET",
				data: "id="+id,
				success: function(datos){
					jAlert(datos, 'Mensaje del sistema');
					$("#fila-"+id).remove();
				}
			});
		}		
	});
	return false;
}

function Cancelar(){
	$("#formulario").hide();
	$("#tabla").show();
	return false;
}

// funciones del calendario
function update_calendar(){
	var month = $('#calendar_mes').attr('value');
	var year = $('#calendar_anio').attr('value');
	var valores='month='+month+'&year='+year;

	$.ajax({
		url: 'calendario.php',
		type: "GET",
		data: valores,
		success: function(datos){
			$("#calendario_dias").html(datos);
		}
	});
}

function set_date(date){
	$('#fecha').attr('value',date);
	show_calendar();
}

function show_calendar(){
	$('#calendario').toggle();
}