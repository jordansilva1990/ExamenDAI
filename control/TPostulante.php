<?php
require_once("../negocio/Postulante.php");
if(isset($_POST["rut_post"]) && $_POST["rut_post"]!="")
{ $rut_post=$_POST["rut_post"];}
if(isset($_POST["nombre"]) && $_POST["nombre"]!="")
{ $nombre=$_POST["nombre"];}
if(isset($_POST["apel_pat"]) && $_POST["apel_pat"]!="")
{ $apel_pat=$_POST["apel_pat"];}
if(isset($_POST["apel_mat"]) && $_POST["apel_mat"]!="")
{ $apel_mat=$_POST["apel_mat"];}
if(isset($_POST["fecha_nac"]) && $_POST["fecha_nac"]!="")
{ $fecha_nac=$_POST["fecha_nac"];}
if(isset($_POST["sexo"]) && $_POST["sexo"]!="")
{ $sexo=$_POST["sexo"];}
if(isset($_POST["hijo"]) && $_POST["hijo"]!="")
{ $hijo=$_POST["hijo"];}
if(isset($_POST["telefono"]) && $_POST["telefono"]!="")
{ $telefono=$_POST["telefono"];}
if(isset($_POST["direccion"]) && $_POST["direccion"]!="")
{ $direccion=$_POST["direccion"];}
if(isset($_POST["sueldo_liquido"]) && $_POST["sueldo_liquido"]!="")
{ $sueldo_liquido=$_POST["sueldo_liquido"];}
if(isset($_POST["enfermedad_cronica"]) && $_POST["enfermedad_cronica"]!="")
{ $enfermedad_cronica=$_POST["enfermedad_cronica"];}
if(isset($_POST["id_estado"]) && $_POST["id_estado"]!="")
{ $id_estado=$_POST["id_estado"];}
if(isset($_POST["id_comuna"]) && $_POST["id_comuna"]!="")
{ $id_comuna=$_POST["id_comuna"];}
if(isset($_POST["id_edu"]) && $_POST["id_edu"]!="")
{ $id_edu=$_POST["id_edu"];}
if(isset($_POST["id_renta"]) && $_POST["id_renta"]!="")
{ $id_renta=$_POST["id_renta"];}


if(isset($_POST["OK"]) && $_POST["OK"]=="Insertar")
{ //Trigger insercion
  $objPostulante= new Postulante();//Instancia
  $objPostulante->Postulante($rut_post, $nombre,$apel_pat, $apel_mat,$fecha_nac,$sexo,$hijo,$telefono, $direccion, $sueldo_liquido, $enfermedad_cronica, $id_estado, $id_comuna, $id_edu, $id_renta);
  $resul=$objPostulante->insertarPostulante();
  if($resul!="") header("Location:../Vision/View_Categoria.php");
  else
  //COLOCAR LOCALIZACION
  { echo "<script language='javascript'>alert('ERROR: DATA COULD NOT BE SAVED');window.location='../vision/'</script>";
  }

}
if(isset($_POST["OK1"]) && $_POST["OK1"]=="Modificar")
{ //Trigger Modificacion
  $objPostulante= new Postulante();//Instancia
  $objPostulante->Postulante($rut_post, $nombre,$apel_pat, $apel_mat,$fecha_nac,$sexo,$hijo,$telefono, $direccion, $sueldo_liquido, $id_estado, $id_comuna, $id_edu, $id_renta);
  $resul=$objPostulante->modificarPostulante();
   if($resul!="") header("Location:../Vision/View_Categoria.php");
  else
  { echo "<script language='javascript'>alert('ERROR: DATA COULD NOT BE SAVED');window.location='../vision/'</script>";
  }
}
if(isset($_POST["OK2"]) && $_POST["OK2"]=="Eliminar")
{ //Trigger Eliminacion
  $objPostulante= new Postulante($rut_post, $nombre,$apel_pat, $apel_mat,$fecha_nac,$sexo,$hijo,$telefono, $direccion, $sueldo_liquido, $id_estado, $id_comuna, $id_edu, $id_renta);//Instancia
  $objPostulante->setRut_post($rut_post);//a memoria
  $resul=$objPostulante->eliminarPostulante($rut_post);
   if($resul!="") header("Location:../Vision/View_Categoria.php");
  else
  { echo "<script language='javascript'>alert('ERROR: DATA COULD NOT BE SAVED');window.location='../vision/'</script>";
  }
}
if(isset($_POST["OK"]) && $_POST["OK"]=="Buscar")
{ //Trigger Busqueda
  $objPostulante= new Postulante();//Instancia
  $objPostulante->setRut_post($rut_post);//a memoria
  $vector=$objPostulante->buscarPostulante($rut_post);
  return $vector;
}
if(isset($_POST["OK"]) && $_POST["OK"]=="Listar")
{ //Trigger Listado
  $objPostulante= new Postulante();//Instancia
  $matrix=$objPostulante->listarPostulante();
  return $matrix;
}

?>
