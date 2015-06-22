<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function sql($title)
{
	$title= mysql_real_escape_string($title); 
	return $title; 	 
}
function escapeSolrValue($string)
    {
        $match = array('\\', '+', '-', '&', '|', '!', '(', ')', '{', '}', '[', ']', '^', '~', '*', '?', ':', '"', ';');
        $replace = array('\\\\', '\\+', '\\-', '\\&', '\\|', '\\!', '\\(', '\\)', '\\{', '\\}', '\\[', '\\]', '\\^', '\\~', '\\*', '\\?', '\\:', '\\"', '\\;');
        $string = str_replace($match, $replace, $string);
        return $string;
    }

 
  


class Xdb
	{
	
				var $db_HOST = "";
				var $db_USER = "";
				var $db_PASS = "";
				var $dbase   = "";
				var $CONST_ERRO = "hata ";
				var $dbc ;

   
				
    //function __construct()
    //{
        //date_default_timezone_set('GMT0');
    //}
				
 function CI_xdb()
   {
		$this->ci =&get_instance();
		$this->dbc = $this->ci->db->conn_id;
		
   }

/*  function connect_db($db_HOST, $db_USER, $db_PASS, $dbase)
   {
	 $this->db_HOST = $db_HOST;
     $this->db_USER = $db_USER;
     $this->db_PASS = $db_PASS;
     $this->dbase = $dbase;
     $this->dbc = mysql_connect($this->db_HOST,$this->db_USER,$this->db_PASS);
     $m = mysql_select_db($this->dbase,$this->dbc);
    return($dbc);
   }
*/
  function close_db()
   {
    mysql_close($this->dbc);
   }

  function query_db($sql)
   {
   	ini_set("display_errors",0);
	//executa query no dbase
//if (strpos($sql, "INTO")>0)   echo "<b>" . $sql . "</b><br>\n";
$c = mysql_query($sql,$this->dbc);
//echo $sql;
if (mysql_errno()) {
  $error = "MySQL error ".mysql_errno().": ".mysql_error()."\n<br>When executing:<br>\n\n<br>";
  //echo $error ;
 // echo $sql;
 } 
     return $c;
   }

  function reg_db($table)
   {
    $tmp="select * from $table";
    $sts = mysql_query($tmp,$this->dbc) or print mysql_error($CONST_ERRO);
    $num = mysql_num_rows($sts);
    return($num);
   }

  function id_db()
   {
     return mysql_insert_id($this->dbc);
   }

  function affecte_db()
   {
    $tmp = mysql_affected_rows();
    return($tmp);
   }

  function names_db()
   {
     $tmp = mysql_num_rows($this->dbc);
     return($tmp);
   }

  function drop_db($dbase)
   {
    return mysql_drop_db($dbase,$this->dbc);
   }

  function query_array($sql)
   {
   		error_reporting(0);
   	   	ini_set("display_errors",0);
	
//echo "<b>" . $sql . "</b><br>";
     $e=$this->query_db($sql);
	 $l = array();
	while  ( $r1 = mysql_fetch_assoc( $e )) array_push($l, $r1);
	return $l;
  }
  
    function query_arrays($sql)
	{
		error_reporting(0);
	   	ini_set("display_errors",0);

		//echo "<b>" . $sql . "</b><br>";
		$e=$this->query_db($sql);
		$l = array();
		while  ( $r1 = mysql_fetch_assoc( $e )) array_push($l, $r1);
		return $l;
	}

  function num_rows_db($query)
   {
    $tmp = mysql_num_rows($query);
    return($tmp);
   }
   
   function update($table="",$set = NULL, $where = NULL,$dev=0)
   {
   		if ($table=="") return false;
   		if ($set==NULL) return false;
   		if ($where==NULL) return false;
		
		$setx="";
		foreach($set as $key => $value)
		{
			$setx.="`".$key."`='".sql($value)."',";
		}
		$setx = substr($setx,0,-1);
		
		$wherex="";
		foreach($where as $key => $value)
		{
			$wherex.="`".$key."`='".sql($value)."' AND ";
		}
		$wherex = substr($wherex,0,-5);
		
		$sql = "UPDATE ".$table." SET ".$setx." WHERE ".$wherex;
		if ($dev==1) echo $sql;
		$c = mysql_query($sql,$this->dbc);
		if (mysql_errno()) 
		{
			$error = "MySQL error ".mysql_errno().": ".mysql_error()."\n<br>When executing:<br>\n\n<br>";
		} 
		return $c;
   }
   function insert($table="",$set = NULL,$dev=0,$dup="")
   {
   		if ($table=="") return false;
   		if ($set==NULL) return false;
		
		$setx="";
		foreach($set as $key => $value)
		{
			$setx.="`".$key."`='".sql($value)."',";
		}
		$setx = substr($setx,0,-1);
		if ($dup!="") $duplicate = " ON DUPLICATE KEY UPDATE ".$dup."=".$dup."+1";
		
		$sql = "INSERT ".$table." SET ".$setx.$duplicate;
		if ($dev==1) echo $sql;
		$c = mysql_query($sql,$this->dbc);
		if (mysql_errno()) 
		{
			$error = "MySQL error ".mysql_errno().": ".mysql_error()."\n<br>When executing:<br>\n\n<br>";
		} 
		return $c;
   }

   
};

 

 
?>