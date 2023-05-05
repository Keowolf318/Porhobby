<!DOCTYPE html>
<html>
<head>
	<title>Registro</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="Css/registro.css">
</head>
<body>
	<div class="inicio-contenedor">
		<div class="inicio-info-contenedor">
		  <h1 class="title">Registro</h1>
		  <form method="post"class="inputs-contenedores">
			  <input class="input" type="text" name="correo" placeholder="Correo Electronico">
			  <input class="input" type="text" name="nombre" placeholder="Nombre de usuario">
			  <input class="input" type="text" name="contraseña" placeholder="Contraseña">
			  <input class="input" type="text" placeholder="Confirmar Contraseña">
			  <input type="submit" class="btn" name="register">
			  <p>¿Ya tienes una cuenta? <a href="menuAcceso.php">Inicia secion aqui</a></p>
		  </form>
		  <?php 
		  include("php/registrar.php");
		  ?>
		</div>
		  <img class="image-contenedor" src="registroimagen.jpg">
	</div>
</body>
</html>