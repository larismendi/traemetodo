<?php
include_once("../../clases/database/database.class.php");
require_once('../../clases/boletines/boletines.class.php');
require_once('../../controlador/boletines/excel.php');

function sanitiza($text){
	return utf8_decode(eregi_replace("[\n|\r|\n\r]", ' ',  $text));
}

$contents = '';

header("Content-Type: application/vnd.ms-excel;");
header("Expires: 0");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
header("Pragma: no-cache");
header("Content-Disposition: attachment; filename=boletines_traemetodo.csv");

echo utf8_decode('Nombres;Email;Activo;Fecha creación')."\n";

foreach($consultas as $consulta){

	$contents .= sanitiza($consulta['nombre']).';'.

				 sanitiza($consulta['email']).';'.

				 ($consulta['habilitado']==1?'Si':'No').';'.

				 $consulta['created_at']

	."\n";

}

echo $contents;

?>