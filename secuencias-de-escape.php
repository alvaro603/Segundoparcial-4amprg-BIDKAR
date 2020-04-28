<?php
/**
 * Secuencias de escape
 * 
 * \n nueva línea
 * \r retorno de carro
 * \t tabulación
 * \$ signo de moneda
 * \' comilla simple
 * \" comilla doble
 * \\ diagonal invertida backslash
 */

echo "Al final de este texto hay un salto de línea gracias a:\\n \n";
echo "Esta línea al final tiene un retorno de carro \r de verdad!\n";
echo "if (\$variable) {\n";
echo "\techo \"lo que sea\";\n";
echo "}\n";
echo "si la cadena esta entre comilla doble basta con poner la comilla simple '\n";
echo 'si la cadena esta entre comilla simple debes anteponer \ a la comilla simple \''."\n";
echo "si la cadena esta entre comilla doble debes anteponer \ a la comilla doble \"\n";
echo 'si la cadena esta entre comilla simple basta con poner la comilla doble "'."\n";
echo "Final final";
