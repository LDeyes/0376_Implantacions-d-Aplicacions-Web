<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>2. Formulari amb mètode GET</title>
    <link rel="stylesheet" href="estil.css">
</head>
<body>
    <h1>Formulari amb metode GET</h1>
    <form method="GET" action="RA5_Formularis_2_LeonDeyes.php">
        <label>Nom:</label>
        <input type="text" name="nom">
        <br><br>
        <label>Edat:</label>
        <input type="text" number="edat">
        <br><br>
        <input type="submit" value="Enviar">
        </form>
    <hr>

    <?php
    // Comprovem si s'han rebut dades
    if (isset($_GET["nom"]) && isset($_GET["edat"])) {

        $nom = $_GET["nom"];
        $edat = $_GET["edat"];

        echo "<h2>Dades rebudes:</h2>";
        echo "Nom: " . $nom . "<br>";
        echo "Edat: " . $edat . " anys";
    }
    ?> 
</body>
</html>