<?php 
//boucle tant que - while
//s'effectue tant que la condition est true
/*
//on lui donne une valeur NULL pour que la variable soit correctement initialiser
$number = null;

//on créer une boucle qui demande une saisie utilisateur tant que la saisie est pas égale au numéro à trouver
//la boucle vient demander une saisie de numéro tant que le bon chiffre n'est pas trouvé
while($number !== 10){
    //on demande une saisie de l'utilisateur
    $number = (int)readline("Saisir un chiffre :");
    echo "Dommage, ce n'est pas le bon nombre\n";
    break;
}

//pour sortir il faut trouver le bon nombre
echo "Bravo, vous avez devinez le chiffre";

//pour forcer la sortie de la boucle, on utilise un break
*/
/*---------------------------FOR--------------------------------*/
/*
for($i = 0; $i < 10; $i++){
    echo $i;
}

//pour compter de 2 en deux
//on utilise le += 2 pour ajouter 2 à la valeur de $i
for($i = 0; $i < 10; $i += 2){
    echo "$i\n";
}
*/
/*----------------------foreach------------------------*/
//cette boucle est utilisé pour parcourir un tableau 
// $notes = [14, 13, 12];

// foreach($notes as $note){
//     echo "$note \n";
// }

//pour récupérer les clé et valeur du tableau 
// $eleves = [
//     "cm1" => "Jean",
//     "cm2" => "Marc"
// ];

//pour récupérer uniquement les valeurs
// foreach($eleves as $eleve){
//     echo "L'élève s'apelle $eleve\n";
// }

//pour récupérer la clé et la valeur
// foreach($eleves as $classe => $eleve){
//     echo "Dans la classe de $classe, il y a $eleve\n";
// }

$eleves = [
    "cm1" => ["Jean", "Henry", "Adeline", "Clément"],
    "cm2" => ["Marc", "Manu", "Vanessa", "Damien"],
];
foreach($eleves as $classe => $listEleve){
    echo "La classe de $classe:\n";
    foreach($listEleve as $eleve){
        echo "- $eleve\n";
    }
}