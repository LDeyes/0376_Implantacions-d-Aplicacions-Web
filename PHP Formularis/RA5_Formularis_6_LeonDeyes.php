<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>6. Selecció amb menú desplegable</title>
    <link rel="stylesheet" href="estil.css">
</head>
<body>

    <h1>Ciutat d'origen</h1>

    <form method="POST" action="RA5_Formularis_6_LeonDeyes.php">
        Tria una ciutat: <br>
        <select name="ciutat">
            <option value="Barcelona">Barcelona</option>
            <option value="Girona">Girona</option>
            <option value="Lleida">Lleida</option>
            <option value="Tarragona">Tarragona</option>
        </select>
        <br><br>
        <input type="submit" name="enviar" value="Enviar">
    </form>

    <hr>

    <?php
    if (isset($_POST["enviar"])) {

        $ciutat = $_POST["ciutat"];

        echo "La teva ciutat d'origen és: " . $ciutat;
    }
    ?>

</body>
</html>
