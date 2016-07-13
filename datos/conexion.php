<?php
class Conexion
{  private $usuario="root";
   private $clave="";
   private $host="127.0.0.1";
   private $bdatos="bdcreditos";
   private $conex="";
   
   public function __construct(){}
   
   public function abrirConexion()
   { $this->conex=@mysql_connect($this->host,$this->usuario,$this->clave) or die ("Problema de conexion con URL");
     mysql_select_db($this->bdatos,$this->conex) or die ("Problema de Ubicacion de la BD...");
   }
   
   public function ejecutarTransaccion($sql)
   { $this->abrirConexion();
     $resul=mysql_query($sql) or die("ERROR :$sql<br>".$sql.mysql_error());
     return $resul;   
   }
   
   public function ejecutarConsulta($sql)
   {  $this->abrirConexion();
      $vector=mysql_query($sql);
	  return $vector;
   }
}

?>