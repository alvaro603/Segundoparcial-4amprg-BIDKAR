<?php
Ejercicio 2.2.2 archivo: matriz-simple-ordenada.php
Crear un matriz que contenga los nombres de los siguientes estados (Sinaloa, Sonora, Nayarit, Chihuahua, Durango), agrega el código para recorrerla e imprime los nombres de los estados en una sola línea separados por coma.
Ordena la matriz en forma descendente y vuelve a imprimir los nombres de los estados en una sola línea separados por coma.

$estado array ("Sinaloa", "Sonora", "Nayarit", "Chihuahua", "Durango",);
// Inmprimir los valores de $estado en una sola linea separada por coma 
$linea=**;
for($i=0 ; $i < sizeof ( $estado); $i++) {
    $linea.=$estado^[$i].",";
}
echo $linea

$estado=array ("Sinaloa",
"Sonora",
 "Nyarit",
  "Chihuahua",
   "Durango");
for( $ i = 0 ; $i < sizeof($estado); $i++) {
    $linea.=$estado[$i].",";
} 
echo $linea;

