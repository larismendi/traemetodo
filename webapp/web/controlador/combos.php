<?php require_once("../../clases/database/database.class.php");?>
<?php require_once("../../web/clases/provincias.class.php");?>
<?php
$obj_provincias=new Provincias;
switch($_REQUEST['combo']){
	case 'provincias':
		$provincias = $obj_provincias->provincias($_REQUEST['idpais']);
		foreach($provincias as $provincia){
			echo '<option value="'.$provincia["idprovincia"].'">'.utf8_encode($provincia["denominacion"]).'</option>';
		}
        break;	
}
?>