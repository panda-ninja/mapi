<?php 
function portada($tour_id,$tour){
      $salida="";
      $salida= $salida.'<li>';
      $salida= $salida.'<a href="sidebar.php">'.$tour["nombre"].'</a>';
return $salida;
}
function detalles($fila){
      $salida="";
      echo $salida=$salida.'<h5 class="subtitulo-paquete">Dia'.$fila["dia"].':'.$fila["titulo"].'</h5>';
      //echo '<div id="group1" class="parallax__group">';
      //echo '<div class="parallax__layer parallax__layer--back">';
      //echo '<img class="codepen_image" src="img/'.$fila["imagen"].'">';
      //echo '</div></div>';
      echo '<div class="letra-cambio">';
      if ($fila["dia"]==1) {
            //echo '<p class="margen-imagen-itinerario">';
            echo '<img src="img/'.$fila["imagen"].'.jpg" alt="" class="imagen-paquetes img-responsive" >';
            echo '<img src="img/'.$fila["imagen"].'1.jpg" alt="" class="imagen-paquetes img-responsive" >';
            //echo '</p>';   
      }
      else {
            //echo '<p align="center">';
            echo '<img src="img/'.$fila["imagen"].'.jpg" alt="" class="imagen-paquetes img-responsive" >';
            echo '<img src="img/'.$fila["imagen"].'1.jpg" alt="" class="imagen-paquetes img-responsive" >';
            //echo '</p>';            
      }

      //echo '<div class="parallax-container "> <div class="parallax valign-wrapper">';
      //echo '<img src="img/'.$fila["imagen"].'" alt style="display: block; transform: translate3d(-50%, 63px, 0px);">';
      //echo '</div></div>';
      echo $fila["descripcion"]; 
      echo '</div>';   

}   
function incluye($fila){
      echo '<h4 class="incluye"><i class="fa fa-check" aria-hidden="true"></i> Nuestro Tour incluye:</h4>';
      echo $fila["incluye"];
      echo '<h4 class="no-incluye"><i class="fa fa-times" aria-hidden="true"></i>Nuestro paquete NO incluye:</h4>';
      echo $fila["noincluye"];
} 
function opcional($fila){
      echo '<h4>Actividades opcionales:<p>Comunicar a su consultor de viaje para adicionar estas opciones</p></h4>';
      echo $fila["opcional"];
}


?>
