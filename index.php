<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>PAGINA DE AUTENTICACION</title>
		<link rel="stylesheet" type="text/css" href="maqueta.css" />
		<link href="maquetaLogin.css" type="text/css" rel="stylesheet"/>
	</head>
	<body>
		<!--<script src="jscriptLogin.js"></script>-->
		<div class="login-page">
		  	<div class="form">
				  <h1>DAICredit</h1>
		    	<br>
		    	</br>
		      	<form action="control/TLogin.php" method="post">
		      		<input type="text" placeholder="Nombre Usuario" name=usuario/>
		      		<input type="password" placeholder="Contraseña" name=clave/>
		      		<input type="submit" value="Ingresar"name=OK />
		    	</form>
				<form action="vision/Registro.php">
					<input type="submit" value="¿Sin Cuenta?. Registrese Aquí" />
				</form>
		  	</div>
		</div>
	</body>
</html>