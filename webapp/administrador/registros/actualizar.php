<?php
if($_POST['id'] && $_POST['nombre']){
	include_once("../../clases/database/database.class.php");
	require_once('../../clases/registros/registros.class.php');
	$id = htmlspecialchars(trim($_POST['id']));
	$nombre = htmlspecialchars(trim($_POST['nombre']));
	$email = htmlspecialchars(trim($_POST['email']));
	$telefono_local = htmlspecialchars(trim($_POST['telefono_local']));
	$telefono_movil = htmlspecialchars(trim($_POST['telefono_movil']));
	$pais = htmlspecialchars(trim($_POST['pais']));
	$estado = htmlspecialchars(trim($_POST['estado']));
	$ciudad = htmlspecialchars(trim($_POST['ciudad']));
	$zipcode = htmlspecialchars(trim($_POST['zipcode']));
	$direccion = htmlspecialchars(trim($_POST['direccion']));
	$activo = $_POST['activo'];
	
	$obj=new Registros;
	if ( $obj->actualizar(array(
			$nombre, 
			$email, 
			$telefono_local, 
			$telefono_movil, 
			$pais, 
			$estado, 
			$ciudad, 
			$zipcode, 
			$direccion, 
			$activo),$id) == true){
		echo 'Datos guardados';
	}else{
		echo 'Se produjo un error. Intente nuevamente';
	} 
}else{
	if(isset($_GET['id'])){
		include_once("../../clases/database/database.class.php");
		require_once('../../clases/registros/registros.class.php');
		$obj=new Registros;
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
    <input type="hidden" name="id" id="id" value="<?=$consulta['id_registro']?>" />
    <div id="titulo_form">Modificar</div>
    <p>
	    <label>Nombre y Apellido<br />
	    <input name="nombre" type="text" id="nombre" class="text required" value="<?=strtoupper($consulta['nombre'])?>" />
	    </label>
   </p>
    <p>
	    <label>Email<br />
	    <input name="email" type="text" id="email" class="text required" value="<?=strtoupper($consulta['email'])?>" />
	    </label>
    </p>
	<p>
	    <label>Teléfono Local:<br />
	    <input name="telefono_local" type="text" id="telefono_local" class="text required" value="<?=strtoupper($consulta['telefono_local'])?>" />
	    </label>
    </p>
	<p>
	    <label>Teléfono movil:<br />
	    <input name="telefono_movil" type="text" id="telefono_movil" class="text required" value="<?=strtoupper($consulta['telefono_movil'])?>" />
	    </label>
    </p>
	<p>
	    <label>País:<br />
	    <input name="pais" type="text" id="pais" class="text required" value="<?=strtoupper($consulta['pais'])?>" />
	    </label>
    </p>
	<p>
	    <label>Estado:<br />
	    <input name="estado" type="text" id="estado" class="text required" value="<?=strtoupper($consulta['estado'])?>" />
	    </label>
    </p>
	<p>
	    <label>Ciudad:<br />
	    <input name="ciudad" type="text" id="ciudad" class="text required" value="<?=strtoupper($consulta['ciudad'])?>" />
	    </label>
    </p>
	<p>
	    <label>Código Postal<br />
	    <input name="zipcode" type="text" id="zipcode" class="text required" value="<?=strtoupper($consulta['zipcode'])?>" />
	    </label>
    </p>
	<p>
	    <label>Dirección detallada:<br />
	    <textarea name="direccion" id="direccion" class="required"><?=strtoupper($consulta['direccion'])?></textarea>
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