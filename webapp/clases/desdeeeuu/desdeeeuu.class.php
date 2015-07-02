<?php
/**
 * Created by PhpStorm.
 * User: larismendi
 * Date: 01/07/2015
 * Time: 07:40 PM
 */

class DesdeEeuu{

    var $con;

    var $output;

    function DesdeEeuu(){

        $this->output = false;
        $this->created_at = "NOW()";
        $this->con=new database;

    }

    function insertar($campos){

        if($this->con->connect()==true){

            $query = array(
                "nombre" => strtoupper($campos[0]),
                "email" => strtoupper($campos[1]),
                "telef" => strtoupper($campos[2]),
                "calle" => strtoupper($campos[3]),
                "ciudad" => strtoupper($campos[4]),
                "estado" => strtoupper($campos[5]),
                "codigo" => strtoupper($campos[6]),
                "pais" => strtoupper($campos[7]),
                "envio" => strtoupper($campos[8]),
                "cliente" => strtoupper($campos[9]),
                "pais_destino" => strtoupper($campos[10]),
                "ciudad_destino" => strtoupper($campos[11]),
                "cantidad_caja" => strtoupper($campos[12]),
                "total" => strtoupper($campos[13]),
                "valor" => strtoupper($campos[14]),
                "seguro" => strtoupper($campos[15]),
                "descripcion" => strtoupper($campos[16]),
                "date_add" => $this->created_at,
                "status" => 1);

            $result = $this->con->query_insert("desdeeeuu", $query);

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

            $query = "UPDATE desdeeeuu SET
						nombre = '".strtoupper($campos[0])."',
						email = '".strtoupper($campos[1])."',
						telef = '".strtoupper($campos[2])."',
						calle = '".strtoupper($campos[3])."',
						ciudad = '".strtoupper($campos[4])."',
						estado = '".strtoupper($campos[5])."',
						codigo = '".strtoupper($campos[6])."',
						pais = '".strtoupper($campos[7])."',
						envio = '".strtoupper($campos[8])."',
						cliente = '".strtoupper($campos[9])."',
						pais_destino = '".strtoupper($campos[10])."',
						ciudad_destino = '".strtoupper($campos[11])."',
						cantidad_caja = '".strtoupper($campos[12])."',
						total = '".strtoupper($campos[13])."',
						valor = '".strtoupper($campos[14])."',
						seguro = '".strtoupper($campos[15])."',
						descripcion = '".strtoupper($campos[16])."',
						status = '".$campos[17]."'
					WHERE id_desdeeeuu = ".$id;

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
            $query = "SELECT * FROM desdeeeuu WHERE id_desdeeeuu=".$id;
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
            $query = "SELECT * FROM desdeeeuu";
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
            $query = "SELECT * FROM desdeeeuu";
            if (isset($datos[0]))
                $query .= " WHERE nombre LIKE '%".fn_filtro(substr($datos[0], 0, 16))."%' OR email LIKE '%".fn_filtro(substr($datos[0], 0, 16))."%'";
            if (isset($datos[1]))
                $query .= sprintf(" ORDER BY %s %s", fn_filtro($datos[1]), fn_filtro($datos[2]));
            else
                $query .= " ORDER BY id_desdeeeuu DESC";

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
            $query = "DELETE FROM desdeeeuu WHERE id_desdeeeuu=".$id;
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