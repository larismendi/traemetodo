<?php
if(isset($_POST['nombre']) && isset($_POST['email'])){
	include_once("../../clases/database/database.class.php");
	require_once('../../clases/boletines/boletines.class.php');
	$nombre = htmlspecialchars(trim($_POST['nombre']));
	$email = htmlspecialchars(trim($_POST['email']));
	
	$obj=new Boletines;
	if($obj->insertar(array($nombre,$email))==true){
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
      <input type="submit" name="enviar" id="button" value="Enviar" />
      <label></label>
      <input type="button" class="cancelar" name="cancelar" id="cancelar" value="Cancelar" onclick="Cancelar()" />
    </p>
</form>
<?php
}
?>