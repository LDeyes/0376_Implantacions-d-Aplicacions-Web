<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Entorn LAMP amb Docker</title>
</head>
<body>

<h1>Hola món!</h1>

<?php

$servidor = "db";
$usuari = "usuari";
$contrasenya = "contrasenya";
$base_dades = "exemple";

$connexio = mysqli_connect(
    $servidor,
    $usuari,
    $contrasenya,
    $base_dades
);

if (!$connexio) {
    die("Error de connexió: " . mysqli_connect_error());
}

echo "<h2>Connexió correcta!</h2>";
echo "<p>S'ha connectat correctament a la base de dades <strong>exemple</strong>.</p>";


mysqli_close($connexio);

?>

</body>
</html>
