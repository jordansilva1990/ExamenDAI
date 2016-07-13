<!DOCTYPE html>
<meta charset="utf-8" />
<html>
<?php
include('Master.php');
include('../datos/Conexion.php');
?>
<body>
    <div class="row">
        <div class="col-lg-12">
            <form action='../Control/TCategoria.php' method='post'> 
                <div class="col-lg-6">
                <h3>Registro de Postulante:</h3>
                <div class="table-responsive">
                    <table class="table table-hover table-striped">                        
                        <tbody>
                            <tr>
                                <td>Rut</td>
                                <td><input type=text class="form-control" name=rut_pos></td></td>                         
                            </tr>
                            <tr>
                                <td>Nombre</td>
                                <td><input type=text class="form-control" name=nombre></td></td>                                
                            </tr>
                            <tr>
                                <td>Apellido Paterno</td>
                                <td><input type=text class="form-control" name=apel_pat></td></td>                                
                            </tr>
                            <tr>
                                <td>Apellido Materno</td>
                                <td><input type=text class="form-control" name=apel_mat></td></td>                                
                            </tr>
                            <tr>
                                <td>Contraseña</td>
                                <td><input type=text class="form-control" name=pass></td></td>                                
                            </tr>
                            <tr>
                                <td>Repetir Contraseña</td>
                                <td><input type=text class="form-control" name=pass2></td></td>                                
                            </tr>
                            <tr>
                                <td></td>
                                <td><input type=submit  class="btn btn-default" name=OK value='Registrar'></td>
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
