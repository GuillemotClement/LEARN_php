<?php
//on créer un cookie qui envoi le nom de l'user
//1er argument est la clé du cookie
//2eme argument est la valeur du cookie
//pour le 3eme c'est la date en timestamp. si rien alors le cookie est valable tant que l'user ne quitte pas le navigateur
//le cookie est valable 24h
setcookie('utilisateur', 'John', time()+60*60*24);

//interagir avec cookie avec $_COOKIE
print_r($_COOKIE);


//Attention, les manip d'en-tête doit toujours être placé sur la primière ligne du fichier.