<?php include('include/funciones.php'); ?>
<?php include('conexion.php');
$con=conectar();
$paquete_id=$_GET["id"];
//$tabla="SELECT * FROM tpaquetes WHERE idpaquetes='$paquete_id'";
$tabla="SELECT * FROM tpaquetes WHERE idpaquetes='$paquete_id'";
$paquete_lista = mysqli_query($con,$tabla);

$fila=mysqli_fetch_array($paquete_lista);

//$datos= "SELECT * FROM tpaquetes WHERE estado!=0";
//$tabla2 = $con->query($datos);

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
	<title>Machupicchu Company</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="icon" type="image/png" href="img/icono.gif" />
</head>
<body class="marca-agua2">
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.8";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="container encima">
	<input type="button" value="" id="scrollToTop" onclick="scrolltop();">
	 <?php include("header.php"); ?>
      <div class="main">
            <div class="trip">
                  <p ><strong>OFERTA DEL MES :</strong> MACHUPICCHU & CUSCO : <strong>4 dias</strong> $499 HOTELES,TOURS,TRENES,TRANSFERS <a href="http://mapi.pandaninja.com.pe/sidebar.php?id=8">ver detalles</a></p>
            </div>
      	<header id="header" role="banner" class="">     		
      		
      	</header>

      	<div class="container ">

      		<div class="col-md-4 col-sm-12 full">
                        <section >
                        <h5 class="subtitulos">CONOCE NUESTRO PERU</h5>
                              <ul id="listas" class="full">
                                    <?php
                                    while ($user =mysqli_fetch_array($tablap) )
                                    {
                                          if ($paquete_id==$user["idpaquetes"]) {
                                                echo '<li>';
                                                echo'<a href="sidebar.php?id='.$user["idpaquetes"].'" class="subpagina">'.$user["titulo"].' - <strong>('.$user["duracion"].' dias)</strong></a>';
                                          }
                                          else {
                                                echo '<li>';
                                                echo'<a href="sidebar.php?id='.$user["idpaquetes"].'">'.$user["titulo"].' - <strong>('.$user["duracion"].' dias)</strong></a>';                                                
                                          }
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
                                          if ($paquete_id==$user["idpaquetes"]) {
                                                echo '<li>';
                                                echo'<a href="sidebar.php?id='.$user["idpaquetes"].'" class="subpagina">'.$user["titulo"].' - <strong>('.$user["duracion"].' dias)</strong></a>';
                                          }
                                          else {
                                                echo '<li>';
                                                echo'<a href="sidebar.php?id='.$user["idpaquetes"].'">'.$user["titulo"].' - <strong>('.$user["duracion"].' dias)</strong></a>';                                                
                                          }
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
                                          if ($paquete_id==$user["idpaquetes"]) {
                                                echo '<li>';
                                                echo'<a href="sidebar.php?id='.$user["idpaquetes"].'" class="subpagina">'.$user["titulo"].'</a>';
                                          }
                                          else {
                                                echo '<li>';
                                                echo'<a href="sidebar.php?id='.$user["idpaquetes"].'">'.$user["titulo"].'</a>';                                                
                                          }
                                    }
                                    ?>
 
                              </ul>
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
      		</div>
      		<div class="col-md-8 col-sm-12 ">

		      	<div class="row">
		      		<div >
		      			<section class="paquete-lateral">
		      				<div class="margin-bottom">
                    <button type="button" class="btn btn-warning reservar">¿Deseas <br>Reservar?</button>
		      					<a href="#" class="chatea"><button type="button" class="btn btn-success"  onclick="startOlark()">¡ CHATEA ! </button></a>
		      				</div>
                                          <li class="marcador">
                                                <iframe src="https://www.facebook.com/plugins/follow.php?href=https%3A%2F%2Fwww.facebook.com%2FMachupicchu-Company-1326498557442849%2F%3Ffref%3Dts&width=90&height=65&layout=box_count&size=large&show_faces=true&appId" width="85" height="65" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
                                              
                                          </li>
		      			</section>
		      		</div>
		      		<div>
		      			<section class="pading-left" >
                                          <div class="nombre-paquete">
                                                <h3><?php echo $fila["duracion"].' DIAS: '.$fila["titulo"]; ?></h3>
                                          </div>
                                          <p>
                                             <?php 

                                                for ($i=1; $i <= $fila["duracion"]; $i++) { 
                                                      $tabla2="SELECT iditinerario,dia,titulo,descripcion,imagen,idpaquetes FROM titinerario WHERE idpaquetes='$paquete_id' AND dia='$i'";
                                                      $paquete_lista2 = mysqli_query($con,$tabla2);
                                                      $fila2=mysqli_fetch_array($paquete_lista2);
                                                      detalles($fila2);
                                                }
                                              ?>   
                                          </p>

                                          
                                          <?php 
                                                incluye($fila);
                                          ?> 

                                          <?php 
                                           if ($fila["duracion"]!=1) {
                                                 
                                          ?>       
                                          <h3 class="hotel"><i class="fa fa-bed" aria-hidden="true"></i>HOTELES</h3>
                                                <div class="panel panel-danger">
                                                <div class="panel-heading">
                                                Aqui podra escoger la acomodacion de sus hoteles</div>
                                                <div class="panel-body">
                                                <table class="table">
                                                <thead>
                                                <tr>
                                                     <th>Dolares</th>
                                                     <th>Hoteles</th>
                                                      </tr>
                                                </thead>
                                                    <tbody>
                                                <tr>

                                                     <td>1</td>
                                                     <td>hoteles 5 estrellas</td>
                                                      </tr>
                                                <tr>
                                                     <td>2</td>
                                                     <td>hoteles 4 estrellas</td>
                                                      </tr>
                                                <tr>
                                                     <td>3</td>
                                                     <td>hoteles 3 estrellas</td>
                                                      </tr>
                                                <tr>
                                                     <td>4</td>
                                                     <td>hoteles 4 estrellas</td>
                                                      </tr>
                                                </tbody>
                                                </table>
                                                </div>
                                                </div>
                                          <h3 class="trenes"><i class="fa fa-train" aria-hidden="true"></i>TRENES</h3>
                                          <div class="panel panel-primary">
                                                <div class="panel-heading">
                                                Aqui podra escoger el servicio de tren que desea</div>
                                                <div class="panel-body">
                                                <table class="table">
                                                <thead>
                                                <tr>
                                                     <th>Dolares</th>
                                                     <th>TRENES</th>
                                                      </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                     <td>1</td>
                                                     <td>Belmont Hiram Bingham</td>
                                                </tr>
                                                <tr>
                                                     <td>3</td>
                                                     <td>Visitandome</td>
                                                </tr>
                                                <tr>
                                                     <td>4</td>
                                                     <td>Expedition</td>
                                                </tr>
                                                </tbody>
                                                   </table>
                                                </div>
                                          </div>
                                          <?php 
                                          }
                                          ?> 
                                          <h3>SERVICIOS ADICIONALES</h3>
                                          <div class="panel panel-danger">
                                                <div class="panel-heading">
                                                si desea algunos de estos servicios recuerde especificarlo al contactarnos</div>
                                                <div class="panel-body">
                                                <table class="table">
                                                <thead>
                                                <tr>
                                                     
                                                     <th>Dolares</th>
                                                     <th>SERVICIO</th>
                                                      </tr>
                                                </thead>
                                                    <tbody>
                                                <tr>
                                                     <td>Mark</td>
                                                     <td>Alimentacion completa(almuerzos y cenas)</td>
                                                      </tr>
                                                <tr>
                                                     <td>2</td>
                                                     <td>MACHUPICCHU(de Tour compartido a Tour privado)</td>
                                                      </tr>
                                                <tr>
                                                     <td>3</td>
                                                     <td>VALLE SAGRADO(de Tour compartido a Tour privado)</td>
                                                      </tr>
                                                <tr>
                                                     <td>4</td>
                                                     <td>CITY TOUR CUSCO(de Tour compartido a Tour privado)</td>
                                                      </tr>
                                                </tbody>
                                                   </table>
                                                </div>
                                          </div>
                                                <div class="fb-comments" data-href="https://www.facebook.com/Machupicchu-Company-1326498557442849/?fref=ts" data-width="100%"></div>
		      			</section>
		      		</div>
		      	</div>
      		</div>
      	</div>
      </div>
</div>
<div class="barra-chica hidden-xs hidden-sm ">
            <ul class="sin-margen">
                  <li >
                       <iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2FMachupicchu-Company-1326498557442849%2F%3Ffref%3Dts&width=92&layout=button&action=like&size=large&show_faces=true&share=false&height=65&appId" width="75" height="20" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
                  </li>
                  <li class="compartir" align="center"><a href="index.php"><button type="button" class="btn btn-warning color-inicio">inicio</button></a></li>

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