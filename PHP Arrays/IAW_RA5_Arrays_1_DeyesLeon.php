<?php
$ciutats = ["Tarragona", "Reus", "Tortosa", "Lleida"];

$ciutat1 = $ciutats[0];
echo "La primera ciutat és: " . $ciutat1 . " ";

$ciutat4 = $ciutats[3];
echo "La quarta ciutat és: " . $ciutat4 . " ";

count($ciutats);
echo "El número de ciutats són: " . count($ciutats) . " ";

foreach ($ciutats as $ciutat) {
    echo $ciutat . " ";
}