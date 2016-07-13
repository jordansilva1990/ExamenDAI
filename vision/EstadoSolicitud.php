<!DOCTYPE html>
<html>
    <?php
		include("../Datos/Conexion.php");
    ?>
	<body>
		
		<!--Trabajen Aqui!!--> 
            
        <?php
			echo "<div id='page-wrapper'>";
			echo "<div class='container-fluid' >";
			echo "<div id='subviewPlaceHolder_id'>";
			echo "<h2 class='page-header'>Categorias en Sistema</h2>";
			echo "<div class='col-lg-6'>";
			echo "<ol class='breadcrumb'><li><i class='fa fa-dashboard'></i>  <a href='index.html'>Dashboard					                      </a>
                </li>
                <li class='active'>
                    <i class='fa fa-calculator'></i> Categorias
			    </li>
            </ol>";
				
				
			$objConex= new Conexion();
 	 		$objConex->abrirConexion();
	 		$sql="select pos.rut_post , pos.nombre, sol.estado, sol.id_solicitud from postulante pos join solicitud sol 					using(rut_post) order by sol.fecha;";			
	 		$cat=mysql_query($sql) or die ("Problema en conexion  a Tabla Solicitud");
			echo "<html><center>";
			echo "<div class='table-responsive'>";
			echo "<table class='table table-hover table-striped'>";
			echo	"<thead>";
            echo           "<tr>";
            echo                "<th>Rut</th>";
            echo                "<th>Nombre</th>";
			echo                "<th>Estado</th>";
			echo                "<th>      </th>";
            echo            "</tr>";
            echo        "</thead>";
            echo        "<tbody>";
            while($matrix=mysql_fetch_row($cat))
    		{ echo "<tr>";
   			  echo "<td>".$matrix[0]."</td>";
			  echo "<td>".$matrix[1]."</td>";
			  echo "<td>".$matrix[2]."</td>";				
			  echo "</tr>";
  			}                       
            echo       "</tbody>";
            echo    "</table>";
            echo "</div>";
			echo "</html>";
		?>
                
       
  		<!--Trabajen Aqui!!-->
    </body>
</html>