<?php
$datos="Todo el mundo es un escenario y todos los hombres y mujeres son simples actores";
$fp=fopen("frases.txt","wb+") or die ("no puede abrir el archivo");
if(flock ($fp, LOCK_EX);{
fwrite($fp,$datos)or die("no se puede escribir en el archivo");
 flock ($ar, LOCK_UN);
  fclose($ar);
?>