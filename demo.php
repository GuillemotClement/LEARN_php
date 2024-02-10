<?php 
//condition if/else
//(int) permet de convertir le type 
//readline() permet de récupérer une saisie user
//par défaut le type est string, et il faut penser à convertir son type selon les besoin 
/*
$note = (int)readline("Saisir la note :\n");
if($note > 10){
    echo "Tu as bien travaillé\n";
}elseif($note < 10){
    echo "Il va falloir bosser la\n";
}else{
    echo "C'est vraiment limite\n";
}
*/
//=== permet de faire une comparaison strict. C'est la méthode à privilieger

//switch est une syntaxe alternative 
/*
$action = (int)readline("Saisir une action : 1 - atttaque 2- défence 3 - fuite\n");
switch($action){
    case 1:
        echo "Tu t'avances et tu attaques.\n";
        break;
    case 2:
        echo "Tu te prôtège, et tu encaisse l'attaques.\n";
        break;
    case 3:
        echo "Tu fuis comme une grosse merde.\n";
        break;
    default:
        echo "Erreur, commande non disponible.\n";
}
*/

$heure = (int)readline("Entrez une heure :\n");
if(($heure > 9 && $heure < 12) || ($heure > 14 && $heure < 19)){
//pour vérifier l'inverse on met un ! on vient vérifier l'inverse de ce qui est vérifié true devien false et inversement
//if(!(($heure > 9 && $heure < 12) || ($heure > 14 && $heure < 19)){
    echo "Le magasin est ouvert\n";
}else{
    echo "Le magasin est fermé\n";
} 