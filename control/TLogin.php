<?php
session_start();
require_once("../negocio/Usuario.php");
if(isset($_POST["usuario"]) && $_POST["usuario"]!="")
{ $nombre_usu=$_POST["usuario"];}
if(isset($_POST["clave"]) && $_POST["clave"]!="")
{ $pass=$_POST["clave"];}


if(isset($_POST["OK"]) && $_POST["OK"]=="Ingresar")
{ //Trigger Busqueda
  $objUsuario= new Usuario();//Instancia
  $objUsuario->setNombre_usu($nombre_usu);//a memoria
  $objUsuario->setPass($pass);
  $vector=$objUsuario->login();
  while($datos=mysql_fetch_row($vector))
   {
      $per=$datos[1]." ".$datos[2]; 
    }
    $_SESSION["info-usuario"]=$per;
  if($vector!="") header("Location:../vision/Inicio.php");
  else
  { echo "<script language='javascript'>alert('ERROR: DATA COULD NOT BE SAVED');window.location='../vision/'</script>";
  }
  #return $vector;
}


?>