<?php 
//écriture dans un fichier.
// file_put_contents('demo.txt', "Hello world");

//un fois le script lancé, le fichier est cré avec le contenu indiqué

// Affichage du chemin complet du fichier
// var_dump(__FILE__);
/*
clement@MacBook-Pro-de-Clement cli % php test.php
string(49) "/Applications/MAMP/htdocs/graphikart/cli/test.php"
*/
//récupérer le chemin absolu.
$fichier = __DIR__ . DIRECTORY_SEPARATOR . 'demo.txt';
// echo $fichier;
//on utilise $fichier pour placer le fichier dans le bon dossier
file_put_contents($fichier, 'Hello World');
//attention, si on refait cette ligne, le contenu précédent est écrasé
//pour ajouter à la suite, on utilise le FLAG -> FILE_APPEND
file_put_contents($fichier, 'Ablaplkakfi', FILE_APPEND);

$parent = var_dump(dirname(__DIR__));

//string(36) "/Applications/MAMP/htdocs/graphikart"

//gestion erreur silencieuse
// $size = @file_put_contents($fichier, "Hello World");
// if($size === false){
//     echo "Impossible d'écrire le fichier";
// }else{
//     echo "Ecriture réussies";
// }

//lire le contenu d'un fichier
echo file_get_contents($fichier);
//Hello WorldAblaplkakfi%      

//utilisation de fopen
//ressource serait un très gros fichier excel par exemple
//l'argument 'r' pour mode lecture seul cf doc
$ressource = fopen($fichierExcel, 'r');

//pour lire un certain nombre de caractère
//on vient lire les deux premiers octects
echo fread($ressource, 2);

//renvoi un tableau d'info sur le fichier
var_dump(fstat($ressource));

//lire une ligne courante. Il fait également avancer le curseur à la ligne suivante
var_dump(fgets($ressource));

//pour lire une ligne précise du document, on utilise une boucle qui amène à la ligne souhaité
$k = 0;
while($ligne = fgets($ressource)){
    $k++;
    if($k == 1230){
        echo $ligne;
        break;
    }
}

//fermer le fichier
fclose($fichier);