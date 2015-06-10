<?php
require_once('../../controlador/usuarios/functions.php');
if(isset($_POST['nombre']) && isset($_POST['email'])){
	include_once("../../clases/database/database.class.php");
	require_once('../../clases/usuarios/usuarios.class.php');
	$nombre = htmlspecialchars(trim($_POST['nombre']));
	$username = htmlspecialchars(trim($_POST['username']));
	$password = $_POST['password'];
	$email = htmlspecialchars(trim($_POST['email']));
	
	$objSusc=new Usuarios;
	if($objSusc->insertar(array($nombre,$username,$password,$email))==true){
		echo 'Datos guardados';
	}else{
		echo 'Se produjo un error. Intente nuevamente';
	}
}else{
?>
<script type="text/javascript">
$(document).ready(function() {//funcion validacion
	$("#frmSuscNuevo").validate({
    	submitHandler: function(form) {
        	$(form).ajaxSubmit({
				type: 'post',
				success: function(responseText){
					ConsultaDatos()//responseText es lo q retorna
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
<form id="frmSuscNuevo" name="frmSuscNuevo" class="form" action="../usuarios/nuevo.php" method="post" enctype="multipart/form-data">
	<div id="titulo_form">Agregar</div>
    <p>
      <label>Nombre<br />
      <input class="text required" type="text" name="nombre" id="nombre" />
      </label>
    </p>
    <p>
      <label>Username<br />
      <input class="text required" type="text" name="username" id="username" />
      </label>
    </p>
    <p>
      <label>Password<br />
      <input class="text required" type="password" name="password" id="password" />
      </label>
    </p>
    <p>
      <label>Email<br />
      <input class="text email" type="text" name="email" id="email" />
      </label>
    </p>
    <p>
      <input type="submit" name="enviar" id="button" value="Enviar" />
      <label></label>
      <input type="button" class="cancelar" name="cancelar" id="cancelar" value="Cancelar" onclick="Cancelar()" />
    </p>
</form>
<?php
}
?>