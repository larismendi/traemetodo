<?php
if($_POST['id'] && $_POST['nombre']){
	include_once("../../clases/database/database.class.php");
	require_once('../../clases/repuestosyates/repuestosyates.class.php');
	$id = htmlspecialchars(trim($_POST['id']));
	$nombre = htmlspecialchars(trim($_POST['nombre']));
	$email = htmlspecialchars(trim($_POST['email']));
	$telefono = htmlspecialchars(trim($_POST['telefono']));
	$tipo_emb = htmlspecialchars(trim($_POST['tipo_emb']));
	$marca = htmlspecialchars(trim($_POST['marca']));
	$modelo = htmlspecialchars(trim($_POST['modelo']));
	$anio = htmlspecialchars(trim($_POST['anio']));
	$vin = htmlspecialchars(trim($_POST['vin']));
	$descripcion = htmlspecialchars(trim($_POST['descripcion']));
	$activo = $_POST['activo'];
	
	$obj=new RepuestosYates;
	if ( $obj->actualizar(array(
			$nombre, 
			$email, 
			$telefono, 
			$tipo_emb, 
			$marca, 
			$modelo, 
			$anio, 
			$vin,
			$descripcion,
			$activo),$id) == true){
		echo 'Datos guardados';
	}else{
		echo 'Se produjo un error. Intente nuevamente';
	} 
}else{
	if(isset($_GET['id'])){
		include_once("../../clases/database/database.class.php");
		require_once('../../clases/repuestosyates/repuestosyates.class.php');
		$obj=new RepuestosYates;
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
	$('#button').click(function(){
        if(tinyMCE) tinyMCE.triggerSave();//para que funcione valiate bien
    });
	$('textarea.tinymce').tinymce({
		// Location of TinyMCE script
		script_url : '../../js/tinymce/jscripts/tiny_mce/tiny_mce.js',
		// General options
		theme : "advanced",
		// Theme options
		theme_advanced_buttons1 : "newdocument, |, bold, italic, underline, strikethrough, |, undo, redo",
		theme_advanced_buttons2 : "",
		theme_advanced_toolbar_location : "top",
		theme_advanced_toolbar_align : "left",
		theme_advanced_statusbar_location : "bottom",
		theme_advanced_resizing : true,
		// Example content CSS (should be your site CSS)
		content_css : "../../css/tinymce.css",
		template_replace_values : {
			username : "Some User",
			staffid : "991234"
		}
	});
});
</script>
<form id="frmActualizar" name="frmActualizar" class="form" method="post" action="actualizar.php">
    <input type="hidden" name="id" id="id" value="<?=$consulta['id_repuestoyate']?>" />
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
	    <label>Tipo de Embarcación:<br />
	    <input name="tipo_emb" type="text" id="tipo_emb" maxlength="50" class="text required" value="<?=strtoupper($consulta['tipo_emb'])?>" />
	    </label>
    </p>
	<p>
	    <label>Marca:<br />
	    <input name="marca" type="text" id="marca" maxlength="40" class="text required" value="<?=strtoupper($consulta['marca'])?>" />
	    </label>
    </p>
	<p>
	    <label>Modelo:<br />
	    <input name="modelo" type="text" id="modelo" maxlength="40" class="text required" value="<?=strtoupper($consulta['modelo'])?>" />
	    </label>
    </p>
	<p>
	    <label>Año:<br />
	    <input name="anio" type="text" id="anio" maxlength="4" class="text required"  value="<?=strtoupper($consulta['anio'])?>" />
	    </label>
    </p>
	<p>
	    <label>VIN:<br />
	    <input name="vin" type="text" id="vin" maxlength="100" class="text required" value="<?=strtoupper($consulta['vin'])?>" />
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