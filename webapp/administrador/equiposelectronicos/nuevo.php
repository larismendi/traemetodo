<?php
if(isset($_POST['nombre']) && isset($_POST['email'])){
	include_once("../../clases/database/database.class.php");
	require_once('../../clases/equiposelectronicos/equiposelectronicos.class.php');
	$nombre = htmlspecialchars(trim($_POST['nombre']));
	$email = htmlspecialchars(trim($_POST['email']));
	$telefono = htmlspecialchars(trim($_POST['telefono']));
	$descripcion = htmlspecialchars(trim($_POST['descripcion']));
	
	$obj=new EquiposElectronicos;
	if($obj->insertar(array($nombre,$email,$telefono,$descripcion))==true){
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
});
</script>
<form id="frmNuevo" name="frmNuevo" class="form" action="nuevo.php" method="post" enctype="multipart/form-data">
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
	    <label>Descripción y código de repuesto:<br />
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