<!DOCTYPE html>
<html lang="en"><head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
<meta name="" content="Envíos aéreos y marítimos desde los EEUU, compras de repuestos, equipos electronicos, repuestos para yates y lanchas y mas." />
<title><?=$title?></title>
<link href='http://fonts.googleapis.com/css?family=Cuprum:400,700' rel='stylesheet' type='text/css'>
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
<link rel="icon" href="/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" type="text/css" href="file:///E|/traelotodo/favicon.ico"> 
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
	color: #333333;
}
a:visited {
	color: #333333;
	text-decoration: none;
}
td img {display: block;}td img {display: block;}td img {display: block;}td img {display: block;}td img {display: block;}td img {display: block;}
.Estilo4 {font-size: 18px; font-weight: bold; color: #333333; }
td img {display: block;}td img {display: block;}td img {display: block;}td img {display: block;}
.Estilo6 {
	font-size: 20px;
	color: #333333;
	font-weight: bold;
}
.Estilo8 {color: #333333; font-weight: bold; }
.Estilo9 {
	font-size: 14px;
	color: #333333;
}
.Estilo10 {font-size: 20px; color: #FFCB29; font-weight: bold; }
.Estilo12 {color: #666666; font-weight: bold; }
body {
	background-color: #333333;
}
.Estilo19 {font-size: 17px;
	font-weight: bold;
	color: #FFB42E;
}
.Estilo20 {color: #FF0000}
-->
<!--
a.boton:hover{ color: #333; }
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
.form div { margin-top:5px; color: #333333; text-align:justify; font-size:14px; }
.form p { color: #FF9900; margin-top:-8px; padding-bottom: 10px; font-size: 16px; font-weight:bold; }
.form label { font-weight: bold; color: #FF9900; display: block; font-size: 1em; }
.form label.error { font-weight: normal; }
.form input, .form textarea, .form select { background: none repeat scroll 0 0 #555555; border: 1px solid #DDDDDD;
    border-radius: 5px 5px 5px 5px; color: #FFFFFF; font-size: 1em; margin: 0 0 10px 0; padding: 4px; }
.form .texto-captcha { color: #FF9900; font-size: 1em; }
.form input[type="text"] { width: 220px; }
.form textarea { height: 100px; width: 405px; }
.form input:hover, .form textarea:hover { background: none repeat scroll 0 0 #888888; }
.form input.submit { background: none repeat scroll 0 0 #FF9900; border: medium none; color: #EEEEEE; margin-top: 10px;
    text-transform: uppercase; width: 150px; }
.form input.submit:hover { box-shadow: 0 0 5px #555555; cursor: pointer; }
.form .requerido { color: red; }
.form label.error { color: red; margin:-5px 0 5px 0; }
body {
	background-color: #FFFFFF;
}
.Estilo32 {
	color: #FF0000;
	font-weight: bold;
}
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
		    <td align="center" valign="middle" bgcolor="#FFFFFF">
		    	<table width="960" border="0" align="center" cellpadding="0" cellspacing="0">
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
		    <td align="center"><div class="container demo-2">
		    	<!-- Codrops top bar -->
		    	<!--/ Codrops top bar -->
		     	<div id="slider" class="sl-slider-wrapper">
		        	<div class="sl-slider">
		          		<div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
		            		<div class="sl-slide-inner">
		              			<div class="bg-img bg-img-1"></div>              
		                		<cite></cite>
		                		</blockquote>
		            		</div>
		          		</div>
		          		<div class="sl-slide" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
		            		<div class="sl-slide-inner">
		              			<div class="bg-img bg-img-2"></div>
		              			<cite></cite>
		              			</blockquote>
		            		</div>
		          		</div>
		          		<div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
		            		<div class="sl-slide-inner">
		              			<div class="bg-img bg-img-3"></div>
		              			<cite></cite>
		              			</blockquote>
		            		</div>
		          		</div>
	            	</div>
		        	<!-- /sl-slider -->
		        	<nav id="nav-dots" class="nav-dots">
		        		<span class="nav-dot-current"></span> 
		        		<span></span>
		        		<span></span>
		        	</nav>
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
		        		<ul id="MenuBar1" class="MenuBarHorizontal">
			          		<li><a href="index.php">HOME</a></li>
							<li><a href="servicios.html">SERVICIOS</a></li>
							<li>
								<a href="#" class="MenuBarItemSubmenu">QUE VENDEMOS</a>
					            <ul>
			                      <li><a href="compras-por-internet.php">COMPRAS POR INTERNET</a></li>
			                      <li><a href="repuestos-para-autos.php">REPUESTOS PARA AUTOS</a></li>
			                      <li><a href="repuestos-para-yates.php">REPUESTOS YATES / LANCHAS</a></li>
			                      <li><a href="equipos-electronicos.php">EQUIPOS ELECTR&Oacute;NICOS</a></li>
					            </ul>
				            </li>
			          		<li>
			          			<a href="enviar.php" class="MenuBarItemSubmenu">COMO ENVIAR</a>
					            <ul>
                                    <li><a href="rastrear-carga.html">RASTREAR CARGA</a></li>
					            	<li><a href="desde-eeuu.php">ENVIO DESDE EEUU</a></li>
				                </ul>
		              		</li>
			          		<li><a href="contacto.php">CONTACTO</a></li>
			        	</ul>
			    	</td>
			  	</tr>
		    </table>
		</td>
	</tr>
</table>