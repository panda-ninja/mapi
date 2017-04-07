<?php include('include/funciones.php'); ?>
<?php include('conexion.php');
//$aux=$_POST['idpaquetes'];
$con=conectar();
$paquete_title=str_replace('-', ' ', str_replace('_', '/', $_GET["title"]));
//$tabla="SELECT * FROM tpaquetes WHERE idpaquetes='$paquete_id'";
$tabla="SELECT * FROM tpaquetes WHERE titulo='$paquete_title'";
$paquete_lista = mysqli_query($con,$tabla);

$fila=mysqli_fetch_array($paquete_lista);
$aux=$fila["idpaquetes"];
//SACAR PRECIOS DE LA TABLA  TPRECIOPAQUETES


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
	<link rel="stylesheet" href="http://machupicchu.company/css/bootstrap.css">
	<link rel="stylesheet" href="../../css/style.css">
  <link rel="stylesheet" href="http://machupicchu.company/css/font-awesome.min.css">
  <link rel="stylesheet" href="http://machupicchu.company/css/jquery-ui.min.css">
  <link rel="icon" type="image/png" href="http://machupicchu.company/img/icono.gif" />
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
                  <p ><a href="nosotros.php"><strong class="cabecera-about">ABOUT US</strong></a><strong>OFERTA DEL MES :</strong> MACHUPICCHU & CUSCO : <strong>4 dias</strong> $499 HOTELES,TOURS,TRENES,TRANSFERS <a href="http://machupicchu.company/sidebar.php?id=8">ver detalles</a></p>
            </div>
      	<header id="header" role="banner" class="paquetes-cabecera row">  
          <div class="col-sm-10"></div>
          <div class=" col-sm-2 grupo-goto">
           <h4>SOMOS PARTE DE</h4>
           <a href="http://gotoperu.travel/"><img src="http://machupicchu.company/img/goto.png" alt="" ></a>
           <p>10 años de Experiencia Autorizados por el Gobierno del Peru</p>
           <a href="http://www.peru.travel/Search-Travel-Services/categoryid/5.aspx"><img src="http://machupicchu.company/img/marca-peru.jpg" alt=""></a>
          </div>
      	</header>

      	<div class="container ">

      		<div class="col-md-4 col-sm-12 full">
                        <section >
                        <h5 class="subtitulos">CONOCE NUESTRO PERU</h5>
                              <ul id="listas" class="full">
                                    <?php
                                    while ($user =mysqli_fetch_array($tablap) )
                                    {
                                          if ($paquete_title==$user["titulo"]) {
                                                echo '<li>';
                                                echo'<a href="../../paquetes-turistico/'.strtolower(str_replace(' ', '-', $user["titulo"])).'/" class="subpagina">'.$user["titulo"].' - <strong>('.$user["duracion"].' dias)</strong></a>';
                                          }
                                          else {
                                                echo '<li>';
                                                echo'<a href="../../paquetes-turistico/'.strtolower(str_replace(' ', '-', $user["titulo"])).'/">'.$user["titulo"].' - <strong>('.$user["duracion"].' dias)</strong></a>';                                                
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
                                          if ($paquete_title==$user["titulo"]) {
                                                echo '<li>';
                                                echo'<a href="../../paquetes-turistico/'.strtolower(str_replace(' ', '-', $user["titulo"])).'/" class="subpagina">'.$user["titulo"].' - <strong>('.$user["duracion"].' dias)</strong></a>';
                                          }
                                          else {
                                                echo '<li>';
                                                echo'<a href="../../paquetes-turistico/'.strtolower(str_replace(' ', '-', str_replace('/', '_', $user["titulo"]))).'/">'.$user["titulo"].' - <strong>('.$user["duracion"].' dias)</strong></a>';                                                
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
                                          if ($paquete_title==$user["titulo"]) {
                                                echo '<li>';
                                                echo'<a href="../../paquetes-turistico/'.strtolower(str_replace(' ', '-', str_replace('/', '_', $user["titulo"]))).'/" class="subpagina">'.$user["titulo"].'</a>';
                                          }
                                          else {
                                                echo '<li>';
                                                echo'<a href="../../paquetes-turistico/'.strtolower(str_replace(' ', '-', $user["titulo"])).'/">'.$user["titulo"].'</a>';                                                
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
                  <button type="button" class="btn btn-warning reservar pop-up-general">¿Deseas <br>Reservar?</button>
                    <div class="pop-up" role="alert">
                      <div class="popup-contenedor">
                        <form class="form-horizontal"  method="post" action="">
                          <h5 class="pop-up-titulo"><b><?php echo $fila["duracion"].' DIAS: '.$fila["titulo"]; ?></b></h5>
                            <h5 ><b>RESERVAR ESTE TOUR:</b></h5>
                              <div class="form-group">
                                  <label class="control-label col-xs-3">Nombre:</label>
                                  <div class="col-xs-8">
                                      <input type="text" name="nombre" class="form-control" placeholder="Nombre">
                                  </div>
                              </div>
                                <div class="form-group">
                                  <label class="control-label col-xs-3">Email:</label>
                                  <div class="col-xs-8">
                                      <input type="email" name="mail" class="form-control" id="inputEmail" placeholder="Email">
                                </div>
                              </div>
                              <div class="form-group">
                                  <label class="control-label col-xs-3" >Telefono:</label>
                                  <div class="col-xs-8">
                                      <input type="tel" name="telefono" class="form-control" placeholder="Telefono">
                                  </div>
                              </div>
                                  <div class="form-group">
                                        <label class="control-label col-xs-3" >Fecha de viaje:</label>
                                        <div class="col-xs-4">
                                          <input type="text" name="fecha" class="form-control" id="datepicker" placeholder="01/01/2017">

                                        </div>
                                        <div class="col-xs-1"><span class="glyphicon glyphicon-calendar"></div>

                                  </div>
                              <div class="form-group">
                                  <label class="control-label col-xs-3">País:</label>
                                  <div class="col-xs-8">
                                      <input type="text" name="pais" class="form-control" placeholder="Pais">
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label class="control-label col-xs-3" >Nro Pasajeros:</label>
                                  <div class="col-xs-8">
                                      <input type="tel" name="pasajeros" class="form-control" placeholder="N°">
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label class="control-label col-xs-3">Comentarios:</label>
                                  <div class="col-xs-8">
                                      <textarea rows="3" name="comentarios" class="form-control" placeholder="Comentarios"></textarea>
                                  </div>
                              </div>

                              <br>
                              <div class="form-group">
                                  <div class="col-xs-offset-2 col-xs-9">
                                      <input type="submit" name="enviar" class="btn btn-primary margin-bottom" value="Enviar">
                                  </div>
                              </div>
                              <?php 
                              if (isset($_POST['enviar'])) {

                                $nombre=$_POST['nombre'];
                                $mail=$_POST['mail'];
                                $telefono=$_POST['telefono'];
                                //$fecha=$_POST['fecha'];
                                $fec = explode('/', $_POST['fecha']);
                                $pais=$_POST['pais'];
                                $pasajeros=$_POST['pasajeros'];
                                $comentarios=$_POST['comentarios'];

                                //$sql="INSERT INTO tcliente('nombres','nacionalidad','email','telefono') VALUES ($nombre,$pais,$mail,$telefono)";
                                //$nfecha = "{$fec[2]}-{$fec[1]}-{$fec[0]}";
                                $sql="INSERT INTO tcontacto(nombres,email,telefono,pais,pasajeros,comentario) VALUES ('$nombre','$mail','$telefono','$pais','$pasajeros','$comentarios')";
                                mysqli_query($con,$sql);
                                //--------------------------------------------------------------------------------------
                                $email_to = "info@machupicchu.company";
                                $email_subject = "Contacto desde el sitio web";
                                $url = $_SERVER['PHP_SELF'];
                                $email_message = "Detalles del formulario de contacto:\n\n";
                                $email_message .= "Nombre: " . $_POST['nombre'] . "\n";
                                $email_message .= "email: " . $_POST['mail'] . "\n";
                                $email_message .= "telefono: " . $_POST['telefono'] . "\n";
                                $email_message .= "fecha del viaje" . $_POST['fecha'] . "\n";
                                $email_message .= "pais:" . $_POST['pais'] . "\n";
                                $email_message .= "pasajeros" . $_POST['pasajeros'] . "\n";
                                $email_message .= "comentarios" . $_POST['comentarios'] . "\n\n";
                                $email_message .= "pagina desde donde envio el pedido:" . $_POST['comentarios'] . "\n\n";

                                //echo '<script src="">alert("Formulario  no enviado!");window.location.href="http://www.todoexpertos.com/categorias/tecnologia-e-internet/desarrollo-de-sitios-web/javascript/respuestas/171252/cartel-despues-de-enviar-un-formulario";</script>';

                                // Ahora se envía el e-mail usando la función mail() de PHP
                                $headers = 'From: '.$_POST['mail']."\r\n".
                                'Reply-To: '.$_POST['mail']."\r\n" .
                                'X-Mailer: PHP/' . phpversion();  
                                mail($email_to, $email_subject, $email_message, $headers) ;                             
                              }
                              ?>
                          </form>
                      </div> <!-- popup-contenedor -->
                    </div> <!-- popup -->


		      					<a href="#" class="chatea"><button type="button" class="btn btn-success"  onclick="startOlark()">¡ CHATEA ! </button></a>
		      				</div>
                                          <li class="marcador">
                                 
                                                <iframe src="https://www.facebook.com/plugins/share_button.php?href=https%3A%2F%2Fgotoperu.com%2F&layout=box_count&size=small&mobile_iframe=true&width=81&height=40&appId" width="85" height="65" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
                                              
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
                                                      $tabla2="SELECT * FROM titinerario WHERE idpaquetes='$aux' AND dia='$i'";
                                                      
                                                      //$tabla2="SELECT TI.iditinerario,TI.dia,TI.titulo,TI.descripcion,TI.imagen,TI.idpaquetes FROM tpaquetes P INNER JOIN titinerario TI ON TI.idpaquetes=P.idpaquetes WHERE TI.dia='$i' AND P.idpaquetes='$aux'";

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
                                          <h3 class="hotel"><img src="http://machupicchu.company/img/9.png" alt="" class="icono-portada2 img-responsive">TOUR +<i class="fa fa-bed" aria-hidden="true"></i>HOTELES</h3>
                                                <div class="panel panel-danger">
                                                <div class="panel-heading">
                                                PRECIO POR PERSONA BASADO EN ACOMODACION DOBLE EN USD $</div>
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

                                                     <td>USD                                               
                                                     <?php 
                                                      $tablaprecio="SELECT * FROM tpreciopaquetes WHERE idpaquetes='$aux' AND estrellas=2";
                                                      
                                                      $precio_lista=mysqli_query($con,$tablaprecio);
                                                      $filaprecio=mysqli_fetch_array($precio_lista);
                                                      echo $filaprecio['precio_d'];
                                                    ?>   
                                                    </td>
                                                     <td>2 estrellas: Apu Huascaran/ Triunfo/ SevenMapi</td>
                                                      </tr>
                                                <tr>
                                                     <td>USD 
                                                     <?php 
                                                      $tablaprecio="SELECT * FROM tpreciopaquetes WHERE idpaquetes='$aux' AND estrellas=3";
                                                      $precio_lista=mysqli_query($con,$tablaprecio);
                                                      $filaprecio=mysqli_fetch_array($precio_lista);
                                                      echo $filaprecio['precio_d'];
                                                    ?>   
                                                     </td>
                                                     <td>3 estrellas: San Agustin/ Garcilazo/ Casa Andina</td>
                                                      </tr>
                                                <tr>
                                                     <td>USD 
                                                     <?php 
                                                      $tablaprecio="SELECT * FROM tpreciopaquetes WHERE idpaquetes='$aux' AND estrellas=4";
                                                      $precio_lista=mysqli_query($con,$tablaprecio);
                                                      $filaprecio=mysqli_fetch_array($precio_lista);
                                                      echo $filaprecio['precio_d'];
                                                    ?>  
                                                     </td>
                                                     <td>4 estrellas: Costa del Sol/ Sonesta/ Andean Wings</td>
                                                      </tr>
                                                <tr>
                                                     <td>INQUIRE</td>
                                                     <td>5 estrellas: JWMarriot/ Aranwa</td>
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
                                                     <td>INCLUIDO</td>
                                                     <td>Expedition</td>
                                                </tr>
                                                <tr>
                                                     <td>$29 ADICIONAL<p>(por persona)</p></td>
                                                     <td>Visitandome (PANORAMICO) <br>
                                                          <img src="../../img/perurail.jpg" alt=""  class="thumbnail achicar">
                                                          <img src="../../img/perurail2.jpg" alt=""  class="thumbnail achicar">
                                                     </td>
                                                </tr>
                                                </tbody>
                                                   </table>
                                                </div>
                                          </div>
                                          <?php 
                                          }
                                          ?> 
                                          <!--<h3>SERVICIOS ADICIONALES</h3>
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
                                                     <td>INQUIRE</td>
                                                     <td>Alimentacion completa(almuerzos y cenas)</td>
                                                      </tr>
                                                <tr>
                                                     <td>INQUIRE</td>
                                                     <td>MACHUPICCHU(de Tour compartido a Tour privado)</td>
                                                      </tr>
                                                <tr>
                                                     <td>INQUIRE</td>
                                                     <td>VALLE SAGRADO(de Tour compartido a Tour privado)</td>
                                                      </tr>
                                                <tr>
                                                     <td>INQUIRE</td>
                                                     <td>CITY TOUR CUSCO(de Tour compartido a Tour privado)</td>
                                                      </tr>
                                                </tbody>
                                                   </table>
                                                </div>
                                          </div>-->
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
                       <iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2FGOTOPERUcom%2F%3Ffref%3Dts&width=76&layout=box_count&action=like&size=small&show_faces=true&share=false&height=65&appId" width="75" height="65" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
                  </li>
                  <li class="compartir" align="center"><a href="http://machupicchu.company/"><button type="button" class="btn btn-warning color-inicio">inicio</button></a></li>

            </ul>
</div>
 	<script src="../../js/bootstrap.js"></script>
 	<script src="../../js/jquery-3.1.1.min.js"></script>
 	<script src="../../js/script.js"></script>
    <script src="../../js/jquery-ui.min.js"></script>
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