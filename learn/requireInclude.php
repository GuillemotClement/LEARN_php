<?php
//permet d'inclure des code au fichier. On indique entre guillemet le chemin vers le fichier à inclure
//les fonctions présentes dans le fichier "functionUser.php" sont maintenant disponible dans ce fichier
include 'functionUser.php';

demander_creneaux();

//require fonctionne de la même façon que include
//si le fichier que l'on souhaite importer n'existe pas, alors le script s'arrête
require 'fonction.php';

//include_once et require_once permet d'inclure une seule fois un fichier. La ligne est passé si le fichier à déjà été importé