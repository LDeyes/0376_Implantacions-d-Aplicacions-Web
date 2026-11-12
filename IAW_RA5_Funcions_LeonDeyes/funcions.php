<?php
// Funció salutació personalitzada
function crearSalutacio($nom)
{
    return "Hola, $nom!";
}

// Funció de calcular l'import 
function calcularImport($preu, $quantitat)
{
    return $preu * $quantitat;
}

// Funció de descompte opcional
function aplicarDescompte($import, $percentatge=10)
{
    $descompte = $import - ($import * $percentatge / 100);
    return $import - $descompte;
}

// Funció de qualificacions d'una nota 
function obtenirQualificacio($nota) {
    if ($nota < 0 || $nota > 10) {
        return "Nota no vàlida";
    } elseif ($nota >= 5) {
        return "Aprovat";
    } else {
        return "Suspès";
    }
}

// Funció per comprovar les places
function hiHaPlaces($disponibles, $sollicitades)
{
    if ($disponibles >= 0 && $sollicitades > 0 && $sollicitades <= $disponibles) {
        return true;
    } else {
        return false;
    } 
}

// Funció per calcular la mitjana d'una llista de notes 
function calcularMitjana($notes) {
    if (count($notes) == 0) {
        return null;
    }
    $suma = 0;
    foreach ($notes as $nota) {
        $suma = $suma + $nota;
    }
    return $suma / count($notes);
}

// Funció per obtenir numeros parells
function obtenirParells($nombres) {
    $parells = [];
    foreach ($nombres as $nombre) {
        if ($nombre % 2 == 0) {
            $parells[] = $nombre;
        }
    }
    return $parells;
}
// Funció per resumir un grup
function resumirGrup($alumnes) {
    $total = 0;
    $aprovats = 0;
    $suspesos = 0;
    $suma = 0;

    foreach ($alumnes as $alumne) {
        $total++;
        $suma = $suma + $alumne["nota"];
        if ($alumne["nota"] >= 5) {
            $aprovats++;
        } else {
            $suspesos++;
        }
    }

    if ($total > 0) {
        $mitjana = $suma / $total;
    } else {
        $mitjana = null;
    }

    return [
        "total" => $total,
        "aprovats" => $aprovats,
        "suspesos" => $suspesos,
        "mitjana" => $mitjana
    ];
}
// Funció per reservar una activitat
function calcularReserva($preu, $participants, $esEstudiant) {
    $import = calcularImport($preu, $participants);

    if ($esEstudiant) {
        $percentatge = 20;
    } elseif ($participants == 4 || $participants == 5) {
        $percentatge = 10;
    } else {
        $percentatge = 0;
    }

    $total = aplicarDescompte($import, $percentatge);
    $descompte = $import - $total;

    return [
        "import" => $import,
        "percentatge" => $percentatge,
        "descompte" => $descompte,
        "total" => $total
    ];
}
// Funció per sumar un interval
function sumarFins($limit) {
    $suma = 0;
    for ($i = 1; $i <= $limit; $i++) {
        $suma = $suma + $i;
    }
    // Si el límit és menor que 1, el bucle no s'executa i retorna 0
    return $suma;
}