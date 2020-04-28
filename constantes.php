<?php
/**
 * Constantes
 * 
 * Son aquellos pares nombre-valor que su valor se mantiene inmutable
 * durante toda la ejecución del script.
 * Ejemplos: Pi=3.1416, IVA=0.16, DBNAME=demo
 * Para definir una constante se utiliza la función define()
 * Debes nombrarlas con tolas las letras MAYÚSCULAS
 * sin espacios, en caso de tener dos o más palabras
 * utiliza _ para separarlas.
 */

define("PI", 3.1416);
$radio = 123;
$area_circulo = PI * $radio**2;
echo $area_circulo;

// Constantes dentro de clases
class Impuestos {
    const IVA = 0.16;
    const ISR = 0.34;
    const IVA_FRONTERIZO = 0.10;
}