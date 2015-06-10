<?php
include_once("../../clases/database/database.class.php");
require_once('../../clases/repuestosautos/repuestosautos.class.php');

$id=$_GET['id'];
$obj=new RepuestosAutos;
if( $obj->eliminar($id) == true){
	echo "Registro eliminado correctamente";
}else{
	echo "Ocurrio un error";
}
?>