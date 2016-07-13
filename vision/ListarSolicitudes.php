<!DOCTYPE html>
<html>
	<body>
		<!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Ingreso de Categorias
                </h1>                
               <form action='../Control/GUIBusqueda.php' method='post'> 
                <div class="col-lg-6">
                <h3>Busqueda de Solicitudes por Rut:</h3>
                <div class="table-responsive">
                    <table class="table table-hover table-striped">                        
                        <tbody>
                            <tr>
                                <td>Rut</td>
                                <td><input type=text class="form-control" name=rut_pos></td>                              
                            </tr>                            
                            <tr>
                                <td></td>
                                <td><input type=submit  class="btn btn-default" name=OK value='Buscar'></td>
                                 <td></td>
                                  <td></td>
                                
                            </tr>
                            <tr>
                            </tr>
                            
                        </tbody>
                    </table>
                </div>
            </div>
                
                
                
                </form>
                
            </div>
        </div>
    </body>
</html>
<?php
  include("../Datos/Conexion.php");
  $objConex= new Conexion();
  $objConex->abrirConexion();
  $sql="SELECT * FROM postulante";
  $pac=mysql_query($sql) or die ("Problema en conexion  a Tabla Paciente");
  echo "<html><center>";
  echo "<form action='../Control/GUIBusqueda.php' method='post'>";
  echo " <table class='table table-hover table-striped'> ";
  while($matrix=mysql_fetch_row($pac))
  { echo "
			<tbody>
                       <tr>
                        	<td>Rut</td>                            
							<td>".$matrix[0]."</td>
							<td>Telefono</td>                            
							<td>".$matrix[7]."</td>                              
                       </tr>
					   <tr>
                        	<td>Nombre</td>                            
							<td>".$matrix[1]."</td>
							<td>Direccion</td>                            
							<td>".$matrix[8]."</td>                              
                       </tr> 
					   <tr>
                        	<td>Apellido Paterno</td>                            
							<td>".$matrix[2]."</td>
							<td>Sueldo Liquido</td>                            
							<td>".$matrix[9]."</td>                              
                       </tr> 
					   <tr>
                        	<td>Apellido Materno</td>                            
							<td>".$matrix[3]."</td>
							<td>Enfermedad Cronica</td>                            
							<td>".$matrix[10]."</td>                              
                       </tr>
					   <tr>
                        	<td>Fecha Nacimiento</td>                            
							<td>".$matrix[4]."</td>
							<td>Estado Civil</td>                            
							<td>".$matrix[11]."</td>                              
                       </tr> 
					   <tr>
                        	<td>Sexo</td>                            
							<td>".$matrix[5]."</td>
							<td>Comuna</td>                            
							<td>".$matrix[12]."</td>                              
                       </tr> 
					   <tr>
                        	<td>Hijos</td>                            
							<td>".$matrix[6]."</td>
							<td>Educacion</td>                            
							<td>".$matrix[13]."</td>                              
                       </tr>                              
                       <tr>
                            <td></td>
                            <td><input type=submit  class="btn btn-default" name=OK value='Volver'></td>
                            <td></td>
                            <td></td>
                                
                      </tr>
			</tbody>"
	
	
	echo "</tr>";
  }

echo "</table>";
echo "</form></center></html>";

?>