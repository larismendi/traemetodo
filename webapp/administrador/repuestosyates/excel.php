<?php
include_once("../../clases/database/database.class.php");
require_once('../../clases/repuestosyates/repuestosyates.class.php');
require_once('../../controlador/repuestosyates/excel.php');

function sanitiza($text){
	return utf8_decode(eregi_replace("[\n|\r|\n\r]", ' ',  $text));
}

$contents = '';

header("Content-Type: application/vnd.ms-excel;");
header("Expires: 0");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
header("Pragma: no-cache");
header("Content-Disposition: attachment; filename=registrosyates_traemetodo.csv");

echo utf8_decode('Nombres;Email;Teléfono;Tipo de embarcación;Marca;Modelo;Año;VIN;Descripción;Activo;Fecha creación')."\n";

foreach($consultas as $consulta){

	$contents .= sanitiza($consulta['nombre']).';'.

				 sanitiza($consulta['email']).';'.

				 sanitiza($consulta['telefono']).';'.

				 sanitiza($consulta['tipo_emb']).';'.

				 sanitiza($consulta['marca']).';'.

				 sanitiza($consulta['modelo']).';'.

				 sanitiza($consulta['anio']).';'.

				 sanitiza($consulta['vin']).';'.

				 sanitiza($consulta['descripcion']).';'.

				 ($consulta['habilitado']==1?'Si':'No').';'.

				 $consulta['created_at']

	."\n";

}

echo $contents;

?>