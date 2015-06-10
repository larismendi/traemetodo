<?php require_once("../../controlador/login/login.php");?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include("../general/meta_title.html");?>
<link type="text/css" href="../../css/jquery.alerts.css" rel="stylesheet" media="screen" />
<link type="text/css" href="../../css/estilo.css" rel="stylesheet" />
<link type="text/css" href="../../css/PHPPaging/PHPPaging.lib.css" rel="stylesheet"/>
<script src="../../js/jquery-1.4.2.min.js" type="text/javascript"></script>
<script src="../../js/jquery.validate.js" type="text/javascript"></script>
<script src="../../js/jquery.form.js" type="text/javascript"></script>
<script src="../../js/usuarios/usuarios.functions.js" type="text/javascript"></script>
<script src="../../js/jquery.ui.draggable.js" type="text/javascript"></script>
<script src="../../js/jquery.alerts.js" type="text/javascript"></script>
<script src="../../js/tinymce/jscripts/tiny_mce/jquery.tinymce.js" type="text/javascript"></script>
</head>
<body>
<div id="contenedor">
	<?php include('../general/cabecera.html');?>
    <div id="cuerpo">
        <?php include('../general/lateral.html');?>
        <div id="principal">
        	<br />
            <div id="titulo_form"><a href="../usuarios" class="link-tenue">Inicio</a> - Usuarios</div>
            <br />
            <div id="contenido">
            	<br />
                <div id="formulario" style="display:none;">
                </div>
                <div id="tabla">
                	<div id="cuadro">
                      <div id="buscador">
                      <form action="javascript: ConsultaDatos();" id="frm_buscar" name="frm_buscar">                      
                          <span>Buscador</span>
                          <span><input name="criterio_usu_pe" type="text" id="criterio_usu_pe" /></span>
                          <span>Ordenar</span>
                          <span>
                              <select name="criterio_ordenar_por" id="criterio_ordenar_por">
                                  <option value="id_usuario">Id</option>
                                  <option value="nombre">Nombre</option>
                                  <option value="email">Email</option>
                                  <option value="created_at">Fecha creación</option>
                              </select>
                          </span>
                          <span>En</span>
                          <span>
                              <select name="criterio_orden" id="criterio_orden">
                                  <option value="desc">Descendente</option>
                                  <option value="asc">Ascendente</option>
                              </select>
                          </span>
                          <span>Registros</span>
                          <span>
                              <select name="criterio_mostrar" id="criterio_mostrar">
                                  <option value="1">1</option>
                                  <option value="2">2</option>
                                  <option value="5">5</option>
                                  <option value="10" selected="selected">10</option>
                                  <option value="20">20</option>
                                  <option value="40">40</option>
                              </select>
                          </span><input type="submit" value="Buscar" /></span>                      
                      </form>
                      </div>
                  	</div>
                  	<div id="div_listar"></div>
                </div>
            </div>
        </div>
	</div>    
	<?php include("../general/footer.html");?>
</div>
</body>
</html>