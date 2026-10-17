<?php
$import_compra= 45;
$es_soci = true; 

const MINIM_ENVIAMENT_GRATUIT = 60;
const COST_ENVIAMENT = 5;

if ($import_compra >= MINIM_ENVIAMENT_GRATUIT) {
    $enviament = 0;
} elseif ($es_soci == true) {
    $enviament = COST_ENVIAMENT / 2;
} else {
    $enviament = COST_ENVIAMENT;
}

$total = $import_compra + $enviament;

echo "Import de la compra: " . $import_compra . " €<br>";
echo "Despeses d'enviament: " . $enviament . " €<br>";
echo "Total final: " . $total . " €";
?>