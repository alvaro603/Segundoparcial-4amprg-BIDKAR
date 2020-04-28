<?php
/**
 * Arreglos y matrices
 * 
 * Es un tipo de dato que permite guardar varias variables y distintos
 * valores, con el mismo nombre, identificandolas por medio de uno o
 * más índices.
 * Se pueden definir con la función array() o con la abreviación []
 * Pueden almacenar distintos valores.
 * Pueden cambiar su tamaño después de ser definidos.
 */

$cals = array(9,9,10,null);
$cals[3] = ($cals[0]+$cals[1]+$cals[2])/3;
var_dump($cals);

$nombre = "Bidkar";
$apellidos = "Aragón Cárdenas";
$edad = 40;

$usuario = [$nombre,$apellidos,$edad];
var_dump($usuario);

$nombre_completo = $usuario[0]." ".$usuario[1];

// Arreglos asociativos
$user = [
    "nombre" => "Bidkar",
    "apellidos" => "Aragón Cárdenas",
    "edad" => 40
];
$nombre_completo = $user["nombre"]." ".$user["apellidos"];