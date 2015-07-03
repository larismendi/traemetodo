<?php
include_once("../../clases/database/database.class.php");
require_once('../../clases/desdeeeuu/desdeeeuu.class.php');
require_once('../../controlador/desdeeeuu/excel.php');

function sanitiza($text){
	return utf8_decode(eregi_replace("[\n|\r|\n\r]", ' ',  $text));
}

$contents = '';

header("Content-Type: application/vnd.ms-excel;");
header("Expires: 0");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
header("Pragma: no-cache");
header("Content-Disposition: attachment; filename=desdeeeuu_traemetodo.csv");

echo utf8_decode('Nombres;Email;Teléfono;Pais;Código Postal;Estado;Ciudad;Calle;Envio;Cliente;Codigo Registro;Pais Destino;Ciudad Destino;Cantidad de caja;Total;Valor;Seguro;Descripción;Fecha creación')."\n";

foreach($consultas as $consulta){

	$contents .=
        sanitiza($consulta['nombre']).';'.
        sanitiza($consulta['email']).';'.
        sanitiza($consulta['telef']).';'.
        sanitiza($consulta['pais']).';'.
        sanitiza($consulta['codigo']).';'.
        sanitiza($consulta['estado']).';'.
        sanitiza($consulta['ciudad']).';'.
        sanitiza($consulta['calle']).';'.
        sanitiza($consulta['envio']).';'.
        sanitiza($consulta['cliente']).';'.
        sanitiza($consulta['codigo_registro']).';'.
        sanitiza($consulta['pais_destino']).';'.
        sanitiza($consulta['ciudad_destino']).';'.
        sanitiza($consulta['cantidad_caja']).';'.
        sanitiza($consulta['total']).';'.
        sanitiza($consulta['valor']).';'.
        sanitiza($consulta['seguro']).';'.
        sanitiza($consulta['descripcion']).';'.
        $consulta['date_add']

	."\n";

}

echo $contents;

?>