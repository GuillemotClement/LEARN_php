<?php 
/*
//tableau simple. Indexé automatiquement
$notes = [10, 20, 12, 14, 8.5];
echo $notes[1]; //20
//tableau multi dimension
$eleves = ['Marc', 'Doe', [10, 20, 40]];
//pour accéder à la deuxième notes
echo $eleves[2][1]; //20

//tableau a clé
$eleve = [  
    'nom' => 'Doe',
    'prenom' => 'John',
    'notes' => [10, 20, 15]
];
echo $eleve['nom'];
echo $eleve['notes'][1]; //20
echo $eleve['nom'] . ' ' . $eleve['prenom']; //Doe John

//modifier un élément du tableau 
$notes[] = 15; //on ajoute 15 au tableau 
$eleve['nom'] = "Zwing"; //on modifie la valeur du tableau 
$eleve['notes'][3] = 16; //on modifie la note de l'élève

//pour afficher un tableau on utilise print_r()
print_r($eleve);

(
    [nom] => Zwing
    [prenom] => John
    [notes] => Array
        (
            [0] => 10
            [1] => 20
            [2] => 15
            [3] => 16
        )

)*/

$classe = [
    [
        'nom' => 'Doe',
        'prenom' => 'John',
        'notes' => [10, 14, 12]
    ],
    [
        'nom' => 'Doe',
        'prenom' => "Jenny",
        'notes' => [16, 13, 17]
    ]
];
//on veut afficher la dernière notes dans le premier tableau 
echo $classe[0]['notes'][2]; //12
