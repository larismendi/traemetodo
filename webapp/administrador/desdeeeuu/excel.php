<?php
include_once("../../clases/database/database.class.php");
require_once('../../clases/repuestosautos/repuestosautos.class.php');
require_once('../../controlador/repuestosautos/excel.php');

function sanitiza($text){
	return utf8_decode(eregi_replace("[\n|\r|\n\r]", ' ',  $text));
}

$contents = '';

header("Content-Type: application/vnd.ms-excel;");
header("Expires: 0");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
header("Pragma: no-cache");
header("Content-Disposition: attachment; filename=registrosautos_traemetodo.csv");


echo utf8_decode('Nombres;Email;Teléfono;Pais;Estado;Ciudad;Calle;Motor;Transmisión;VIN;Número de partes;Descripción de partes;Fecha creación')."\n";

foreach($consultas as $consulta){

	$contents .= sanitiza($consulta['nombre']).';'.

				 sanitiza($consulta['email']).';'.

				 sanitiza($consulta['telefono']).';'.

				 sanitiza($consulta['marca']).';'.

				 sanitiza($consulta['modelo']).';'.

				 sanitiza($consulta['anio']).';'.

				 sanitiza($consulta['motor']).';'.

				 sanitiza($consulta['transmision']).';'.

				 sanitiza($consulta['vin']).';'.

				 sanitiza($consulta['nropart']).';'.

				 sanitiza($consulta['descpart']).';'.

				 $consulta['created_at']

	."\n";

}

echo $contents;

?>