<!DOCTYPE html>
<html lang="en">
<head>
  <?php
    include('../datos/Conexion.php');
    include('Master.php');
  ?>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Banco</title>
</head>
<body>
  <form action='../Control/TPostulante.php' method='post'>
                <div class="jumbotron">
                    <h1>Ingreso de Solicitudes</h1>
                </div>
                <div class="col-lg-6">
                <div class="table-responsive">
                    <table class="table table-hover table-striped">
                        <tbody>
                            <tr>
                                <td>Rut</td>
                                <td><input type=text class="form-control" name=rut_post></td></td>
                                <td>Telefono</td>
                                <td><input type=text class="form-control" name=telefono></td></td>
                            </tr>
                            <tr>
                                <td>Nombre</td>
                                <td><input type=text class="form-control" name=nombre></td></td>                                <td>Email</td>
                                <td><input type=text class="form-control" name=mail></td></td>
                            </tr>
                            <tr>
                                <td>Apellido Paterno</td>
                                <td><input type=text class="form-control" name=apel_pat></td></td>                                <td>Direccion</td>
                                <td><input type=text class="form-control" name=direccion></td></td>
                            </tr>
                            <tr>
                                <td>Apellido Materno</td>
                                <td><input type=text class="form-control" name=apel_mat></td></td>                                <td>Comuna</td>
                                <td><input type=text class="form-control" name=id_comuna></td></td>
                            </tr>
                            <tr>
                                <td>Fecha Nacimiento</td>
                                <td><input type=date class="form-control" name=fecha_nac></td></td>                                
                                <td>Educacion</td>
                                <td>
                                <select name=id_edu id="Educacion" value="0">
                                <option value=0>Seleccione</option>
                                <option value=1>Profesional</option>
                                <option value=2>Técnico</option>
                                <option value=3>Media</option>
                                <option value=4>Básica</option>
                                <option value=5>No Posee</option>
                                </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Sexo</td>
                                <td><input type=text class="form-control" name=sexo></td></td>
                                <td>Renta</td>
                                <td>
                                <select name="id_renta" id="Renta" value="0">
                                <option value="0">Seleccione</option>
                                <option value="1">Fijo</option>
                                <option value="2">Variable</option>
                                <option value="3">Boleta de Honorarios</option>
                                </select>
                                </td>


                            </tr>
                            <tr>
                                <td>Estado Civil</td>
                                <td>
                                <select name=id_estado id="Estado_Civil" value="0">
                                <option value=0>Seleccione</option>
                                <option value=1>Soltero</option>
                                <option value=2>Casado</option>
                                <option value=3>Viudo</option>
                                <option value=4>Separado</option>
                                </select>
                                </td>
                                <td>Sueldo Liquido</td>
                                <td><input type=text class="form-control" name=sueldo_liquido></td></td>
                            </tr>
                            <tr>
                                <td>Hijos</td>
                                <td><input type=text class="form-control" name=hijo></td></td>                                <td>Enfermedad</td>
                                <td><input type=text class="form-control" name=enfermedad_cronica></td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><input type=submit  class="btn btn-default" name=OK value='Insertar'></td>
                                 <td></td>
                                  <td></td>

                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>



                </form>

</body>
