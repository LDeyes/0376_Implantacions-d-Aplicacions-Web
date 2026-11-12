<?php
require_once __DIR__ . "/funcions.php";
?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Pràctica de funcions</title>
</head>
<body>
    <h1>Pràctica de funcions</h1>
    <h2>Exercici 1: Salutació Personalitzada</h2>
    <?php
    // Crides i presentació dels resultats.
    echo "<p>" . crearSalutacio("Laia") . "</p>";
    echo "<p>" . crearSalutacio("Pol") . "</p>";
    ?>
        <h2>Exercici 2: Import d'una Compra</h2>
    <?php
    // Crides i presentació dels resultats.
    echo "<p>12,5 € x 3 = " . calcularImport(12.5, 3) . " € </p>";
    echo "<p>8 € x 2 = " . calcularImport(8,2) . " € </p>";
    ?>
        <h2>Exercici 3: Descompte Opcional</h2>
    <?php
    // Crides i presentació dels resultats.
     $total1 = aplicarDescompte(80);
    $total2 = aplicarDescompte(80, 25);
    $total3 = aplicarDescompte(80, 0);
    ?>
    <table border="1">
        <tr>
            <th>Import inicial</th>
            <th>Percentatge</th>
            <th>Total final</th>
        </tr>
        <tr>
            <td>80 €</td>
            <td>10 % (per defecte)</td>
            <td><?php echo $total1; ?> €</td>
        </tr>
        <tr>
            <td>80 €</td>
            <td>25 %</td>
            <td><?php echo $total2; ?> €</td>
        </tr>
        <tr>
            <td>80 €</td>
            <td>0 %</td>
            <td><?php echo $total3; ?> €</td>
        </tr>
    </table> 
    <h2>Exercici 4: Qualificació d’una nota</h2>
    <?php
    $notesProva = [-1, 4.5, 5, 8, 11];
    echo "<table border='1'>";
    echo "<tr><th>Nota</th><th>Resultat</th></tr>";
    foreach ($notesProva as $nota) {
        echo "<tr>";
        echo "<td>" . $nota . "</td>";
        echo "<td>" . obtenirQualificacio($nota) . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    ?>
    <h2>Exercici 5: Comprovar les places</h2>
    <?php
    $proves = [[5, 3], [5, 5], [5, 6], [0, 1], [5, 0]];
    echo "<table border='1'>";
    echo "<tr><th>Disponibles</th><th>Sol·licitades</th><th>Resultat</th></tr>";
    foreach ($proves as $prova) {
        $disponibles = $prova[0];
        $sollicitades = $prova[1];

        if (hiHaPlaces($disponibles, $sollicitades)) {
            $missatge = "Reserva possible";
        } else {
            $missatge = "Reserva no possible";
        }

        echo "<tr>";
        echo "<td>" . $disponibles . "</td>";
        echo "<td>" . $sollicitades . "</td>";
        echo "<td>" . $missatge . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    ?>

    <h2>Exercici 6: Suma d’un interval</h2>
    <?php
    $limits = [5, 10, 0];
    foreach ($limits as $limit) {
        echo "<p>Límit: " . $limit . " - Suma: " . sumarFins($limit) . "</p>";
    }
    ?>

    <h2>Exercici 7: Mitjana d’una llista de notes</h2>
    <?php
    $llistes = [[6, 8, 7], [4, 5], []];
    foreach ($llistes as $notes) {
        $mitjana = calcularMitjana($notes);
        echo "<p>Notes: " . implode(", ", $notes) . " → ";
        if ($mitjana === null) {
            echo "No hi ha notes";
        } else {
            echo "Mitjana: " . $mitjana;
        }
        echo "</p>";
    }
    ?>

    <h2>Exercici 8: Obtenir els nombres parells</h2>
    <?php
    $proves8 = [
        [3, 8, 5, 2, 10, 7],
        [1, 3, 5],
        []
    ];

    foreach ($proves8 as $nombres) {
        $parells = obtenirParells($nombres);

        echo "<p>Nombres originals:</p>";
        echo "<ul>";
        foreach ($nombres as $nombre) {
            echo "<li>" . $nombre . "</li>";
        }
        echo "</ul>";

        echo "<p>Nombres parells:</p>";
        if (count($parells) == 0) {
            echo "<p>No hi ha nombres parells</p>";
        } else {
            echo "<ul>";
            foreach ($parells as $parell) {
                echo "<li>" . $parell . "</li>";
            }
            echo "</ul>";
        }
        echo "<hr>";
    }
    ?>

    <h2>Exercici 9: Resum d’un grup</h2>
    <?php
    $alumnes = [
        ["nom" => "Laia", "nota" => 7],
        ["nom" => "Pol", "nota" => 4],
        ["nom" => "Aina", "nota" => 9],
        ["nom" => "Nil", "nota" => 5]
    ];
    $grupBuit = [];

    $resum = resumirGrup($alumnes);
    echo "<h3>Grup amb alumnes</h3>";
    echo "<table border='1'>";
    echo "<tr><th>Total</th><td>" . $resum["total"] . "</td></tr>";
    echo "<tr><th>Aprovats</th><td>" . $resum["aprovats"] . "</td></tr>";
    echo "<tr><th>Suspesos</th><td>" . $resum["suspesos"] . "</td></tr>";
    echo "<tr><th>Mitjana</th><td>";
    if ($resum["mitjana"] === null) {
        echo "Sense dades";
    } else {
        echo $resum["mitjana"];
    }
    echo "</td></tr>";
    echo "</table>";

    $resumBuit = resumirGrup($grupBuit);
    echo "<h3>Grup buit</h3>";
    echo "<table border='1'>";
    echo "<tr><th>Total</th><td>" . $resumBuit["total"] . "</td></tr>";
    echo "<tr><th>Aprovats</th><td>" . $resumBuit["aprovats"] . "</td></tr>";
    echo "<tr><th>Suspesos</th><td>" . $resumBuit["suspesos"] . "</td></tr>";
    echo "<tr><th>Mitjana</th><td>";
    if ($resumBuit["mitjana"] === null) {
        echo "Sense dades";
    } else {
        echo $resumBuit["mitjana"];
    }
    echo "</td></tr>";
    echo "</table>";
    ?>

    <h2>Exercici 10: Resum d’una reserva d’activitat</h2>
    <?php
    $activitat = ["nom" => "Robòtica", "preu" => 20, "places" => 5];
    $participants = 2;
    $esEstudiant = true;

    if (hiHaPlaces($activitat["places"], $participants) == false) {
        echo "<p>No hi ha places suficients</p>";
    } else {
        $reserva = calcularReserva($activitat["preu"], $participants, $esEstudiant);

        echo "<p>Activitat: " . $activitat["nom"] . "</p>";
        echo "<p>Participants: " . $participants . "</p>";
        echo "<p>Import: " . $reserva["import"] . " €</p>";
        echo "<p>Percentatge: " . $reserva["percentatge"] . " %</p>";
        echo "<p>Descompte: " . $reserva["descompte"] . " €</p>";
        echo "<p>Total: " . $reserva["total"] . " €</p>";
    }
    ?>
</body>
</html>