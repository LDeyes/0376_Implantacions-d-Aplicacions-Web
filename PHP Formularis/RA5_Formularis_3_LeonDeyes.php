<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>3. Formulari amb validació bàsica</title>
    <link rel="stylesheet" href="estil.css">
</head>
<body>
    <h1>Dades de Contacte</h1>
    <form method="POST" action="RA5_Formularis_3_LeonDeyes.php">
        Nom: <br>
        <input type="text" name="nom"> <br><br>
        Correu Electrònic: <br>
        <input type="text" name="correu"> <br><br>
        Missatge: <br>
        <textarea name="missatge"></textarea><br><br>
        <input type="submit" name="enviar" value="Enviar">
    </form>
    <hr>


    <?php

    if(isset($_POST["enviar"])) {
        $nom = $_POST["nom"];
        $correu = $_POST["correu"];
        $missatge = $_POST["missatge"];

        if($nom == "" or $correu == "" or $missatge == "") {
            echo "Error: Has d'omplir tots els camps.";
        } else {
            echo "<h2> Dades Rebudes: <h2>";
            echo "Nom: " . $nom . "<br>";
            echo "Correu: " . $correu . "<br>";
            echo "Missatge: " . $missatge;
        }
    }
    ?>

</body>
</html>