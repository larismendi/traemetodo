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
}
?>