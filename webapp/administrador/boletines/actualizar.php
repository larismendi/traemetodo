<?php
if($_POST['id'] && $_POST['nombre']){
	include_once("../../clases/database/database.class.php");
	require_once('../../clases/boletines/boletines.class.php');
	$id = htmlspecialchars(trim($_POST['id']));
	$nombre = htmlspecialchars(trim($_POST['nombre']));
	$email = htmlspecialchars(trim($_POST['email']));
	$activo = $_POST['activo'];
	
	$obj=new Boletines;
	if ( $obj->actualizar(array(
			$nombre, 
			$email,
			$activo),$id) == true){
		echo 'Datos guardados';
	}else{
		echo 'Se produjo un error. Intente nuevamente';
	} 
}else{
	if(isset($_GET['id'])){
		include_once("../../clases/database/database.class.php");
		require_once('../../clases/boletines/boletines.class.php');
		$obj=new Boletines;
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
    <input type="hidden" name="id" id="id" value="<?=$consulta['id_boletin']?>" />
    <div id="titulo_form">Modificar</div>
    <p>
	    <label>Nombre y Apellido<br />
	    <input name="nombre" type="text" id="nombre" maxlength="100" class="text required" value="<?=strtoupper($consulta['nombre'])?>" />
	    </label>
    </p>
    <p>
	    <label>Email<br />
	    <input name="email" type="text" id="email" maxlength="200" class="text required" value="<?=($consulta['email'])?>" />
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