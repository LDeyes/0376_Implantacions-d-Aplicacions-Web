<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>1. Formulari de nom</title>
    <link rel="stylesheet" href="estil.css">
</head>
<body>
    <h1>Benvinguda personalitzada</h1>
    <form action="RA5_Formularis_1_LeonDeyes.php" method="post">
        <p>
            <label for="nom">Nom</label>
            <input type="text" id="nom" name="nom" required>
        </p>
        <button type="submit">Benvingut</button>
    </form>
</body>
</html>

    <?php
    $nom = "";
    $error = "";
    if ($_SERVER["REQUEST_METHOD"] !== "POST") {
        $error = "Envia les dades des del formulari.";
    } else {
        $dada = $_POST["nom"] ?? "";
        if (!is_string($dada) || trim($dada) === "") {
            $error = "Cal indicar un nom.";
        } else {
            $nom = trim($dada);
        }
    }
    ?>

<!DOCTYPE html>
<html lang="ca">
<head><meta charset="UTF-8"><title>Resposta</title><link rel="stylesheet" href="estil.css"></head>
<body>
    <h1>Resposta</h1>
    <?php if ($error !== ""): ?>
        <p><?php echo htmlspecialchars($error); ?></p>
    <?php else: ?>
        <p>Benvingut/da, <?php echo htmlspecialchars($nom); ?>!</p>
    <?php endif; ?>
    <p><a href="RA5_Formularis_1_LeonDeyes.php">Tornar al formulari</a></p>
</body>
</html>