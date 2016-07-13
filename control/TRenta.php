<?php
require_once("../negocio/Renta.php");
if(isset($_POST["id_renta"]) && $_POST["id_renta"]!="")
{ $id_renta=$_POST["id_renta"];}
if(isset($_POST["nombre_renta"]) && $_POST["nombre_renta"]!="")
{ $nombre_renta=$_POST["nombre_renta"];}
if($_SESSION["info-usuario"]= null ){
  header("Location:../index.php");
}

if(isset($_POST["OK"]) && $_POST["OK"]=="Insertar")
{ //Trigger insercion
  $objRenta= new Renta($id_renta, $nombre_renta);//Instancia
  $objRenta->Renta($id_renta, $nombre_renta);
  $resul=$objRenta->insertarRenta();
  if($resul!="") header("Location:../Vision/View_Categoria.php");
  else
  //COLOCAR LOCALIZACION
  { echo "<script language='javascript'>alert('ERROR: DATA COULD NOT BE SAVED');window.location='../vision/'</script>";
  }

}
if(isset($_POST["OK1"]) && $_POST["OK1"]=="Modificar")
{ //Trigger Modificacion
  $objRenta= new Renta($id_renta, $nombre_renta);//Instancia
  $objRenta->Renta($id_renta, $nombre_renta);
  $resul=$objRenta->modificarRenta();
   if($resul!="") header("Location:../Vision/View_Categoria.php");
  else
  { echo "<script language='javascript'>alert('ERROR: DATA COULD NOT BE SAVED');window.location='../vision/'</script>";
  }
}
if(isset($_POST["OK2"]) && $_POST["OK2"]=="Eliminar")
{ //Trigger Eliminacion
  $objRenta= new Renta($id_renta, $nombre_renta);//Instancia
  $objRenta->setId_renta($id_renta);//a memoria
  $resul=$objRenta->eliminarRenta($id_renta);
   if($resul!="") header("Location:../Vision/View_Categoria.php");
  else
  { echo "<script language='javascript'>alert('ERROR: DATA COULD NOT BE SAVED');window.location='../vision/'</script>";
  }
}
if(isset($_POST["OK"]) && $_POST["OK"]=="Buscar")
{ //Trigger Busqueda
  $objRenta= new Renta($id_renta, $nombre_renta);//Instancia
  $objRenta->setId_renta($id_renta);//a memoria
  $vector=$objRenta->buscarRenta($id_renta);
  return $vector;
}
if(isset($_POST["OK"]) && $_POST["OK"]=="Listar")
{ //Trigger Listado
  $objRenta= new Renta($id_renta, $nombre_renta);//Instancia
  $matrix=$objRenta->listarRenta();
  return $matrix;
}

?>
