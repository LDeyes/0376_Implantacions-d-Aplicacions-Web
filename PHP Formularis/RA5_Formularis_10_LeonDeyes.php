<?php
$nom = "";
$correu = "";
$assumpte = "";
$missatge = "";
$error = "";
$correcte = false;

if (isset($_POST["enviar"])) {
    $nom = $_POST["nom"];
    $correu = $_POST["correu"];
    $assumpte = $_POST["assumpte"];
    $missatge = $_POST["missatge"];

    // Comprovem que no hi hagi camps buits
    if ($nom == "" or $correu == "" or $assumpte == "" or $missatge == "") {
        $error = "Error: has d'omplir tots els camps.";

    // Comprovem que el correu sigui vàlid
    } else if (!filter_var($correu, FILTER_VALIDATE_EMAIL)) {
        $error = "Error: el correu no és vàlid.";

    // Tot correcte
    } else {
        $correcte = true;
    }
}
?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>10. Mini projecte: Formulari de contacte</title>
    <link rel="stylesheet" href="estil.css">
</head>
<body>
    <h1>Formulari de contacte</h1>
    <?php
    // Mostrem l'error en vermell
    if ($error != "") {
        echo "<p style='color: red;'>" . $error . "</p>";
    }
    // Mostrem la confirmació en verd
    if ($correcte == true) {
        echo "<p style='color: green;'>El missatge s'ha enviat correctament!</p>";
        echo "<h2>Resum:</h2>";
        echo "Nom: " . htmlspecialchars($nom) . "<br>";
        echo "Correu: " . htmlspecialchars($correu) . "<br>";
        echo "Assumpte: " . htmlspecialchars($assumpte) . "<br>";
        echo "Missatge: " . htmlspecialchars($missatge);
    }
    ?>

    <form method="POST" action="RA5_Formularis_10_LeonDeyes.php">
        Nom: <br>
        <input type="text" name="nom" value="<?php echo $nom; ?>"> <br><br>
        Correu electrònic: <br>
        <input type="text" name="correu" value="<?php echo $correu; ?>"> <br><br>
        Assumpte: <br>
        <input type="text" name="assumpte" value="<?php echo $assumpte; ?>"> <br><br>
        Missatge: <br>
        <textarea name="missatge"><?php echo $missatge; ?></textarea> <br><br>
        <input type="submit" name="enviar" value="Enviar">
    </form>
</body>
</html>
