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
$answer = repondreOuiNon("Souhaitez vous continuer (o/n) :");
var_dump($answer);