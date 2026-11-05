<!DOCTYPE html>
<html lang="ca">
<head><meta charset="UTF-8"><title>IAW: Notes dels Alumnes</title></head>
<body>

<?php
// Creem un array d'alumnes amb les seves notes
$alumnes = [
    ["nom" => "Mar",  "nota" => 7],
    ["nom" => "Pol",  "nota" => 4],
    ["nom" => "Aina", "nota" => 9],
    ["nom" => "Nil",  "nota" => 5]
];

// Definim la nota mínima per aprovar
const NOTA_APROVAT = 5;

// Inicialitzem variables per al total, aprovats i suspensos
$total = 0;
$aprovats = 0;
$suspensos = 0;

echo "<h2>Notes dels alumnes</h2>";
echo "<table border='1'><tr><th>Nom</th><th>Nota</th><th>Resultat</th></tr>";

// Recorrem l'array d'alumnes i calculem el total, aprovats i suspensos
foreach ($alumnes as $alumne) {
    $nom = $alumne["nom"];
    $nota = $alumne["nota"];
    $total += $nota;

    if ($nota >= NOTA_APROVAT) {
        $resultat = "Aprovat";
        $aprovats++;
    } else {
        $resultat = "Suspès";
        $suspensos++;
    }

    echo "<tr><td>$nom</td><td>$nota</td><td>$resultat</td></tr>";
}

echo "</table>";

// Mitjana on també comprovem que hi hagi alumnes
if (count($alumnes) > 0) {
    $mitjana = $total / count($alumnes);
    echo "<p><b>Mitjana: $mitjana</b></p>";
} else {
    echo "<p>No hi ha alumnes</p>";
}

echo "<p>Aprovats: <b>$aprovats</b> | Suspensos: <b>$suspensos</b></p>";

// Prova amb array buit
echo "<hr>";
echo "<h2>Prova amb array buit</h2>";

$alumnes = [];
$total = 0;

if (count($alumnes) > 0) {
    $mitjana = $total / count($alumnes);
    echo "<p>Mitjana: $mitjana</p>";
} else {
    echo "<p>No hi ha alumnes</p>";
}
?>

</body>
</html>