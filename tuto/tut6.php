<?php
// Récupération des deux nombres
$nombre1 = number_format(readline("entre first number : "));

$nombre2 = number_format(readline("entre first number : "));

// Récupération de l'opération

$operation = readline("Choisissez l'opération (+, -, *, /) : ");

// Calcul en fonction de l'opération
switch ($operation) {
    case "+":
        $resultat = $nombre1 + $nombre2;
        break;
    case "-":
        $resultat = $nombre1 - $nombre2;
        break;
    case "*":
        $resultat = $nombre1 * $nombre2;
        break;
    case "/":
        if ($nombre2 == 0) {
            echo "Division par zéro impossible !\n";
        } else {
            $resultat = $nombre1 / $nombre2;
        }
        break;
    default:
        echo "Opération invalide.\n";
}

// Affichage du résultat
if (isset($resultat)) {
    echo "Le résultat est : " . $resultat . "\n";
}
?>