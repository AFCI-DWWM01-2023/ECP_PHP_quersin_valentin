<?php
require "fonctions.php";
/////////////////////////////////// EXO 3 /////////////////////////////////// 
// Déclaration de variables...
$end=0; // variable fin de boucle
// Début prog...
echo "Racine de l'équation du 2nd degré\n".str_repeat(" ",10)."Y = ax² + bx + c\n\n"; // Echo Head... str_repeat pour spam des caractères...
while($end!=1){ // Lancement boucle...
    $a = readline("Quel est la valeur de a : "); // Demande la valeur de "a" à l'utilisateur...
    $b = readline("Quel est la valeur de b : "); // Demande la valeur de "b" à l'utilisateur...
    $c = readline("Quel est la valeur de c : "); // Demande la valeur de "c" à l'utilisateur...
    calculEquation($a,$b,$c); // Fonction pour calculer la circonférence et la surface du cercle...
    $reply = readline("Voulez-vous continuer ? "); // Demande si l'utilisateur veut un autre calcul...
    if($reply == "N"){ // Analyse de la réponse utilisateur si non...
        $end++; // Incrémentation de ma variable fin de boucle pour en sortir et terminer le programme...
        echo "Au revoir et à bientôt"; // Au revoir...
    } 
    // Si oui...
} // Fin boucle...
// Fin prog...
?>