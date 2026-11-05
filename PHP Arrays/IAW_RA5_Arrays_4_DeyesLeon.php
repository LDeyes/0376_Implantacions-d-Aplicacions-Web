<!DOCTYPE html>
<html lang="ca">
<head><meta charset="UTF-8"><title>IAW: Fitxa d'un alumne</title></head>
<body>

<?php
// Creem l'array associatiu
$alumne = [
    "nom"  => "Mar",
    "edat" => 19,
    "grup" => "ASIX",
    "nota" => 6.5
];

// Mostrem les dades originals
echo "<h1>Fitxa d'un alumne</h1>";
echo "<h2>" . $alumne["nom"] . "</h2>";
echo "<p>Edat: " . $alumne["edat"] . "</p>";
echo "<p>Grup: " . $alumne["grup"] . "</p>";
echo "<p>Nota: " . $alumne["nota"] . "</p>";

// Modifiquem la nota i afegim ciutat
$alumne["nota"] = 8;
$alumne["ciutat"] = "Tarragona";

// Taula amb tots els camps actualitzats
echo "<h3>Dades actualitzades</h3>";
echo "<table border='1'><tr><th>Camp</th><th>Valor</th></tr>";
foreach ($alumne as $clau => $valor) {
    echo "<tr><td>$clau</td><td>$valor</td></tr>";
}
echo "</table>";
?>

</body>
</html>