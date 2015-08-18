<?php
if(isset($_REQUEST['token'])){
	require_once("webapp/clases/database/database.class.php");
	require_once("webapp/web/clases/registros.class.php");

	$obj = new Registros();
	$id = $obj->valida_token($_REQUEST['token']);
	if($id){
		$obj = new Registros();
		if($obj->baja_usuario($id)){
			$obj = new Registros();
			$obj->enviar_baja($id);
			$txt = 'Se ha dado de baja satisfactoriamente. Continue visitandonos en www.traemetodo.com -';
		}else{
			$txt = 'No se pudo validar correctamente su email. Intentelo nuevamente más tarde.';
		}
	}else{
		$txt = 'Se ha presentado un problema validando su registro. Pongase en contacto con nosotros a traves de este email info@traemetodo.com.';
	}
}
?>
<!DOCTYPE html>
<html lang="en"><head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
<meta name="" content="Envíos aéreos y marítimos desde los EEUU, compras de repuestos, equipos electronicos, repuestos para yates y lanchas y mas." />
<title>Traemetodo, Envíos aéreos y marítimos desde los EEUU</title>

<link href='https://fonts.googleapis.com/css?family=Cuprum:400,700' rel='stylesheet' type='text/css'>
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="/traelotodo/favicon.ico" type="text/css">
<link rel="icon" href="/favicon.ico" type="image/x-icon">

<link rel="stylesheet" type="text/css" href="css/demo.css" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/custom.css" />
<link rel="stylesheet" type="text/css" href="SpryAssets/SpryMenuBarHorizontal.css">
<link rel="stylesheet" type="text/css" href="css/colorbox.css" />

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
.Estilo2 {color: #FFCB29}
td img {display: block;}td img {display: block;}td img {display: block;}td img {display: block;}td img {display: block;}td img {display: block;}td img {display: block;}td img {display: block;}td img {display: block;}
.style7 {font-size: 18px; font-weight: bold; }
.style9 {font-size: 11px; font-weight: bold; }
.style13 {font-size: 14.5px; }
a:link { color: #FFCB29; text-decoration: none; }
a:hover { color: #333333; text-decoration: underline; }
a:active { color: #FFCB29; text-decoration: none; }
.style14 {font-size: 25px; font-weight: bold; }
body,td,th { font-family: Lato, Calibri, Arial, sans-serif; color: #333333; }
a:visited { color: #FFCB29; text-decoration: none; }
td img {display: block;}td img {display: block;}td img {display: block;}td img {display: block;}td img {display: block;}td img {display: block;}
.Estilo4 {font-size: 18px; font-weight: bold; color: #333333; }
td img {display: block;}td img {display: block;}td img {display: block;}td img {display: block;}
.Estilo6 { font-size: 20px; color: #333333; font-weight: bold; }
.Estilo8 { color: #333333; font-weight: bold; }
.Estilo9 { font-size: 14px; color: #333333; }
.Estilo10 {font-size: 20px; color: #FFCB29; font-weight: bold; }
.Estilo12 {color: #666666; font-weight: bold; }
body { background-color: #333333; }
.Estilo19 { font-size: 17px; font-weight: bold; color: #FFB42E; }
.Estilo20 {color: #FF0000}
-->
<!--
.contenido_med { background-color: #FFF; padding: 20px;  }
.mensaje{ margin: 30px auto; padding:30px; text-align:center; color:#FFF; font-family:Arial, Helvetica, sans-serif; font-size:14px; font-weight:bold; background-color:<?=(!isset($errores))?'green':'red'?>; -webkit-border-radius: 5px; -moz-border-radius: 5px; border-radius: 5px; width:500px; height: 100px; }
-->
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<noscript>
<link rel="stylesheet" type="text/css" href="css/styleNoJS.css" />
</noscript>
<script type="text/javascript" src="js/modernizr.custom.79639.js"></script>
</head>

<body onLoad="MM_preloadImages('img/Logohov.fw.png','repuestos-para-autos/repuestos-para-autos_2.jpg','equipos-electronicos/equipos-electronicos_2.jpg','repuestos-yates-lanchas/repuestos-para-lanchas-yates_2.jpg')">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="center" valign="middle" bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
  <tr>
    <td align="center" valign="middle" bgcolor="#FFFFFF"><table width="960" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td width="380"><a href="index.php" target="_top" onMouseOver="MM_swapImage('logo','','img/Logohov.fw.png',1)" onMouseOut="MM_swapImgRestore()"><img src="img/Logo.png" alt="logo traemetodo" name="logo" width="408" height="94" border="0" id="logo"></a></td>
        <td width="580" align="right" valign="middle"><table width="442" border="0" align="center" cellpadding="0" cellspacing="6">
          <tr>
            <td width="151" align="right" bgcolor="#FFFFFF">&nbsp;</td>
            <td width="154" align="right" bgcolor="#FFFFFF"><span class="Estilo12">Síguenos también en</span>:</td>
            <td width="54" align="right" bgcolor="#FFFFFF"><a href="https://twitter.com/TRAEMETODO" target="_blank"><img src="img/tw.png" alt="twitter-traemetodo" width="53" height="53" border="0"></a></td>
            <td width="53" align="right" bgcolor="#FFFFFF"><a href="https://www.facebook.com/traemetodo?fref=ts" target="_blank"><img src="img/fb.png" alt="facebook-traemetodo" width="53" height="53" border="0"></a></td>
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
    <td align="center" valign="middle" bgcolor="#333333">
    <table width="960" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr bgcolor="#FFFFFF">
        <td align="center" valign="top">
        	<?php include_once('includes/menu.php'); ?>
	    </td>
	  </tr>
    </table>
	</td>
  </tr>
</table>

<div class="contenido_med">
	<?=isset($txt)?'<div class="mensaje">'.$txt.'</div>':''?>
</div>

<table width="100%" border="0" cellspacing="0" cellpadding="0">
	<tr>
		<td align="center" bgcolor="#333333">
		    <table width="960" border="0" cellspacing="10" cellpadding="0">
              	<tr>
                	<td width="612" rowspan="3" align="center"><div align="justify" class="Estilo1">En TRAEMETODO.COM.  Respetamos su privacidad. Sin su consentimiento no vamos a distribuir ninguna información sobre nuestros clientes a terceros. Toda la información de nuestros clientes proporcionada se mantendrá con el mayor cuidado y seguridad y no serán utilizados para fines que no sean consentido expresamente.</div></td>
                	<td align="left" valign="top">&nbsp;</td>
              	</tr>
              	<tr>
                	<td width="348" align="left" valign="top"><span class="Estilo19">CONTÁCTANOS</span></td>
              	</tr>
              	<tr>
                	<td align="left" valign="top">
                		<div align="left">
                			<span class="Estilo1">
                				<strong>Nuestro Horario de atención es de:</strong><br>
				                Lunes a Viernes: (Hora Este de los EEUU)<br>
				                Desde las 9:00 A.M. <br>
				                Hasta las  5:00 P.M.<br>
				                <strong>E-mail:</strong> <a href="mailto:info@traemetodo.com">info@traemetodo.com</a>
				            </span>
                		</div>
                	</td>
              	</tr>
              	<tr>
                	<td colspan="2" align="center">&nbsp;</td>
              	</tr>
              	<tr>
                	<td colspan="2" align="center"><span class="Estilo2">Copyright  © Traemetodo.com 2014</span></td>
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
</body>
</html>