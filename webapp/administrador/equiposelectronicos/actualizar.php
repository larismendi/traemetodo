<?php
if($_POST['id'] && $_POST['nombre']){
	include_once("../../clases/database/database.class.php");
	require_once('../../clases/repuestosyates/repuestosyates.class.php');
	$id = htmlspecialchars(trim($_POST['id']));
	$nombre = htmlspecialchars(trim($_POST['nombre']));
	$email = htmlspecialchars(trim($_POST['email']));
	$telefono = htmlspecialchars(trim($_POST['telefono']));
	$descripcion = htmlspecialchars(trim($_POST['descripcion']));
	$activo = $_POST['activo'];
	
	$obj=new EquiposElectronicos;
	if ( $obj->actualizar(array(
			$nombre, 
			$email, 
			$telefono, 
			$descripcion,
			$activo),$id) == true){
		echo 'Datos guardados';
	}else{
		echo 'Se produjo un error. Intente nuevamente';
	} 
}else{
	if(isset($_GET['id'])){
		include_once("../../clases/database/database.class.php");
		require_once('../../clases/equiposelectronicos/equiposelectronicos.class.php');
		$obj=new EquiposElectronicos;
		$consulta = $obj->mostrar_registros($_GET['id']);
?>
<script type="text/javascript">
$(document).ready(function() {
	$("#frmActualizar").validate({
    	submitHandler: function(form) {
        	$(form).ajaxSubmit({
				type: 'post',
				url: 'actualizar.php',
				success: function(responseText){
					ConsultaDatos();//responseText es lo q retorna
					jAlert(responseText, 'Mensaje del sistema');
					$("#formulario").hide();
					$("#tabla").show();
				}
			});
        }
    });
});
</script>
<form id="frmActualizar" name="frmActualizar" class="form" method="post" action="actualizar.php">
    <input type="hidden" name="id" id="id" value="<?=$consulta['id_equipoelectronico']?>" />
    <div id="titulo_form">Modificar</div>
    <p>
	    <label>Nombre y Apellido<br />
	    <input name="nombre" type="text" id="nombre" maxlength="100" class="text required" value="<?=strtoupper($consulta['nombre'])?>" />
	    </label>
    </p>
    <p>
	    <label>Email<br />
	    <input name="email" type="text" id="email" maxlength="200" class="text required" value="<?=strtoupper($consulta['email'])?>" />
	    </label>
    </p>
	<p>
	    <label>Teléfono:<br />
	    <input name="telefono" type="text" id="telefono" maxlength="15" class="text required" value="<?=strtoupper($consulta['telefono'])?>" />
	    </label>
    </p>
	<p>
	    <label>Descripción y código de repuesto:<br />
	    <textarea name="descripcion" id="descripcion" class="required"><?=strtoupper($consulta['descripcion'])?></textarea>
	    </label>
    </p>
    <p>
    	<label>Activo: 
        <input type="checkbox" name="activo" id="activo" value="1" <?php if($consulta['habilitado'])echo "checked";?>/>
        </label>
    </p>
    <p>
      <input type="submit" name="enviar" id="button" value="Enviar" />
      <label></label>
      <input type="button" name="cancelar" id="cancelar" value="Cancelar" onclick="Cancelar()" />
    </p>
</form>
<?php
	}
}
?>