<!DOCTYPE html>
<html lang="ca">
<head><meta charset="UTF-8"><title>IAW: Eliminació de Claus</title></head>
<body>

<?php
$colors = ["Verd", "Blau", "Blanc", "Negre"];

// Eliminem la clau 1 (Blau)
unset($colors[1]);

// Taula 1: claus originals (0, 2, 3)
echo "<h3>Abans de renumerar</h3>";
echo "<table border='1'><tr><th>Clau</th><th>Color</th></tr>";
foreach ($colors as $clau => $valor) {
    echo "<tr><td>$clau</td><td>$valor</td></tr>";
}
echo "</table>";
echo "<p>Colors: " . count($colors) . "</p>";

// Renumerem claus
$colors = array_values($colors);

// Taula 2: claus noves (0, 1, 2)
echo "<h3>Després de renumerar</h3>";
echo "<table border='1'><tr><th>Clau</th><th>Color</th></tr>";
foreach ($colors as $clau => $valor) {
    echo "<tr><td>$clau</td><td>$valor</td></tr>";
}
echo "</table>";
echo "<p>Colors: " . count($colors) . "</p>";
?>

</body>
</html>