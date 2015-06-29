<?php
/**
 * Created by PhpStorm.
 * User: larismendi
 * Date: 28/06/2015
 * Time: 08:28 PM
 */

class Cajas{
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
                "alto" => strtoupper($campos[0]),
                "ancho" => strtoupper($campos[1]),
                "largo" => strtoupper($campos[2]),
                "peso" => strtoupper($campos[3]),
                "status" => 1,
                "date_add" => $this->created_at);
            $result = $this->con->query_insert("cajas", $query);
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