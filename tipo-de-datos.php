<?php
// integer, double, string, boolean, array, object, class, unknown type, null
$entero = 100;
$decimal = 7.6;
$cadena = "Bidkar";
$booleano = true;
$arreglo = array("uno", "dos", "tres");
class Clase {
    public $id = 1;
}
$objeto = new Clase();
$nulo = null;

echo '$entero es de tipo: '.gettype($entero)."\n";
echo '$decimal es de tipo: '.gettype($decimal)."\n";
echo '$cadena es de tipo: '.gettype($cadena)."\n";
echo '$booleano es de tipo: '.gettype($booleano)."\n";
echo '$arreglo es de tipo: '.gettype($arreglo)."\n";
echo '$objeto es de tipo: '.gettype($objeto)."\n";
echo '$nulo es de tipo: '.gettype($nulo)."\n";

$entero = "cadena";
echo '$entero es de tipo: '.gettype($entero)."\n";
settype($decimal, "string");
echo '$decimal es de tipo: '.gettype($decimal)."\n";
$cadena2 = "lfdsjflksdjl";
settype($cadena2, "integer");
echo '$cadena2 es de tipo: '.gettype($cadena2)."\n";
echo $cadena2."\n";

$num_cadena = "123"; // string
$numerico = (integer) $num_cadena; // casting
echo gettype($numerico);