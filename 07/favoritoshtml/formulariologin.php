<!DOCTYPE HTML>


<html>
	<head> 
	
	<link rel=stylesheet href="estilo/estilo.css" type="text/css" />


	</head>


	<body>
	<div id="contenedor">
		<header>
			<section id="logotipo">
				<div id="logo">
						 <svg height="100px" width="100px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
			 viewBox="0 0 47.94 47.94" xml:space="preserve">
		<path style="fill:#ED8A19;" d="M26.285,2.486l5.407,10.956c0.376,0.762,1.103,1.29,1.944,1.412l12.091,1.757
			c2.118,0.308,2.963,2.91,1.431,4.403l-8.749,8.528c-0.608,0.593-0.886,1.448-0.742,2.285l2.065,12.042
			c0.362,2.109-1.852,3.717-3.746,2.722l-10.814-5.685c-0.752-0.395-1.651-0.395-2.403,0l-10.814,5.685
			c-1.894,0.996-4.108-0.613-3.746-2.722l2.065-12.042c0.144-0.837-0.134-1.692-0.742-2.285l-8.749-8.528
			c-1.532-1.494-0.687-4.096,1.431-4.403l12.091-1.757c0.841-0.122,1.568-0.65,1.944-1.412l5.407-10.956
			C22.602,0.567,25.338,0.567,26.285,2.486z"/>
		</svg>
				</div>
				<div id="tipo">
					<h1>misFavoritos</h1>
				</div>
			</section>
			<section id="login">
		<form action="login.php" method="post">

		<input type="text" name="usuario" value="usuario" size="20">	

		<input type="text" name="contrasena" value="contraseña" size="20">

		<input type="submit">

		</form>
		<div id="registrate"><a href="">Pulsa AQUI para registrarte en la web</a></div>

			</section>	
		
		</header>

		<section id="contenido">

		<section id="presentacion">
			

		<div id="animaciontexto1"><h2>Cansad@ de perder tus favoritos?</h2></div>

		<div id="animaciontexto2"><h2>Te gustaria no volver a perderlos?</h2></div>


		</section>
		
		<section id="etiquetas">
			<table border="1">

			<tr>
			<th>Titulo<span id="estrellas">Valoracion</span>
			</tr>

			<tr>

			<td>Enlace


			</td>

			</tr>

			<tr>

			<td>Categoria


			</td>

			</tr>

			<tr>

			<td>Comentario


			</td>

			</tr>

			</table>

<table border="1">

			<tr>
			<th>Titulo<span id="estrellas">Valoracion</span>
			</tr>

			<tr>

			<td>Enlace


			</td>

			</tr>

			<tr>

			<td>Categoria


			</td>

			</tr>

			<tr>

			<td>Comentario


			</td>

			</tr>

			</table>

<table border="1">

			<tr>
			<th>Titulo<span id="estrellas">Valoracion</span>
			</tr>

			<tr>

			<td>Enlace


			</td>

			</tr>

			<tr>

			<td>Categoria


			</td>

			</tr>

			<tr>

			<td>Comentario


			</td>

			</tr>

			</table>

			<table border="1">

			<tr>
			<th>Titulo<span id="estrellas">Valoracion</span>
			</tr>

			<tr>

			<td>Enlace


			</td>

			</tr>

			<tr>

			<td>Categoria


			</td>

			</tr>

			<tr>

			<td>Comentario


			</td>

			</tr>

			</table>

			<table border="1">

			<tr>
			<th>Titulo<span id="estrellas">Valoracion</span>
			</tr>

			<tr>

			<td>Enlace


			</td>

			</tr>

			<tr>

			<td>Categoria


			</td>

			</tr>

			<tr>

			<td>Comentario


			</td>

			</tr>

			</table>

			<table border="1">

			<tr>
			<th>Titulo<span id="estrellas">Valoracion</span>
			</tr>

			<tr>

			<td>Enlace


			</td>

			</tr>

			<tr>

			<td>Categoria


			</td>

			</tr>

			<tr>

			<td>Comentario


			</td>

			</tr>

			</table>



		<section id="trampa">
			-

		</section>


		</section>	

		<footer>

		(c) 2022 - Azaan Ramirez Campallo
		
		</footer>	
    
    </div>

	</body>





</html>

<!--VIEJO CODIGO#########################################-->

<html>

<body>

	<table border=1 width=100%>

	<tr>

	<td>

	<form action="login.php" method="post">

	<input type="text" name="usuario" value="Introduce aqui tu nombre" width=50%></td>

	</tr>

	<tr>

	<td>

	<input type="text" name="contrasena" value="Introduce aqui tu contraseña" width="50%"></td>

    </tr>


    <tr>

    <td> 

    <input type="submit"></td>

    </tr>


   </form>

   </table>

   No eres usuario todavia? Pues Pulsa <a href="formularioaltausuario.php">AQUI</a>


</body>

</html>


<?php


 echo"Algunos Links que quizas te puedan interesar";

 $conexion = sqlite_open('favoritos.db');

 $consulta =SELECT * FROM favoritos ORDER BY RANDOM();

 $resultado = sqlite_query($conexion, $consulta);

 echo ""