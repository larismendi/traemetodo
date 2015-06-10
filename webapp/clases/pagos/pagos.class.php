<?php
/*
**	@desc:		PHP ajax admin using jQuery
**	@autor:		Luis Felipe Arismendi
**	@email:		lipe88rey@hotmail.com
**	@date:		5 Mayo 2010
**	@licencia:	Libre!, Pero voy a estar contento si mi nombre que figura en los créditos
*/

class Pagos{

 	var $con;

	var $output;

 	function Pagos(){

		$this->output = false;
		$this->created_at = "NOW()";
 		$this->con=new database;

 	}

	function insertar($campos){

		if($this->con->connect()==true){

			$query = array(
				"nombre" => strtoupper($campos[0]),
				"email" => strtoupper($campos[1]),
				"tipopago" => strtoupper($campos[2]),
				"fechapago" => strtoupper($campos[3]),
				"nrofac" => strtoupper($campos[4]),
				"tipotrans" => strtoupper($campos[5]),
				"banco" => strtoupper($campos[6]),
				"nrotrans" => strtoupper($campos[7]),
                "tasadecambio" => strtoupper($campos[8]),
				"monto" => strtoupper($campos[9]),
				"descripcion" => strtoupper($campos[10]),
				"created_at" => $this->created_at,
				"habilitado" => 1);

			$result = $this->con->query_insert("pagos", $query);

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

			$query = "UPDATE pagos SET 
						nombre = '".strtoupper($campos[0])."', 
						email = '".strtoupper($campos[1])."', 
						tipopago = '".strtoupper($campos[2])."', 
						fechapago = '".strtoupper($campos[3])."', 
						nrofac = '".strtoupper($campos[4])."', 
						tipotrans = '".strtoupper($campos[5])."',
						banco = '".strtoupper($campos[6])."',
						nrotrans = '".strtoupper($campos[7])."',
						tasadecambio = '".strtoupper($campos[8])."',
						monto = '".strtoupper($campos[9])."',
						descripcion = '".strtoupper($campos[10])."',
						habilitado = '".$campos[11]."'
					WHERE id_pago = ".$id;

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
			$query = "SELECT * FROM pagos WHERE id_pago = ".$id;
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
			$query = "SELECT * FROM pagos";
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
			$query = "SELECT * FROM pagos";
			if (isset($datos[0]))
				$query .= " WHERE nombre LIKE '%".fn_filtro(substr($datos[0], 0, 16))."%' OR email LIKE '%".fn_filtro(substr($datos[0], 0, 16))."%'";
			if (isset($datos[1]))
				$query .= sprintf(" ORDER BY %s %s", fn_filtro($datos[1]), fn_filtro($datos[2]));
			else
				$query .= " ORDER BY id_pago DESC";

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
			$query = "DELETE FROM pagos WHERE id_pago = ".$id;
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