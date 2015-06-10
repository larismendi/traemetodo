$(document).ready(function(){
	ConsultaDatos();	
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
	/*
	div.fadeOut("fast", function(){
		$(div).load(url, function(){
			$(div).fadeIn("fast");
		});
	});
	*/
}

function ActualizarDatos(){
	var cliente_id = $('#cliente_id').attr('value');
	var nombres = $('#nombres').attr('value');
	var email = $('#email').attr('value');
	var ciudad = $('#ciudad').attr('value'); 
	var alternativas = $("input[@name='alternativas']:checked").attr("value");
	var telefono = $("#telefono").attr("value");
	var fecha_nacimiento = $("#fecha_nacimiento").attr("value");
	var activo = $("#activo").attr("value");
	$.ajax({
		url: 'actualizar.php',
		type: "POST",
		data: "submit=&nombres="+nombres+"&email="+email+"&ciudad="+ciudad+"&alternativas="+alternativas+"&telefono="+telefono+"&fecha_nacimiento="+fecha_nacimiento+"&activo="+activo+"&cliente_id="+cliente_id,
		success: function(datos){
			jAlert(datos, 'Mensaje del sistema');
			ConsultaDatos();
			$("#formulario").hide();
			$("#tabla").show();
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

function GrabarDatos(){
	var nombres = $('#nombres').attr('value');
	var email = $('#email').attr('value');
	var ciudad = $('#ciudad').attr('value'); 
	var alternativas = $("input[@name='alternativas']:checked").attr("value");
	var telefono = $("#telefono").attr("value");
	var fecha_nacimiento = $("#fecha_nacimiento").attr("value");

	$.ajax({
		url: 'nuevo.php',
		type: "POST",
		data: "submit=&nombres="+nombres+"&email="+email+"&ciudad="+ciudad+"&alternativas="+alternativas+"&telefono="+telefono+"&fecha_nacimiento="+fecha_nacimiento,
		success: function(datos){
			ConsultaDatos();
			jAlert(datos, 'Mensaje del sistema');
			$("#formulario").hide();
			$("#tabla").show();
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
	$('#fecha_nacimiento').attr('value',date);
	show_calendar();
}

function show_calendar(){
	$('#calendario').toggle();
}
	