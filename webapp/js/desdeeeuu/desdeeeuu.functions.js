/**
 * Created by larismendi on 01/07/2015.
 */
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

function Cancelar(){
    $("#formulario").hide();
    $("#tabla").show();
    return false;
}