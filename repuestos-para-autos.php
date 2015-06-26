<?php
date_default_timezone_set('America/New_York');
?>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Repuestos para autos de todas las marcas</title>
<link href='http://fonts.googleapis.com/css?family=Cuprum:400,700' rel='stylesheet' type='text/css'>
<link rel="shortcut icon" href="file:///E|/traelotodo/favicon.ico">
<link rel="stylesheet" type="text/css" href="css/demo.css" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/custom.css" />
<link rel="stylesheet" type="text/css" href="css/colorbox.css" />
<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css">
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<script type="text/javascript">
function MM_preloadImages() { //v3.0
	var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
	var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
	if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}
function MM_swapImgRestore() { //v3.0
	var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_findObj(n, d) { //v4.01
	var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
	d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
	if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
	for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
	if(!x && d.getElementById) x=d.getElementById(n); return x;
}
function MM_swapImage() { //v3.0
	var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
	if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
</script>
<style type="text/css">
<!--
.Estilo1 {color: #FFFFFF}
.Estilo2 {color: #FFCB29}td img {display: block;}td img {display: block;}td img {display: block;}td img {display: block;}td img {display: block;}td img {display: block;}td img {display: block;}td img {display: block;}td img {display: block;}
.style7 {font-size: 18px; font-weight: bold; }
.style9 {
	font-size: 11px;
	font-weight: bold;
}
.style13 {font-size: 14.5px; }
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
.style14 {font-size: 25px; font-weight: bold; }
body,td,th {
	font-family: Lato, Calibri, Arial, sans-serif;
	color: #FFF;
}
a:visited {
	text-decoration: none;
	color: #FFF;
}td img {display: block;}td img {display: block;}td img {display: block;}td img {display: block;}td img {display: block;}td img {display: block;}
td img {display: block;}td img {display: block;}td img {display: block;}td img {display: block;}
.Estilo12 {color: #666666; font-weight: bold; }
.Estilo13 {
	color: #333333;
	font-size: 17px;
	font-weight: bold;
}
.Estilo14 {color: #FFCB2C}
.Estilo18 {
	font-size: 16;
	color: #333333;
}
.Estilo19 {
	font-size: 17px;
	font-weight: bold;
	color: #FFB42E;
}
.Estilo21 {
	font-size: 16px;
	color: #333333;
}
-->
<!--
a.boton { text-decoration: none; }
a.boton span.negro { background-color: #222222; color: white; padding: 5px; font-weight: bold; }
a.boton span.amarillo { background-color: #ffcb2c; color: #222222; padding: 5px; font-weight: bold; }
a.boton:hover span.negro { background-color: #ffcb2c; color: #222222; padding: 5px; font-weight: bold; }
a.boton:hover span.amarillo { background-color: #222222; color: white; padding: 5px; font-weight: bold; }
.mensaje{ text-align:center; color:#FFF; font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:bold; margin:0 auto; padding:4px; background-color:<?=(!isset($errores))?'green':'red'?>; -webkit-border-radius: 5px; -moz-border-radius: 5px; border-radius: 5px; width:300px; }
.form {
	font-family:Arial, Helvetica, sans-serif;
    background: #EEEEEE;
    border: 1px solid #DDDDDD;
    border-radius: 10px 10px 10px 10px;
    padding: 30px;
	text-align:left;
	width:600px;
	font-size:14px;
	box-shadow: 3px 3px 3px #888888;
	margin-bottom:5px;
}
.form div {
	margin-top:5px;
	color: #333333;
	text-align:justify;
	font-size:14px;
}
.form p {
	color: #FF9900;
	margin-top:-8px;
	padding-bottom: 10px;
	font-size: 16px;
	font-weight:bold;
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
.form input {
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
	margin:-5px 0 5px 0;
}
.Estilo22 {font-weight: bold}
-->
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<noscript>
<link rel="stylesheet" type="text/css" href="css/styleNoJS.css" />
</noscript>
<script type="text/javascript" src="js/modernizr.custom.79639.js"></script>
</head>
<body onLoad="MM_preloadImages('img/Logohov.fw.png')">
	<table width="100%" border="0" cellspacing="0" cellpadding="0">
	  <tr>
	    <td align="center" valign="middle" bgcolor="#FFFFFF">&nbsp;</td>
      </tr>
	  <tr>
	    <td align="center" valign="middle" bgcolor="#FFFFFF"><table width="960" border="0" align="center" cellpadding="0" cellspacing="0">
	      <tr>
	        <td width="380"><a href="index.php" target="_top" onMouseOver="MM_swapImage('logo','','img/Logohov.fw.png',1)" onMouseOut="MM_swapImgRestore()"><img src="img/Logo.png" alt="logo traemetodo" name="logo" width="408" height="94" border="0" id="logo"></a></td> 
	        <td width="580" align="right" valign="middle"><table width="549" border="0" align="center" cellpadding="0" cellspacing="6">
	          <tr>
	            <td width="110" align="right" bgcolor="#FFFFFF">&nbsp;</td>
	            <td width="244" align="right" bgcolor="#FFFFFF"><span class="Estilo12">Síguenos también en</span>:</td>
	            <td width="53" align="right" bgcolor="#FFFFFF"><a href="https://twitter.com/TRAEMETODO" target="_blank"><img src="img/tw.png" alt="twitter-traemetodo" width="53" height="53" border="0"></a></td>
	            <td width="53" align="right" bgcolor="#FFFFFF"><a href="https://www.facebook.com/traemetodo?fref=ts" target="_blank"><img src="img/fb.png" alt="facebook-traemetodo" width="53" height="53" border="0"></a></td>
	            <td width="53" align="right" bgcolor="#FFFFFF"><a href="https://instagram.com/traemetodo" target="_blank"><img src="img/IST.fw.png" alt="instagram-traemetodo" width="53" height="53"></a></td>
              </tr>
            </table></td>
          </tr>
        </table></td>
      </tr>
	  <tr>
	    <td align="center" valign="middle" bgcolor="#FFFFFF">&nbsp;</td>
	  </tr>
	  <tr>
	    <td width="1197" align="center" bgcolor="#333333"></td>
	  </tr>
	  <tr>
	    <td align="center"><div class="container demo-2">
	      <!-- Codrops top bar -->
	      <!--/ Codrops top bar -->
	      <div id="slider" class="sl-slider-wrapper">
	        <div class="sl-slider">
	          <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
	            <div class="sl-slide-inner">
	              <div class="bg-img bg-img-1"></div>              
	                <cite></cite></blockquote>
	            </div>
	          </div>
	          <div class="sl-slide" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
	            <div class="sl-slide-inner">
	              <div class="bg-img bg-img-2"></div>
	              <cite></cite></blockquote>
	            </div>
	          </div>
	          <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
	            <div class="sl-slide-inner">
	              <div class="bg-img bg-img-3"></div>
	              <cite></cite></blockquote>
	            </div>
	          </div>
            </div>
	        <!-- /sl-slider -->	                
	        <nav id="nav-dots" class="nav-dots"> <span class="nav-dot-current"></span> 
	        <span></span> <span></span></nav>
	      </div>
	      <!-- /slider-wrapper -->
	    </div></td>
	  </tr>
	  <tr>
	    <td align="center" valign="middle" bgcolor="#333333"><table width="960" border="0" align="center" cellpadding="0" cellspacing="0">
	      <tr bgcolor="#FFFFFF">
	        <td align="center" valign="top">
                <?php include_once('includes/menu.php'); ?>
            </td>
			</tr>
	      <tr bgcolor="#FFFFFF"> </tr>
	    </table></td>
	  </tr>
	  <tr>
	    <td align="right" bgcolor="#FFFFFF">&nbsp;</td>
      </tr>
	  <tr>
	    <td align="center" bgcolor="#FFFFFF"><table width="960" border="0" align="center" cellpadding="0" cellspacing="0">
	      <tr>
	        <td valign="top">&nbsp;</td>
	        <td align="right" valign="top"><span class="Estilo13"><span class="Estilo14">Traemetodo.com </span>/REPUESTOS AUTOMOTRICES </span></td>
          </tr>
	      <tr>
	        <td width="484" valign="top">&nbsp;</td>
	        <td width="476" align="right" valign="top">&nbsp;</td>
          </tr>
        </table>
          <table width="960" border="0" align="center" cellpadding="0" cellspacing="10">
            <tr>
              <td width="253" align="center" valign="middle"><img src="img/autos.jpg" width="253" height="450" border="0"></td>
              <td width="455" align="center" valign="top" bgcolor="#FFFFFF"><table width="415" height="31" border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td width="415"><p align="justify" class="Estilo21">Necesita repuestos de las partes mecánicas, eléctrica o cualquier accesorio <strong>PARA SU AUTOMÓVIL.  </strong><br>
                    <br>
                    Nosotros se lo ubicamos en los EEUU - Panamá -Japón - China, Europa o cualquier parte del mundo, se lo cotizamos y si los acepta se lo hacemos llegar a la puerta de su casa u oficina. </p>
                  <p align="justify" class="Estilo21">&nbsp;</p></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td align="center"><a href="#form1" class="inline cboxElement boton" target="_self"><span class="negro">COTIZACIÓN</span><span class="amarillo"> DE REPUESTOS</span></a></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td><SCRIPT charset="utf-8" type="text/javascript" src="http://ws-na.amazon-adsystem.com/widgets/q?rt=tf_cw&ServiceVersion=20070822&MarketPlace=US&ID=V20070822%2FUS%2Fwidgetsamazon-20%2F8010%2F0a4d18f4-3797-432b-bb0c-e31b4c4651ba&Operation=GetScriptTemplate"> </SCRIPT> <NOSCRIPT><A HREF="http://ws-na.amazon-adsystem.com/widgets/q?rt=tf_cw&ServiceVersion=20070822&MarketPlace=US&ID=V20070822%2FUS%2Fwidgetsamazon-20%2F8010%2F0a4d18f4-3797-432b-bb0c-e31b4c4651ba&Operation=NoScript">Amazon.com Widgets</A></NOSCRIPT></td>
                </tr>
              </table>
              <p align="justify" class="Estilo18">&nbsp;</p>
              <p align="justify" class="Estilo18">&nbsp;</p></td>
              <td width="212" valign="top" bgcolor="#FFFFFF"><script charset="utf-8" type="text/javascript">
				amzn_assoc_ad_type = "responsive_search_widget";
				amzn_assoc_tracking_id = "widgetsamazon-20";
				amzn_assoc_link_id = "KG5N7F5ECTVNNLNI";
				amzn_assoc_marketplace = "amazon";
				amzn_assoc_region = "US";
				amzn_assoc_placement = "";
				amzn_assoc_search_type = "search_widget";
				amzn_assoc_width = 266;
				amzn_assoc_height = 450;
				amzn_assoc_default_search_category = "";
				amzn_assoc_default_search_key = "auto parts";
				amzn_assoc_theme = "light";
				amzn_assoc_bg_color = "FFFFFF";
				</script>
				<script src="//z-na.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&Operation=GetScript&ID=OneJS&WS=1&MarketPlace=US"></script></td>
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
	    <td align="center" bgcolor="#FFFFFF"><table width="960" border="0" align="center" cellpadding="0" cellspacing="0">
	      <tr>
	        <td align="center" valign="top"><img src="marcas.jpg" width="960" height="112"></td>
          </tr>
        </table></td>
      </tr>
	  <tr>
	    <td align="center" bgcolor="#333333"><table width="960" border="0" cellspacing="10" cellpadding="0">
          <tr>
            <td width="612" rowspan="3" align="center"><div align="justify">En TRAEMETODO.COM.  Respetamos su privacidad. Sin su consentimiento no vamos a distribuir ninguna información sobre nuestros clientes a terceros. Toda la información de nuestros clientes proporcionada se mantendrá con el mayor cuidado y seguridad y no serán utilizados para fines que no sean consentido expresamente.</div></td>
            <td align="left" valign="top">&nbsp;</td>
          </tr>
          <tr>
            <td width="348" align="left" valign="top"><span class="Estilo19">CONTÁCTANOS</span></td>
          </tr>
          <tr>
            <td align="left" valign="top"><div align="left"><strong>Nuestro Horario de atención es de:</strong><br>
              Lunes a Viernes: (Hora Este de los EEUU)<br>
              Desde las 9:00 A.M. <br>
              Hasta las  5:00 P.M.<br>
              <strong>E-mail:</strong> <a href="mailto:info@traemetodo.com">info@traemetodo.com</a></div></td>
          </tr>
          <tr>
            <td colspan="2" align="center">&nbsp;</td>
          </tr>
          <tr>
              <td colspan="2" align="center"><span class="Estilo2">Copyright © REX SUPPLIES LLC</span></td>
            </tr>
            <tr>
              <td colspan="2" align="center"><span class="Estilo1">Desarrollado por <a href="http://accioncreativa.com.ve/" title="Diseño de paginas web 2.0" target="_blank">ACCIONCREATIVA</a></span></td>
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
	<form name="form1" id="form1" class="form shadowed-all" method="post" action="" style="margin:0 auto;">
        <p>SOLICITUD DE REPUESTOS PARA AUTOS</p>
        <label for="nombre"><strong>Nombre y Apellido:</strong></label>
        <input name="nombre" type="text" id="nombre" placeholder="Su Nombre y Apellido" size="43" class="required" value="" />			               	
       	<label for="email"><strong>Email:</strong></label>
        <input name="email" type="text" id="email" placeholder="Su Email" size="43" class="required email" value="" />
	    <label for="email">Repite Email:</label>
		<input name="email2" type="text" id="email2" placeholder="Ingrese de nuevo el email" size="43" class="required email" value="" />
        <label for="telefono"><strong>Teléfono:</strong></label>
        <input name="telefono" type="text" id="telefono" placeholder="Su Teléfono" size="43" maxlength="20" class="required" value="" />
        <label for="marca"><strong>Marca:</strong></label>
        <select name="marca" id="marca" class="required">
        	<option value="">Seleccione una marca</option>
			<option value="Acura">Acura</option>
			<option value="Audi">Audi</option>
			<option value="Maston Martin">Aston Martin</option>
			<option value="Bmw">Bmw</option>
			<option value="Buick">Buick</option>
			<option value="Cadillac">Cadillac</option>
			<option value="Chrysler">Chrysler</option>
			<option value="Chevrolet">Chevrolet</option>
			<option value="Dodge">Dodge</option>
			<option value="Eagle">Eagle</option>
			<option value="Ford">Ford</option>
			<option value="Geo">Geo</option>
			<option value="Gmc">Gmc</option>
			<option value="Honda">Honda</option>
			<option value="Hummer">Hummer</option>
			<option value="Hyundai">Hyundai</option>
			<option value="Infiniti">Infiniti</option>
			<option value="Isuzu">Isuzu</option>
			<option value="Jaguar">Jaguar</option>
			<option value="Jeep">Jeep</option>
			<option value="Kia">Kia</option>
			<option value="Land Rover">Land Rover</option>
			<option value="Lexus">Lexus</option>
			<option value="Lincoln">Lincoln</option>
			<option value="Mazda">Mazda</option>
			<option value="Mercedes Benz">Mercedes Benz </option>
			<option value="Mercury">Mercury</option>
			<option value="Mini">Mini</option>
			<option value="Mitsubishi">Mitsubishi</option>
			<option value="Nissan">Nissan </option>
			<option value="Oldsmobile">Oldsmobile</option>
			<option value="Plymouth">Plymouth</option>
			<option value="Pontiac">Pontiac</option>
			<option value="Porsche">Porsche</option>
			<option value="Saab">Saab</option>
			<option value="Scion">Scion</option>
			<option value="Volvo">Volvo</option>
			<option value="Saturn">Saturn</option>
			<option value="Subaru">Subaru</option>
			<option value="Suzuki">Suzuki</option>
			<option value="Toyota">Toyota</option>
			<option value="Volkswagen">Volkswagen</option>
        	<option value="1">Otros</option>
       	</select>
       	<div id="div_marca" style="display:none">
       		<label for="otra_marca">Otra marca:</label>
        	<input name="otra_marca" type="text" id="otra_marca" placeholder="Ingrese otra marca" size="43" maxlength="40" class="required" value="" />
       	</div>
       	<label for="modelo"><strong>Modelo:</strong></label>
        <input name="modelo" type="text" id="modelo" placeholder="Indique el módelo del vehículo" size="43" maxlength="40" class="required" value="" />
        <label for="anio"><strong>Año:</strong></label>
        <input name="anio" type="text" id="anio" placeholder="Indique el año del vehículo" size="43" maxlength="4" class="required" value="" />
        <label for="motor"><strong>Motor:</strong></label>
        <select name="motor" id="motor" class="required">
        	<option value="">Seleccione tamaño del motor</option>
			<option value="1.1L">1.1L</option>
			<option value="1.2L">1.2L</option>
			<option value="1.3L">1.3L</option>
			<option value="1.4L">1.4L</option>
			<option value="1.5L">1.5L</option>
			<option value="1.6L">1.6L</option>
			<option value="1.7L">1.7L</option>
			<option value="1.8L">1.8L</option>
			<option value="1.9L">1.9L</option>
			<option value="2.0L">2.0L</option>
			<option value="2.1L">2.1L</option>
			<option value="2.2L">2.2L</option>
			<option value="2.3L">2.3L</option>
			<option value="2.4L">2.4L</option>
			<option value="2.5L">2.5L</option>
			<option value="2.6L">2.6L</option>
			<option value="2.7L">2.7L</option>
			<option value="2.8L">2.8L</option>
			<option value="2.9L">2.9L</option>
			<option value="3.0L">3.0L</option>
			<option value="3.1L">3.1L</option>
			<option value="3.2L">3.2L</option>
			<option value="3.3L">3.3L</option>
			<option value="3.4L">3.4L</option>
			<option value="3.5L">3.5L</option>
			<option value="3.6L">3.6L</option>
			<option value="3.7L">3.7L</option>
			<option value="3.8L">3.8L</option>
			<option value="3.9L">3.9L</option>
			<option value="4.0L">4.0L</option>
			<option value="4.1L">4.1L</option>
			<option value="4.2L">4.2L</option>
			<option value="4.3L">4.3L</option>
			<option value="4.4L">4.4L</option>
			<option value="4.5L">4.5L</option>
			<option value="4.6L">4.6L</option>
			<option value="4.7L">4.7L</option>
			<option value="4.8L">4.8L</option>
			<option value="4.9L">4.9L</option>
			<option value="5.0L">5.0L</option>
			<option value="5.1L">5.1L</option>
			<option value="5.2L">5.2L</option>
			<option value="5.3L">5.3L</option>
			<option value="5.4L">5.4L</option>
			<option value="5.5L">5.5L</option>
			<option value="5.6L">5.6L</option>
			<option value="5.7L">5.7L</option>
			<option value="5.8L">5.8L</option>
			<option value="5.9L">5.9L</option>
			<option value="6.0L">6.0L</option>
			<option value="6.1L">6.1L</option>
			<option value="6.2L">6.2L</option>
			<option value="6.3L">6.3L</option>
			<option value="6.4L">6.4L</option>
			<option value="6.5L">6.5L</option>
			<option value="6.6L">6.6L</option>
			<option value="6.7L">6.7L</option>
			<option value="6.8L">6.8L</option>
			<option value="6.9L">6.9L</option>
			<option value="7.0L">7.0L</option>
			<option value="7.1L">7.1L</option>
			<option value="7.2L">7.2L</option>
			<option value="7.3L">7.3L</option>
			<option value="7.4L">7.4L</option>
			<option value="7.5L">7.5L</option>
			<option value="7.6L">7.6L</option>
        	<option value="1">Otros</option>
        	<option value="No lo conozco">No lo conozco</option>
       	</select>
       	<div id="div_motor" style="display:none">
       		<label for="otro_motor"><strong>Otro motor:</strong></label>
        	<input name="otro_motor" type="text" id="otro_motor" placeholder="Ingrese otro motor" size="43" maxlength="40" class="required" value="" />
       	</div>
        <label for="transmision"><strong>Transmisión:</strong></label>
        <select name="transmision" id="transmision" class="required">
          <option value="">Seleccione transmisión del vehículo</option>
          <option value="Automática">Automática</option>
          <option value="Manual">Manual</option>
          <option value="1">Otros</option>
        </select>
        <div id="div_transmision" style="display:none">
   		  <label for="otra_transmision"><strong>Otra transmisión:</strong></label>
    	  <input name="otra_transmision" type="text" id="otra_transmision" placeholder="Ingrese otra transmición" size="43" maxlength="40" class="required" value="" />
       	</div>
        <label for="vin"><strong>Serial carrocería o VIN:</strong></label>
        <input name="vin" type="text" id="vin" placeholder="Indique el serial carrocería o VIN" size="43" class="required" value="" />
        <label for="nropart"><strong>Código repuesto o Parts Number:</strong></label>
        <textarea name="nropart" id="nropart" placeholder="Indique el Código repuesto o Parts Number" class="required"></textarea>
        <label for="descpart"><strong>Descripción repuesto:</strong></label>
        <textarea name="descpart" id="descpart" placeholder="Indique la Descripción del repuesto" class="required"></textarea>
        <input id="enviar" value="Enviar" class="submit" type="submit" name="enviar" />
        <div id="mensaje_return">Puede envíar su consulta o cualquier solicitud.</div>
	</form>
</div>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.ba-cond.min.js"></script>
<script type="text/javascript" src="js/jquery.slitslider.js"></script>
<script type="text/javascript" src="js/jquery.colorbox-min.js"></script>
<script type="text/javascript" src="js/jquery.validate.js"></script>
<script type="text/javascript">
$(function(){
	$(".inline").colorbox({inline:true, width:"50%"});
	$("#form1").validate({
		rules: {
			email2: {
				equalTo: '#email'
			}
		},
		ignore: ".ignore",
		submitHandler: function(form){
			$.post("autos_success.php", $("#form1").serialize(), function(data){
				if(data){
					$('#form1').each(function(){ this.reset(); });
					$("#mensaje_return").html("<span style='color:green;'>"+data+"</span>");
				}else{
					alert('No se pudo enviar su solicitud');				
				}			
			});			
			return false;		
		}
	});
	if($('#marca').val() == 1){
		$('#div_marca').show();
		$('#otra_marca').removeClass('ignore');
	}else{
		$('#div_marca').hide();
		$('#otra_marca').addClass('ignore');
	}
	$('#marca').change(function(){
		if($('#marca').val() == 1){
			$('#div_marca').show();
			$('#otra_marca').removeClass('ignore');
		}else{
			$('#div_marca').hide();
			$('#otra_marca').addClass('ignore');
		}
	});
	if($('#motor').val() == 1){
		$('#div_motor').show();
		$('#otro_motor').removeClass('ignore');
	}else{
		$('#div_motor').hide();
		$('#otro_motor').addClass('ignore');
	}
	$('#motor').change(function(){
		if($('#motor').val() == 1){
			$('#div_motor').show();
			$('#otro_motor').removeClass('ignore');
		}else{
			$('#div_motor').hide();
			$('#otro_motor').addClass('ignore');
		}
	});
	if($('#transmision').val() == 1){
		$('#div_transmision').show();
		$('#otra_transmision').removeClass('ignore');
	}else{
		$('#div_transmision').hide();
		$('#otra_transmision').addClass('ignore');
	}
	$('#transmision').change(function(){
		if($('#transmision').val() == 1){
			$('#div_transmision').show();
			$('#otra_transmision').removeClass('ignore');
		}else{
			$('#div_transmision').hide();
			$('#otra_transmision').addClass('ignore');
		}
	});
});
</script>
<script type="text/javascript">
$(function() {
	var Page = (function() {
		var $nav = $( '#nav-dots > span' ),
			slitslider = $( '#slider' ).slitslider( {
				onBeforeChange : function( slide, pos ) {
					$nav.removeClass( 'nav-dot-current' );
					$nav.eq( pos ).addClass( 'nav-dot-current' );
				}
			} ),
			init = function() {
				initEvents();
			},
			initEvents = function() {
				$nav.each( function( i ) {
					$( this ).on( 'click', function( event ) {
						var $dot = $( this );
						if( !slitslider.isActive() ) {
							$nav.removeClass( 'nav-dot-current' );
							$dot.addClass( 'nav-dot-current' );
						}
						slitslider.jump( i + 1 );
						return false;
					} );
				} );
			};
			return { init : init };
	})();
	Page.init();			
});
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-57426821-1', 'auto');
  ga('send', 'pageview');
</script>
</body>
</html>