<?php
/*
//definir une fonction
function bonjour(string $name = null) :string
{
    if($name === null){
        return "Bonjour";
    }else{
        return "Bonjour $name";
    }
    
}

$sentence = bonjour('Clément');
echo $sentence;
//Hello Clément

//les globale sont utilisable partout dans le code.
//Attetion, c'est une mauvaise pratique.
$maGlobal = 7;
function maFonct(){
    global $maGlobal;
}
*/

function repondreOuiNon($sentence){
    while(true){
        $reponse = readline($sentence . "'o' - oui OU 'n' - non\n :");
        if($reponse === "o"){
            return true;
        }elseif($reponse === "n"){
            return false;
        }
    }
}
// $answer = repondreOuiNon("Souhaitez vous continuer (o/n) :");
// var_dump($answer);

function demander_creneau(string $sentence = "Veuillez entre un crenau"){
    echo $sentence . "\n";
    while(true){
        $ouverture = (int)readline("Heure d'ouverture : ");
        if($ouverture >= 0 && $ouverture <= 23){
            break;
        }
    }
    while(true){
        $fermeture = (int)readline("Heure de fermeture : ");
        if($fermeture >= 0 && $fermeture <= 23 && $fermeture > $ouverture){
            break;
        }
    }
    return [$ouverture, $fermeture];
} 

//le typage permet de vérouiller le type de données que peux prendre une fonction
//le point d'interrogation indique que le paramètre peut être null
function demander_creneaux(?string $sentence = "Saisir vos créneaux : ") :array
{
    $creneaux = [];
    $continuer = true;
    while($continuer){
        $creneaux[] = demander_creneau();
        $continuer = repondreOuiNon("voulez vous continuer ? ");
    }
    return $creneaux;
}

$creneaux = demander_creneaux();
print_r($creneaux);