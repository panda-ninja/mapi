<?php include('include/funciones.php'); ?>
<?php include('conexion.php');
$con=conectar();
      $datos= "SELECT P.idpaquetes,P.titulo,P.duracion FROM tpaquetescategoria PC INNER JOIN tpaquetes P ON PC.idpaquetes = P.idpaquetes INNER JOIN tcategoria C ON C.idcategoria = PC.idcategoria WHERE PC.idcategoria='1' and P.estado!=0 ORDER BY P.duracion ";
      $tabla = $con->query($datos);
      //"INSERT INTO titinerario(dia,titulo,descripcion,imagen,idpaquetes)"
      //$datosci="SELECT idpaquetes FROM tpaquetescategoria ";
      //$datosci="SELECT P.idpaquetes FROM tpaquetescategoria PC INNER JOIN tpaquetes P ON PC.idpaquetes = P.idpaquetes INNER JOIN tcategoria C ON C.idcategoria = PC.idcategoria where PC.idcategoria='1' and P.estado!=0 ";
      //$tablaci=$con->query($datosci);
      $datoscif="SELECT P.idpaquetes,P.titulo,P.duracion FROM tpaquetescategoria PC INNER JOIN tpaquetes P ON PC.idpaquetes = P.idpaquetes INNER JOIN tcategoria C ON C.idcategoria = PC.idcategoria where PC.idcategoria='3' and P.estado!=0 ORDER BY P.duracion";//buscamos
      $tablacif=$con->query($datoscif);
      $datoscic="SELECT P.idpaquetes,P.titulo,P.duracion FROM tpaquetescategoria PC INNER JOIN tpaquetes P ON PC.idpaquetes = P.idpaquetes INNER JOIN tcategoria C ON C.idcategoria = PC.idcategoria where PC.idcategoria='2' and P.estado!=0 ORDER BY P.duracion";
      $tablacic=$con->query($datoscic);
      
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Machupicchu Company</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="css/font-awesome.min.css">
      <link rel="icon" type="image/png" href="img/icono.gif" />

</head>

<body class=" marca-agua2">
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];     
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.8";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
<input type="button" value="" id="scrollToTop" onclick="scrolltop();">
<!--<div>
      <img src="img/logo-pequeño" alt="" class="marca-agua">
</div>-->

<div class="container encima ">
	<?php include("header.php"); ?>
<!--	 <div class="hidden-xs hidden-sm relleno-cabecera">
	 	
	 </div>-->
      <div class="main">
                  <div class="trip">
                        <p ><strong>OFERTA DEL MES :</strong> MACHUPICCHU & CUSCO : <strong>4 dias</strong> $499 HOTELES,TOURS,TRENES,TRANSFERS <a href="http://mapi.pandaninja.com.pe/sidebar.php?id=19">ver detalles</a></p>
                  </div>
      	<header id="header" role="banner" class="">
                  <div class="row">
      		    <i class="bloque-iconos col-md-10 col-sm-8 col-xs-12 col-xs-offset-3"><img src="img/1.png" alt="" class="icono-portada img-responsive"><img src="img/2.png" alt="" class="icono-portada img-responsive"><img src="img/3.png" alt="" class="icono-portada img-responsive"><img src="img/4.png" alt="" class="icono-portada img-responsive"><img src="img/9.png" alt="" class="icono-portada img-responsive"><img src="img/6.png" alt="" class="icono-portada img-responsive"><img src="img/7.png" alt="" class="icono-portada img-responsive">
                      </i>
      		</div>
      	</header>
            <div class="row">
                  <div class="nombre-iconos col-md-10 col-sm-8 col-xs-12">
                        <label for="" class="pequeños">HOTEL</label>
                        <label for="" class="pequeños">BUSES</label>
                        <label for="" class="pequeños">TICKETS</label>
                        <label for="" class="pequeños">TRENES</label>
                        <label for="" class="largos">GUIADOS</label>
                        <label for="" class="largos">DESAYUNOS</label>
                        <label for="" class="muy-largos">ASISTENCIAS</label>
                  </div>
            </div>
      	<div>
      		<h3 class="titulo-principal">PAQUETES TURISTICOS A MACHUPICCHU Y PERU TOURS</h3>
      		
      	</div>
      	<div class="container ">
      		<div class="col-md-7 col-sm-12 full">
      			<section >
      				<!--<h5 class="subtitulos">tours de 1 a 30 dias, incluye transporte, alimentos y más</h5>-->
      				<ul id="listas" class="full">
                                    <?php
                                    //$user2 =mysqli_fetch_array($tablaci);
                                    //$a =$user2["idpaquetes"];
                                    while ($user =mysqli_fetch_array($tabla) )
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
                                    while ( $user3 =mysqli_fetch_array($tablacif)) 
                                    {
                                          echo '<li>';
                                          echo '<a href="sidebar.php?id='.$user3["idpaquetes"].'">'.$user3["titulo"].' - <strong>('.$user3["duracion"].' dias)</strong></a>';
                                    }
                                    
                                    ?>

      				</ul>
      			</section>
      			<section >
      				<h5 class="subtitulos">Tours en Cusco</h5>
      				<ul id="listas" class="full">
                                    <?php
                                    while ( $user4 =mysqli_fetch_array($tablacic)) 
                                    {
                                          echo '<li>';
                                          echo '<a href="sidebar.php?id='.$user4["idpaquetes"].'">'.$user4["titulo"].'</a>';
                                    }
                                    ?>
 
      				</ul>
      			</section>

      			<section>
                              <div class="fb-comments" data-href="https://www.facebook.com/Machupicchu-Company-1326498557442849/?fref=ts" data-width="100%"></div>
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


      			</section>
      		</div>
      		<div class="col-md-5 col-sm-12 ">
      			<section>
      				<!--<h5 class="subextra"> nuestra empresa es reconocida a nivel nacional</h5>-->
      				<div class="orden">
      					<iframe width="100%" height="248" src="https://www.youtube.com/embed/fF0xWDFCfC4?rel=0" frameborder="0" allowfullscreen></iframe>
      				</div>
      			</section>
      			<section>
      				<h5 class="subextra">Recomendaciones si visitas Machu Picchu</h5>
      				<div class="orden">
                                    <iframe width="100%" height="248" src="https://www.youtube.com/embed/ZTU2_FhIcGw?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>

      				</div>

      			</section>
      			<section>
      				<h5 class="subextra"> opiniones de nuestros pasajeros</h5>
                              <div class="orden">
                                    <p class="comentarios">Sí, sin duda lo recomendaría. Todos recogida, excursiones y alojamiento eran perfecto. También fueron muy útiles para ajustar algunos de los viajes de conjunto a nuestras necesidades. Sin duda, usted puede encontrar opciones más baratas una vez en el suelo a través de una variedad de agencias..<a href="testimonios.php">(leer mas)</a></p>
                                    <p>
                                          <strong class="autores">nombre:</strong>LEANNE BROOME
                                          <br>
                                          <strong class="autores">pais:</strong> Australia <br>
                                          <strong class="autores">fecha:</strong> 12/13/15
                                    </p>
                              </div>
      				<hr>
      				<p class="centrado">
      					<a href="testimonios.php">miles de testimonios mas...</a>
      				</p>
      			</section>
      			<section>
      				<p>
      					<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FMachupicchu-Company-1326498557442849%2F%3Ffref%3Dts&tabs&width=340&height=214&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="340" height="214" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
      				</p>
      			</section>
      		</div>
      	</div>
      </div>
	
</div>
<div class="barra-chica hidden-xs hidden-sm ">
		<ul class="sin-margen">
			<li >
				<iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2FMachupicchu-Company-1326498557442849%2F%3Ffref%3Dts&width=92&layout=button&action=like&size=large&show_faces=true&share=false&height=65&appId" width="75" height="20" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
			</li>
		</ul>
	
</div>
 	<script src="js/bootstrap.js"></script>
 	<script src="js/jquery-3.1.1.min.js"></script>
 	<script src="js/script.js"></script>
      <!-- begin olark code -->
<script type="text/javascript" async>
;(function(o,l,a,r,k,y){if(o.olark)return;
r="script";y=l.createElement(r);r=l.getElementsByTagName(r)[0];
y.async=1;y.src="//"+a;r.parentNode.insertBefore(y,r);
y=o.olark=function(){k.s.push(arguments);k.t.push(+new Date)};
y.extend=function(i,j){y("extend",i,j)};
y.identify=function(i){y("identify",k.i=i)};
y.configure=function(i,j){y("configure",i,j);k.c[i]=j};
k=y._={s:[],t:[+new Date],c:{},l:a};
})(window,document,"static.olark.com/jsclient/loader.js");
/* Add configuration calls bellow this comment */
olark.identify('8407-174-10-8084');
    function startOlark() {
        olark('api.box.expand');
    }</script>
<!-- end olark code -->
</body>
<?php include("footer.php"); ?>
</html>