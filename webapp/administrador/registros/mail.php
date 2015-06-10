<?php
require_once("../../controlador/login/login.php");
include_once("../../clases/database/database.class.php");
require_once('../../clases/registros/registros.class.php');

$id=$_GET['id'];
$obj=new Registros;
if($obj->enviar_alta($id)){
	echo 'Se envío el correo de registro satisfactoriamente';
}else{
	echo 'Hubo un problema enviando el correo de registro.';
}
?>