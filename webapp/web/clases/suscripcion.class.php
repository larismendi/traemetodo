<?php
/*
**	@desc:		PHP ajax admin using jQuery
**	@autor:		Luis Felipe Arismendi
**	@email:		lipe88rey@hotmail.com
**	@date:		5 Mayo 2010
**	@licencia:	Libre!, Pero voy a estar contento si mi nombre que figura en los créditos
*/
class Registro{
 	var $con;
	var $output;
 	function __construct(){
		$this->output = false;
		$this->created_at = "NOW()";
 		$this->con=new database;
 	}

	function insertar($campos){
		if($this->con->connect()==true){
			$query = array("nombres" => $campos[0], "sector" => $campos[1], "pai_idpais" => $campos[2], "pro_idprovincia" => $campos[3], "email" => $campos[4], "token" => $campos[5], "created_at" => $this->created_at);			
			$result = $this->con->query_insert("suscripcion", $query);
			$this->con->close();
			if($result){
                $this->output = $result;
				return $this->output;
	  		}else{
                return $this->output;
            }
		}
	}
	
	function pais($id){
		if($this->con->connect()==true){
			$query = "SELECT denominacion FROM paises WHERE idpais='".$id."'";
			$result = $this->con->query($query);
			$result = $this->con->fetch_array($result);
			$this->con->close();
			if($result){
			  $this->output = $result['denominacion'];
			  return $this->output;
			}
			else{
			  return $this->output;
			}
		}
	}
	
	function provincia($id){
		if($this->con->connect()==true){
			$query = "SELECT denominacion FROM provincias WHERE idprovincia='".$id."'";
			$result = $this->con->query($query);
			$result = $this->con->fetch_array($result);
			$this->con->close();
			if($result){
			  $this->output = $result['denominacion'];
			  return $this->output;
			}
			else{
			  return $this->output;
			}
		}
	}
	
	function enviar($datos){
		$cabeceras = 'From: registro-ecomerce@avtek.com' . "\r\n" .
		'Reply-To: registro-ecomerce@avtek.com' . "\r\n" .
		"Content-type: text/html\r\n" .
		'X-Mailer: PHP/' . phpversion();
		
		$pais      = $this->pais($datos[2]);
		$provincia = $this->provincia($datos[3]);
		
		$mensaje = 'Hola Registro-Ecomerce,<br><br>Se registro el usuario '.$datos[0].' con los siguientes datos de contacto:<br><br>Secto al que pertenece: '.$datos[1].'<br>Pa&iacute;s: '.$pais.'<br>Provincia: '.$provincia.'<br>Correo '.$datos[4].'.<br>Saludos.';
		$result = mail('registro-ecomerce@avtek.com','Registro a la web avtek.com',$mensaje,$cabeceras);		
		
		$mensaje = '<html><head></head><body style="font-family:arial;font-size:12px;"><p><img name"logo" alt="logo" width="220" src="http://avtek.com/img/logo.png"></p><p style="font-size:16px;font-weight:bold;">Hola '.$datos[0].',<br>Gracias por registrarse en nuestra p&aacute;gina, peri&oacute;dicamente le estaremos enviando informaci&oacute;n relevante sobre nuestros productos e innovaciones.<br>Tambi&eacute;n puede visitarnos en nuestro portal http://avtek.com.</p><p>Si desea darse de baja y no recibir boletines haga clic <a href="http://avtek.com/darbajasus.php?t='.$datos[2].'">aqu&iacute;</a>.</p><br><br><p style="font-style:italic;font-size:11px;text-align:center;">Todos los correos electr&oacute;nicos de Avtek ser&aacute;n enviados desde nuestros dominios @avtek.com a tu direcci&oacute;n de correo electr&oacute;nico registrado. Nunca te contactaremos desde ninguna otra direcci&oacute;n.</p></body></html>';
		$result2 = mail($datos[1],'Registro a la web avtek.com',$mensaje,$cabeceras);
		
		if($result && $result2){
			$this->output = true;
			return $this->output;
		}else{
			return $this->output;
		}
	}
	
	function valida($email){
		if($this->con->connect()==true){
			$query = "SELECT id FROM suscripcion WHERE email='".$email."'";
			$result = $this->con->query($query);
			$result = $this->con->fetch_array($result);
			$this->con->close();
			if($result){
			  $this->output = $result['id'];
			  return $this->output;
			}
			else{
			  return $this->output;
			}
		}
	}
	
	function darbajasus($t){
		if($this->con->connect()==true){
			$query = "DELETE FROM suscripcion WHERE token='".$t."'";
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
}
?>