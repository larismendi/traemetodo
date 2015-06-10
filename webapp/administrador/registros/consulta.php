<?php
include_once("../../clases/database/database.class.php");
include_once("../../clases/PHPPaging/PHPPaging.lib.php");
include_once("../../controlador/PHPPaging/basico.php");
require_once('../../clases/registros/registros.class.php');
require_once('../../controlador/registros/registros.php');
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
          <th>Nombres</th>
          <th>Email</th>
          <!--<th>Validado</th>-->
          <th>Teléfonos</th>
          <th>País</th>
          <th>Estado</th>
          <th>Ciudad</th>
          <th>Activo</th>
          <th>Fecha Creación</th>
          <th>Mail</th>
          <th><a href="excel.php"><img src="../../img/excel.png" alt="Exportar a Excel" name="excel" width="22" height="22" border="0"></a></th>
          <th><span id="nuevo"><a href="nuevo.php"><img src="../../img/add.png" alt="Agregar dato" border="0" /></a></span></th>
      </tr>
  </thead>
  <tbody>
<?php
if($consultas->numTotalPaginas) {
	foreach( $consultas->fetchTodo() as $consulta ):
?>	
      <tr id="fila-<?php echo $consulta['id_registro'] ?>" class="somb">
      	<td><b><?=$consulta['id_registro']?></b></td>
        <td><?=strtoupper($consulta['nombre'])?></td>
        <td><?=strtoupper($consulta['email'])?></td>
        <?/*<td><?=$consulta['email_valido']==1?'SI':'NO'?></td>*/?>
        <td><?=strtoupper($consulta['telefono_movil'].' / '.$consulta['telefono_local'])?></td>
        <td><?=strtoupper($consulta['pais'])?></td>
        <td><?=strtoupper($consulta['estado'])?></td>
        <td><?=strtoupper($consulta['ciudad'])?></td>
        <td><?=$consulta['habilitado']==1?'SI':'NO'?></td>
        <td><?=$consulta['created_at'] ?></td>
        <td><span class="mail"><a onClick="Mail(<?=$consulta['id_registro']?>); return false" href="mail.php?id=<?=$consulta['id_registro']?>"><img src="../../img/mail.png" title="Mail Registro" alt="Mail Registro" border="0" /></a></span></td>
        <td><span class="modi"><a href="actualizar.php?id=<?=$consulta['id_registro']?>"><img src="../../img/database_edit.png" title="Editar" alt="Editar" border="0" /></a></span></td>
        <td><span class="dele"><a onClick="EliminarDato(<?=$consulta['id_registro']?>); return false" href="eliminar.php?id=<?=$consulta['id_registro'] ?>"><img src="../../img/delete.png" title="Eliminar" alt="Eliminar" border="0" /></a></span></td>
      </tr>
	<?php
	endforeach;
  ?>
  </tbody>
  <tfoot>
      <tr>
        <td colspan="12" align="center">
          <div id="paginador">
            <div align="left" style="width:100%;">Mostrando: <?=$consultas->numRegistrosMostrados()?> registros, del <?=$consultas->numPrimerRegistro()?> al <?=$consultas->numUltimoRegistro()?> de un total de: <?=$consultas->numTotalRegistros()?></div><br />
            <div style="width:100%;"><?=$consultas->fetchNavegacion()?></div>
          </div>
        </td>
      </tr>
  </tfoot>
<?php
}else{
?>
      <tr>
          <td colspan="12" align="center" class="texto-sindatos">No hay datos para mostrar</td>
      </tr>
  </tbody>
<?php
}
?>
</table>