<?php
require_once("../negocio/Solicitud.php");
if(isset($_POST["id_solicitud"]) && $_POST["id_solicitud"]!="")
{ $id_solicitud=$_POST["id_solicitud"];}
if(isset($_POST["estado"]) && $_POST["estado"]!="")
{ $estado=$_POST["estado"];}
if(isset($_POST["fecha"]) && $_POST["fecha"]!="")
{ $fecha=$_POST["fecha"];}
if(isset($_POST["rut_post"]) && $_POST["rut_post"]!="")
{ $rut_post=$_POST["rut_post"];}

if(isset($_POST["OK"]) && $_POST["OK"]=="Insertar")
{ //Trigger insercion
  $objRenta= new Renta($id_solicitud, $estado,$fecha, $rut_post);//Instancia
  $objRenta->Renta($id_solicitud, $estado,$fecha, $rut_post);
  $resul=$objRenta->insertarSolicitud();
  if($resul!="") header("Location:../Vision/View_Categoria.php");
  else
  //COLOCAR LOCALIZACION
  { echo "<script language='javascript'>alert('ERROR: DATA COULD NOT BE SAVED');window.location='../vision/'</script>";
  }

}
if(isset($_POST["OK1"]) && $_POST["OK1"]=="Modificar")
{ //Trigger Modificacion
  $objRenta= new Renta($id_solicitud, $estado,$fecha, $rut_post);//Instancia
  $objRenta->Renta($id_solicitud, $estado,$fecha, $rut_post);
  $resul=$objRenta->modificarRenta();
   if($resul!="") header("Location:../Vision/View_Categoria.php");
  else
  { echo "<script language='javascript'>alert('ERROR: DATA COULD NOT BE SAVED');window.location='../vision/'</script>";
  }
}
if(isset($_POST["OK2"]) && $_POST["OK2"]=="Eliminar")
{ //Trigger Eliminacion
  $objRenta= new Renta($id_solicitud, $estado,$fecha, $rut_post);//Instancia
  $objRenta->setId_renta($id_solicitud);//a memoria
  $resul=$objRenta->eliminarRenta($id_solicitud);
   if($resul!="") header("Location:../Vision/View_Categoria.php");
  else
  { echo "<script language='javascript'>alert('ERROR: DATA COULD NOT BE SAVED');window.location='../vision/'</script>";
  }
}
if(isset($_POST["OK"]) && $_POST["OK"]=="Buscar")
{ //Trigger Busqueda
  $objRenta= new Renta($id_solicitud, $estado,$fecha, $rut_post);//Instancia
  $objRenta->setId_renta($id_solicitud);//a memoria
  $vector=$objRenta->buscarRenta($id_solicitud);
  return $vector;
}
if(isset($_POST["OK"]) && $_POST["OK"]=="Listar")
{ //Trigger Listado
  $objRenta= new Renta($id_solicitud, $estado,$fecha, $rut_post);//Instancia
  $matrix=$objRenta->listarRenta();
  return $matrix;
}

?>
