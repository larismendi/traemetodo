<?php
include_once("../../clases/database/database.class.php");
require_once('../../clases/repuestosyates/repuestosyates.class.php');

$id=$_GET['id'];
$obj=new RepuestosYates;
if( $obj->eliminar($id) == true){
	echo "Registro eliminado correctamente";
}else{
	echo "Ocurrio un error";
}
?>