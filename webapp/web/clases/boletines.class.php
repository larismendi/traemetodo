<?php
/*
**	@desc:		PHP ajax admin using jQuery
**	@autor:		Luis Felipe Arismendi
**	@email:		lipe88rey@hotmail.com
**	@date:		5 Mayo 2010
**	@licencia:	Libre!, Pero voy a estar contento si mi nombre que figura en los créditos
*/
class Boletines{
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
				"nombre" => strtoupper($campos[0]),
				"email" => strtoupper($campos[1]),
				"token" => strtoupper($campos[2]),
				"created_at" => $this->created_at,
				"habilitado" => 1);
			$result = $this->con->query_insert("boletines", $query);
			$this->con->close();
			if($result){
                $this->output = $result;
				return $this->output;
	  		}else{
                return $this->output;
            }
		}
	}
	function valida($email){
		if($this->con->connect()==true){
			$query = "SELECT count(*) cant FROM boletines WHERE email='".$email."'";
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
	function valida_token($token){
		if($this->con->connect()==true){
			$query = "SELECT id_boletin FROM boletines WHERE token='".$token."'";
			$result = $this->con->query($query);
			$result = $this->con->fetch_array($result);
			$this->con->close();
			if($result){
			  $this->output = $result['id_boletin'];
			  return $this->output;
			}
			else{
			  return $this->output;
			}
		}
	}
	function baja_boletin($id){
		if($this->con->connect()==true){
			$query = "UPDATE boletines SET habilitado = 0 WHERE id='".$id."'";
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