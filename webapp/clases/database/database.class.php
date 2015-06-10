<?php
/*
**	@desc:		PHP ajax admin using jQuery
**	@autor:		Luis Felipe Arismendi
**	@email:		lipe88rey@hotmail.com
**	@date:		5 Mayo 2010
**	@licencia:	Libre!, Pero voy a estar contento si mi nombre que figura en los créditos
*/
ob_start();

defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);

class database{
	private $error = "";
	private $errno = 0;
	public  $affected_rows = 0;
	private $link_id = 0;
	private $query_id = 0;
	public  $url = "";
	private $server = "";
	private $user = "";
	private $pass = "";
	private $database = "";
	private $tablogin = "";
	public  $email = "";
	
	public function __construct()
	{
		$xml            = simplexml_load_file(dirname(__file__).DS."config.xml");
		$nev            = (string) $xml->nev;
		$this->url      = (string) $xml->$nev->url;
		$this->server   = (string) $xml->$nev->server;
		$this->user     = (string) $xml->$nev->user;
		$this->pass     = (string) $xml->$nev->pass;
		$this->database = (string) $xml->$nev->database;
		$this->tablogin = "usuarios";
		$this->email    = (string) $xml->$nev->email;
	}

	public function connect($new_link=false) 
	{
		$this->link_id=mysql_connect($this->server,$this->user,$this->pass,$new_link);
	
		if (!$this->link_id){
		  $this->oops("Could not connect to server: <b>$this->server</b>.");

		}else{
			if(!mysql_select_db($this->database, $this->link_id)){
				$this->oops("Could not open database: <b>$this->database</b>.");
			}else{
				return true;
			}
		}
	}
	
	public function get_conn(){
		return $this->con;
	}
	
	public function get_server(){
		return $this->server;
	}
	
	public function get_user(){
		return $this->user;
	}
	
	public function get_pass(){
		return $this->pass;
	}
	
	public function get_database(){
		return $this->database;
	}
	
	public function get_tablogin(){
		return $this->tablogin;
	}
	
	public function close()
	{
		if(!mysql_close($this->link_id)){
		  $this->oops("Connection close failed.");
		}
	}
	
	public function escape($string)
	{
		if(get_magic_quotes_runtime()) $string = stripslashes($string);
		return mysql_real_escape_string($string);
	}
	
	public function query($sql)
	{
		$this->query_id = mysql_query($sql, $this->link_id);
		
		if (!$this->query_id){
		  $this->oops("<b>MySQL Query fail:</b> $sql");
		  return false;
		}	  

		$this->affected_rows = mysql_affected_rows($this->link_id);	  
		return $this->query_id;
	}
	
	public function fetch_array($query_id=-1)
	{	  
		if ($query_id!=-1) {
			$this->query_id=$query_id;
		}  
		if (isset($this->query_id)) {
			$record = mysql_fetch_assoc($this->query_id);
		}else{
			$this->oops("Invalid query_id: <b>$this->query_id</b>. Records could not be fetched.");
		}  
		return $record;
	}
	
	public function fetch_arrays($sql)
	{	  
		$this->query_id = mysql_query($sql, $this->link_id);
		
		if (!$this->query_id){
		  $this->oops("<b>MySQL Query fail:</b> $sql");
		  return false;
		}
		if (isset($this->query_id)) {
			$record = mysql_fetch_assoc($this->query_id);
		}else{
			$this->oops("Invalid query_id: <b>$this->query_id</b>. Records could not be fetched.");
			$record = false;
		}  

		return $record;
	}
	
	public function num_rows($sql)
	{
		$this->query_id = mysql_query($sql, $this->link_id);
		
		if (!$this->query_id){
		  $this->oops("<b>MySQL Query fail:</b> $sql");
		  return false;
		}	  
		$this->num_rows = mysql_num_rows($this->query_id);	  
		return $this->num_rows;	
	}
	  
	public function fetch_all_array($sql)
	{
		$query_id = $this->query($sql);
		$out = array();
		
		while ($row = $this->fetch_array($query_id)){
		  $out[] = $row;
		}
		
		$this->free_result($query_id);
		
		return $out;
	}
	
	public function free_result($query_id=-1)
	{
		if ($query_id!=-1) 
		{
		  $this->query_id=$query_id;
		}
		if($this->query_id!=0 && !mysql_free_result($this->query_id))
		{
		  $this->oops("Result ID: <b>$this->query_id</b> could not be freed.");
		}
	}
	
	public function query_first($query_string)
	{
		$query_id = $this->query($query_string);
		$out = $this->fetch_array($query_id);
		$this->free_result($query_id);
		return $out;
	}
		
	public function query_update($table, $data, $where='1') 
	{
		$q="UPDATE `".$this->pre.$table."` SET ";
		
		foreach($data as $key=>$val) 
		{
		  if(strtolower($val)=='null') $q.= "`$key` = NULL, ";
		  elseif(strtolower($val)=='now()') $q.= "`$key` = NOW(), ";
		  else $q.= "`$key`='".$this->escape($val)."', ";
		}
		
		$q = rtrim($q, ', ') . ' WHERE '.$where.';';
		
		return $this->query($q);
	}
	
	public function query_insert($table, $data)
	{
		$q="INSERT INTO `".$this->pre.$table."` ";
		$v=''; $n='';
	  
		foreach($data as $key=>$val)
		{
		  $n.="`$key`, ";
		  if(strtolower($val)=='null') $v.="NULL, ";
		  elseif(strtolower($val)=='now()') $v.="NOW(), ";
		  else $v.= "'".$this->escape($val)."', ";
		}
		
		$q .= "(". rtrim($n, ', ') .") VALUES (". rtrim($v, ', ') .");";
		
		if($this->query($q))
		{
		  return mysql_insert_id();
		}
		else
		  return false;  
	}
  
	public function oops($msg='')
	{
		if($this->link_id>0)
		{
		  $this->error=mysql_error($this->link_id);
		  $this->errno=mysql_errno($this->link_id);
		}
		else
		{
		  $this->error=mysql_error();
		  $this->errno=mysql_errno();
		}
		?>
		<table align="center" border="1" cellspacing="0" style="background:white;color:black;width:80%;">
		<tr><th colspan=2>Database Error</th></tr>
		<tr><td align="right" valign="top">Message:</td><td><?php echo $msg; ?></td></tr>
		<?php if(strlen($this->error)>0) echo '<tr><td align="right" valign="top" nowrap>MySQL Error:</td><td>'.$this->error.'</td></tr>'; ?>
		<tr><td align="right">Date:</td><td><?php echo date("l, F j, Y \a\\t g:i:s A"); ?></td></tr>
		<tr><td align="right">Script:</td><td><a href="<?php echo @$_SERVER['../conexion/REQUEST_URI']; ?>"><?php echo @$_SERVER['REQUEST_URI']; ?></a></td></tr>
		<?php if(strlen(@$_SERVER['HTTP_REFERER'])>0) echo '<tr><td align="right">Referer:</td><td><a href="'.@$_SERVER['HTTP_REFERER'].'">'.@$_SERVER['HTTP_REFERER'].'</a></td></tr>'; ?>
		</table>
	  <?php
	}
}
?>