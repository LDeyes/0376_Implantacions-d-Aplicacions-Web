<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>4. Validació de correu</title>
    <link rel="stylesheet" href="estil.css">
</head>
<body>

    <h1>Validació de correu</h1>

    <form method="POST" action="RA5_Formularis_4_LeonDeyes.php">
        Correu electrònic: <br>
        <input type="text" name="correu"> <br><br>
        <input type="submit" name="enviar" value="Enviar">
    </form>

    <hr>

    <?php
    if (isset($_POST["enviar"])) {

        $correu = $_POST["correu"];

        if (filter_var($correu, FILTER_VALIDATE_EMAIL)) {
            echo "El correu és vàlid: " . $correu;
        } else {
            echo "Error: el correu no és vàlid.";
        }
    }
    ?>

</body>
</html>