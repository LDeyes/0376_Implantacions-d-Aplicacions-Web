<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>9. Sanitització de dades</title>
    <link rel="stylesheet" href="estil.css">
</head>
<body>
  <!-- Crea una capsa de comentaris al cos de la pagina -->
    <h1>Deixa un comentari</h1>
    <form method="POST" action="RA5_Formularis_9_LeonDeyes.php">
        Comentari: <br>
        <textarea name="comentari" rows="5" cols="40"></textarea> <br><br>
        <input type="submit" name="enviar" value="Enviar">
    </form>
    <hr>
    <?php
    if (isset($_POST["enviar"])) {

        $comentari = $_POST["comentari"];

        echo "<h2>El teu comentari:</h2>";
        echo htmlspecialchars($comentari);
    }
    ?>
</body>
</html>
