<?php
$usuari = "alumne";
$contrasenya = "php123";

const USUARI_CORRECTE = "alumne";
const CONTRASENYA_CORRECTA = "php123";

if ($usuari === USUARI_CORRECTE && $contrasenya === CONTRASENYA_CORRECTA) {
    echo "Accés permès";
} else {
    echo "Accés denegat";
}
?>