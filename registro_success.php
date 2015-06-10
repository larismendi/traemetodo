<?php
date_default_timezone_set('America/New_York');
if(isset($_POST['nombre']) && isset($_POST['email'])){
	require_once("webapp/clases/database/database.class.php");
	require_once("webapp/web/clases/registros.class.php");
	$obj =new Registros();

	if(!$obj->valida($_POST['email'])){
		$datos = array(
					$_POST['nombre'], 
					$_POST['email'], 
					$_POST['telefono_local'],
					$_POST['telefono_movil'],
					$_POST['pais'],
					$_POST['estado'],
					$_POST['ciudad'],
					$_POST['zipcode'],
					$_POST['direccion']
					);
		$obj = new Registros();
		$id = $obj->insertar($datos);
		if($id){
			$obj = new Registros();
			$obj->enviar_alta($id);
			echo 'Se ha registrado satisfactoriamente.';
		}else{
			echo false;
		}
	}else{
		echo 'Ya se encuentra en nuestros registros con aterioridad.';
	}
}
?>