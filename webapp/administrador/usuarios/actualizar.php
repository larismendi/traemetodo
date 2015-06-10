<?php
require_once('../../controlador/usuarios/functions.php');
if($_POST['id'] && $_POST['nombre']){
	include_once("../../clases/database/database.class.php");
	require_once('../../clases/usuarios/usuarios.class.php');
	$id = htmlspecialchars(trim($_POST['id']));
	$nombre = htmlspecialchars(trim($_POST['nombre']));
	$username = htmlspecialchars(trim($_POST['username']));
	$password = $_POST['password']!=""?htmlspecialchars(trim($_POST['password'])):null;
	$check = $_POST['check'];
	$email = htmlspecialchars(trim($_POST['email']));
	$activo = $_POST['activo'];
	
	$obj=new Usuarios;

	if ( $obj->actualizar(array(
			$nombre, 
			$username,
			$password,
			$check,
			$email, 
			$activo),$id) == true){
		echo 'Datos guardados';
	}else{
		echo 'Se produjo un error. Intente nuevamente';
	} 
}else{
	if(isset($_GET['id'])){
		include_once("../../clases/database/database.class.php");
		require_once('../../clases/usuarios/usuarios.class.php');
		$obj=new Usuarios;
		$consulta = $obj->mostrar($_GET['id']);
?>
<script type="text/javascript">
$(document).ready(function() {
	$("#frmSuscActualizar").validate({
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
	$('#a_seg').click(function(){
		$('#visible').css('display','none');
		$('#oculto').css('display','block');
	});
	$('#q_seg').click(function(){
		$('#visible').css('display','block');
		$('#oculto').css('display','none');
	});
});
</script>
<form id="frmSuscActualizar" name="frmSuscActualizar" class="form" method="post" action="../registros/actualizar.php">
    <input type="hidden" name="id" id="id" value="<?=$consulta['id_usuario']?>" />
    <div id="titulo_form">Modificar</div>
    <p>
	    <label>Nombre<br />
	    <input name="nombre" type="text" id="nombre" class="text required" value="<?=($consulta['nombre'])?>" />
	    </label>
    </p>
	<p>
	    <label>Username:<br />
	    <input name="username" type="text" id="username" class="text required" value="<?=($consulta['username'])?>" />
	    </label>
    </p>
	<p>
	    <label>Password:</label><br />
	    <input name="password" type="text" id="password" class="text" value="" />
	    <br />
	    <label>Si quiere cambiar la clave active el checkbox. <input type="checkbox" name="check" value="1" /></label>
    </p>
    <p>
	    <label>Email<br />
	    <input name="email" type="text" id="email" class="text email" value="<?=($consulta['email'])?>" />
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