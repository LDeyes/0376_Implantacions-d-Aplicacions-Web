<?php
$nombre = 7;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Taula de Multiplicar</title>
</head>
<body>
    <h1>Taula del <?php echo $nombre; ?></h1>

     <table border="1">
        <tr>
            <th>Operació</th>
            <th>Resultat</th>
        </tr>

        <?php
        for ($i = 1; $i <= 10; $i++) {
            echo "<tr>";
            echo "<td>$nombre × $i</td>";
            echo "<td>" . ($nombre * $i) . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>