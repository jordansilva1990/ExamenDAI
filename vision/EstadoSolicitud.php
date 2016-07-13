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
			#$rut=htmlspecialchars($_GET["rut"]);
			$rut= $_GET["rut"];
			$sql="select estado from solicitud  where rut_post='".$rut."';";
			$cata=mysql_query($sql) or die ("Problema en conexion...Verifique");
			echo "<html>";
			echo "<form action='../Control/TSolicitud.php' method='post'>";
			echo "<table class='table table-hover table-striped' type='text/css' href='../Vision/maqueta.css'>";
			echo "<tr>";
			echo "<th>Postulaciones</th></tr>";
			//Llenado de tabla con datos de clientes
			if($matrix=mysql_fetch_row($cata))
			{ echo "<tr>";
  				echo "<td><h1>Estado de Solicitud: ".$matrix[0]."</h1></td>";
  				echo "</tr>";
  				echo "<tr>";
			};

			echo "</table>";
			echo "</form></html>";
			?>
                
       
  		<!--Trabajen Aqui!!-->
    </body>
</html>