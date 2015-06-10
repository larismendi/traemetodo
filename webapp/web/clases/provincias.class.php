<?php
/*
**	@desc:		PHP ajax admin using jQuery
**	@autor:		Luis Felipe Arismendi
**	@email:		lipe88rey@hotmail.com
**	@date:		5 Mayo 2010
**	@licencia:	Libre!, Pero voy a estar contento si mi nombre que figura en los créditos
*/
class Provincias{
 	var $con;
	var $output;
 	function __construct(){
		$this->output = false;
 		$this->con=new database;
 	}
	
	function provincias($idpais){
		if($this->con->connect()==true){
			$query = "SELECT * FROM provincias WHERE habilitado='1' and pai_idpais='".$idpais."'";
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
}
?>