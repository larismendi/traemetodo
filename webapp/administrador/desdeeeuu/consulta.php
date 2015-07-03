<?php
include_once("../../clases/database/database.class.php");
include_once("../../clases/PHPPaging/PHPPaging.lib.php");
include_once("../../controlador/PHPPaging/basico.php");
require_once('../../clases/desdeeeuu/desdeeeuu.class.php');
require_once('../../controlador/desdeeeuu/desdeeeuu.php');
?>
<script type="text/javascript">
$(document).ready(function(){
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
          <th>Teléfono</th>
          <th>Origen</th>
          <th>Destino</th>
          <th>Numero de cajas</th>
          <th>Total</th>
          <th>Valor</th>
          <th>Seguro</th>
          <th>Descripción</th>
          <th>Fecha Creación</th>
          <th><a href="excel.php"><img src="../../img/excel.png" alt="Exportar a Excel" name="excel" width="22" height="22" border="0"></a></th>
      </tr>
  </thead>
  <tbody>
<?php
if($consultas->numTotalPaginas) {
	foreach( $consultas->fetchTodo() as $consulta ):
?>	
      <tr id="fila-<?=$consulta['id_desdeeeuu']?>" class="somb">
      	<td><b><?=$consulta['id_desdeeeuu']?></b></td>
        <td><?=strtoupper($consulta['nombre'])?></td>
        <td><?=($consulta['email'])?></td>
        <td><?=strtoupper($consulta['telef'])?></td>
        <td><?=strtoupper($consulta['pais'].' - '.$consulta['estado'].' - '.$consulta['ciudad'].' - '.$consulta['calle'])?></td>
        <td><?=strtoupper($consulta['pais_destino'].' - '.$consulta['ciudad_destino'])?></td>
        <td><?=strtoupper($consulta['cantidad_caja'])?></td>
        <td><?=strtoupper($consulta['total'])?></td>
        <td><?=strtoupper($consulta['valor'])?></td>
        <td><?=strtoupper($consulta['seguro'])?></td>
        <td><?=$consulta['descripcion'] ?></td>
        <td><?=$consulta['date_add'] ?></td>
        <td></td>
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
          <td colspan="12" align="center" class="texto-sindatos">No hay datos para mostrar</td>
      </tr>
  </tbody>
<?php
}
?>
</table>