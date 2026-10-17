<?php
$import_compra = 150;

const IMPORT_MINIM = 100;
const PERCENTATGE_DESCOMPTE = 10;

if ($import_compra >= IMPORT_MINIM) {
    $descompte = $import_compra * PERCENTATGE_DESCOMPTE / 100;
} else {
    $descompte = 0;
}

$import_final = $import_compra - $descompte;

echo "Import original: " . $import_compra . " €<br>";
echo "Descompte: " . $descompte . " €<br>";
echo "Import final: " . $import_final . " €";
?>