
<!DOCTYPE html>
<html lang="en">
    <?php 
    include('Master.php');
    ?>
	<body>
		<!-- Page Heading -->
        <div class="row">
            <html><center>
            <div class="col-lg-12">
                <div class="jumbotron">
                    <h1>Busqueda de Solicitudes</h1>
                </div>               
               <form action='../control/TSolicitud.php' method='post'> 
                <div class="col-lg-6">
                <h3>Busqueda de Solicitudes por Rut:</h3>
                <div class="table-responsive">
                    <table class="table table-hover table-striped">                        
                        <tbody>
                            <tr>
                                <td>Rut</td>
                                <td><input type=text class="form-control" name=rut_post></td>     
                                <td><input type=submit  class="btn btn-default" name=OK value='Ver'></td>                         
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
