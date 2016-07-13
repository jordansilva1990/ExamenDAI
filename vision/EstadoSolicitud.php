<!DOCTYPE html>
<html>
    <?php
		include("../Datos/Conexion.php");
		include("../Vision/Inicio.php");
    ?>
	<body>
		
		<h1>Acceso Administrador de Solicitudes</h1>
            
        <?php
			#include("../datos/Conexion.php");
			$objConex= new Conexion();
			$objConex->abrirConexion();
			$sql="SELECT postulante.rut_post, postulante.nombre, solicitud.estado FROM postulante, solicitud where solicitud.rut_post=postulante.rut_post;";
			$cata=mysql_query($sql) or die ("Problema en conexion...Verifique");
			echo "<html>";
			echo "<form action='../Control/TSolicitud.php' method='post'>";
			echo "<table class='table table-hover table-striped' type='text/css' href='../Vision/maqueta.css'>";
			echo "<tr>";
			echo "<th>RUT</th><th>NOMBRE</th><th>ESTADO</th><th>ACCION</th></tr>";
			//Llenado de tabla con datos de clientes
			while($matrix=mysql_fetch_row($cata))
			{ echo "<tr>";
  				echo "<td>".$matrix[0]."</td>";
  				echo "<td>".$matrix[1]."</td>";
  				echo "<td>".$matrix[2]."</td>";
  				//Botones de Accion
  				echo "<td><input class='btn btn-default' type=submit name=OK value='Ver'><input class='btn btn-default' type=submit name=OK1 value='Modificar'><input class='btn btn-default' type=submit name=OK2 value='Eliminar'></td>";
  				echo "</tr>";
  				echo "<tr>";
			};

			echo "</table>";
			echo "</form></html>";
			?>
                
       
  		<!--Trabajen Aqui!!-->
    </body>
</html>