<?php include('include/funciones.php'); ?>
<?php include('conexion.php');
$con=conectar();


//aqui se almacenan los datos del tours en peru
      $datosp= "SELECT P.idpaquetes,P.titulo,P.duracion FROM tpaquetescategoria PC INNER JOIN tpaquetes P ON PC.idpaquetes = P.idpaquetes INNER JOIN tcategoria C ON C.idcategoria = PC.idcategoria where PC.idcategoria='1' and P.estado!=0 ORDER BY P.duracion";
      $tablap = $con->query($datosp);
//$paquete_lista = $con->query($tabla);
//aqui se almacena los datos del canimo inca
      $datoscif="SELECT P.idpaquetes,P.titulo,P.duracion FROM tpaquetescategoria PC INNER JOIN tpaquetes P ON PC.idpaquetes = P.idpaquetes INNER JOIN tcategoria C ON C.idcategoria = PC.idcategoria where PC.idcategoria='3' and P.estado!=0 ORDER BY P.duracion";//buscamos
      $tablacif=$con->query($datoscif);
//aqui se almacena los datos de tours clasicos
      $datoscic="SELECT P.idpaquetes,P.titulo,P.duracion FROM tpaquetescategoria PC INNER JOIN tpaquetes P ON PC.idpaquetes = P.idpaquetes INNER JOIN tcategoria C ON C.idcategoria = PC.idcategoria where PC.idcategoria='2' and P.estado!=0 ORDER BY P.duracion";
      $tablacic=$con->query($datoscic);
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>destinos</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
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
      <div class="main">
      	<header id="header" role="banner" class="">

      		<img src="img/tripadvisor.png" alt="" class="img-responsive imagen">
      		<p class="mail">reserve ahora: <strong>info@gotoperu.com</strong></p>
      		
      	</header>
      	<div class="container ">
      	      <div class="col-md-4 col-sm-12 full">
      			<section >
      				<h5 class="subtitulos">CONOCE NUESTRO PERU</h5>
      				<ul id="listas" class="full">
      					              <?php
                                    while ($user =mysqli_fetch_array($tablap) )
                                    {

                                          
                                                echo '<li>';
                                                echo'<a href="sidebar.php?id='.$user["idpaquetes"].'">'.$user["titulo"].' - <strong>('.$user["duracion"].' dias)</strong></a>';                                                
                                          
                                    }
                               ?>
      				</ul>
      			</section>
            <section >
                              <h5 class="subtitulos">Camino Inca a Machu Picchu</h5>
                              <ul id="listas" class="full">
                                    <?php
                                    while ($user =mysqli_fetch_array($tablacif) )
                                    {

                                                echo '<li>';
                                                echo'<a href="sidebar.php?id='.$user["idpaquetes"].'">'.$user["titulo"].' - <strong>('.$user["duracion"].' dias)</strong></a>';                                                
                                          
                                    }
                                    
                                    ?>

                              </ul>
                        </section>
                        <section >
                              <h5 class="subtitulos">Tours en Cusco</h5>
                              <ul id="listas" class="full">
                                    <?php
                                    while ($user =mysqli_fetch_array($tablacic) )
                                    {
                                                echo '<li>';
                                                echo'<a href="sidebar.php?id='.$user["idpaquetes"].'">'.$user["titulo"].'</a>';                                                
                                          
                                    }
                                    ?>
 
                              </ul>
                        </section>


      		</div>

      		<div class="col-md-8 col-sm-12 ">
		      	<div>
		      		<h3>Opiniones y recomendaciones para Viva peru</h3>
		      	</div>
		      	<div class="row">
		      		<!-- <div >
		      			<section class="paquete-lateral">
		      				<div>
		      					<h5 class="reservar">¿Deseas Reservar?</h5>
		      					<a href="#" class="chatea">¡chatea ahora!  </a>
		      				</div>
                                          <li class="marcador">
                                                <iframe src="https://www.facebook.com/plugins/follow.php?href=https%3A%2F%2Fwww.facebook.com%2Fzuck&width=62&height=65&layout=box_count&size=small&show_faces=true&appId" width="62" height="65" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
                                          </li>
		      			</section>
		      		</div>
                              -->
                              <div>
                                  <div class="testimonio-seleccionado">
                                        <div class="testimonio-caja">
                                                <h5>lunes 15 de enero del 2017</h5>
                                              <p>Sí, sin duda lo recomendaría. Todos recogida, excursiones y alojamiento eran perfecto. También fueron muy útiles para ajustar algunos de los viajes de conjunto a nuestras necesidades. Sin duda, usted puede encontrar opciones más baratas una vez en el suelo a través de una variedad de agencias, pero todos con un factor de riesgo desconocido. La tranquilidad de tener todo confiablemente organizado antes de la llegada era bien vale la pena. Nuestra excursión original sólo tenía una entrada de un día en Macchu Picchu, pedimos dos días que GoToPeru no sólo acomodados pero también tomaron la iniciativa de reservar en el Wayna Picchu subir en nuestro segundo día que aparentemente necesita ser reservado bien Adelanta números limitados permitidos cada día. Eso fue sin duda el punto culminante de nuestras vacaciones y estamos siempre agradecidos a GoToPeru por esa iniciativa.</p>
                                              <p class="sumilla">LEANNE BROOME, Australia <br>pais: Peru<br>fecha: 12 / 12 / 12 </p>
                                        </div>
                                  </div>
                                  <div class="testimonio-seleccionado">
                                        <div class="testimonio-caja">
                                              <h5>lunes 15 de enero del 2017</h5>
                                              <p>Sí, sin duda lo recomendaría. Todos recogida, excursiones y alojamiento eran perfecto. También fueron muy útiles para ajustar algunos de los viajes de conjunto a nuestras necesidades. Sin duda, usted puede encontrar opciones más baratas una vez en el suelo a través de una variedad de agencias, pero todos con un factor de riesgo desconocido. La tranquilidad de tener todo confiablemente organizado antes de la llegada era bien vale la pena. Nuestra excursión original sólo tenía una entrada de un día en Macchu Picchu, pedimos dos días que GoToPeru no sólo acomodados pero también tomaron la iniciativa de reservar en el Wayna Picchu subir en nuestro segundo día que aparentemente necesita ser reservado bien Adelanta números limitados permitidos cada día. Eso fue sin duda el punto culminante de nuestras vacaciones y estamos siempre agradecidos a GoToPeru por esa iniciativa.</p>
                                              <p class="sumilla">LEANNE BROOME, Australia <br>pais <br>fecha: 12 / 12 / 12 </p>
                                        </div>
                                  </div>
                                   <h5 class="comentarios-testimonios">que te parecio nuestro servicio?</h5>
                                  <div class="fb-comments" data-href="http://gotoperu.travel/" data-numposts="5"></div>

                              </div>
		      	</div>
      		</div>
      	</div>
      </div>
</div>
<div class="barra-chica hidden-xs hidden-sm ">
            <ul class="sin-margen">
                  <li >
                        <iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2FMachupicchu-Company-1326498557442849%2F%3Ffref%3Dts&width=92&layout=button&action=like&size=large&show_faces=true&share=false&height=65&appId" width="82" height="20" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
                  </li>
                  <li class="compartir"><a href="index.php"><button type="button" class="btn btn-warning">inicio</button></a></li>

            </ul>
      
</div>
 	<script src="js/bootstrap.js"></script>
 	<script src="js/jquery-3.1.1.min.js"></script>
 	<script src="js/script.js"></script>
</body>
<?php include("footer.php"); ?>
</html>