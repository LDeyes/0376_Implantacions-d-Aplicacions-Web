<!DOCTYPE html>
<html lang="ca">
<head><meta charset="UTF-8"><title>IAW: Matriu de Nombres</title></head>
<body>

<?php
$nombres = [
    [2, 4, 6],
    [1, 3, 5],
    [7, 8, 9]
];

// Consultes sense bucles
echo "<h2>Consultes directes</h2>";
echo "<p>Segon valor de la primera fila: " . $nombres[0][1] . "</p>";
echo "<p>Tercer valor de la segona fila: " . $nombres[1][2] . "</p>";

// Modifiquem el centre (fila 1, columna 1) de 3 a 30
$nombres[1][1] = 30;

// Nombre de files i elements de la primera fila
echo "<h2>Comptatge</h2>";
echo "<p>Nombre de files: " . count($nombres) . "</p>";
echo "<p>Elements de la primera fila: " . count($nombres[0]) . "</p>";

// Taula amb dos foreach niats
echo "<h2>Matriu actualitzada</h2>";
echo "<table border='1'>";
foreach ($nombres as $fila) {
    echo "<tr>";
    foreach ($fila as $valor) {
        echo "<td>$valor</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>

</body>
</html>