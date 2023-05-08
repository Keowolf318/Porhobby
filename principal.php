<?php

	session_start();

	if(!isset($_SESSION['usuario'])){
		echo'
			Por favor debes iniciar sesion
		';
		header("location: index.php");
		session_destroy();
		die();

	}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link type="text/css" rel="stylesheet" href="Css/estiloprincipal.css">
    <link rel="shortcut icon" href="./images/emilogo.jpg" type="image/x-icon">
</head>
<body>
 <!--Esto hace que sea recizable la pagina-->
 <div class="todo">

	<!--aqui inicia todo lo referente ha la Barra de navegacion-->
			<nav>
				<div class="nav-left">
					<a href="principal.html"><img src="./images/logo.png"  width="50"></a>
				</div>
		
				<div class="nav-middle">
					<a href="principal.html" class="active">
						<i class="inicio">inicio</i>
					</a>
		
					<a href="comunidad.html">
						<i class="Comunidad">Comunidad</i>
					</a>
		
					<a href="Menujuegos.html">
						<i class="Genero">Juegos</i>
					</a>

					<a href="php/cerrar_session.php">
						<i class="Cerrar">Cerrar sesion</i>
					</a>
				</div>
				<div class="nav-right">
					<span class="profile"></span>
					
		
				</div>
			</nav>
<!--aqui acaba todo lo referente ha la Barra de navegacion-->

<!--aqui inicia todo lo del Carrucel -->

<div class="Carousel">

<!--Titulo del carrucel-->
<section class="title">
	<h2 class="border">Lo mas jugado!</h2>
	<h2 class="wave">Lo mas jugado!</h2>
</section>
	
	<div class="slick-list" id="slick-list">
<!--Boton de retroceder en el carrucel-->
		<button class="slick-arrow slick-prev" id="button-prev" data-button="button-prev" onclick="app.processingButton(event)">
			<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-left" class="svg-inline--fa fa-chevron-left fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z"></path></svg>
		</button>

<!--Imagenes del carrucel-->
		<div class="slick-track" id="track">
			<div class="slick">
				<div>
					<a href="tetris.html">
						<picture>
							<img src="images/Tetris (2).png" alt="Image">
						</picture>
					</a>
				</div>
			</div>
			<div class="slick">
				<div>
					<a href="Matematicas-juego.html">
						<picture>
							<img src="images/matematica.jpg" alt="Image">
						</picture>
					</a>
				</div>
			</div>
			<div class="slick">
				<div>
					<a href="coloron.html">
						<picture>
							<img src="images/coloron.png" alt="Image">
						</picture>
					</a>
				</div>
			</div>
			<div class="slick">
				<div>
					<a href="Carro.html">
						<picture>
							<img src="images/Carrera.jpg" alt="Image">
						</picture>
					</a>
				</div>
			</div>
			
			
		</div>

<!--Boton de adelante-->
		<button class="slick-arrow slick-next" id="button-next" data-button="button-next" onclick="app.processingButton(event)">
			<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" class="svg-inline--fa fa-chevron-right fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"></path></svg>
		</button>
	</div>
	<div class="slick-list" id="slick-list">
		<button class="slick-arrow slick-prev" id="button-prev" data-button="button-prev" onclick="app.processingButton(event)">
			<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-left" class="svg-inline--fa fa-chevron-left fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z"></path></svg>
		</button>
	</div>
</div>
<script defer src="JS/carrucel.js"></script>

<!--Aqui acaba todo lo del Carrucel-->

<!-- separador -->
<section class="title">
	<h2 class="border">¿que es PorHobby?</h2>
	<h2 class="wave">¿que es PorHobby?</h2>
</section>

<div class="contenedor">

	<!-- inicio de la noticias -->

<div class="noticias">

	<section class="noticia">
        
		<!--Etiquetas de informacion -->
				<article class="articulo">
					<h2>¿Sabias que El primer Programador fue un matematico?</h2>
					<p>Ada Lovelace, hija del famoso poeta Lord Byron, fue una talentosa matemática que vivió a
						 principios del siglo XIX.<br> Su colaboración con el popular ingeniero 
						 mecánico Charles Babbage fue esencial 
						 para la creación del primer ordenador 
						 de la historia. Más tarde fue capaz de idear 
						 el primer algoritmo aplicable a una máquina, que de hecho se
						  convirtió en el primer programa informático de la historia.</p>
					<div class="img1">
						<img src="images/matematica.jpg">
					</div>
				</article>
	</section>

</div>
<!-- fin de la noticia -->

<!-- inicio del resumen -->
<div class="resume">

	<section class="resumen">
        
		<!--Etiquetas de informacion -->
				<article class="articulo">
					<h2>¿Por que se creo esta pagina y cual es su fin?</h2>
					<p><a>PorHobby</a> es una pagina sin animo de lucro creada con una sola finalidad, Fomentar el estudio en los <a>Niños</a>. 
					¿De que forma? se preguntara.			   Con <a>Juegos</a> claro! Por supuesto sabemos que a simple vista esto parece una burda excusa 
				para que los niños jueguen teniendo la excusa de que "estan estudiando" pero nada más alejado de la realidad, en esta pagina no habra simple juegos
			que no aporten nada, ya que los juegos que aqui le proporcionamos son juegos que fomentan el estudio y la investigacion, con juegos 
		de memoria, construccion y rapidez mental. Claro tambien tenemos otros apartados como el de <a>Comunidad</a> donde podran unirse a diversos grupos de tegnologia, informatica y otros campos
		que estamos seguro que le brindaran un gran crecimiento como persona. Asi que el equipo Porhubby les brinda una gran bienvenida y recuerde, los estudios no tienen que ser 
		aburridos! ya que nuestro lema es <a> Juego y Aprendo!!</a></p>
					<div class="img1">
						<img src="images/porhobby.jpeg">
					</div>
				</article>
	</section>
	
</div>
<!--Fin del resumen -->

</div>
</body>
</html>