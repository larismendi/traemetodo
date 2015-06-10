<?php
/*
**	@desc:		PHP ajax admin using jQuery
**	@autor:		Luis Felipe Arismendi
**	@email:		lipe88rey@hotmail.com
**	@date:		5 Mayo 2010
**	@licencia:	Libre!, Pero voy a estar contento si mi nombre que figura en los créditos
*/
class Estados{
 	var $con;
	var $output;
 	function Estados(){
		$this->output = false;
		$this->created_at = "NOW()";
 		$this->con=new database;
 	}

	function insertar($campos){
		if($this->con->connect()==true){
			$query = array("denominacion" => $campos[0], "iso_3166-2" => $campos[1], "habilitado" => 1, "created_at" => $this->created_at);
			$result = $this->con->query_insert("estados", $query);
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
			$query = "UPDATE estados SET denominacion = '".$campos[0]."', iso_3166-2 = '".$campos[1]."', habilitado = '".$campos[2]."' WHERE id_estado = ".$id;
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
	
	function mostrar($id){
		if($this->con->connect()==true){
			$query = "SELECT * FROM estados WHERE id_estado=".$id;
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
			$query = "SELECT * FROM estados WHERE habilitado = 1";
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
			$query = "SELECT * FROM estados";
			if (isset($datos[0]))
				$query .= " WHERE denominacion LIKE '%".fn_filtro(substr($datos[0], 0, 16))."%' OR iso_3166-2 LIKE '%".fn_filtro(substr($datos[0], 0, 16))."%'";
			if (isset($datos[1]))
				$query .= sprintf(" ORDER BY %s %s", fn_filtro($datos[1]), fn_filtro($datos[2]));
			else
				$query .= " ORDER BY id_estado DESC";
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
			$query = "DELETE FROM estados WHERE id_estado=".$id;
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