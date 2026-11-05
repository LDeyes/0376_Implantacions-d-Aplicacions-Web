<?php
$materials = ["Llapis", "Paper", "Goma"];

echo "<h2>Llista de materials</h2>";
foreach ($materials as $material) {
    echo "<p>" . $material . "</p>";
}
// Canviem Paper per Carpeta
$materials[1] = "Carpeta";
// Afegim un nou element a l'array al final 
$materials[] = "Regle"; 

echo "<h2>Llista de materials actualitzada</h2>";
foreach ($materials as $material) {
    echo "<p>" . $material . "</p>";
}
$comptador = count($materials);
echo "<p>El número de materials són: " . $comptador . "</p>";
?>