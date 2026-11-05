<!DOCTYPE html>
<html lang="ca">
<head><meta charset="UTF-8"><title>IAW: Inventari de Productes</title></head>
<body>

<?php
// Array de productes amb codi, nom, preu i estoc
$productes = [
    "P01" => ["nom" => "Teclat",  "preu" => 25,  "estoc" => 4],
    "P02" => ["nom" => "Ratolí",  "preu" => 12,  "estoc" => 0],
    "P03" => ["nom" => "Monitor", "preu" => 150, "estoc" => 2]
];

// Consulta directa de P02 
echo "<h2>Consulta directa de P02</h2>";
echo "<p>P02: " . $productes["P02"]["nom"] . " - " . $productes["P02"]["preu"] . " €</p>";

// Modifiquem l'estoc de P02 i afegim P04
$productes["P02"]["estoc"] = 3;
$productes["P04"] = ["nom" => "Cable", "preu" => 8, "estoc" => 5];

// Taula amb tots els productes
$total = 0;

echo "<h2>Inventari</h2>";
echo "<table border='1'>";
echo "<tr><th>Codi</th><th>Nom</th><th>Preu</th><th>Estoc</th><th>Valor</th></tr>";

// Recorrem l'array de productes i calculem el valor total de l'inventari
foreach ($productes as $codi => $producte) {
    $valor = $producte["preu"] * $producte["estoc"];
    $total += $valor;
    echo "<tr>";
    echo "<td>$codi</td>";
    echo "<td>" . $producte["nom"] . "</td>";
    echo "<td>" . $producte["preu"] . " €</td>";
    echo "<td>" . $producte["estoc"] . "</td>";
    echo "<td>$valor €</td>";
    echo "</tr>";
}

// Calulem el valor total de l'inventari i el nombre de productes
echo "</table>";
echo "<p><b>Valor total de l'inventari: $total €</b></p>";
echo "<p>Nombre de productes: " . count($productes) . "</p>";
?>

</body>
</html>