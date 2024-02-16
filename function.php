<?php
/**
 * Cette fonction prend un tableau, et retourne ses valeurs avec les balises <pre>...</pre>
 * @author : ClementGlt
 * @version : 1.0
 * @param array $arr le tableau à afficher
 * @return array le tableau avec les balises <pre>...</pre>
 */
function printr(array $arr):array
{
    echo "<pre>";
    print_r($arr);
    echo "</pre>";
    die;
}

/**
 * Cette fonction permet de récupérer l'extension d'un nom de fichier
 * @author :ClementGlt
 * @version : 1.0
 * @param string $basename - le nom du fichier avec son extension
 * @return string $extension - l'extension du fichier
 * */
function getExtension(string $basename) :string
{
    $extension = strrchr($basename, '.');
    return $extension;
}

/**
 * Cette fonction permet de récupérer le nom du fichier avec son extension en lui passant le path
 * @author : ClementGlt
 * @version : 1.0
 * 
 * @param string $path - le path du fichier que l'on souhaite recupérer avec extension
 * @return string $basename - le nom du ficheir avec son extension
 * 
*/
function getBasenamePath(string $path) :string
{
    $infoPath = pathinfo($path);
    $basename = $infoPath['basename'];
    return $basename;
}

/**
 * Cette fonction permet de récupérer le nom du fichier sans son extension
 * @author : ClementGlt
 * @version : 1.0
 * @param string  $basename - le nom du fichier avec son extension
 * @return string $basenameWithoutExtension - le nom du fichier sans son extension
*/
function withoutExtension(string $basename) :string
{
    $pos_point = strpos($basename, '.');
    $basenameWithoutExtension = substr($basename, 0, $pos_point);
    return $basenameWithoutExtension;
}

/**
 * Cette fonction prend le path d'un fichier et retourne son basename sans l'extension
 *
 * @param string $path - le path d'un fichier
 * @return string $page - retourne le nom du fichier sans son extension
 */
function getPage(string $path) :string
{
    $basename = getBasenamePath($path);
    $page = withoutExtension($basename);
    return $page;
}
/**
 * Permet de mettre en valeur la page active dans le header. Ajoute également le de la page 
 * 
 * @param string $path - le path de la page demandé [SCRIPT_NAME]
 * @param string $pageActive - le nom que l'on souhaite ajouter
 * @return string retourne les balises HTML avec le code souhaité
 */
function pageActive(string $path, string $pageActiv) 
{
    $script = getPage($path);
    if($script === $pageActiv){
        echo '<li class="nav-item"><a href="'.$pageActiv.'.php" class="nav-link text-uppercase active">'.$pageActiv.'</a></li>';
    }else{
        echo '<li class="nav-item"><a href="'.$pageActiv.'.php" class="nav-link text-uppercase">'.$pageActiv.'</a></li>';
    }

}
