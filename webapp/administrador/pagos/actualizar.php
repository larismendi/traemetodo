<?php
if($_POST['id'] && $_POST['nombre']){
	include_once("../../clases/database/database.class.php");
	require_once('../../clases/pagos/pagos.class.php');
	$id = htmlspecialchars(trim($_POST['id']));
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
	$activo = $_POST['activo'];
	
	$obj=new Pagos;
	if ( $obj->actualizar(array(
			$nombre, 
			$email, 
			$tipopago, 
			$fechapago, 
			$nrofac, 
			$tipotrans, 
			$banco, 
			$nrotrans, 
			$monto, 
			$descripcion,
			$activo),$id) == true){
		echo 'Datos guardados';
	}else{
		echo 'Se produjo un error. Intente nuevamente';
	} 
}else{
	if(isset($_GET['id'])){
		include_once("../../clases/database/database.class.php");
		require_once('../../clases/pagos/pagos.class.php');
		$obj=new Pagos;
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
<form id="frmActualizar" name="frmActualizar" class="form" method="post" action="../pagos/actualizar.php">
    <input type="hidden" name="id" id="id" value="<?=$consulta['id_pago']?>" />
    <div id="titulo_form">Modificar</div>
    <p>
	    <label>Nombre Cliente<br />
	    <input name="nombre" type="text" id="nombre" maxlength="100" class="text required" value="<?=strtoupper($consulta['nombre'])?>" />
	    </label>
    </p>
    <p>
	    <label>Email Cliente<br />
	    <input name="email" type="text" id="email" maxlength="200" class="text required" value="<?=strtoupper($consulta['email'])?>" />
	    </label>
    </p>
	<p>
	    <label>Tipo de Pago:<br />
	    <select name="tipopago" id="tipopago" class="required">
        	<option value="">Seleccione tipo de pago</option>
        	<option value="Bolivares" <?=($consulta['tipopago']=='Bolívares'?'selected':'')?>>Bolívares</option>
        	<option value="Dolares" <?=($consulta['tipopago']=='Dolares'?'selected':'')?>>Dolares</option>
        </select>
	    </label>
    </p>
	<p>
	    <label>Fecha de Pago:<br />
	    <input name="fechapago" type="text" id="fechapago" maxlength="10" class="text required" value="<?=strtoupper($consulta['fecha'])?>" />
	    </label>
    </p>
	<p>
	    <label>Números de Facturas:<br />
	    <input name="nrofac" type="text" id="nrofac" maxlength="40" class="text required" value="<?=strtoupper($consulta['nrofac'])?>" />
	    </label>
    </p>
	<p>
	    <label>Tipo de Transacción:<br />
	    <select name="tipotrans" id="tipotrans" placeholder="Indique el tipo de transacción" class="required">
        	<option value="">Seleccione tipo de transacción</option>
        	<option value="Deposito" <?=($consulta['tipotrans']=='Deposito'?'selected':'')?>>Depósito</option>
        	<option value="Transferencia" <?=($consulta['tipotrans']=='Transferencia'?'selected':'')?>>Transferencia</option>
        </select>
	    </label>
    </p>
	<p>
	    <label>Nombre del Banco:<br />
	    <input name="banco" type="text" id="banco" maxlength="40" class="text required" value="<?=strtoupper($consulta['banco'])?>" />
	    </label>
    </p>
	<p>
	    <label>Número Transacción<br />
	    <input name="nrotrans" type="text" id="nrotrans" maxlength="40" class="text required" value="<?=strtoupper($consulta['nrotrans'])?>" />
	    </label>
    </p>
	<p>
	    <label>Monto:<br />
	    <input name="monto" type="text" id="monto" maxlength="40" class="text required" value="<?=strtoupper($consulta['monto'])?>" />
	    </label>
    </p>
	<p>
	    <label>Descripción del pago:<br />	    
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