<?php
$nom = "";
$correu = "";
$missatge = "";
$error = "";

if (isset($_POST["enviar"])) {
    $nom = $_POST["nom"];
    $correu = $_POST["correu"];
    $missatge = $_POST["missatge"];

# Salta un error si els camps no s'han omplert
    if ($nom == "" or $correu == "" or $missatge == "") {
        $error = "Error: has d'omplir tots els camps.";
    }
}
?>

<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>8. Reomplir valors si hi ha errors</title>
    <link rel="stylesheet" href="estil.css">
</head>
<body>
    <h1>Formulari</h1>
    <form method="POST" action="RA5_Formularis_8_LeonDeyes.php">
      <!-- Contingut del formulari-->
        Nom: <br>
        <input type="text" name="nom" value="<?php echo $nom; ?>"> <br><br>
        Correu: <br>
        <input type="text" name="correu" value="<?php echo $correu; ?>"> <br><br>
        Missatge: <br>
        <textarea name="missatge"><?php echo $missatge; ?></textarea> <br><br>
        <input type="submit" name="enviar" value="Enviar">
    </form>

    <hr>

  <!-- Salta un error o rep les dades de l'usuari segons el contingut del formularis -->
    <?php
    if (isset($_POST["enviar"])) {
        if ($error != "") {
            echo $error;
        } else {
            echo "<h2>Dades rebudes:</h2>";
            echo "Nom: " . $nom . "<br>";
            echo "Correu: " . $correu . "<br>";
            echo "Missatge: " . $missatge;
        }
    }
    ?>

</body>
</html>
