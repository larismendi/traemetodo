<?php
include_once("../../clases/database/database.class.php");
require_once('../../clases/pagos/pagos.class.php');

$id=$_GET['id'];
$obj=new Pagos;
if( $obj->eliminar($id) == true){
	echo "Registro eliminado correctamente";
}else{
	echo "Ocurrio un error";
}
?>