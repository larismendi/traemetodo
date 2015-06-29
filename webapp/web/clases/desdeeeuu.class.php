<?php
/**
 * Created by PhpStorm.
 * User: larismendi
 * Date: 28/06/2015
 * Time: 05:59 PM
 */

class DesdeEeuu{
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
                "telef" => strtoupper($campos[2]),
                "calle" => strtoupper($campos[3]),
                "ciudad" => strtoupper($campos[4]),
                "estado" => strtoupper($campos[5]),
                "codigo" => strtoupper($campos[6]),
                "pais" => strtoupper($campos[7]),
                "envio" => strtoupper($campos[8]),
                "cliente" => strtoupper($campos[9]),
                "codigo_registro" => strtoupper($campos[10]),
                "pais_destino" => strtoupper($campos[11]),
                "ciudad_destino" => strtoupper($campos[12]),
                "cantidad_caja" => strtoupper($campos[13]),
                "total" => strtoupper($campos[14]),
                "valor" => strtoupper($campos[15]),
                "seguro" => strtoupper($campos[16]),
                "descripcion" => strtoupper($campos[17]),
                "status" => 1,
                "date_add" => $this->created_at);
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
}
?>