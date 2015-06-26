<?php
/*** Created by PhpStorm.
 * User: larismendi
 * Date: 18/06/2015
 * Time: 08:23 PM
 */

if(isset($_POST['tipo'])){
    require_once("webapp/clases/database/database.class.php");
    require_once("webapp/web/clases/registros.class.php");
    $obj =new Registros();
    $res = $obj->dato_code($_POST['code']);
    echo json_encode($res);
    die;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Envío de la carga desde los EEUU</title>
    <link href='http://fonts.googleapis.com/css?family=Cuprum:400,700' rel='stylesheet' type='text/css'>
    <link rel="shortcut icon" href="file:///E|/traelotodo/favicon.ico">
    <link rel="stylesheet" type="text/css" href="css/demo.css"/>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <link rel="stylesheet" type="text/css" href="css/custom.css"/>
    <link rel="stylesheet" type="text/css" href="css/colorbox.css"/>
    <link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css">
    <style type="text/css">
        <!--
        .Estilo1 {
            color: #FFFFFF
        }
        .Estilo2 {
            color: #FFCB29
        }
        td img {
            display: block;
        }
        td img {
            display: block;
        }
        td img {
            display: block;
        }
        td img {
            display: block;
        }
        td img {
            display: block;
        }
        td img {
            display: block;
        }
        td img {
            display: block;
        }
        td img {
            display: block;
        }
        td img {
            display: block;
        }
        .style7 {
            font-size: 18px;
            font-weight: bold;
        }
        .style9 {
            font-size: 11px;
            font-weight: bold;
        }
        .style13 {
            font-size: 14.5px;
        }
        a:link {
            color: #FFFFFF;
            text-decoration: none;
        }
        a:hover {
            color: #FFCB29;
            text-decoration: underline;
        }
        a:active {
            color: #FFCB29;
            text-decoration: none;
        }
        .style14 {
            font-size: 25px;
            font-weight: bold;
        }
        body {
            font-family: Lato, Calibri, Arial, sans-serif;
            color: #FFF;
        }
        a:visited {
            text-decoration: none;
            color: #FFF;
        }
        td img {
            display: block;
        }
        td img {
            display: block;
        }
        td img {
            display: block;
        }
        td img {
            display: block;
        }
        td img {
            display: block;
        }
        td img {
            display: block;
        }
        td img {
            display: block;
        }
        td img {
            display: block;
        }
        td img {
            display: block;
        }
        td img {
            display: block;
        }
        .Estilo12 {
            color: #666666;
            font-weight: bold;
        }
        .Estilo13 {
            color: #333333;
            font-size: 17px;
            font-weight: bold;
        }
        .Estilo14 {
            color: #FFCB2C
        }
        .Estilo18 {
            font-size: 16;
            color: #333333;
        }
        .Estilo19 {
            font-size: 17px;
            font-weight: bold;
            color: #FFB42E;
        }
        .Estilo20 {
            font-size: 16px;
            color: #333333;
        }
        .Estilo21 {
            font-size: 16px;
            color: #333333;
            font-weight: bold;
        }
        .Estilo22 {
            color: #333333;
            font-weight: bold;
        }
        .Estilo23 {
            color: #E80000
        }
        -->
        <!--
        a.boton {
            text-decoration: none;
        }
        a.boton span.negro {
            background-color: #222222;
            color: white;
            padding: 4px;
            font-weight: bold;
        }
        a.boton span.amarillo {
            background-color: #ffcb2c;
            color: #222222;
            padding: 4px;
            font-weight: bold;
        }
        a.boton:hover span.negro {
            background-color: #ffcb2c;
            color: #222222;
            padding: 5px;
            font-weight: bold;
        }
        a.boton:hover span.amarillo {
            background-color: #222222;
            color: white;
            padding: 5px;
            font-weight: bold;
        }
        .mensaje {
            text-align: center;
            color: #FFF;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 12px;
            font-weight: bold;
            margin: 0 auto;
            padding: 4px;
            background-color: <?=(!isset($errores))?'green':'red'?>;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px;
            width: 300px;
        }
        .form {
            font-family: Arial, Helvetica, sans-serif;
            background: #EEEEEE;
            border: 1px solid #DDDDDD;
            border-radius: 10px 10px 10px 10px;
            padding: 30px;
            text-align: left;
            width: 600px;
            font-size: 14px;
        | box-shadow : 3 px 3 px 3 px #888888;
            margin-bottom: 5px;
        }
        .form div {
            margin-top: 5px;
            color: #333333;
            text-align: justify;
            font-size: 14px;
        }
        .form p {
            color: #FF9900;
            margin-top: -8px;
            padding-bottom: 10px;
            font-size: 16px;
            font-weight: bold;
        }
        .form label {
            color: #FF9900;
            display: block;
            font-size: 1em;
        }
        .form input, .form textarea, .form select {
            background: none repeat scroll 0 0 #555555;
            border: 1px solid #DDDDDD;
            border-radius: 5px 5px 5px 5px;
            color: #FFFFFF;
            font-size: 1em;
            margin: 0 0 10px 0;
            padding: 4px;
        }
        .form .texto-captcha {
            color: #FF9900;
            font-size: 1em;
        }
        .form input[type=text] {
            width: 220px;
        }
        .form textarea {
            height: 130px;
            width: 405px;
        }
        .form input:hover, .form textarea:hover {
            background: none repeat scroll 0 0 #888888;
        }
        .form input.submit {
            background: none repeat scroll 0 0 #FF9900;
            border: medium none;
            color: #EEEEEE;
            margin-top: 10px;
            text-transform: uppercase;
            width: 150px;
        }
        .form input.submit:hover {
            box-shadow: 0 0 5px #555555;
            cursor: pointer;
        }
        .form .requerido {
            color: red;
        }
        .form label.error {
            color: red;
            margin: -5px 0 5px 0;
        }
        .Estilo24 {
            font-size: 16px;
            color: #333333;
            font-weight: bold;
        }
        #code { display: none; }
        -->
    </style>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <noscript>
        <link rel="stylesheet" type="text/css" href="css/styleNoJS.css"/>
    </noscript>    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
    <script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
    <script type="text/javascript">
        function MM_preloadImages() { //v3.0
            var d = document;
            if (d.images) {
                if (!d.MM_p) d.MM_p = new Array();
                var i, j = d.MM_p.length, a = MM_preloadImages.arguments;
                for (i = 0; i < a.length; i++)
                    if (a[i].indexOf("#") != 0) {
                        d.MM_p[j] = new Image;
                        d.MM_p[j++].src = a[i];
                    }
            }
        }
        function MM_swapImgRestore() { //v3.0
            var i, x, a = document.MM_sr;
            for (i = 0; a && i < a.length && (x = a[i]) && x.oSrc; i++) x.src = x.oSrc;
        }
        function MM_findObj(n, d) { //v4.01
            var p, i, x;
            if (!d) d = document;
            if ((p = n.indexOf("?")) > 0 && parent.frames.length) {
                d = parent.frames[n.substring(p + 1)].document;
                n = n.substring(0, p);
            }
            if (!(x = d[n]) && d.all) x = d.all[n];
            for (i = 0; !x && i < d.forms.length; i++) x = d.forms[i][n];
            for (i = 0; !x && d.layers && i < d.layers.length; i++) x = MM_findObj(n, d.layers[i].document);
            if (!x && d.getElementById) x = d.getElementById(n);
            return x;
        }
        function MM_swapImage() { //v3.0
            var i, j = 0, x, a = MM_swapImage.arguments;
            document.MM_sr = new Array;
            for (i = 0; i < (a.length - 2); i += 3)
                if ((x = MM_findObj(a[i])) != null) {
                    document.MM_sr[j++] = x;
                    if (!x.oSrc) x.oSrc = x.src;
                    x.src = a[i + 2];
                }
        }
    </script>
    <script type="text/javascript" src="js/modernizr.custom.79639.js"></script>
</head>
<body onLoad="MM_preloadImages('img/Logohov.fw.png')">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
        <td align="center" valign="middle" bgcolor="#FFFFFF">&nbsp;</td>
    </tr>
    <tr>
        <td align="center" valign="middle" bgcolor="#FFFFFF">
            <table width="960" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                    <td width="380">
                        <a href="index.php" target="_top" onMouseOver="MM_swapImage('logo','','img/Logohov.fw.png',1)" onMouseOut="MM_swapImgRestore()">
                            <img src="img/Logo.png" alt="logo traemetodo" name="logo" width="408" height="94" border="0" id="logo">
                        </a>
                    </td>
                    <td width="580" align="right" valign="middle">
                        <table width="549" border="0" align="center" cellpadding="0" cellspacing="6">
                            <tr>
                                <td width="110" align="right" bgcolor="#FFFFFF">&nbsp;</td>
                                <td width="244" align="right" bgcolor="#FFFFFF"><span class="Estilo12">Síguenos también en</span>:
                                </td>
                                <td width="53" align="right" bgcolor="#FFFFFF">
                                    <a href="https://twitter.com/TRAEMETODO" target="_blank"><img src="img/tw.png" alt="twitter-traemetodo" width="53" height="53" border="0"></a>
                                </td>
                                <td width="53" align="right" bgcolor="#FFFFFF"><a href="https://www.facebook.com/traemetodo?fref=ts" target="_blank"><img src="img/fb.png" alt="facebook-traemetodo" width="53" height="53" border="0"></a></td>
                                <td width="53" align="right" bgcolor="#FFFFFF"><a href="https://instagram.com/traemetodo" target="_blank"><img src="img/IST.fw.png" alt="instagram-traemetodo" width="53" height="53"></a>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td align="center" valign="middle" bgcolor="#FFFFFF">&nbsp;</td>
    </tr>
    <tr>
        <td width="1197" align="center" bgcolor="#333333"></td>
    </tr>
    <tr>
        <td align="center">
            <div class="container demo-2">
                <!-- Codrops top bar -->
                <!--/ Codrops top bar -->
                <div id="slider" class="sl-slider-wrapper">
                    <div class="sl-slider">
                        <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25"
                             data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
                            <div class="sl-slide-inner">
                                <div class="bg-img bg-img-1"></div>
                                <cite></cite></blockquote>
                            </div>
                        </div>
                        <div class="sl-slide" data-orientation="vertical" data-slice1-rotation="10"
                             data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
                            <div class="sl-slide-inner">
                                <div class="bg-img bg-img-2"></div>
                                <cite></cite></blockquote>
                            </div>
                        </div>
                        <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="3"
                             data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
                            <div class="sl-slide-inner">
                                <div class="bg-img bg-img-3"></div>
                                <cite></cite></blockquote>
                            </div>
                        </div>
                    </div>
                    <!-- /sl-slider -->

                    <nav id="nav-dots" class="nav-dots"><span class="nav-dot-current"></span>
                        <span></span><span></span></nav>
                </div>
                <!-- /slider-wrapper -->
            </div>
        </td>
    </tr>
    <tr>
        <td align="center" valign="middle" bgcolor="#333333">
            <table width="960" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr bgcolor="#FFFFFF">
                    <td align="center" valign="top">
                        <?php include_once('includes/menu.php'); ?>
                    </td>
                </tr>
                <tr bgcolor="#FFFFFF"></tr>
            </table>
        </td>
    </tr>
    <tr>
        <td align="right" bgcolor="#FFFFFF">&nbsp;</td>
    </tr>
    <tr>
        <td align="center" bgcolor="#FFFFFF">
            <table width="960" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                    <td valign="top">&nbsp;</td>
                    <td align="right" valign="top"><span class="Estilo13"><span class="Estilo14">Traemetodo.com </span>/COMO ENVIAR DESDE LOS EEUU</span>
                    </td>
                </tr>
                <tr>
                    <td width="505" valign="top">&nbsp;</td>
                    <td width="455" align="right" valign="top">&nbsp;</td>
                </tr>
            </table>
            <table width="960" border="0" align="center" cellpadding="0" cellspacing="10">
                <tr>
                    <td width="253" align="center" valign="middle"><img src="img/enviarEEUU.jpg" alt="envios desde los estados unidos" width="253" height="450" border="0"></td>
                    <td width="455" align="center" valign="top" bgcolor="#FFFFFF">
                        <table width="415" height="31" border="0" cellpadding="0" cellspacing="0">
                            <tr>
                                <td width="415" valign="top">
                                    <p align="left" class="Estilo21">PROCEDIMIENTO PARA ENVIAR </p>
                                    <p align="left" class="Estilo21">LA CARGA AL ALMACÉN:</p>
                                    <p align="justify" class="Estilo20">&nbsp;</p>
                                </td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td align="center" valign="top">
                                    <a href="#form1" class="inline cboxElement boton" target="_self"><span class="negro">FORMULARIO</span><span class="amarillo">DE EEUU</span></a>
                                </td>
                            </tr>
                        </table>
                        <p align="justify" class="Estilo18">&nbsp;</p>
                        <p align="justify" class="Estilo18">&nbsp;</p>
                    </td>
                    <td width="212" valign="top" bgcolor="#FFFFFF">
                        <table width="254" border="0" align="center" cellpadding="0" cellspacing="0">
                            <tr>
                                <td align="center" valign="top"><span class="Estilo22">MIRA DONDE ESTA TU<span class="Estilo23"> PAQUETE</span>   <span class="Estilo23">DHL </span></span></td>
                            </tr>
                            <tr>
                                <td align="center" valign="top"><a href="http://www.dhl.com/en/express/tracking.html" target="_blank"><img src="img/paquete.jpg" width="253" height="283" border="0"></a></td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td align="center" bgcolor="#FFFFFF">
            <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                    <td align="center" bgcolor="#FFC929">
                        <p>&nbsp;</p>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td align="center" bgcolor="#FFFFFF">&nbsp;</td>
    </tr>
    <tr>
        <td align="center" bgcolor="#FFFFFF">
            <table width="960" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                    <td align="center" valign="top"><img src="banderas.jpg" width="960" height="112" border="0"></td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td align="center" bgcolor="#333333">
            <table width="960" border="0" cellspacing="10" cellpadding="0">
                <tr>
                    <td width="612" rowspan="3" align="center">
                        <div align="justify">En TRAEMETODO.COM.  Respetamos su privacidad. Sin su consentimiento no
                            vamos a distribuir ninguna información sobre nuestros clientes a terceros. Toda la
                            información de nuestros clientes proporcionada se mantendrá con el mayor cuidado y seguridad
                            y no serán utilizados para fines que no sean consentido expresamente.
                        </div>
                    </td>
                    <td align="left" valign="top">&nbsp;</td>
                </tr>
                <tr>
                    <td width="348" align="left" valign="top"><span class="Estilo19">CONTÁCTANOS</span></td>
                </tr>
                <tr>
                    <td align="left" valign="top">
                        <div align="left"><strong>Nuestro Horario de atención es de:</strong><br>
                            Lunes a Viernes: (Hora Este de los EEUU)<br>
                            Desde las 9:00 A.M. <br>
                            Hasta las 5:00 P.M.<br>
                            <strong>E-mail:</strong> <a href="mailto:info@traemetodo.com">info@traemetodo.com</a></div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="center">&nbsp;</td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><span class="Estilo2">Copyright © REX SUPPLIES LLC</span></td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><span class="Estilo1">Desarrollado por <a
                                href="http://accioncreativa.com.ve/" title="Diseño de paginas web 2.0" target="_blank">ACCIONCREATIVA</a></span>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="center">&nbsp;</td>
                </tr>
            </table>
        </td>
    </tr>
</table>
<div bgcolor="#FFC929" style="display:none">
    <p>&nbsp;</p>
    <form name="form1" id="form1" class="form shadowed-all" style="margin:0 auto;" method="post" action="">
        <p>SOLICITUD DE PRESUPUESTO PARA ENVÍO A VENEZUELA DESDE CUALQUIER CIUDAD DE LOS EEUU..</p>
        <label for="nombre"><strong>Nombre y Apellido:</strong></label>
        <input name="nombre" type="text" id="nombre" placeholder="ingrese su nombre" size="43" maxlength="100" class="required" value=""/>
        <label for="email"><strong>Email Cliente:</strong></label>
        <input name="email" type="text" id="email" placeholder="Ingrese su email" size="43" maxlength="200" class="required email" value=""/>
        <label for="email">Repite Email:</label>
        <input name="email2" type="text" id="email2" placeholder="Ingrese de nuevo el email" size="43" maxlength="200" class="required email" value=""/>
        <label for="telef"><strong>N&uacute;mero Telef&oacute;nico:</strong></label>
        <input name="telef" type="text" id="telef" placeholder="Ingrese su número telefónico" size="43" maxlength="14" class="required" value=""/>
        <label for="calle"><strong>Calle:</strong></label>
        <input name="calle" type="text" id="calle" size="43" placeholder="Ingrese la dirección de su calle" class="required" value=""/>
        <label for="ciudad"><strong>Ciudad:</strong></label>
        <input name="ciudad" type="text" id="ciudad" placeholder="Indique la ciudad" size="43" maxlength="40" class="required" value=""/>
        <label for="estado"><strong>Estado:</strong></label>
        <input name="estado" type="text" id="estado" placeholder="Ingrese el estado" size="43" maxlength="40" class="required" value=""/>
        <label for="codigo"><strong>Código Postal:</strong></label>
        <input name="codigo" type="text" id="codigo" placeholder="Ingrese su código postal" size="43" maxlength="6" class="required" value=""/>
        <label for="pais"><strong>País:</strong></label>
        <input name="pais" type="text" id="pais" placeholder="Ingrese su país" size="43" maxlength="40" class="required" value="EEUU" readonly />
        <label for="envio"><strong>Modalidad de envío:</strong></label>
        <select name="envio" id="envio" class="required">
            <option value="">Seleccione la modalidad de envío</option>
            <option value="Aereo">Aereo</option>
            <option value="Matítimo">Matítimo</option>
        </select>
        <label for="cliente"><strong>Cliente registrado?</strong></label>
        <div style="width: 15%; clear: both">
            <input name="cliente" type="radio" value="1"/> Si
            <input name="cliente" type="radio" value="0"/> No
        </div>
        <div id="code">
            <label for="codigo_registro"><strong>Ingrese su código de registro:</strong></label>
            <input name="codigo_registro" id="codigo_registro" placeholder="Ingrese código de registro" size="43" maxlength="32" class="required" />
        </div>
        <label for="pais_destino"><strong>País de destino:</strong></label>
        <input name="pais_destino" type="text" id="pais_destino" placeholder="Ingrese el país de destino" size="43" maxlength="40" class="required" value=""/>
        <label for="ciudad_destino"><strong>Ciudad de destino:</strong></label>
        <input name="ciudad_destino" type="text" id="ciudad_destino" placeholder="Ingrese la ciudad de destino" size="43" maxlength="40" class="required" value=""/>
        <label for="cantidad_caja"><strong>Cantidad de caja:</strong></label>
        <select name="cantidad_caja" id="cantidad_caja" class="required">
            <option value="">Seleccione la cantidad de cajas</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
        </select>
        <label for="caja">Caja</label>
        <div id="cajas">
            <table>
                <tr><td>Alto</td><td>Ancho</td><td>Largo</td><td>Peso</td></tr>
                <tr id="caja2" style="display: none">
                    <td><input name="alto_1" id="alto_1" value="" size="15" placeholder="Ingresa el Alto" /></td>
                    <td><input name="ancho_1" id="ancho_1" value="" size="15" placeholder="Ingresa el Ancho" /></td>
                    <td><input name="largo_1" id="largo_1" value="" size="15" placeholder="Ingresa el Largo" /></td>
                    <td><input name="peso_1" id="peso_1" value="" size="15" placeholder="Ingresa el Peso" /></td>
                </tr>
                <tr id="caja2" style="display: none">
                    <td><input name="alto_2" id="alto_2" value="" size="15" placeholder="Ingresa el Alto" /></td>
                    <td><input name="ancho_2" id="ancho_2" value="" size="15" placeholder="Ingresa el Ancho" /></td>
                    <td><input name="largo_2" id="largo_2" value="" size="15" placeholder="Ingresa el Largo" /></td>
                    <td><input name="peso_2" id="peso_2" value="" size="15" placeholder="Ingresa el Peso" /></td>
                </tr>
                <tr id="caja3" style="display: none">
                    <td><input name="alto_3" id="alto_3" value="" size="15" placeholder="Ingresa el Alto" /></td>
                    <td><input name="ancho_3" id="ancho_3" value="" size="15" placeholder="Ingresa el Ancho" /></td>
                    <td><input name="largo_3" id="largo_3" value="" size="15" placeholder="Ingresa el Largo" /></td>
                    <td><input name="peso_3" id="peso_3" value="" size="15" placeholder="Ingresa el Peso" /></td>
                </tr>
                <tr id="caja4" style="display: none">
                    <td><input name="alto_4" id="alto_4" value="" size="15" placeholder="Ingresa el Alto" /></td>
                    <td><input name="ancho_4" id="ancho_4" value="" size="15" placeholder="Ingresa el Ancho" /></td>
                    <td><input name="largo_4" id="largo_4" value="" size="15" placeholder="Ingresa el Largo" /></td>
                    <td><input name="peso_4" id="peso_4" value="" size="15" placeholder="Ingresa el Peso" /></td>
                </tr>
            </table>
        </div>
        <label for="valor"><strong>Valor del contenido en $:</strong></label>
        <input name="valor" type="text" id="valor" placeholder="Ingrese la valor del contenido" size="43" maxlength="40" class="required" value=""/>
        <label for="seguro"><strong>Quiere asegurar su carga:</strong></label>
        <select name="seguro" id="seguro" class="required">
            <option value="">Seleccione la cantidad de cajas</option>
            <option value="Si">Si</option>
            <option value="No">No</option>
        </select>
        <label for="descripcion"><strong>Descripción del Contenido de la carga:</strong></label>
        <textarea name="descripcion" id="descripcion" placeholder="Indique el mensaje para su amigo(s)" maxlength="140" class="required"></textarea>
        <span class="countdown" style="color:black"></span>
        <br>
        <input id="enviar" value="Enviar" class="submit" type="submit" name="enviar"/>
        <div id="mensaje_return">PRESIONE ENVIAR PARA REALIZAR SU SOLICITUD.</div>
    </form>
</div>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.ba-cond.min.js"></script>
<script type="text/javascript" src="js/jquery.slitslider.js"></script>
<script type="text/javascript" src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
<script type="text/javascript" src="js/jquery.colorbox-min.js"></script>
<script type="text/javascript" src="js/jquery.validate.js"></script>
<script type="text/javascript">
    $(function () {
        $('').change();
        function updateCountdown() {
            // 140 is the max message length
            var remaining = 140 - $('#descripcion').val().length;
            //if(remaining < 0){
            //$('.countdown').css('color':'red');
            //}else{$('.countdown').css('color':'black');}
            $('.countdown').text(remaining + ' Caracteres.');
        }
        updateCountdown();
        $('#descripcion').change(updateCountdown);
        $('#descripcion').keyup(updateCountdown);
        $('#codigo_registro').blur(function(){
            if($('#pais_destino').val() == '' || $('#ciudad_destino').val() == ''){
                $.post('desde-eeuu.php', { tipo: 'desde-eeuu', code: $(this).val() }, function(data){
                    var nu = $.parseJSON(data);
                    if($('#pais_destino').val() == '')
                        $('#pais_destino').val(nu.pais);
                    if($('#ciudad_destino').val() == '')
                        $('#ciudad_destino').val(nu.ciudad);
                });
            }
        });
        $(".inline").colorbox({inline: true, width: "50%"});
        $('#form1').validate({
            rules: {
                email2: {
                    equalTo: '#email'
                }
            },
            ignore: ".ignore",
            submitHandler: function (form) {
                $.post("enviar_success.php", $("#form1").serialize(), function (data) {
                    if (data) {
                        $('#form1').each(function () {
                            this.reset();
                        });
                        $("#mensaje_return").html("<span style='color:green;'>" + data + "</span>");
                    } else {
                        alert('No se pudo enviar su solicitud');
                    }
                });
                return false;
            }
        });
        if($('input[name=cliente]:checked').val() == 1){
            $('#code').show();
            $('#codigo_registro').removeClass('ignore');
        }else{
            $('#code').hide();
            $('#codigo_registro').addClass('ignore');
        }
        $('input[name=cliente]').change(function(){
            if($(this).val() == 1){
                $('#code').show();
                $('#codigo_registro').removeClass('ignore');
            }else{
                $('#code').hide();
                $('#codigo_registro').addClass('ignore');
            }
        });
        $("#fechapago").datepicker();
    });
</script>
<script type="text/javascript">
    $(function () {
        var Page = (function () {
            var $nav = $('#nav-dots > span'),
                slitslider = $('#slider').slitslider({
                    onBeforeChange: function (slide, pos) {
                        $nav.removeClass('nav-dot-current');
                        $nav.eq(pos).addClass('nav-dot-current');
                    }
                }),
                init = function () {
                    initEvents();
                },
                initEvents = function () {
                    $nav.each(function (i) {
                        $(this).on('click', function (event) {
                            var $dot = $(this);
                            if (!slitslider.isActive()) {
                                $nav.removeClass('nav-dot-current');
                                $dot.addClass('nav-dot-current');
                            }
                            slitslider.jump(i + 1);
                            return false;
                        });
                    });
                };
            return {init: init};
        })();
        Page.init();
    });
    var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {
        imgDown: "SpryAssets/SpryMenuBarDownHover.gif",
        imgRight: "SpryAssets/SpryMenuBarRightHover.gif"
    });
</script>
<script>
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
    ga('create', 'UA-57426821-1', 'auto');
    ga('send', 'pageview');
</script>
</body>
</html>