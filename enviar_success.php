<?php
date_default_timezone_set('America/New_York');
if(isset($_POST['tipopago']) && isset($_POST['nombre']) && isset($_POST['fechapago'])){
	$txt = '';
	if(empty($_POST['tipopago'])){
		$errores['tipopago'] = true;
	}
	if(empty($_POST['nombre'])){
		$errores['nombre'] = true;
	}
	if(empty($_POST['email'])){
		$errores['email'] = true;
	}
	if(empty($_POST['fechapago'])){
		$errores['fechapago'] = true;
	}
	if(!isset($errores)){
		require_once("webapp/clases/database/database.class.php");
		require_once("webapp/web/clases/pagos.class.php");
		$obj =new Pagos();

		$datos = array(
					$_POST['nombre'], 
					$_POST['email'], 
					$_POST['tipopago'],
					$_POST['fechapago'],
					$_POST['nrofac'],
					$_POST['tipotrans'],
					$_POST['banco'],
					$_POST['nrotrans'],
                    $_POST['tasadecambio'],
					$_POST['monto'],
					$_POST['descripcion']
				);
		$id = $obj->insertar($datos);
		if($id){

			$from    = "info@traemetodo.com";
			$subject = utf8_decode('Pago a la web traemetodo.com');

			$htmlx   = '';

			require_once('webapp/PHPMailer-master/class.phpmailer.php');

			$mail = new PHPMailer(); // defaults to using php "mail()"

			$mail->IsSendmail(); // telling the class to use SendMail transport

			$body = file_get_contents('webapp/mail/pagos/basic.html');
			
			$body = eregi_replace("[\]",'',$body);
			$body = eregi_replace("{tipopago}",$_POST['tipopago'],$body);
			$body = eregi_replace("{nombre}",$_POST['nombre'],$body);
			$body = eregi_replace("{email}",$_POST['email'],$body);
			$body = eregi_replace("{fechapago}",$_POST['fechapago'],$body);
			$body = eregi_replace("{nrofac}",$_POST['nrofac'],$body);
			$body = eregi_replace("{tipotrans}",$_POST['tipotrans'],$body);
			$body = eregi_replace("{banco}",$_POST['banco'],$body);
			$body = eregi_replace("{nrotrans}",$_POST['nrotrans'],$body);
            $body = eregi_replace("{tasadecambio}",$_POST['tasadecambio'],$body);
			$body = eregi_replace("{monto}",$_POST['monto'],$body);
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

				$body = file_get_contents('webapp/mail/pagos/copy.html');
				
				$body = eregi_replace("[\]",'',$body);
				$body = eregi_replace("{tipopago}",$_POST['tipopago'],$body);
				$body = eregi_replace("{nombre}",$_POST['nombre'],$body);
				$body = eregi_replace("{email}",$_POST['email'],$body);
				$body = eregi_replace("{fechapago}",$_POST['fechapago'],$body);
				$body = eregi_replace("{nrofac}",$_POST['nrofac'],$body);
				$body = eregi_replace("{tipotrans}",$_POST['tipotrans'],$body);
				$body = eregi_replace("{banco}",$_POST['banco'],$body);
				$body = eregi_replace("{nrotrans}",$_POST['nrotrans'],$body);
                $body = eregi_replace("{tasadecambio}",$_POST['tasadecambio'],$body);
				$body = eregi_replace("{monto}",$_POST['monto'],$body);
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