<?php
$headers    = array
(
    'MIME-Version: 1.0',
    'Content-Type: text/html; charset="UTF-8";',
    'Content-Transfer-Encoding: 7bit',
    'Date: ' . date('r', $_SERVER['REQUEST_TIME']),
    'Message-ID: <' . $_SERVER['REQUEST_TIME'] . md5($_SERVER['REQUEST_TIME']) . '@' . $_SERVER['SERVER_NAME'] . '>',
    'From: info@traemetodo.com',
    'Reply-To: info@traemetodo.com',
    'Return-Path: info@traemetodo.com',
    'X-Mailer: PHP v' . phpversion(),
    'X-Originating-IP: ' . $_SERVER['SERVER_ADDR'],
);

$mensaje = 'Correo desde mi laptop';
var_dump(mail('lipe88rey@hotmail.com', 'Prueba', $mensaje, implode("\n", $headers)));
?>