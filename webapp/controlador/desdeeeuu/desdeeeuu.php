<?php
/**
 * Created by PhpStorm.
 * User: larismendi
 * Date: 01/07/2015
 * Time: 07:57 PM
 */

error_reporting ( E_ERROR & ~E_NOTICE & ~E_DEPRECATED );
$obj=new DesdeEeuu();
$consultas=$obj->mostrar_all(array($_GET['criterio_usu_pe'],$_GET['criterio_ordenar_por'],$_GET['criterio_orden'],$_GET['criterio_mostrar']));
?>