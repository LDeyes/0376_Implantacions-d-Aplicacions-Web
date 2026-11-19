<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>5. Checkbox amb múltiples opcions</title>
    <link rel="stylesheet" href="estil.css">
</head>
<body>

    <h1>Quines aficions tens?</h1>

    <form method="POST" action="RA5_Formularis_5_LeonDeyes.php">
        <input type="checkbox" name="aficions[]" value="Futbol"> Futbol <br>
        <input type="checkbox" name="aficions[]" value="Música"> Música <br>
        <input type="checkbox" name="aficions[]" value="Lectura"> Lectura <br>
        <input type="checkbox" name="aficions[]" value="Videojocs"> Videojocs <br>
        <input type="checkbox" name="aficions[]" value="Cinema"> Cinema <br><br>

        <input type="submit" name="enviar" value="Enviar">
    </form>

    <hr>

    <?php
    if (isset($_POST["enviar"])) {

        if (isset($_POST["aficions"])) {

            echo "<h2>Les teves aficions:</h2>";
            echo "<ul>";

            foreach ($_POST["aficions"] as $aficio) {
                echo "<li>" . $aficio . "</li>";
            }

            echo "</ul>";

        } else {
            echo "No has seleccionat cap afició.";
        }
    }
    ?>

</body>
</html>
