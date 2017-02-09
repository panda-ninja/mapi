<?php 
function portada($tour_id,$tour){
      $salida="";
      $salida= $salida.'<li>';
      $salida= $salida.'<a href="sidebar.php">'.$tour["nombre"].'</a>';
return $salida;
}
function detalles($fila){
      $salida="";
      echo $salida=$salida.'dia'.$fila["dia"].':'.$fila["titulo"];
      echo $salida=$salida.'<h5 class="subtitulo-paquete">Dia'.$fila["dia"].':'.$fila["titulo"].'</h5>';
}


$tourscusco=array();
$toursperu=array();
$tourscusco[001]= array(
"nombre" => "tour a machupicchu 5 dias: cusco city tour, valle sagrado, machupicchu",
);
$tourscusco[002]=array(
      "nombre"=>"tour a machupicchu con huaynapicchu 7dias: cusco city tour, valle sagrado, machupicchu, huaynapicchu",
      );
$tourscusco[003]= array(
"nombre" => "tour a machupicchu 5 dias: cusco city tour, valle sagrado, machupicchu",
);
$tourscusco[004]=array(
      "nombre"=>"tour a machupicchu con huaynapicchu 7dias: cusco city tour, valle sagrado, machupicchu, huaynapicchu",
      );
$tourscusco[005]= array(
"nombre" => "tour a machupicchu 5 dias: cusco city tour, valle sagrado, machupicchu",
);
$tourscusco[006]=array(
      "nombre"=>"tour a machupicchu con huaynapicchu 7dias: cusco city tour, valle sagrado, machupicchu, huaynapicchu",
      );
$tourscusco[007]= array(
"nombre" => "tour a machupicchu 5 dias: cusco city tour, valle sagrado, machupicchu",
);
$tourscusco[008]=array(
      "nombre"=>"tour a machupicchu con huaynapicchu 7dias: cusco city tour, valle sagrado, machupicchu, huaynapicchu",
      );

$toursperu[001]=array(
      "nombre" => "tour a machupicchu 5 dias: cusco city tour, valle sagrado, machupicchu",
      );

$toursperu[002]=array(
      "nombre" => "tour a machupicchu 7 dias: cusco city tour, valle sagrado, machupicchu",
      );
$toursperu[003]=array(
      "nombre" => "tour a machupicchu 5 dias: cusco city tour, valle sagrado, machupicchu",
      );

$toursperu[004]=array(
      "nombre" => "tour a machupicchu 7 dias: cusco city tour, valle sagrado, machupicchu",
      );
$toursperu[005]=array(
      "nombre" => "tour a machupicchu 5 dias: cusco city tour, valle sagrado, machupicchu",
      );

$toursperu[006]=array(
      "nombre" => "tour a machupicchu 7 dias: cusco city tour, valle sagrado, machupicchu",
      );
?>