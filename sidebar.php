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
      $datosp= "SELECT P.idpaquetes,P.titulo,P.duracion FROM tpaquetescategoria PC INNER JOIN tpaquetes P ON PC.idpaquetes = P.idpaquetes INNER JOIN tcategoria C ON C.idcategoria = PC.idcategoria where PC.idcategoria='1' and P.estado!=0";
      $tablap = $con->query($datosp);
//$paquete_lista = $con->query($tabla);
//aqui se almacena los datos del canimo inca
      $datoscif="SELECT P.idpaquetes,P.titulo,P.duracion FROM tpaquetescategoria PC INNER JOIN tpaquetes P ON PC.idpaquetes = P.idpaquetes INNER JOIN tcategoria C ON C.idcategoria = PC.idcategoria where PC.idcategoria='3' and P.estado!=0";//buscamos
      $tablacif=$con->query($datoscif);
//aqui se almacena los datos de tours clasicos
      $datoscic="SELECT P.idpaquetes,P.titulo,P.duracion FROM tpaquetescategoria PC INNER JOIN tpaquetes P ON PC.idpaquetes = P.idpaquetes INNER JOIN tcategoria C ON C.idcategoria = PC.idcategoria where PC.idcategoria='2' and P.estado!=0";
      $tablacic=$con->query($datoscic);
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>gotoperu</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/style.css">
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
	
	 <?php include("header.php"); ?>
      <div class="main">
            <div class="trip">
                  <p >PERU 51.84.262.555     COLOMBIA 57.5641.4644       CHILE 53.414.144479      ECUADOR 531.47.87499009      MEXICO 87.4.9874411</p>
            </div>
      	<header id="header" role="banner" class="">     		
      		
      	</header>
      		<div>
      	     		<h3><?php echo $fila["titulo"]; ?></h3>
		    	</div>
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
                                                echo'<a href="sidebar.php?id='.$user["idpaquetes"].'" class="subpagina">'.$user["titulo"].' - ('.$user["duracion"].' dias)</a>';
                                          }
                                          else {
                                                echo '<li>';
                                                echo'<a href="sidebar.php?id='.$user["idpaquetes"].'">'.$user["titulo"].' - ('.$user["duracion"].' dias)</a>';                                                
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
                                                echo'<a href="sidebar.php?id='.$user["idpaquetes"].'" class="subpagina">'.$user["titulo"].' - ('.$user["duracion"].' dias)</a>';
                                          }
                                          else {
                                                echo '<li>';
                                                echo'<a href="sidebar.php?id='.$user["idpaquetes"].'">'.$user["titulo"].' - ('.$user["duracion"].' dias)</a>';                                                
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
                                                echo'<a href="sidebar.php?id='.$user["idpaquetes"].'" class="subpagina">'.$user["titulo"].' - ('.$user["duracion"].' dias)</a>';
                                          }
                                          else {
                                                echo '<li>';
                                                echo'<a href="sidebar.php?id='.$user["idpaquetes"].'">'.$user["titulo"].' - ('.$user["duracion"].' dias)</a>';                                                
                                          }
                                    }
                                    ?>
 
                              </ul>
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
      		</div>
      		<div class="col-md-8 col-sm-12 ">

		      	<div class="row">
		      		<div >
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
		      		<div>
		      			<section class="pading-left">
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

                                          <h3>HOTELES</h3>
                                                <div class="panel panel-danger">
                                                <div class="panel-heading">
                                                Aqui podra escoger la acomodacion de sus hoteles</div>
                                                <div class="panel-body">
                                                <table class="table">
                                                <thead>
                                                <tr>
                                                     
                                                     <th>Soles</th>
                                                     <th>Dolares</th>
                                                     <th>Hoteles</th>
                                                      </tr>
                                                </thead>
                                                    <tbody>
                                                <tr>
                                                     <td>1</td>
                                                     <td>1</td>
                                                     <td>hoteles 5 estrellas</td>
                                                      </tr>
                                                <tr>
                                                     <td>2</td>
                                                     <td>2</td>
                                                     <td>hoteles 4 estrellas</td>
                                                      </tr>
                                                <tr>
                                                     <td>3</td>
                                                     <td>3</td>
                                                     <td>hoteles 3 estrellas</td>
                                                      </tr>
                                                      <tr>
                                                     <td>4</td>
                                                     <td>4</td>
                                                     <td>hoteles 4 estrellas</td>
                                                      </tr>
                                                </tbody>
                                                </table>
                                                </div>
                                                </div>
                                          <h3>TRENES</h3>
                                          <div class="panel panel-danger">
                                                <div class="panel-heading">
                                                Aqui podra escoger el servicio de tren que desea</div>
                                                <div class="panel-body">
                                                <table class="table">
                                                <thead>
                                                <tr>
                                                     
                                                     <th>Soles</th>
                                                     <th>Dolares</th>
                                                     <th>TRENES</th>
                                                      </tr>
                                                </thead>
                                                    <tbody>
                                                <tr>
                                                     <td>1</td>
                                                     <td>1</td>
                                                     <td>Belmont Hiram Bingham</td>
                                                      </tr>
                                                <tr>
                                                     <td>2</td>
                                                     <td>2</td>
                                                     <td>Andean Explorer</td>
                                                      </tr>
                                                <tr>
                                                     <td>3</td>
                                                     <td>3</td>
                                                     <td>Visitandome</td>
                                                      </tr>
                                                      <tr>
                                                     <td>4</td>
                                                     <td>4</td>
                                                     <td>Expedition</td>
                                                      </tr>
                                                </tbody>
                                                   </table>
                                                </div>
                                          </div>

                                          <h3>SERVICIOS ADICIONALES</h3>
                                          <div class="panel panel-danger">
                                                <div class="panel-heading">
                                                si desea algunos de estos servicios recuerde especificarlo al contactarnos</div>
                                                <div class="panel-body">
                                                <table class="table">
                                                <thead>
                                                <tr>
                                                     
                                                     <th>Soles</th>
                                                     <th>Dolares</th>
                                                     <th>SERVICIO</th>
                                                      </tr>
                                                </thead>
                                                    <tbody>
                                                <tr>
                                                     <td>1</td>
                                                     <td>Mark</td>
                                                     <td>Alimentacion completa(almuerzos y cenas)</td>
                                                      </tr>
                                                <tr>
                                                     <td>2</td>
                                                     <td>2</td>
                                                     <td>MACHUPICCHU(de Tour compartido a Tour privado)</td>
                                                      </tr>
                                                <tr>
                                                     <td>3</td>
                                                     <td>3</td>
                                                     <td>VALLE SAGRADO(de Tour compartido a Tour privado)</td>
                                                      </tr>
                                                      <tr>
                                                     <td>4</td>
                                                     <td>4</td>
                                                     <td>CITY TOUR CUSCO(de Tour compartido a Tour privado)</td>
                                                      </tr>
                                                </tbody>
                                                   </table>
                                                </div>
                                          </div>

                                        
                                          <?php 
                                                opcional($fila);
                                          ?> 



                                          <div class="fb-comments" data-href="https://www.facebook.com/GOTOPERUcom/?fref=ts" data-numposts="5"></div>
		      			</section>
		      		</div>
		      	</div>
      		</div>
      	</div>
      </div>
	
</div>
 	<script src="js/bootstrap.js"></script>
 	<script src="js/jquery-3.1.1.min.js"></script>
 	<script src="js/script.js"></script>
</body>
<?php include("footer.php"); ?>
</html>