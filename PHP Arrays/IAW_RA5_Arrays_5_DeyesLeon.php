<!DOCTYPE html>
<html lang="ca">
<head><meta charset="UTF-8"><title>IAW: Camp Existent o Camp Buit </title></head>
<body>

<?php
$contacte = ["nom" => "Pol", "telefon" => null];

// --- CAMP "telefon" ---
echo "<h2>telefon</h2>";

if (array_key_exists("telefon", $contacte)) {
    echo "<p>array_key_exists: La clau 'telefon' SÍ existeix.</p>";
} else {
    echo "<p>array_key_exists: La clau 'telefon' NO existeix.</p>";
}

if (isset($contacte["telefon"])) {
    echo "<p>isset: La clau 'telefon' existeix i NO és null.</p>";
} else {
    echo "<p>isset: La clau 'telefon' NO existeix o és null.</p>";
}

// --- CAMP "email" ---
echo "<h2>email</h2>";

if (array_key_exists("email", $contacte)) {
    echo "<p>array_key_exists: La clau 'email' SÍ existeix.</p>";
} else {
    echo "<p>array_key_exists: La clau 'email' NO existeix.</p>";
}

if (isset($contacte["email"])) {
    echo "<p>isset: La clau 'email' existeix i NO és null.</p>";
} else {
    echo "<p>isset: La clau 'email' NO existeix o és null.</p>";
}

/*
 * Per què els resultats són diferents per a "telefon"?
 *
 * array_key_exists() només mira si la clau existeix a l'array,
 * tant se val quin valor tingui (encara que sigui null).
 *
 * isset() mira si la clau existeix I a més el seu valor NO és null.
 * Com que "telefon" val null, isset() retorna false.
 */
?>

</body>
</html>