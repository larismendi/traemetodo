<?php
/*
**	@desc:		PHP ajax admin using jQuery
**	@autor:		Luis Felipe Arismendi
**	@email:		lipe88rey@hotmail.com
**	@date:		5 Mayo 2010
**	@licencia:	Libre!, Pero voy a estar contento si mi nombre que figura en los créditos
*/
class Registros{
 	var $con;
	var $output;
 	function __construct(){
		$this->output = false;
		$this->created_at = "NOW()";
 		$this->con=new database;
 	}
	function insertar($campos){
		if($this->con->connect()==true){
			$query = array(
				"nombre" => $campos[0], 
				"email" => $campos[1], 
				"token" => md5($campos[1].date('d-m-Y')), 
				"telefono_local" => $campos[2],
				"telefono_movil" => $campos[3],
				"pais" => $campos[4],
				"estado" => $campos[5],
				"ciudad" => $campos[6],
				"zipcode" => $campos[7],
				"direccion" => $campos[8],
				"created_at" => $this->created_at,
				"habilitado" => 1);
			$result = $this->con->query_insert("registros", $query);
			$this->con->close();
			if($result){
                $this->output = $result;
				return $this->output;
	  		}else{
                return $this->output;
            }
		}
	}
	
	function enviar($datos, $id){
		if($this->con->connect()==true){

			$query = "SELECT token FROM registros WHERE id_registro='".$id."'";
			$registro = $this->con->query($query);
			$registro = $this->con->fetch_array($registro);
			$this->con->close();

			$from    = "info@traemetodo.com";
			$subject = utf8_decode('Confirmar registro en la web traemetodo.com');

			$htmlx   = '';

			require_once('webapp/PHPMailer-master/class.phpmailer.php');

			$mail = new PHPMailer(); // defaults to using php "mail()"

			$mail->IsSendmail(); // telling the class to use SendMail transport

			$body = file_get_contents('webapp/mail/registros/basic.html');
			
			$body = eregi_replace("[\]",'',$body);
			$body = eregi_replace("{confirma}",$this->con->url.'/registro_token.php?token='.$registro['token'],$body);
			$body = eregi_replace("{url}",$this->con->url,$body);

			$mail->SetFrom   ($from,'traemetodo');

			$mail->AddReplyTo($from,'traemetodo');

			$mail->AddAddress($datos[1],$datos[0]);

			$mail->Subject = utf8_decode('Confirmar registro en la web traemetodo.com');

			$mail->AltBody = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test

			$mail->MsgHTML($body);

			$result = $mail->Send();

			if($result) {

				$mail2 = new PHPMailer(); // defaults to using php "mail()"

				$mail2->IsSendmail(); // telling the class to use SendMail transport

				$body = file_get_contents('webapp/mail/registros/copy.html');
				
				$body = eregi_replace("[\]",'',$body);
				$body = eregi_replace("{usuario}",$datos[0],$body);
				$body = eregi_replace("{email}",$datos[1],$body);
				$body = eregi_replace("{url}",$this->con->url,$body);

				$mail2->SetFrom   ($from,'traemetodo');

				$mail2->AddReplyTo($from,'traemetodo');

				$mail2->AddAddress($this->con->email,'traemetodo');

				$mail2->Subject = utf8_decode('Registro en la pagina web.');

				$mail2->AltBody = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test

				$mail2->MsgHTML($body);

				$result2 = $mail2->Send();
			}
			
			if($result && $result2){
				$this->output = true;
				return $this->output;
			}else{
				return $this->output;
			}
		}
	}
	function datos($id){
		if($this->con->connect()==true){
			$query = "SELECT * FROM registros WHERE id_registro='".$id."'";
			$result = $this->con->query($query);
			$result = $this->con->fetch_array($result);
			$this->con->close();
			if($result){
			  $this->output = array($result['nombre'], $result['email']);
			  return $this->output;
			}
			else{
			  return $this->output;
			}
		}
	}
	
	function valida($email){
		if($this->con->connect()==true){
			$query = "SELECT id_registro FROM registros WHERE email='".$email."'";
			$result = $this->con->query($query);
			$result = $this->con->fetch_array($result);
			$this->con->close();
			if($result){
			  $this->output = $result['id_registro'];
			  return $this->output;
			}
			else{
			  return $this->output;
			}
		}
	}
	function valida_token($token){
		if($this->con->connect()==true){
			$query = "SELECT id_registro FROM registros WHERE token='".$token."'";
			$result = $this->con->query($query);
			$result = $this->con->fetch_array($result);
			$this->con->close();
			if($result){
			  $this->output = $result['id_registro'];
			  return $this->output;
			}
			else{
			  return $this->output;
			}
		}
	}
	function alta_email($id){
		if($this->con->connect()==true){
			$query = "UPDATE registros SET email_valido = 1, habilitado = 1 WHERE id_registro='".$id."'";
			$result = $this->con->query($query);
			$this->con->close();
			if($result){
			  $this->output = $result;
			  return $this->output;
			}
			else{
			  return $this->output;
			}
		}
	}
	function alta_usuario($id){
		if($this->con->connect()==true){
			$query = "UPDATE registros SET habilitado = 1 WHERE id_registro='".$id."'";
			$result = $this->con->query($query);
			$this->con->close();
			if($result){
			  $this->output = $result;
			  return $this->output;
			}
			else{
			  return $this->output;
			}
		}
	}
	function baja_usuario($id){
		if($this->con->connect()==true){
			$query = "UPDATE registros SET habilitado = 0 WHERE id_registro='".$id."'";
			$result = $this->con->query($query);
			$this->con->close();
			if($result){
			  $this->output = $result;
			  return $this->output;
			}
			else{
			  return $this->output;
			}
		}
	}
	function enviar_alta($id){
		if($this->con->connect()==true){

			$query = "SELECT token, email, nombre, direccion, ciudad, estado, zipcode, pais, telefono_movil, telefono_local FROM registros WHERE id_registro='".$id."'";
			$registro = $this->con->query($query);
			$registro = $this->con->fetch_array($registro);

			$codigo = 'T-'.(strlen($id)<=5?sprintf("%05d", $id):$id);

			$query = "UPDATE registros SET num_registro = '".$codigo."' WHERE id_registro='".$id."'";
			$this->con->close();


			$from    = "info@traemetodo.com";
			$subject = utf8_decode('Gracias por registrarse en traemetodo.com');

			$htmlx   = '';

			require_once('webapp/PHPMailer-master/class.phpmailer.php');

			$mail = new PHPMailer(); // defaults to using php "mail()"

			$mail->IsSendmail(); // telling the class to use SendMail transport

			$body = file_get_contents('webapp/mail/registros/alta.html');
			
			$body = eregi_replace("[\]",'',$body);
			$body = eregi_replace("{nombre}",$registro['nombre'],$body);
			$body = eregi_replace("{num}",$codigo,$body);
			$body = eregi_replace("{email}",$registro['email'],$body);
			$body = eregi_replace("{direccion}",$registro['direccion'],$body);
			$body = eregi_replace("{ciudad}",$registro['ciudad'],$body);
			$body = eregi_replace("{estado}",$registro['estado'],$body);
			$body = eregi_replace("{zipcode}",$registro['zipcode'],$body);
			$body = eregi_replace("{pais}",$registro['pais'],$body);
			$body = eregi_replace("{telefono_movil}",$registro['telefono_movil'],$body);
			$body = eregi_replace("{telefono_local}",$registro['telefono_local'],$body);
			$body = eregi_replace("{baja}",$this->con->url.'/baja_token.php?token='.$registro['token'],$body);
			$body = eregi_replace("{url}",$this->con->url,$body);

			$mail->SetFrom   ($from,'traemetodo');

			$mail->AddReplyTo($from,'traemetodo');

			$mail->AddAddress($registro['email'],$registro['nombre']);

			$mail->Subject = utf8_decode('Registro en la web traemetodo.com');

			$mail->AltBody = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test

			$mail->MsgHTML($body);

			$result = $mail->Send();

			if($result) {

				$mail2 = new PHPMailer(); // defaults to using php "mail()"

				$mail2->IsSendmail(); // telling the class to use SendMail transport

				$body = file_get_contents('webapp/mail/registros/copy.html');
				
				$body = eregi_replace("[\]",'',$body);
				$body = eregi_replace("{usuario}",$registro['nombre'],$body);
				$body = eregi_replace("{email}",$registro['email'],$body);
				$body = eregi_replace("{url}",$this->con->url,$body);

				$mail2->SetFrom   ($from,'traemetodo');

				$mail2->AddReplyTo($from,'traemetodo');

				$mail2->AddAddress($this->con->email,'traemetodo');

				$mail2->Subject = utf8_decode('Registro en la pagina web.');

				$mail2->AltBody = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test

				$mail2->MsgHTML($body);

				$result2 = $mail2->Send();
			}
			
			if($result && $result2){
				$this->output = true;
				return $this->output;
			}else{
				return $this->output;
			}
		}
	}
	function enviar_baja($id){
		if($this->con->connect()==true){

			$query = "SELECT token, email, nombre FROM registros WHERE id_registro='".$id."'";
			$registro = $this->con->query($query);
			$registro = $this->con->fetch_array($registro);
			$this->con->close();

			$from    = "info@traemetodo.com";
			$subject = utf8_decode('Baja del registro a la web traemetodo.com');

			$htmlx   = '';

			require_once('webapp/PHPMailer-master/class.phpmailer.php');

			$mail = new PHPMailer(); // defaults to using php "mail()"

			$mail->IsSendmail(); // telling the class to use SendMail transport

			$body = file_get_contents('webapp/mail/registros/baja.html');
			
			$body = eregi_replace("[\]",'',$body);
			$body = eregi_replace("{nombre}",$registro['nombre'],$body);
			$body = eregi_replace("{alta}",$this->con->url.'/alta_token.php?token='.$registro['token'],$body);
			$body = eregi_replace("{url}",$this->con->url,$body);

			$mail->SetFrom   ($from,'traemetodo');

			$mail->AddReplyTo($from,'traemetodo');

			$mail->AddAddress($registro['email'],$registro['nombre']);

			$mail->Subject = $subject;

			$mail->AltBody = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test

			$mail->MsgHTML($body);

			$result = $mail->Send();

			if($result){
				$this->output = true;
				return $this->output;
			}else{
				return $this->output;
			}
		}
	}
}
?>