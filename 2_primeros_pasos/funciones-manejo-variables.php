<?php
/**
 * Otras funciones de manejo de variables
 * isset(): bool Determine if a variable is declared and is different than NULL
 * empty(): Determine whether a variable is empty
 * unset(): Unset a given variable
 * is_integer(): Alias of is_int()
 * is_int(): Find whether the type of a variable is integer
 * is_string(): 
 * is_double(): 
 */
$demo = "demo";
if (isset($demo)) {
    echo "La variable \$demo esta declarada y es distinta de NULL\n";
} else {
    echo "La variable \$demo no esta declarada o es igual a NULL\n";
}
// empty == false == null
$clean = false;
if (empty($clean)) {
    echo 'La variable $clean no tiene valor alguno aún.'."\n";
}
// Done: revisar las funciones restantes y agregar ejemplos
$nombre = "Bidkar";
if (isset($nombre)) {
    echo $nombre."\n";
}
unset($nombre);
if (isset($nombre) == false) {
    echo "Variable \$nombre no declarada o igual a NULL";
}
