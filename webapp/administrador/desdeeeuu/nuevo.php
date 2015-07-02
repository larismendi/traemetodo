<?php
if(isset($_POST['nombre']) && isset($_POST['email'])){
	include_once("../../clases/database/database.class.php");
	require_once('../../clases/desdeeeuu/desdeeeuu.class.php');
	$nombre = htmlspecialchars(trim($_POST['nombre']));
	$email = htmlspecialchars(trim($_POST['email']));
	$telef = htmlspecialchars(trim($_POST['telef']));
	$pais = htmlspecialchars(trim($_POST['pais']));
	$ciudad = htmlspecialchars(trim($_POST['ciudad']));
	$anio = htmlspecialchars(trim($_POST['anio']));
	$motor = htmlspecialchars(trim($_POST['motor']));
	$transmision = htmlspecialchars(trim($_POST['transmision']));
	$vin = htmlspecialchars(trim($_POST['vin']));
	$nropart = htmlspecialchars(trim($_POST['nropart']));
	$descpart = htmlspecialchars(trim($_POST['descpart']));
	
	$obj=new RepuestosAutos;
	if($obj->insertar(array($nombre,$email,$telefono,$marca,$modelo,$anio,$motor,$transmision,$vin,$nropart,$descpart))==true){
		echo 'Datos guardados';
	}else{
		echo 'Se produjo un error. Intente nuevamente';
	}
}else{
?>
<script type="text/javascript">
$(document).ready(function() {//funcion validacion
	$("#frmNuevo").validate({
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
});
</script>
<form id="frmNuevo" name="frmNuevo" class="form" action="../repuestosautos/nuevo.php" method="post" enctype="multipart/form-data">
	<div id="titulo_form">Agregar</div>
    <p>
	    <label>Nombre y Apellido<br />
	    <input name="nombre" type="text" id="nombre" maxlength="100" class="text required" value="" />
	    </label>
    </p>
    <p>
	    <label>Email<br />
	    <input name="email" type="text" id="email" maxlength="200" class="text required" value="" />
	    </label>
    </p>
	<p>
	    <label>Teléfono:<br />
	    <input name="telefono" type="text" id="telefono" maxlength="20" class="text required" value="" />
	    </label>
    </p>
	<p>
	    <label>Marca:<br />
	    <input name="marca" type="text" id="marca" maxlength="40" class="text required" value="" />
	    </label>
    </p>
	<p>
	    <label>Modelo:<br />
	    <input name="modelo" type="text" id="modelo" maxlength="40" class="text required" value="" />
	    </label>
    </p>
	<p>
	    <label>Año:<br />
	    <input name="anio" type="text" id="anio" maxlength="4" class="text required"  value="" />
	    </label>
    </p>
	<p>
	    <label>Motor:<br />
	    <input name="motor" type="text" id="motor" maxlength="40" class="text required" value="" />
	    </label>
    </p>
	<p>
	    <label>Transmisión<br />
	    <input name="transmision" type="text" id="transmision" maxlength="40" class="text required" value="" />
	    </label>
    </p>
	<p>
	    <label>Serial carrocería o VIN:<br />
	    <input name="vin" type="text" id="vin" maxlength="40" class="text required" value="" />
	    </label>
    </p>
	<p>
	    <label>Código repuesto o Parts Number:<br />	    
	    <textarea name="nropart" id="nropart" class="required"></textarea>
	    </label>
    </p>
	<p>
	    <label>Descripción repuesto:<br />
	    <textarea name="descpart" id="descpart" class="required"></textarea>
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