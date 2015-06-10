<?php
include_once("../../clases/database/database.class.php");
include_once("../../clases/PHPPaging/PHPPaging.lib.php");
include_once("../../controlador/PHPPaging/basico.php");
require_once('../../clases/pagos/pagos.class.php');
require_once('../../controlador/pagos/pagos.php');
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
      	  <th>Id</th>
          <th>Nombres</th>
          <th>Email</th>
          <th>Tipo de pago</th>
          <th>Fecha de pago</th>
          <th>Números de Facturas</th>
          <th>Tipo de Transacción</th>
          <th>Nombre del Banco</th>
          <th>Número Transacción</th>
          <th>Monto</th>
          <th>Fecha Creación</th>
          <th><a href="excel.php"><img src="../../img/excel.png" alt="Exportar a Excel" name="excel" width="22" height="22" border="0"></a></th>
          <th><span id="nuevo"><a href="nuevo.php"><img src="../../img/add.png" alt="Agregar dato" border="0" /></a></span></th>
      </tr>
  </thead>
  <tbody>
<?php
if($consultas->numTotalPaginas) {
	foreach( $consultas->fetchTodo() as $consulta ):
?>	
      <tr id="fila-<?php echo $consulta['id_pago'] ?>" class="somb">
      	<td><b><?=$consulta['id_pago']?></b></td>
        <td><?=strtoupper($consulta['nombre'])?></td>
        <td><?=($consulta['email'])?></td>
        <td><?=strtoupper($consulta['tipopago'])?></td>
        <td><?=strtoupper($consulta['fechapago'])?></td>
        <td><?=strtoupper($consulta['nrofac'])?></td>
        <td><?=strtoupper($consulta['tipotrans'])?></td>
        <td><?=strtoupper($consulta['banco'])?></td>
        <td><?=strtoupper($consulta['nrotrans'])?></td>
        <td><?=strtoupper($consulta['monto'])?></td>
        <td><?=$consulta['created_at'] ?></td>
        <td><span class="modi"><a href="actualizar.php?id=<?=$consulta['id_pago'] ?>"><img src="../../img/database_edit.png" title="Editar" alt="Editar" border="0" /></a></span></td>
        <td><span class="dele"><a onClick="EliminarDato(<?=$consulta['id_pago'] ?>); return false" href="eliminar.php?id=<?=$consulta['id_pago'] ?>"><img src="../../img/delete.png" title="Eliminar" alt="Eliminar" border="0" /></a></span></td>
      </tr>
	<?php
	endforeach;
  ?>
  </tbody>
  <tfoot>
      <tr>
        <td colspan="13" align="center">
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
          <td colspan="13" align="center" class="texto-sindatos">No hay datos para mostrar</td>
      </tr>
  </tbody>
<?php
}
?>  
</table>