<?php
include_once("../../clases/database/database.class.php");
require_once('../../clases/equiposelectronicos/equiposelectronicos.class.php');
require_once('../../controlador/equiposelectronicos/excel.php');

function sanitiza($text){
	return utf8_decode(eregi_replace("[\n|\r|\n\r]", ' ',  $text));
}

$contents = '';

header("Content-Type: application/vnd.ms-excel;");
header("Expires: 0");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
header("Pragma: no-cache");
header("Content-Disposition: attachment; filename=registroselectronicos_traemetodo.csv");

echo utf8_decode('Nombres;Email;Teléfono;Descripción;Activo;Fecha creación')."\n";

foreach($consultas as $consulta){

	$contents .= sanitiza($consulta['nombre']).';'.

				 sanitiza($consulta['email']).';'.

				 sanitiza($consulta['telefono']).';'.

				 sanitiza($consulta['descripcion']).';'.

				 ($consulta['habilitado']==1?'Si':'No').';'.

				 $consulta['created_at']

	."\n";

}

echo $contents;

?>