<?php
if(isset($_POST['nombre']) && isset($_POST['email'])){
	include_once("../../clases/database/database.class.php");
	require_once('../../clases/pagos/pagos.class.php');
	$nombre = htmlspecialchars(trim($_POST['nombre']));
	$email = htmlspecialchars(trim($_POST['email']));
	$tipopago = htmlspecialchars(trim($_POST['tipopago']));
	$fechapago = htmlspecialchars(trim($_POST['fechapago']));
	$nrofac = htmlspecialchars(trim($_POST['nrofac']));
	$tipotrans = htmlspecialchars(trim($_POST['tipotrans']));
	$banco = htmlspecialchars(trim($_POST['banco']));
	$nrotrans = htmlspecialchars(trim($_POST['nrotrans']));
	$monto = htmlspecialchars(trim($_POST['monto']));
	$descripcion = htmlspecialchars(trim($_POST['descripcion']));
	
	$obj=new Pagos;
	if($obj->insertar(array($nombre,$email,$tipopago,$fechapago,$nrofac,$tipotrans,$banco,$nrotrans,$monto,$descripcion))==true){
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
<form id="frmNuevo" name="frmNuevo" class="form" action="../pagos/nuevo.php" method="post" enctype="multipart/form-data">
	<div id="titulo_form">Agregar</div>
    <p>
	    <label>Nombre y Apellido<br />
	    <input name="nombre" type="text" id="nombre" placeholder="Indicar nombre y apellido" maxlength="100" class="text required" value="" />
	    </label>
    </p>
    <p>
	    <label>Email<br />
	    <input name="email" type="text" id="email" placeholder="Indicar Email" maxlength="200" class="text required" value="" />
	    </label>
    </p>
	<p>
	    <label>Tipo de Pago:<br />
	    <select name="tipopago" id="tipopago" placeholder="Indicar tipo de pago" class="required">
        	<option value="">Seleccione tipo de pago</option>
        	<option value="Bolivares">Bolívares</option>
        	<option value="Dolares">Dolares</option>
        </select>
	    </label>
    </p>
	<p>
	    <label>Fecha de Pago:<br />
	    <input name="fechapago" type="text" id="fechapago" placeholder="Indicar fecha de pago" maxlength="10" class="text required" value="" />
	    </label>
    </p>
	<p>
	    <label>Números de Facturas:<br />
	    <input name="nrofac" type="text" id="nrofac" placeholder="Número de facturas" maxlength="40" class="text required" value="" />
	    </label>
    </p>
	<p>
	    <label>Tipo de Transacción:<br />
	    <select name="tipotrans" id="tipotrans" placeholder="Indique el tipo de transacción" class="required">
        	<option value="">Seleccione tipo de transacción</option>
        	<option value="Deposito">Depósito</option>
        	<option value="Transferencia">Transferencia</option>
        </select>
	    </label>
    </p>
	<p>
	    <label>Banco:<br />
	    <input name="banco" type="text" id="banco" placeholder="Indicar el nombre del banco" maxlength="40" class="text required" value="" />
	    </label>
    </p>
	<p>
	    <label>Número de transacciones<br />
	    <input name="nrotrans" type="text" id="nrotrans" placeholder="Indicar número de transacciones" maxlength="30" class="text required" value="" />
	    </label>
    </p>
	<p>
	    <label>Monto:<br />
	    <input name="monto" type="text" id="monto" placeholder="Indicar el monto" maxlength="40" class="text required" value="" />
	    </label>
    </p>
	<p>
	    <label>Descripción del pago:<br />	    
	    <textarea name="descripcion" id="descripcion" placeholder="Indique una descripción" class="required"></textarea>
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