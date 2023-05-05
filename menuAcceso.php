<!DOCTYPE html>
<html>
<head>
	<title>Inicio de secion</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="Css/menuacceso.css">
</head>
<body>
	<div class="inicio-contenedor">
		<div class="inicio-info-contenedor">
		  <h1 class="title">Inicia Secion brother ❤ </h1>
		  <form method="post" class="inputs-contenedores">
			  <input class="input" type="text" placeholder="Nombre de usuario" name="Nombre_usu">
			  <input class="input" type="text" placeholder="Contraseña"
			  name="contrasena_usu">
			  <p>¿Olvidaste tu contraseña? <a href="#">Click aqui</a></p>
			  <button type="submit" class="btn" name= "iniciar">Iniciar</button>
			  <p>¿No tienes una cuenta? <a href="registro.php">Registrate aqui</a></p>
		  </form>
		  <?php
		  include "php/iniciar_secion_be.php"
		  ?>
		</div>
		  <img class="image-contenedor" src="images/porhobby.png">
	</div>

</body>
</html>