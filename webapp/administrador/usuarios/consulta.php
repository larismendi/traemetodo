<?php
include_once("../../clases/database/database.class.php");
include_once("../../clases/PHPPaging/PHPPaging.lib.php");
include_once("../../controlador/PHPPaging/basico.php");
require_once('../../clases/usuarios/usuarios.class.php');
require_once('../../controlador/usuarios/usuarios.php');
?>
<script type="text/javascript">
$(document).ready(function(){
	// mostrar formulario de actualizar datos
	$("table tr .modi a").click(function(){
		$('#tabla').hide();
		$("#formulario").show();
		$.ajax({
			url: this.href,
			type: "GET",
			success: function(datos){
				$("#formulario").html(datos);
			}
		});
		return false;
	});	
	// llamar a formulario nuevo
	$("#nuevo a").click(function(){
		$("#formulario").show();
		$("#tabla").hide();
		$.ajax({
			type: "GET",
			url: 'nuevo.php',
			success: function(datos){
				$("#formulario").html(datos);
			}
		});
		return false;
	});
	$("#consulta tbody tr").mouseover(function(){
		$(this).css("background-color","#9CC");
	}).mouseout(function(){
		$(this).css("background-color","#F2F2F2");
	});
});
</script>
<table id="consulta">
  <thead>
      <tr>
      	  <th></th>
          <th>Nombre</th>
          <th>Username</th>
          <th>Email</th>
          <th>Activo</th>
          <th>Fecha Creación</th>
          <th></th>
          <th><span id="nuevo"><a href="nuevo.php"><img src="../../img/add.png" alt="Agregar dato" border="0" /></a></span></th>
      </tr>
  </thead>
  <tbody>
<?php
if($consultas) {
	foreach( $consultas->fetchTodo() as $consulta ):
?>	
      <tr id="fila-<?php echo $consulta['id_usuario']?>" class="somb">
      	<td><b><?=$consulta['id_usuario']?></b></td>
        <td><?=($consulta['nombre'])?></td>
        <td><?=($consulta['username'])?></td>
        <td><?=($consulta['email'])?></td>
        <td><?=$consulta['habilitado']==1?'SI':'NO'?></td>
        <td><?=$consulta['created_at'] ?></td>
        <td><span class="modi"><a href="../usuarios/actualizar.php?id=<?=$consulta['id_usuario'] ?>"><img src="../../img/database_edit.png" title="Editar" alt="Editar" border="0" /></a></span></td>
        <td><? if($consulta['id_usuario']!=1){?><span class="dele"><a onClick="EliminarDato(<?=$consulta['id_usuario'] ?>); return false" href="../usuarios/eliminar.php?id=<?=$consulta['id_usuario'] ?>"><img src="../../img/delete.png" title="Eliminar" alt="Eliminar" border="0" /></a></span><? }?></td>
      </tr>
	<?php
	endforeach;
}else{
?>
      <tr>
          <td colspan="8" align="center" class="texto-sindatos">No hay datos para mostrar</td>
      </tr>
<?php
}
?>
  </tbody>
  <tfoot>
      <tr>
        <td colspan="8" align="center">
	        <div id="paginador">
	          <div align="left" style="width:100%;">Mostrando: <?=$consultas->numRegistrosMostrados()?> registros, del <?=$consultas->numPrimerRegistro()?> al <?=$consultas->numUltimoRegistro()?> de un total de: <?=$consultas->numTotalRegistros()?></div><br />
	          <div style="width:100%;"><?=$consultas->fetchNavegacion()?></div>
	        </div>
        </td>
      </tr>
  </tfoot>
</table>