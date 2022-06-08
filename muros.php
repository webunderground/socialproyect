<?php

$datos=file('muro.txt') or die ("no puede leer en el archivo");

//obtiene la ultima linea
echo end($datos) ."\n";
//obtine la linea 2 a la 6
$lineas=array_slice($datos, 1,5);
echo implode("\n",$lineas); 


//obtiene la primera linea
echo $datos[0]. "\n";
?>