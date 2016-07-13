<?php
require_once("../negocio/Usuario.php");
if(isset($_POST["rut_usu"]) && $_POST["rut_usu"]!="")
{ $rut_usu=$_POST["rut_usu"];}
if(isset($_POST["usuario"]) && $_POST["usuario"]!="")
{ $nombre_usu=$_POST["usuario"];}
if(isset($_POST["apel_pat"]) && $_POST["apel_pat"]!="")
{ $apel_pat=$_POST["apel_pat"];}
if(isset($_POST["apel_mat"]) && $_POST["apel_mat"]!="")
{ $apel_mat=$_POST["apel_mat"];}
if(isset($_POST["clave"]) && $_POST["clave"]!="")
{ $pass=$_POST["clave"];}

if(isset($_POST["OK"]) && $_POST["OK"]=="Insertar")
{ //Trigger insercion
  $objUsuario= new Usuario($rut_usu, $nombre_usu,$apel_pat, $apel_mat,$pass);//Instancia
  $objUsuario->Usuario($rut_usu, $nombre_usu,$apel_pat, $apel_pat,$pass);
  $resul=$objUsuario->insertarUsuario();
  if($resul!="") header("Location:../Vision/View_Categoria.php");
  else
  //COLOCAR LOCALIZACION
  { echo "<script language='javascript'>alert('ERROR: DATA COULD NOT BE SAVED');window.location='../vision/'</script>";
  }

}
if(isset($_POST["OK1"]) && $_POST["OK1"]=="Modificar")
{ //Trigger Modificacion
  $objUsuario= new Usuario($rut_usu, $nombre_usu,$apel_pat, $apel_mat,$pass);//Instancia
  $objUsuario->Usuario($rut_usu, $nombre_usu,$apel_pat, $apel_pat,$pass);
  $resul=$objUsuario->modificarUsuario();
   if($resul!="") header("Location:../Vision/View_Categoria.php");
  else
  { echo "<script language='javascript'>alert('ERROR: DATA COULD NOT BE SAVED');window.location='../vision/'</script>";
  }
}
if(isset($_POST["OK2"]) && $_POST["OK2"]=="Eliminar")
{ //Trigger Eliminacion
  $objUsuario= new Usuario($rut_usu, $nombre_usu,$apel_pat, $apel_mat,$pass);//Instancia
  $objUsuario->setRut_usu($rut_usu);//a memoria
  $resul=$objUsuario->eliminarUsuario($rut_usu);
   if($resul!="") header("Location:../Vision/View_Categoria.php");
  else
  { echo "<script language='javascript'>alert('ERROR: DATA COULD NOT BE SAVED');window.location='../vision/'</script>";
  }
}
if(isset($_POST["OK"]) && $_POST["OK"]=="Buscar")
{ //Trigger Busqueda
  $objUsuario= new Usuario($rut_usu, $nombre_usu,$fecha, $rut_post);//Instancia
  $objUsuario->setRut_usu($rut_usu);//a memoria
  $vector=$objUsuario->buscarUsuario($rut_usu);
  return $vector;
}
if(isset($_POST["OK"]) && $_POST["OK"]=="Listar")
{ //Trigger Listado
  $objUsuario= new Usuario($rut_usu, $nombre_usu,$fecha, $rut_post);//Instancia
  $matrix=$objUsuario->listarUsuario();
  return $matrix;
}

?>
