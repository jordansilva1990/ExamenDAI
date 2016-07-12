<?php
require_once("../negocio/Estado.php");
if(isset($_POST["id_estado"]) && $_POST["id_estado"]!="")
{ $id_estado=$_POST["id_estado"];}
if(isset($_POST["nombre_estado"]) && $_POST["nombre_estado"]!="")
{ $nombre_estado=$_POST["nombre_estado"];}

if(isset($_POST["OK"]) && $_POST["OK"]=="Insertar")
{ //Trigger insercion
  $objEstado= new Estado($id_estado, $nombre_estado);//Instancia
  $objEstado->Estado($id_estado, $nombre_estado);
  $resul=$objEstado->insertarEstado();
  if($resul!="") header("Location:../Vision/View_Categoria.php");
  else
  //COLOCAR LOCALIZACION
  { echo "<script language='javascript'>alert('ERROR: DATA COULD NOT BE SAVED');window.location='../vision/'</script>";
  }

}
if(isset($_POST["OK1"]) && $_POST["OK1"]=="Modificar")
{ //Trigger Modificacion
  $objEstado= new Estado($id_estado, $nombre_estado);//Instancia
  $objEstado->Estado($id_estado, $nombre_estado);
  $resul=$objEstado->modificarEstado();
   if($resul!="") header("Location:../Vision/View_Categoria.php");
  else
  { echo "<script language='javascript'>alert('ERROR: DATA COULD NOT BE SAVED');window.location='../vision/'</script>";
  }
}
if(isset($_POST["OK2"]) && $_POST["OK2"]=="Eliminar")
{ //Trigger Eliminacion
  $objEstado= new Estado($id_estado, $nombre_estado);//Instancia
  $objEstado->setId_estado($id_estado);//a memoria
  $resul=$objEstado->eliminarEstado($id_estado);
   if($resul!="") header("Location:../Vision/View_Categoria.php");
  else
  { echo "<script language='javascript'>alert('ERROR: DATA COULD NOT BE SAVED');window.location='../vision/'</script>";
  }
}
if(isset($_POST["OK"]) && $_POST["OK"]=="Buscar")
{ //Trigger Busqueda
  $objEstado= new Estado($id_estado, $nombre_estado);//Instancia
  $objEstado->setId_estado($id_estado);//a memoria
  $vector=$objEstado->buscarEstado($id_edu);
  return $vector;
}
if(isset($_POST["OK"]) && $_POST["OK"]=="Listar")
{ //Trigger Listado
  $objEstado= new Estado($id_estado, $nombre_estado);//Instancia
  $matrix=$objEstado->listarEstado();
  return $matrix;
}

?>
