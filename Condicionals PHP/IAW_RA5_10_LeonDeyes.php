<?php
$edat = 10;

const EDAT_INFANTIL = 12;
const EDAT_SENIOR = 65;
const PREU_ENTRADA = 8;

if ($edat < EDAT_INFANTIL || $edat >= EDAT_SENIOR) {
    $preu = 0;
} else {
    $preu = PREU_ENTRADA;
}

echo "Edat: " . $edat . " anys. Preu: " . $preu . " €";
?>