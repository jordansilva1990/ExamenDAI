<?php
require_once("../negocio/Comuna.php");
if(isset($_POST["id_com"]) && $_POST["id_com"]!="")
{ $id_com=$_POST["id_com"];}
if(isset($_POST["nombre_com"]) && $_POST["nombre_com"]!="")
{ $nombre_com=$_POST["nombre_com"];}

if(isset($_POST["OK"]) && $_POST["OK"]=="Insertar")
{ //Trigger insercion
  $objComuna= new Comuna($id_com, $nombre_com);//Instancia
  $objComuna->Comuna($id_com, $nombre_comuna);
  $resul=$objCategoria->insertarComuna();
  if($resul!="") header("Location:../Vision/View_Categoria.php");
  else
  //COLOCAR LOCALIZACION
  { echo "<script language='javascript'>alert('ERROR: DATA COULD NOT BE SAVED');window.location='../vision/'</script>";
  }

}
if(isset($_POST["OK1"]) && $_POST["OK1"]=="Modificar")
{ //Trigger Modificacion
  $objComuna= new Comuna($id_com, $nombre_comuna);//Instancia
  $objComuna->Categoria($id_com, $nombre_comuna);
  $resul=$objComuna->modificarComuna();
   if($resul!="") header("Location:../Vision/View_Categoria.php");
  else
  { echo "<script language='javascript'>alert('ERROR: DATA COULD NOT BE SAVED');window.location='../vision/'</script>";
  }
}
if(isset($_POST["OK2"]) && $_POST["OK2"]=="Eliminar")
{ //Trigger Eliminacion
  $objComuna= new Comuna($id_com, $nombre_comuna);//Instancia
  $objComuna->setId_com($id_com);//a memoria
  $resul=$objComuna->eliminarComuna($id_com);
   if($resul!="") header("Location:../Vision/View_Categoria.php");
  else
  { echo "<script language='javascript'>alert('ERROR: DATA COULD NOT BE SAVED');window.location='../vision/'</script>";
  }
}
if(isset($_POST["OK"]) && $_POST["OK"]=="Buscar")
{ //Trigger Busqueda
  $objComuna= new Comuna($id_com, $nombre_comuna);//Instancia
  $objComuna->setId_com($id_com);//a memoria
  $vector=$objComuna->buscarComuna($id_com);
  return $vector;
}
if(isset($_POST["OK"]) && $_POST["OK"]=="Listar")
{ //Trigger Listado
  $objComuna= new Comuna($id_com, $nombre_comuna);//Instancia
  $matrix=$objComuna->listarComuna();
  return $matrix;
}

?>
