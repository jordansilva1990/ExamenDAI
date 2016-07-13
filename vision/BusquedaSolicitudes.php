<!DOCTYPE html>
<html>
	<body>
		<!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Busqueda de Solicitudes
                </h1>                
               <form action='../control/TSolicitud.php' method='post'> 
                <div class="col-lg-6">
                <h3>Busqueda de Solicitudes por Rut:</h3>
                <div class="table-responsive">
                    <table class="table table-hover table-striped">                        
                        <tbody>
                            <tr>
                                <td>Rut</td>
                                <td><input type=text class="form-control" name=rut_pos></td>     
                                <td><input type=submit  class="btn btn-default" name=OK value='Buscar'></td>                         
                            </tr>                            
                        </tbody>
                    </table>
                </div>
                </br>
                <h3>Busqueda de Solicitudes por Fecha</h3>
                <table class="table table-hover table-striped">
                    <tbody>
                        <tr>
                            <td>Fecha</td>
                            <td>Desde: <input type=text class="form-control" size=1 name=dia>/<input type=text class="form-control" size=1 name=mes>/<input type=text class="form-control" size=5 name=year></td>
                            <td>Hasta: <input type=text class="form-control" size=1 name=dia>/<input type=text class="form-control" size=1 name=mes>/<input type=text class="form-control" size=5 name=year></td>
                            <td><input type=submit class="btn btn-default" name=OK value='Buscar'></td>
                        </tr>
                    </tbody>
                </table>
            </div>
                </form>
                
            </div>
        </div>
    </body>
</html>
<?php
include("../datos/Conexion.php");
$objConex= new Conexion();
$objConex->abrirConexion();
$sql="SELECT postulante.rut_post, postulante.nombre, solicitud.estado FROM postulante, solicitud where solicitud.rut_post=postulante.rut_post;";
$cata=mysql_query($sql) or die ("Problema en conexion...Verifique");
echo "<html>";
echo "<form action='../Control/TSolicitud.php' method='post'>";
echo "<table class='gridtable table-bordered' type='text/css' href='../Vision/maqueta.css'>";
echo "<tr>";
echo "<th>RUT</th><th>NOMBRE</th><th>ESTADO</th><th>ACCION</th></tr>";
//Llenado de tabla con datos de clientes
while($matrix=mysql_fetch_row($cata))
{ echo "<tr>";
  echo "<td bgcolor=#6699FF>".$matrix[0]."</td>";
  echo "<td bgcolor=#6699FF>".$matrix[1]."</td>";
  echo "<td bgcolor=#6699FF>".$matrix[2]."</td>";
  //Botones de Accion
  echo "<td><input type=submit name=OK value='Ver'><input type=submit name=OK1 value='Modificar'><input type=submit name=OK2 value='Eliminar'></td>";
  echo "</tr>";
  echo "<tr>";
};

echo "</table>";
echo "</form></html>";
?>