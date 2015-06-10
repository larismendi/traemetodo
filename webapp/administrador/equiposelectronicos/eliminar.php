<?php
include_once("../../clases/database/database.class.php");
require_once('../../clases/equiposelectronicos/equiposelectronicos.class.php');

$id=$_GET['id'];
$obj=new EquiposElectronicos;
if( $obj->eliminar($id) == true){
	echo "Registro eliminado correctamente";
}else{
	echo "Ocurrio un error";
}
?>