<?php include('include/funciones.php'); ?>
<?php include('conexion.php');
$con=conectar();
      $datos= "SELECT * FROM tpaquetes";
      $tabla = $con->query($datos);
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>gotoperu</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="css/font-awesome.min.css">

</head>
<body class="fondo">
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];     
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.8";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>

<div class="container encima">
	<?php include("header.php"); ?>
<!--	 <div class="hidden-xs hidden-sm relleno-cabecera">
	 	
	 </div>-->
      <div class="main">
                  <div class="trip">
                        <p >PERU 51.84.262.555     COLOMBIA 57.5641.4644       CHILE 53.414.144479      ECUADOR 531.47.87499009      MEXICO 87.4.9874411</p>
                  </div>
      	<header id="header" role="banner" class="">
                  <div class="row">
      		    <i class="bloque-iconos col-md-8 col-sm-8 col-xs-8"> <img src="img/1.png" alt="" class="icono-portada img-responsive"><img src="img/2.png" alt="" class="icono-portada img-responsive"><img src="img/3.png" alt="" class="icono-portada img-responsive"><img src="img/4.png" alt="" class="icono-portada img-responsive"><img src="img/5.png" alt="" class="icono-portada img-responsive"><img src="img/6.png" alt="" class="icono-portada img-responsive"><img src="img/7.png" alt="" class="icono-portada img-responsive"><img src="img/8.png" alt="" class="icono-portada img-responsive"></i>
      		</div>
      	</header>
      	<div>
      		<h3 class="titulo-principal">PAQUETES TURISTICOS A MACHUPICCHU Y PERU TOURS</h3>
      		
      	</div>
      	<div class="container ">
      		<div class="col-md-7 col-sm-12 full">
      			<section >
      				<!--<h5 class="subtitulos">tours de 1 a 30 dias, incluye transporte, alimentos y más</h5>-->
      				<ul id="listas" class="full">
                                    <?php

                                    while ($user =mysqli_fetch_array($tabla) )
                                    {
                                                echo '<li>';
                                                echo'<a href="sidebar.php?id='.$user["idpaquetes"].'">'.$user["titulo"].'</a>';
                                    }

                                     ?>
      				</ul>
      			</section>
      			<section >
      				<h5 class="subtitulos">Tours en todo el peru</h5>
      				<ul id="listas" class="full">
                                    <?php foreach ($toursperu as $tourperu) {?>
                                          
                                    
                                    <li>
                                          <a href="sidebar.php"><?php echo $tourperu["nombre"]; ?></a>
                                    </li>

                                    <?php } ?>

      				</ul>
      			</section>
      			<section >
      				<h5 class="subtitulos">Tours en Sudamerica</h5>
      				<ul id="listas" class="full">
      					<li>
      						<a href="#">Tours a machupicchu en un dia</a>
      					</li>
      					<li><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae, repudiandae!</a></li>
      					<li><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni, esse.</a></li>
      					<li><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque natus ex aliquam.</a></li>

      				</ul>
      			</section>
      			<section >
      				<h5 class="subtitulos">Tours en Cusco</h5>
      				<ul id="listas" class="full">
      					<li>
      						<a href="#">Tours a machupicchu en un dia</a>
      					</li>
      					<li><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae, repudiandae!</a></li>
      					<li><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni, esse.</a></li>
      					<li><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque natus ex aliquam.</a></li>
 
      				</ul>
      			</section>
      			<section >
      				<h5 class="subtitulos">Trekking a  Machupicchu</h5>
      				<ul id="listas" class="full">
      					<li>
      						<a href="#">Tours a machupicchu en un dia</a>
      					</li>
      					<li><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae, repudiandae!</a></li>
      					<li><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni, esse.</a></li>
      					<li><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque natus ex aliquam.</a></li>

      				</ul>
      			</section>
      			<section>
      				<div class="fb-comments" data-href="https://gotoperu.com/" data-width="100%" data-numposts="5"></div>
      			</section>
      			<section >
      				<h5 class="subextra">NOTICIAS SOBRE MACHUPICCHU</h5>
      				<article class="noticias">
      					<h4 class="titulo-noticia"><a href="#">Locomotoras especiales para la ruta de machupicchu</a></h4>
      					<p class="fecha-noticia">26 diciembre del 2016</p>
      					<p>"El operador ferroviario encargado del transporte de pasajeros desde la ciudad de Cusco hasta Machupicchu, viene elaborando un plan donde los puntos más relevantes es el de ofrecer un mejor servicio para los usuarios, así como el de ofrecer un servicio más ecológico y amigable con la naturaleza...  "<a href="#">Leer mas...</a></p>
      					<ul class="noticias-face">
      					<li class="compartir-noticia" >
							<iframe src="https://www.facebook.com/plugins/like.php?href=http%3A%2F%2Fgotoperu.com%2F&width=143&layout=button&action=like&size=small&show_faces=true&share=true&height=65&appId" width="143" height="19" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
						</li>
						</ul>
      				</article>
      				<div>
      				<article class="noticias">
      					<h4 class="titulo-noticia"><a href="#">Locomotoras especiales para la ruta de machupicchu</a></h4>
      					<p class="fecha-noticia">26 diciembre del 2016</p>
      					<p>"El operador ferroviario encargado del transporte de pasajeros desde la ciudad de Cusco hasta Machupicchu, viene elaborando un plan donde los puntos más relevantes es el de ofrecer un mejor servicio para los usuarios, así como el de ofrecer un servicio más ecológico y amigable con la naturaleza...  "<a href="#">Leer mas...</a></p>
      					<ul class="noticias-face">
      					<li class="compartir-noticia" >
							<iframe src="https://www.facebook.com/plugins/like.php?href=http%3A%2F%2Fgotoperu.com%2F&width=143&layout=button&action=like&size=small&show_faces=true&share=true&height=65&appId" width="143" height="19" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
						</li>
						</ul>
      				</article>
      				</div>
      				<article class="noticias">
      					<h4 class="titulo-noticia"><a href="#">Locomotoras especiales para la ruta de machupicchu</a></h4>
      					<p class="fecha-noticia">26 diciembre del 2016</p>
      					<p>"El operador ferroviario encargado del transporte de pasajeros desde la ciudad de Cusco hasta Machupicchu, viene elaborando un plan donde los puntos más relevantes es el de ofrecer un mejor servicio para los usuarios, así como el de ofrecer un servicio más ecológico y amigable con la naturaleza...  "<a href="#">Leer mas...</a></p>
      					<ul class="noticias-face">
      					<li class="compartir-noticia" >
							<iframe src="https://www.facebook.com/plugins/like.php?href=http%3A%2F%2Fgotoperu.com%2F&width=143&layout=button&action=like&size=small&show_faces=true&share=true&height=65&appId" width="143" height="19" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
						</li>
						</ul>
      				</article>
      			</section>
      		</div>
      		<div class="col-md-5 col-sm-12 ">
      			<section>
      				<!--<h5 class="subextra"> nuestra empresa es reconocida a nivel nacional</h5>-->
      				<div class="orden">
      					<iframe width="100%" height="248" src="https://www.youtube.com/embed/Chq4BnQNUkw" frameborder="0" allowfullscreen></iframe>
      				</div>
      			</section>
      			<section>
      				<h5 class="subextra"> mire los testimonios</h5>
      				<div class="orden">
      					<iframe width="100%" height="248" src="https://www.youtube.com/embed/Chq4BnQNUkw" frameborder="0" allowfullscreen></iframe>
      				</div>
      				<div class="orden">
      					<iframe width="100%" height="248" src="https://www.youtube.com/embed/Chq4BnQNUkw" frameborder="0" allowfullscreen></iframe>
      				</div>
      			</section>
      			<section>
      				<h5 class="subextra"> opiniones de nuestros pasajeros</h5>
      				<div class="orden">
      					<p class="comentarios">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea, maiores praesentium architecto officia odit atque minima ipsam eaque tempora. Perferendis!
      					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero officia delectus culpa, enim incidunt alias ratione veniam quibusdam. Porro, necessitatibus!</p>
      					<p>
      						<strong class="autores">nombre:</strong>josue luis mancilla
      						<br>
      						<strong class="autores">pais:</strong> peru <br>
      						<strong class="autores">fecha:</strong> 15/15/15
      					</p>
      				</div>
      				<div class="orden">
      					<p class="comentarios">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea, maiores praesentium architecto officia odit atque minima ipsam eaque tempora. Perferendis!
      					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero officia delectus culpa, enim incidunt alias ratione veniam quibusdam. Porro, necessitatibus!</p>
      					<p>
      						<strong class="autores">nombre:</strong>josue luis mancilla
      						<br>
      						<strong class="autores">pais:</strong> peru <br>
      						<strong class="autores">fecha:</strong> 15/15/15
      					</p>
      				</div>
      				<hr>
      				<p class="centrado">
      					<a href="testimonios.php">miles de testimonios mas...</a>
      				</p>
      			</section>
      			<section>
      				<p>
      					<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FGOTOPERUcom%2F%3Ffref%3Dts&tabs&width=340&height=214&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="340" height="214" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
      				</p>
      			</section>
      		</div>
      	</div>
      </div>
	
</div>
	<div class="barra-chica hidden-xs hidden-sm ">
		<ul class="sin-margen">
			<li >
				<iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fgotoperu.com%2F&width=250&layout=box_count&action=like&size=small&show_faces=true&share=true&height=65&appId" width="250" height="65" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
			</li>
			<li class="compartir">asd</li>
			<li class="compartir">adasfg</li>
		</ul>
	
</div>
 	<script src="js/bootstrap.js"></script>
 	<script src="js/jquery-3.1.1.min.js"></script>
 	<script src="js/script.js"></script>
</body>
<?php include("footer.php"); ?>
</html>