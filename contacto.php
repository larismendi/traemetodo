<?php

date_default_timezone_set('America/New_York');



if(isset($_POST['nombre']) && isset($_POST['email'])){



	$txt = '';



	if(empty($_POST['nombre'])){

		$errores['nombre'] = true;

	}



	if(empty($_POST['telefono'])){

		$errores['telefono'] = true;

	}



	if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){ 

	    $errores['email'] = true;

	}



	if(empty($_POST['mensaje'])){

		$errores['mensaje'] = true;

	}



	if(!isset($errores)){



		$from    = "info@traemetodo.com";

		$subject = utf8_decode('Contacto a la web traemetodo.com');

		$htmlx   = '';



		require_once("webapp/clases/database/database.class.php");

		require_once('webapp/PHPMailer-master/class.phpmailer.php');



		$con=new database;



		$mail = new PHPMailer(); // defaults to using php "mail()"







		$mail->IsSendmail(); // telling the class to use SendMail transport







		$body = file_get_contents('webapp/mail/contactos/basic.html');



		



		$body = eregi_replace("[\]",'',$body);



		$body = eregi_replace("{nombre}",$_POST['nombre'],$body);



		$body = eregi_replace("{telefono}",$_POST['telefono'],$body);



		$body = eregi_replace("{email}",$_POST['email'],$body);



		$body = eregi_replace("{mensaje}",$_POST['mensaje'],$body);



		$body = eregi_replace("{url}",$con->url,$body);





		$mail->SetFrom   ($from,'traemetodo');







		$mail->AddReplyTo($from,'traemetodo');







		$mail->AddAddress($_POST['email'],$_POST['nombre']);







		$mail->Subject = $subject;







		$mail->AltBody = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test







		$mail->MsgHTML($body);







		//$mail->AddAttachment("images/phpmailer.gif");      // attachment



		//$mail->AddAttachment("images/phpmailer_mini.gif"); // attachment







		if($mail->Send()) {







			$mail2 = new PHPMailer(); // defaults to using php "mail()"







			$mail2->IsSendmail(); // telling the class to use SendMail transport







			$body = file_get_contents('webapp/mail/contactos/copy.html');



			



			$body = eregi_replace("[\]",'',$body);



			$body = eregi_replace("{nombre}",$_POST['nombre'],$body);



			$body = eregi_replace("{telefono}",$_POST['telefono'],$body);



			$body = eregi_replace("{email}",$_POST['email'],$body);



			$body = eregi_replace("{mensaje}",$_POST['mensaje'],$body);



			$body = eregi_replace("{url}",$con->url,$body);







			$mail2->SetFrom   ($from,'traemetodo');







			$mail2->AddReplyTo($from,'traemetodo');







			$mail2->AddAddress($con->email,'traemetodo');







			$mail2->Subject = $subject;







			$mail2->AltBody = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test







			$mail2->MsgHTML($body);







			$mail2->Send();







			$txt = 'Sus datos se envíaron correctamente.';



		}else{



			$txt = 'No se puedo envíar sus datos correctamente, por favor intentelo mas tarde.';



		}







	}else{



		$txt = 'Faltaron campos por ingresar.';



	}



}



?>



<!DOCTYPE html>



<html lang="en">



<head>



<meta charset="utf-8" />



<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 



<title>Contactos traemetodo.com</title>



<link href='http://fonts.googleapis.com/css?family=Cuprum:400,700' rel='stylesheet' type='text/css'>



<link rel="shortcut icon" href="file:///E|/traelotodo/favicon.ico"> 



<link rel="stylesheet" type="text/css" href="css/demo.css" />



<link rel="stylesheet" type="text/css" href="css/style.css" />



<link rel="stylesheet" type="text/css" href="css/custom.css" />



<link rel="stylesheet" type="text/css" href="SpryAssets/SpryMenuBarHorizontal.css">



<style type="text/css">



<!--



.Estilo1 {color: #FFFFFF}



.Estilo2 {color: #FFCB29}td img {display: block;}td img {display: block;}td img {display: block;}td img {display: block;}td img {display: block;}td img {display: block;}td img {display: block;}td img {display: block;}td img {display: block;}



a:link {



	color: #FFCB29;



	text-decoration: none;



}



a:hover {



	color: #333333;



	text-decoration: underline;



}



a:active {



	color: #FFCB29;



	text-decoration: none;



}



body,td,th {



	font-family: Lato, Calibri, Arial, sans-serif;



	color: #FFF;



}



a:visited {



	text-decoration: none;



	color: #FFCB29;



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



.Estilo26 {font-size: 18px; color: #333333; font-weight: bold; }



.Estilo27 {color: #333333; font-size: 16px;}



.Estilo28 {



	font-size: 14px;



	font-weight: bold;



}



.Estilo29 {color: #333333}



.Estilo30 {font-size: 16px}



.Estilo31 {font-size: 20px}



-->



<!--



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



body {



	background-color: #FFFFFF;



}



.Estilo32 {



	color: #FF0000;



	font-weight: bold;



}



-->



</style>







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



	        <td align="center" valign="top"><ul id="MenuBar1" class="MenuBarHorizontal">







          <li><a href="index.php">HOME</a></li>



	          <li><a href="servicios.html">SERVICIOS</a></li>



	          <li><a href="#" class="MenuBarItemSubmenu">QUE VENDEMOS</a>



	            <ul>



                  <li><a href="compras-por-internet.php">COMPRAS POR INTERNET</a></li>



                  <li><a href="repuestos-para-autos.php">REPUESTOS PARA AUTOS</a></li>



                  <li><a href="repuestos-para-yates.php">REPUESTOS YATES / LANCHAS</a></li>



                  <li><a href="equipos-electronicos.php">EQUIPOS ELECTR&Oacute;NICOS</a></li>



	            </ul>



              </li>



	          <li><a href="enviar.php" class="MenuBarItemSubmenu">COMO ENVIAR</a>



	            <ul>



	              <li><a href="rastrear-carga.html">RASTREAR CARGA</a></li>



                </ul>



              </li>



	          <li><a href="contacto.php">CONTACTO</a></li>



	          </ul></td>



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



	        <td align="right" valign="top"><span class="Estilo13"><span class="Estilo14">Traemetodo.com </span>/CONTÁCTANOS </span></td>



          </tr>



	      <tr>



	        <td width="505" valign="top">&nbsp;</td>



	        <td width="455" align="right" valign="top">&nbsp;</td>



          </tr>



        </table>



          <table width="960" border="0" align="center" cellpadding="0" cellspacing="10">



            <tr>



              <td width="562" align="center" valign="top"><iframe width="550" height="549" frameborder="1" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q=2148+Orinoco+Dr+%23312,+Orlando,+FL+32837,+EE.+UU.&amp;ie=UTF8&amp;hq=&amp;hnear=2148+Orinoco+Dr+%23312,+Orlando,+Florida+32837&amp;t=h&amp;z=14&amp;ll=28.411241,-81.408371&amp;output=embed"></iframe>



                <div align="left"><br />



                  <span class="Estilo28"><small><a href="https://maps.google.com/maps?q=2148+Orinoco+Dr+%23312,+Orlando,+FL+32837,+EE.+UU.&amp;ie=UTF8&amp;hq=&amp;hnear=2148+Orinoco+Dr+%23312,+Orlando,+Florida+32837&amp;t=h&amp;z=14&amp;ll=28.411241,-81.408371&amp;source=embed" style="color:#FFB42E;text-align:left">AMPLIAR</a></small></span></div></td>



              	<td width="368" align="right" valign="top" bgcolor="#FFFFFF"><table width="368" height="31" border="0" align="left" cellpadding="0" cellspacing="0">



                <tr>



                  <td colspan="2" align="left" valign="top"><p><span class="Estilo26">Dirección:<br>



                  </span><span class="Estilo27">2148 Orinoco Dr. Suite 312,   Orlando, FL 32837.<strong> EEUU.</strong></span></p>



                    <p>&nbsp;</p>



                    <p>&nbsp;</p>



                    <p class="Estilo26">Teléfonos:                    </p>



                    <p class="Estilo29"><span class="Estilo30"><strong>EEUU: </strong><span class="Estilo31"><strong>+1 (407)</strong> 392.79.40 </span></span></p>



                  <p class="Estilo27"><strong>CARACAS:</strong> <span class="Estilo31"><strong>+58 (212)</strong> 772.99.72 </span></p></td>



                </tr>



                <tr>



                  <td colspan="2" align="left" valign="top"><p>&nbsp;</p>



                    <p>&nbsp;</p>



                    <p><span class="Estilo27"><strong>Nuestro Horario de atención es de: </strong><br>



                    Lunes a Viernes: <span class="Estilo32">(Hora Este de los EEUU)</span> Desde las <strong>9:00 A.M.</strong>  Hasta las <strong>5:00 P.M.</strong> <br>



                  <strong>E-mail: </strong><a href="mailto:info@traemetodo.com"><strong>info@traemetodo.com</strong></a></span></p></td>



                </tr>



                <tr>



                  <td colspan="2" align="left" valign="top">&nbsp;</td>



                </tr>



                <tr>



                  <td colspan="2" align="left" valign="top">&nbsp;</td>



                </tr>



                <tr>



                  <td width="220" align="left" valign="top"><div style="text-align:center;width:200px;padding:0;"> <h2><a style="text-decoration:none;" href="http://www.zeitverschiebung.net/es/city/4167147">



                    <div align="left" class="Estilo29">



                      <div align="center">Hora actual en Orlando</div>



                    </div>



                  <iframe src="http://www.zeitverschiebung.net/clock-widget-iframe?language=es&timezone=America%2FNew_York" width="220" height="130" frameborder="0" seamless></iframe></div></td>



                  <td width="148" align="left" valign="top">&nbsp;</td>



                </tr>             



                <tr>



                  <td colspan="2" align="center" valign="top"></td>



                </tr>               



                <tr>



                  <td colspan="2" align="left" valign="top"><table width="127" border="0" align="left" cellpadding="0" cellspacing="6">



                    <tr>



                      <td width="56" align="left" bgcolor="#FFFFFF"><a href="https://twitter.com/TRAEMETODO" target="_blank"><img src="img/tw.png" alt="twitter-traemetodo" width="53" height="53" border="0"></a></td>



                      <td width="368" align="left" bgcolor="#FFFFFF"><a href="https://www.facebook.com/traemetodo?fref=ts" target="_blank"><img src="img/fb.png" alt="facebook-traemetodo" width="53" height="53" border="0"></a></td>



                    </tr>



                  </table></td>



                </tr>



              </table>                



              <p align="justify" class="Estilo18"></p></td>



            </tr>



         </table>



      	</td>



	  </tr>



	  <tr>



	    <td align="center" bgcolor="#FFFFFF">



	    	<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">



	    	  <tr>



		        <td bgcolor="#FFFFFF">



		        	<? if(isset($txt) && $txt){ ?>



		          	<div class="mensaje"><?=$txt?>&nbsp;</div>



		            <? }?>



		        </td>



      		  </tr>



	          <tr>



	            <td align="center" bgcolor="#FFC929">



	                <p>&nbsp;</p>



	                <form name="form1" id="form1" class="form shadowed-all" method="post" action="">



		                <p>CONTÁCTANOS</p>



		                <label for="nombre" <?=isset($errores['nombre'])?'class="requerido"':''?>><strong>Nombre y Apellido:</strong></label>



		                <input name="nombre" type="text" id="nombre" placeholder="Ingrese su nombre" size="43" class="required" value="<?=isset($errores['nombre'])?$_POST['nombre']:''?>" />



		                <label for="telefono" <?=isset($errores['telefono'])?'class="requerido"':''?>><strong>Teléfono:</strong></label>



		                <input name="telefono" type="text" id="telefono" placeholder="Ingrese su teléfono" size="43" class="required" value="<?=isset($errores['telefono'])?$_POST['telefono']:''?>" />



		                <label for="email" <?=isset($errores['email'])?'class="requerido"':''?>><strong>Email:</strong></label>



		                <input name="email" type="text" id="email" size="43" placeholder="Ingrese su email" class="required email" value="<?=isset($errores['nombre'])?$_POST['email']:''?>" />



		                <label for="email"><strong>Repite Email:</strong></label>



		                <input name="email2" type="text" id="email2" size="43" placeholder="Ingrese de nuevo su email" class="required email" value="" />



		                <label for="mensaje" <?=isset($errores['mensaje'])?'class="requerido"':''?>><strong>Mensaje:</strong></label>



		                <textarea name="mensaje" id="mensaje" class="required" placeholder="Ingrese su mensaje"><?=isset($errores['nombre'])?$_POST['mensaje']:''?></textarea>



		                <input id="enviar" value="Enviar" class="submit" type="submit" name="enviar" />



		                <div>Puede envíar su consulta o cualquier solicitud.</div>



		        	</form>



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



	        <td align="center" valign="top"><img src="banderas.jpg" width="960" height="112" border="0"></td>



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



<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>



<script type="text/javascript" src="js/jquery.ba-cond.min.js"></script>



<script type="text/javascript" src="js/jquery.slitslider.js"></script>



<script type="text/javascript" src="js/jquery.validate.js"></script>



<script type="text/javascript">



$(function(){



	$('#form1').validate({



		rules: {



			email2: {



				equalTo: '#email'



			}



		},



		ignore: ".ignore"



	});







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