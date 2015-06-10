<?php
include_once("../../clases/database/database.class.php");
require_once('../../clases/registros/registros.class.php');
require_once('../../controlador/registros/excel.php');

function sanitiza($text){
	return utf8_decode(eregi_replace("[\n|\r|\n\r]", ' ',  $text));
}

$contents = '';

header("Content-Type: application/vnd.ms-excel;");
header("Expires: 0");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
header("Pragma: no-cache");
header("Content-Disposition: attachment; filename=registros_traemetodo.csv");



echo utf8_decode('Nombres;Email;Email_valido;Teléfono Local;Teléfono móvil;País;Estado;Ciudad;Código Zip;Dirección;Activo;Fecha creación')."\n";
foreach($consultas as $consulta){
	$contents .= sanitiza($consulta['nombre']).';'.
				 sanitiza($consulta['email']).';'.
				 sanitiza(($consulta['email_valido']==1?'Si':'No')).';'.
				 sanitiza($consulta['telefono_local']).';'.
				 sanitiza($consulta['telefono_movil']).';'.
				 sanitiza($consulta['pais']).';'.
				 sanitiza($consulta['estado']).';'.
				 sanitiza($consulta['ciudad']).';'.
				 sanitiza($consulta['zipcode']).';'.
				 sanitiza($consulta['direccion']).';'.
				 (($consulta['habilitado']==1?'Si':'No')).';'.
				 $consulta['created_at']
	."\n";
}
echo $contents;

?>