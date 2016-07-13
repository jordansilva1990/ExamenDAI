<!DOCTYPE html>
<html lang="en">
<head>
  <?php
  include('../datos/Conexion.php');
  ?>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Banco</title>
</head>
<body>
  <form action='../Control/TUsuario.php' method='post'> 
                <div class="col-lg-6">
                <h3>Registro de Postulante:</h3>
                <div class="table-responsive">
                    <table class="table table-hover table-striped">                        
                        <tbody>
                            <tr>
                                <td>Rut</td>
                                <td><input type=text class="form-control" name=rut_pos></td></td                          
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
                                <td><input type=submit  class="btn btn-default" name=OK value='Insertar'></td>
                                
                                
                            </tr>
                            
                        </tbody>
                    </table>
                </div>
            </div>
                
                
                
                </form>

</body>