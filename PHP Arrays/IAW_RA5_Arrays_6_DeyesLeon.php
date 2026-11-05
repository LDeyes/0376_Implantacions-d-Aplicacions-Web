<!DOCTYPE html>
<html lang="ca">
<head><meta charset="UTF-8"><title>IAW: Preus de la papereria</title></head>
<body>

<?php
// Creem l'array associatiu amb els preus dels articles
$preus = [
    "Llibreta" => 3.50,
    "Bolígraf" => 1.20,
    "Carpeta"  => 2.80,
    "Regle"    => 1.50
];

$total = 0;
$cars = 0;

// Mostrem la taula amb els preus
echo "<h2>Preus de la papereria</h2>";
echo "<table border='1'><tr><th>Article</th><th>Preu</th></tr>";

// Recorrem l'array i mostrem cada article amb el seu preu
foreach ($preus as $article => $preu) {
    echo "<tr><td>$article</td><td>" . number_format($preu, 2) . " €</td></tr>";
    $total += $preu;
    if ($preu >= 2) {
        $cars++;
    }
}

// Mostrem el total i el nombre d'articles cars
echo "</table>";
echo "<p><b>Total: $total €</b></p>";
echo "<p>Articles amb preu >= 2 €: <b>$cars</b></p>";
?>

</body>
</html>