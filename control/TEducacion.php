<?php
require_once("../negocio/Educacion.php");
if(isset($_POST["id_edu"]) && $_POST["id_edu"]!="")
{ $id_edu=$_POST["id_edu"];}
if(isset($_POST["nombre_edu"]) && $_POST["nombre_edu"]!="")
{ $nombre_edu=$_POST["nombre_edu"];}

if(isset($_POST["OK"]) && $_POST["OK"]=="Insertar")
{ //Trigger insercion
  $objEducacion= new Educacion($id_edu, $nombre_edu);//Instancia
  $objEducacion->Educacion($id_edu, $nombre_edu);
  $resul=$objEducacion->insertarEducacion();
  if($resul!="") header("Location:../Vision/View_Categoria.php");
  else
  //COLOCAR LOCALIZACION
  { echo "<script language='javascript'>alert('ERROR: DATA COULD NOT BE SAVED');window.location='../vision/'</script>";
  }

}
if(isset($_POST["OK1"]) && $_POST["OK1"]=="Modificar")
{ //Trigger Modificacion
  $objEducacion= new Educacion($id_edu, $nombre_edu);//Instancia
  $objEducacion->Educacion($id_edu, $nombre_edu);
  $resul=$objEducacion->modificarEducacion();
   if($resul!="") header("Location:../Vision/View_Categoria.php");
  else
  { echo "<script language='javascript'>alert('ERROR: DATA COULD NOT BE SAVED');window.location='../vision/'</script>";
  }
}
if(isset($_POST["OK2"]) && $_POST["OK2"]=="Eliminar")
{ //Trigger Eliminacion
  $objEducacion= new Educacion($id_edu, $nombre_edu);//Instancia
  $objEducacion->setId_edu($id_edu);//a memoria
  $resul=$objEducacion->eliminarEducacion($id_edu);
   if($resul!="") header("Location:../Vision/View_Categoria.php");
  else
  { echo "<script language='javascript'>alert('ERROR: DATA COULD NOT BE SAVED');window.location='../vision/'</script>";
  }
}
if(isset($_POST["OK"]) && $_POST["OK"]=="Buscar")
{ //Trigger Busqueda
  $objEducacion= new Educacion($id_edu, $nombre_edu);//Instancia
  $objEducacion->setId_edu($id_edu);//a memoria
  $vector=$objEducacion->buscarEducacion($id_edu);
  return $vector;
}
if(isset($_POST["OK"]) && $_POST["OK"]=="Listar")
{ //Trigger Listado
  $objEducacion= new Educacion($id_edu, $nombre_edu);//Instancia
  $matrix=$objEducacion->listarEducacion();
  return $matrix;
}

?>
