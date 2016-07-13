<?php
    include("../vision/Inicio.php");
?>
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
