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
 	function Registros(){
		$this->output = false;
		$this->created_at = "NOW()";
 		$this->con=new database;
 	}

	function insertar($campos){
		if($this->con->connect()==true){
			$query = array(
				"nombre" => strtoupper($campos[0]),
				"email" => strtoupper($campos[1]),
				"token" => md5($campos[1].date('d-m-Y')),
				"telefono_local" => strtoupper($campos[2]),
				"telefono_movil" => strtoupper($campos[3]),
				"pais" => strtoupper($campos[4]),
				"estado" => strtoupper($campos[5]),
				"ciudad" => strtoupper($campos[6]),
				"zipcode" => strtoupper($campos[7]),
				"direccion" => strtoupper($campos[8]),
				"created_at" => $this->created_at,
				"habilitado" => 0);
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
	
	function actualizar($campos,$id){
		if($this->con->connect()==true){
			$query = "UPDATE registros SET 
						nombre = '".strtoupper($campos[0])."', 
						email = '".strtoupper($campos[1])."', 
						telefono_local = '".strtoupper($campos[2])."', 
						telefono_movil = '".strtoupper($campos[3])."', 
						pais = '".strtoupper($campos[4])."', 
						estado = '".strtoupper($campos[5])."',
						ciudad = '".strtoupper($campos[6])."',
						zipcode = '".strtoupper($campos[7])."',
						direccion = '".strtoupper($campos[8])."', 
						habilitado = '".$campos[9]."'
					WHERE id_registro = ".$id;
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
			$this->con->query($query);
			$this->con->close();

			$from    = "info@traemetodo.com";
			$subject = utf8_decode('Gracias por registrarse en traemetodo.com');

			$htmlx   = '';

			require_once('../../PHPMailer-master/class.phpmailer.php');

			$mail = new PHPMailer(); // defaults to using php "mail()"

			$mail->IsSendmail(); // telling the class to use SendMail transport

			$body = file_get_contents('../../mail/registros/alta.html');
			
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

				$body = file_get_contents('../../mail/registros/copy.html');
				
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
	
	function mostrar_registros($id){
		if($this->con->connect()==true){
			$query = "SELECT * FROM registros WHERE id_registro=".$id;
			$result = $this->con->query($query);
			$result = $this->con->fetch_array($result);
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
	
	function mostrar_excel(){
		if($this->con->connect()==true){
			$query = "SELECT * FROM registros";
			$result = $this->con->fetch_all_array($query);
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

	function mostrar_all($datos){
		if($this->con->connect()==true){
			$paging = new PHPPaging;
			$query = "SELECT * FROM registros";
			if (isset($datos[0]))
				$query .= " WHERE nombre LIKE '%".fn_filtro(substr($datos[0], 0, 16))."%' OR email LIKE '%".fn_filtro(substr($datos[0], 0, 16))."%'";
			if (isset($datos[1]))
				$query .= sprintf(" ORDER BY %s %s", fn_filtro($datos[1]), fn_filtro($datos[2]));
			else
				$query .= " ORDER BY id_registro DESC";
			$paging->agregarConsulta($query);
			$paging->div('div_listar');
			$paging->modo('publicacion');
			if (isset($datos[3]))
				$paging->porPagina(fn_filtro((int)$datos[3]));
			$paging->verPost(true);
			$paging->mantenerVar("criterio_usu_pe","criterio_ordenar_por","criterio_orden","criterio_mostrar");
			$result = $paging->ejecutar();
			$this->con->close();
			if($result){
			  $this->output = $paging;
			  return $this->output;
			}
			else{
			  return $this->output;
			}
		}
	}

	function eliminar($id){
		if($this->con->connect()==true){
			$query = "DELETE FROM registros WHERE id_registro=".$id;
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