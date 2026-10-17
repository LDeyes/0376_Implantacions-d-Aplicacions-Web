<?php
$temp= 20;

const LIMIT_FRED = 15;
const LIMIT_CALOR = 25;

if ($temp < LIMIT_FRED) {
    echo "Fa fred";
} elseif ($temp >= LIMIT_FRED && $temp <= LIMIT_CALOR) {
    echo "La temperatura és agradable";
} else {
    echo "Fa calor";
}
?>