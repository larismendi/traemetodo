<?php
date_default_timezone_set('America/New_York');
if( isset($_POST['nombre']) && isset($_POST['email']) ){
	$txt = '';
	if(empty($_POST['nombre'])){
		$errores['nombre'] = true;
	}	
	if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
	    $errores['email'] = true;
	}	
	if(empty($_POST['telefono'])){
		$errores['telefono'] = true;
	}
	if(empty($_POST['tipo_emb'])){
		$errores['tipo_emb'] = true;
	}
  if(empty($_POST['marca'])){
  	$errores['marca'] = true;
  }  
  if(empty($_POST['modelo'])){
  	$errores['modelo'] = true;
  }
  if(empty($_POST['anio'])){
  	$errores['anio'] = true;
  }
  if(empty($_POST['vin'])){
  	$errores['vin'] = true;
  }
  if(empty($_POST['descripcion'])){
  	$errores['descripcion'] = true;
  }
	if(!isset($errores)){
    require_once("webapp/clases/database/database.class.php");
    require_once("webapp/web/clases/repuestosyates.class.php");
    $obj =new RepuestosYates();

    $datos = array(
          $_POST['nombre'], 
          $_POST['email'], 
          $_POST['telefono'],
          $_POST['tipo_emb'],
          $_POST['marca'],
          $_POST['modelo'],
          $_POST['anio'],
          $_POST['vin'],
          $_POST['descripcion']
        );
    $id = $obj->insertar($datos);
    if($id){

      $from    = "info@traemetodo.com";
      $subject = utf8_decode('Solicitud Cotización de Repuestos de Yates y Lanchas');

      $htmlx   = '';

      require_once('webapp/PHPMailer-master/class.phpmailer.php');

      $mail = new PHPMailer(); // defaults to using php "mail()"

      $mail->IsSendmail(); // telling the class to use SendMail transport

      $body = file_get_contents('webapp/mail/yates/basic.html');
      
      $body = eregi_replace("[\]",'',$body);
      $body = eregi_replace("{nombre}",$_POST['nombre'],$body);
      $body = eregi_replace("{email}",$_POST['email'],$body);
      $body = eregi_replace("{telefono}",$_POST['telefono'],$body);
      $body = eregi_replace("{tipo_emb}",$_POST['tipo_emb'],$body);
      $body = eregi_replace("{marca}",$_POST['marca'],$body);
      $body = eregi_replace("{modelo}",$_POST['modelo'],$body);
      $body = eregi_replace("{anio}",$_POST['anio'],$body);
      $body = eregi_replace("{vin}",$_POST['vin'],$body);
      $body = eregi_replace("{descripcion}",$_POST['descripcion'],$body);
      $body = eregi_replace("{url}",$obj->con->url,$body);

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

        $body = file_get_contents('webapp/mail/yates/copy.html');
        
        $body = eregi_replace("[\]",'',$body);
        $body = eregi_replace("{nombre}",$_POST['nombre'],$body);
        $body = eregi_replace("{email}",$_POST['email'],$body);
        $body = eregi_replace("{telefono}",$_POST['telefono'],$body);
        $body = eregi_replace("{tipo_emb}",$_POST['tipo_emb'],$body);
        $body = eregi_replace("{marca}",$_POST['marca'],$body);
        $body = eregi_replace("{modelo}",$_POST['modelo'],$body);
        $body = eregi_replace("{anio}",$_POST['anio'],$body);
        $body = eregi_replace("{vin}",$_POST['vin'],$body);
        $body = eregi_replace("{descripcion}",$_POST['descripcion'],$body);
        $body = eregi_replace("{url}",$obj->con->url,$body);

        $mail2->SetFrom   ($from,'traemetodo');

        $mail2->AddReplyTo($from,'traemetodo');

        $mail2->AddAddress($obj->con->email,'traemetodo');

        $mail2->Subject = $subject;

        $mail2->AltBody = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test

        $mail2->MsgHTML($body);

        $mail2->Send();

        echo 'Sus datos se envíaron correctamente.';
        
      }else{
        echo 'No se puedo envíar sus datos correctamente, por favor intentelo mas tarde.';
      }
    }else{
      echo 'No se pudo crear su solicitud.';
    }
	}else{
		echo 'Faltaron campos por ingresar.';
	}
}
?>