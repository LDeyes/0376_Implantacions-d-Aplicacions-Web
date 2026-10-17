<?php
$nota = 7.5;

if ($nota < 0 || $nota > 10) {
    echo "Nota no vàlida";
} elseif ($nota < 5) {
    echo "Suspès";
} elseif ($nota < 6) {
    echo "Aprovat";
} elseif ($nota < 7) {
    echo "Bé";
} elseif ($nota < 9) {
    echo "Notable";
} else {
    echo "Excel·lent";
}
?>