<?php
include_once("../../clases/database/database.class.php");
require_once('../../clases/boletines/boletines.class.php');

$id=$_GET['id'];
$obj=new Boletines;
if( $obj->eliminar($id) == true){
	echo "Registro eliminado correctamente";
}else{
	echo "Ocurrio un error";
}
?>