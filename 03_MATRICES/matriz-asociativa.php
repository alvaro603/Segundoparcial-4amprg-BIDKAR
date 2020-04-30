Ejercicio 2.2.3 archivo: matriz-asociativa.php
Crear una matriz asociativa que contenga los nombres de los siguientes municipios y estados de la república mexicana (Guasave, Sinaloa; Guadalajara, Jalisco; Tepic, Nayarit; Culiacan, Sinaloa; Hermosillo, Sonora; Puerto Vallarta, Jalisco; Navojoa, Sonora). Utiliza los estados como claves y los municipios como valores;

<?php
$estado=array(
   "Guasave"=>"Sinaloa",
    "Guadalajara"=>"Jalisco",
     "Tepic"=>"Nayarit",
      "Culiacan"=>"Sinaloa",
       "Hermosillo"=>"Sonora",
        "Puerto Vallarta"=>"Jalisco",
         "Navojoa"=>"Sonora");
         echo $estado ["Los estados"];