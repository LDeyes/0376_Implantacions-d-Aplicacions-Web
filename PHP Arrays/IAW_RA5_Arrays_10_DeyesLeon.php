<!DOCTYPE html>
<html lang="ca">
<head><meta charset="UTF-8"><title>IAW: Resum de Notes dels Alumnes</title></head>
<body>

<?php
// Creem un array de grup amb alumnes i les seves notes
$grup = [
    ["nom" => "Mar",  "notes" => [6, 8, 7]],
    ["nom" => "Pol",  "notes" => [4, 5, 3]],
    ["nom" => "Aina", "notes" => [9, 8, 10]],
    ["nom" => "Nil",  "notes" => []]
];

// Definim la constant per la nota d'aprovat
const NOTA_APROVAT = 5;

// Recorrem l'array de grup i calculem la mitjana de notes per cada alumne
foreach ($grup as $alumne) {
    echo "<h2>" . $alumne["nom"] . "</h2>";

    // Obtenim les notes de l'alumne
    $notes = $alumne["notes"];

    // Comprovem si l'alumne té notes
    if (count($notes) == 0) {
        echo "<p>Sense notes</p>";
    } else {
        $suma = 0;
        echo "<ul>";
        foreach ($notes as $nota) {
            echo "<li>$nota</li>";
            $suma += $nota;
        }
        echo "</ul>";

// Calculem la mitjana de notes i mostrem si l'alumne està aprovat o suspès
        $mitjana = $suma / count($notes);
        echo "<p>Mitjana: $mitjana</p>";
        
// Comprovem si l'alumne està aprovat o suspès
        if ($mitjana >= NOTA_APROVAT) {
            echo "<p><b>Aprovat</b></p>";
        } else {
            echo "<p><b>Suspès</b></p>";
        }
    }
}
?>

</body>
</html>