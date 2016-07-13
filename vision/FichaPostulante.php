<!DOCTYPE html>
<html>
    <?php
		include("../datos/Conexion.php");
		include('Master.php');
    ?>
	<body>
		<div class="jumbotron">
            <h1>Ficha de Postulante</h1>
        </div> 
        <?php
			#include("../datos/Conexion.php");
			$objConex= new Conexion();
			$objConex->abrirConexion();
			#$rut=htmlspecialchars($_GET["rut"]);
			$rut= $_GET["rut"];
			$sql="select * from postulante where rut_post='".$rut."';";
			$cata=mysql_query($sql) or die ("Problema en conexion...Verifique");
			echo "<html>";			
			echo "<table class='table table-hover table-striped' type='text/css' href='../Vision/maqueta.css'>";
			echo "<tr>";
			echo "<th>Ficha Postulante</th></tr>";
			//Llenado de tabla con datos de clientes
			if($matrix=mysql_fetch_row($cata))
			{ echo "<tr>";
   			  echo "	<td>Rut: ".$matrix[0]."</td>";
			  echo "	<td>Direccion: ".$matrix[8]."</td>";				  		 
			  echo "</tr>";
			  echo "<tr>";
   			  echo "	<td>Nombre: ".$matrix[1]."</td>";
			  echo "	<td>Sueldo: ".$matrix[9]."</td>";				 
			  echo "</tr>";
			  echo "<tr>";
   			  echo "	<td>Apellido Paterno: ".$matrix[2]."</td>";
			  echo "	<td>Enfermedad Cronica: ".$matrix[10]."</td>";				 
			  echo "</tr>";
			  echo "<tr>";
   			  echo "	<td>Apellido Materno: ".$matrix[3]."</td>";
			  echo "	<td>Estado Civil: ".$matrix[11]."</td>";				 
			  echo "</tr>";
			  echo "<tr>";
   			  echo "	<td>Fecha Nacimiento: ".$matrix[4]."</td>";
			  echo "	<td>Comuna: ".$matrix[12]."</td>";				 
			  echo "</tr>";
			  echo "<tr>";
   			  echo "	<td>Sexo: ".$matrix[5]."</td>";
			  echo "	<td>Educacion: ".$matrix[13]."</td>";				 
			  echo "</tr>";
			  echo "<tr>";
   			  echo "	<td>Hijos: ".$matrix[6]."</td>";
			  echo "	<td>Renta: ".$matrix[14]."</td>";				 
			  echo "</tr>";
			  echo "<tr>";
   			  echo "	<td>Telefono: ".$matrix[7]."</td>";			 
			  echo "</tr>";
			  echo "<tr>";
   			  echo "	<td></td>";	
			  echo "	<td></td>";		 
			  echo "</tr>";
			};

			echo "</table>";
			echo "</html>";
			?>
                
       
  		<!--Trabajen Aqui!!-->
    </body>
</html>