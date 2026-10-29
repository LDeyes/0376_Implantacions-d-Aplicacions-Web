<?php
$notes = array(4,7.5, 5, 3, 9,6);
define ("NOTA_APROVAT","5");
$aprovats = 0;
$suspesos = 0;
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Notes Alumnes</title>
    </head>
    <body>
        <h1>Qualificacions</h1>
    <table>
        <tr>
            <th>Nota</th>
            <th>Resultat</th>
        </tr>
        
        <?php
        foreach ($notes as $nota) {
            echo "<tr>";
            echo "<td>";
            echo $nota;
            echo "</td>";
            
            echo "<td>";
            if ($nota >= NOTA_APROVAT) {
                echo "Aprovat";
                $aprovats = $aprovats + 1;
            } else {
                echo "Suspès";
                $suspesos = $suspesos + 1;
            }
            echo "</td>";
            
            echo "</tr>";
        }
        ?>
    </table>
    
    <br>
    <br>
    
    <p>
        Total aprovats: <?php echo $aprovats; ?>
    </p>
    
    <p>
        Total suspesos: <?php echo $suspesos; ?>
    </p>
    </body>
</html>