<?php
define ("LIMIT","10");
$suma = 0;

for ($i = 1; $i <= LIMIT; $i++) {
    $suma = $suma + $i;
}

echo "La suma dels numeros de l'1 a " . LIMIT . " es: " . $suma;
?>