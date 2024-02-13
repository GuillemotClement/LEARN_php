<?php 
/*
//declarer une fonction
function maFonction($parametre){
    return $parametre;
}

//appeler une fonction 
$var = maFonction($arg);
*/

//on demande un mot à l'user et on lui dit si c'est un  palyndrome
/*
while(true){
    $word = strtolower(readline("Saisir un mot :"));
    if($word === ""){
        //si l'user entre une chaîne vide, alors le programme est quitter
        exit("Fin du programme");
    }
    $reverseWord = strrev($word);
    if($word === $reverseWord){
        echo "Le mot $word est un palyndrome $reverseWord ";
    }else{
        echo "Le mot $word n'est pas un palydrome $reverseWord ";
}
}

*/
/*
$notes = [13, 12, 15, 13];

$sumArr = array_sum($notes);
$nbArr = count($notes);

$average = $sumArr / $nbArr;
$resultRound = round($average, 2);

echo "La moyennde des notes est de $resultRound ";
*/

//------------FILTRE A INSULTE ----------- 
$insultes = ['merde', 'putain', 'con'];
$wordFilter = [];

foreach($insultes as $insulte){
    //recup première lettre du mot
    $wordFilter[] = substr($insulte, 0, 1) . str_repeat('*', strlen($insulte) - 1);
    //on recup la taille du mot et on concatène avec la premiere lettre
}
$sentence = readline("Saisir une phrase à filter :");
//deuxième facon
$sentence = str_replace($insultes, $wordFilter, $sentence);
/*
//on vient parcourir le tableau d'insulte
foreach($insultes as $insulte){
    //on vient récupère le nombre de caractère de l'insulte
    $lengthInsulte = strlen($insulte);
    //on récupère le nombre de caractère de l'insulte
    $replace = str_repeat("*", $lengthInsulte);
    //on vient remplacer les insultes de la phrase par des étoile
    $sentence = str_replace($insulte, $replace, $sentence);
}
*/
echo $sentence;
