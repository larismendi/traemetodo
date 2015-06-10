<?php

$body = file_get_contents('webapp/mail/registros/alta.html');
			
$body = eregi_replace("[\]",'',$body);
$body = eregi_replace("{nombre}",'Luis Arismendi',$body);
$body = eregi_replace("{num}",'Cskdhj45588as',$body);
$body = eregi_replace("{email}",'luisfelipe.arismendi@gmail.com',$body);
$body = eregi_replace("{direccion}",'Caracas',$body);
$body = eregi_replace("{ciudad}",'Ciudad',$body);
$body = eregi_replace("{estado}",'Capital',$body);
$body = eregi_replace("{zipcode}",'1020',$body);
$body = eregi_replace("{pais}",'Venezuela',$body);
$body = eregi_replace("{telefono_movil}",'5555555',$body);
$body = eregi_replace("{telefono_local}",'444444',$body);

echo $body;

?>