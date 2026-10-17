<?php
$a = 10;
$b = 2;
$operacio = "/";

switch ($operacio) {
    case "+":
        echo $a + $b;
        break;

    case "-":
        echo $a - $b;
        break;

    case "*":
        echo $a * $b;
        break;

    case "/":
        if ($b == 0) {
            echo "No es pot dividir entre zero";
        } else {
            echo $a / $b;
        }
        break;

    default:
        echo "Operació no vàlida";
}
?>