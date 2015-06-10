<?php
/*
**	@desc:		PHP ajax admin using jQuery
**	@autor:		Luis Felipe Arismendi
**	@email:		lipe88rey@hotmail.com
**	@date:		5 Mayo 2010
**	@licencia:	Libre!, Pero voy a estar contento si mi nombre que figura en los créditos
*/

class RepuestosYates{

 	var $con;

	var $output;

 	function RepuestosYates(){

		$this->output = false;
		$this->created_at = "NOW()";
 		$this->con=new database;

 	}

	function insertar($campos){

		if($this->con->connect()==true){

			$query = array(
				"nombre" => strtoupper($campos[0]),
				"email" => strtoupper($campos[1]),
				"telefono" => strtoupper($campos[2]),
				"tipo_emb" => strtoupper($campos[3]),
				"marca" => strtoupper($campos[4]),
				"modelo" => strtoupper($campos[5]),
				"anio" => strtoupper($campos[6]),
				"vin" => strtoupper($campos[7]),
				"descripcion" => strtoupper($campos[8]),
				"created_at" => $this->created_at,
				"habilitado" => 1);

			$result = $this->con->query_insert("repuestosyates", $query);

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

			$query = "UPDATE repuestosyates SET 
						nombre = '".strtoupper($campos[0])."', 
						email = '".strtoupper($campos[1])."', 
						telefono = '".strtoupper($campos[2])."', 
						tipo_emb = '".strtoupper($campos[3])."', 
						marca = '".strtoupper($campos[4])."', 
						modelo = '".strtoupper($campos[5])."',
						anio = '".strtoupper($campos[6])."',
						vin = '".strtoupper($campos[7])."',
						descripcion = '".strtoupper($campos[8])."',
						habilitado = '".$campos[9]."'
					WHERE id_respuestoyate = ".$id;

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

	function mostrar_registros($id){

		if($this->con->connect()==true){
			$query = "SELECT * FROM repuestosyates WHERE id_respuestoyate=".$id;
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
			$query = "SELECT * FROM repuestosyates";
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
			$query = "SELECT * FROM repuestosyates";
			if (isset($datos[0]))
				$query .= " WHERE nombre LIKE '%".fn_filtro(substr($datos[0], 0, 16))."%' OR email LIKE '%".fn_filtro(substr($datos[0], 0, 16))."%'";
			if (isset($datos[1]))
				$query .= sprintf(" ORDER BY %s %s", fn_filtro($datos[1]), fn_filtro($datos[2]));
			else
				$query .= " ORDER BY id_respuestoyate DESC";

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
			$query = "DELETE FROM repuestosyates WHERE id_respuestoyate=".$id;
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