<?php
include_once("../../clases/database/database.class.php");
require_once('../../clases/pagos/pagos.class.php');
require_once('../../controlador/pagos/excel.php');

function sanitiza($text){
	return utf8_decode(eregi_replace("[\n|\r|\n\r]", ' ',  $text));
}

$contents = '';

header("Content-Type: application/vnd.ms-excel;");
header("Expires: 0");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
header("Pragma: no-cache");
header("Content-Disposition: attachment; filename=registrospagos_traemetodo.csv");


echo utf8_decode('Nombre Cliente;Email Cliente;Tipo de pago;Fecha de pago;Números de Facturas;Tipo de Transacción;Nombre del banco;Número Transacción;Monto;Descripción del pago;Fecha creación')."\n";

foreach($consultas as $consulta){

	$contents .= sanitiza($consulta['nombre']).';'.

				 sanitiza($consulta['email']).';'.

				 sanitiza($consulta['tipopago']).';'.

				 sanitiza($consulta['fechapago']).';'.

				 sanitiza($consulta['nrofac']).';'.

				 sanitiza($consulta['tipotrans']).';'.

				 sanitiza($consulta['banco']).';'.

				 sanitiza($consulta['nrotrans']).';'.

				 sanitiza($consulta['monto']).';'.

				 sanitiza($consulta['descripcion']).';'.

				 $consulta['created_at']

	."\n";

}

echo $contents;

?>