<!DOCTYPE html>
<html>
    <?php
		include("../datos/Conexion.php");
		include('Master.php');
    ?>
	<body>
		<div class="jumbotron">
            <h1>Acceso Administrador de Solicitudes</h1>
        </div> 
        <?php
			#include("../datos/Conexion.php");
			$objConex= new Conexion();
			$objConex->abrirConexion();
			$rut=htmlspecialchars($_GET["rut"]);
			
			$sql="select pos.rut_post , pos.nombre, sol.estado, sol.id_solicitud from postulante pos join solicitud sol 					using(rut_post) order by sol.fecha where rut_post='".$rut."';";
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