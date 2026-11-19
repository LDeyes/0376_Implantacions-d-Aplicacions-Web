<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>7. Formulari amb radio buttons</title>
    <link rel="stylesheet" href="estil.css">
</head>
<body>

    <h1>Selecciona el teu gènere</h1>

    <form method="POST" action="RA5_Formularis_7_LeonDeyes.php">
        <input type="radio" name="genere" value="Home"> Home <br>
        <input type="radio" name="genere" value="Dona"> Dona <br>
        <input type="radio" name="genere" value="Altres"> Altres <br><br>

        <input type="submit" name="enviar" value="Enviar">
    </form>

    <hr>

    <?php
    if (isset($_POST["enviar"])) {

        if (isset($_POST["genere"])) {
            $genere = $_POST["genere"];
            echo "Has triat: " . $genere;
        } else {
            echo "Error: no has triat cap opció.";
        }
    }
    ?>

</body>
</html>
