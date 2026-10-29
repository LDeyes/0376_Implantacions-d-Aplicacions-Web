<?php
$estalvi = 0;
define("OBJECTIU", 120);
define("APORTACIO", 25);

$setmana = 0;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Simulació d'estalvi</title>
</head>
<body>
    <h1>Simulació d'estalvi setmanal</h1>
    
    <p>Objectiu: <?php echo OBJECTIU; ?> €</p>
    <p>Aportació setmanal: <?php echo APORTACIO; ?> €</p>
    
    <table border="0">
        <tr>
            <th>Setmana</th>
            <th>Estalvi acumulat</th>
        </tr>
        
        <?php
        while ($estalvi < OBJECTIU) {
            $setmana = $setmana + 1;
            $estalvi = $estalvi + APORTACIO;
            
            echo "<tr>";
            echo "<td>";
            echo $setmana;
            echo "</td>";
            echo "<td>";
            echo $estalvi;
            echo " €";
            echo "</td>";
            echo "</tr>";
        }
        ?>
    </table>
    
    <br>
    
    <p>
        Setmanes necessàries: <?php echo $setmana; ?>
    </p>
    
    <p>
        Total estalviat: <?php echo $estalvi; ?> €
    </p>
</body>
</html>