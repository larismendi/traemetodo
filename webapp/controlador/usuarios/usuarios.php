<?php
$obj=new Usuarios;
$consultas=$obj->mostrar_all(array($_GET['criterio_usu_pe'],$_GET['criterio_ordenar_por'],$_GET['criterio_orden'],$_GET['criterio_mostrar']));
?>