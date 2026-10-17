<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Reserva d'una activitat</title>
</head>
<body>

    <h1>Resum de la reserva</h1>

    <?php
   
    $nom = "Clara";
    $edat = 20;
    $esEstudiant = true;
    $placesDisponibles = 3;

 
    const EDAT_MINIMA = 16;
    const PREU_BASE = 30;
    const DESCOMPTE_ESTUDIANT = 20;

    
    echo "<p>Nom: $nom</p>";
    echo "<p>Edat: $edat anys</p>";

  
    if ($placesDisponibles == 0) {
        echo "<p>Activitat completa</p>";
    } elseif ($edat < EDAT_MINIMA) {
        echo "<p>No compleixes l'edat mínima</p>";
    } else {
    
        if ($esEstudiant == true) {
            $preuFinal = PREU_BASE - (PREU_BASE * DESCOMPTE_ESTUDIANT / 100);
        } else {
            $preuFinal = PREU_BASE;
        }

        echo "<p>Reserva possible</p>";
        echo "<p>Preu final: $preuFinal €</p>";
    }
    ?>

</body>
</html>