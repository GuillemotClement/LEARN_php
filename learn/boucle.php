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
/*
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
*/

//on veut un système qui permet à l'utilisateur d'ajouter des notes, puis les afficher
/*
$notes = [];
$action = null;
while($action !== "fin"){
    $action = readline("Saisir la note. Saisir fin lorsque cette tâche est terminée.\n");
    if($action === 'fin'){
        break; 
    }
    $notes[] =(int)$action;
}
foreach($notes as $note){
    echo "- $note\n";
}
*/

//on demande à l'utilisateur de saisir les horaire d'ouverture du magasin
//on demande ensuite a l'user de rentrer une heure et on lui dit si le magasin est ouvert
$horaire = [];

while(true){
    $debut = (int)readline("Saisir l'heure d'ouverture : ");
    $fin = (int)readline("Saisir l'heure de fermeture : ");
    //on vérifie que l'heure saisis est correct pour la plage
    if($debut >= $fin){
        echo "Erreur de saisis des horaires\n";
        break;
    }else{
        //on vient créer un tableau de tableau qui contient la plage d'ouverture
        $horaire[] = [$debut, $fin];
        $action = readline("Souhaitez vous ajouter une plage d'ouverture ? (oui/non) : ");
        //permet de sortir la boucle si l'user à terminer d'indiquer les plages d'ouverture
        if($action !== "oui"){
            break;
        }
    }
}

echo "Le magasin est ouvert de ";
//par convention $k représente la clé lorsqu'il n'y a pas de valeur particulière
foreach($horaire as $k => $creneau){
    if($k > 0){
        echo "et de ";
    }
    // permet d'interpoler correctement la variable { }
    echo "{$creneau[0]}h à {$creneau[1]}h ";
}

/*
$heure = readline(("Saisir une heure d'arrivée :"));
//$creneauTrouver permet de savoir si l'heure est trouver dans une des plage d'ouverture
$creneauTrouver = false;
foreach($horaire as $creneau){
    //si l'heure saisis est trouver dans la plage, alors on passe la valeur de $creneauTrouver à true
    if($heure >= $creneau[0] && $heure <= $creneau[1]){
        $creneauTrouver = true;
        break;
    }
}
//si l'heure est dans un crenau, alors on affiche le message
if($creneauTrouver){
    echo "Le magasin sera ouvert.";
}else{
    echo "Le magasin sera fermé.";
}
*/
