<?php
$edat = 18;
$autoritzacio = true;

define("EDAT_MINIMA", 14);
define("EDAT_MAJOR", 18);

if ($edat < EDAT_MINIMA) {
    echo "No pots participar, has de tenir almenys 14 anys.";
} else {
    if ($edat >= EDAT_MAJOR) {
        echo "Ets major d'edat,pots participar sense autorització.";
    } else {
        if ($autoritzacio) {
            echo "Pots participar perquè tens autorització.";
        } else {
            echo "Necessites autorització per participar.";
        }
    }
}
?>