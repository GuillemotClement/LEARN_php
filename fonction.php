<?php 


/**
 * fonction permet de mettre en valeur le lien de la page active dans la navbar
 *
 * @param string $lien vers la page que l'on souhaite consulter
 * @param string $titre le titre que l'on souhiate mettre dans la navbarre
 * @return string retourne la base ajouter dans la barre nav
 */
function nav_item(string $lien, string $titre, string $linkClass = " ") :string
{
    $classe = "";
    // $path = getBasenamePath($_SERVER['REQUEST_URI']);
    // if($path === $lien){
    //     $classe .= ' active';
    // }
    //ajout de la balise avec la syntaxe heredoc
    $html = <<<HTML
    <li class="nav-item">
        <a class="$classe $linkClass" href="$lien">$titre</a>
    </li>
HTML;
    return $html;
}


function nav_menu(string $linkClass = ""):string
{
    return 
    nav_item("index.php", 'Accueil', $linkClass) . 
    nav_item("contact.php", 'Contact', $linkClass) . 
    nav_item("jeu.php", 'Jeu', $linkClass);
}


/**
 * Cette fonction permet de créer une liste checkbox 
 *
 * @param array $arr - le tableau qui contient les différentes valeurs 
 * @param string $name - le name appliquer sur cette liste de checkbox
 * @return void - retourne le HTML de la liste checkbox
 */
function setCheckBox(array $arr, string $name)
{   
    foreach($arr as $key=>$value){
        $html = <<<HTML
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="{$key}" id="{$key}" name="{$name}[]">
            <label class="form-check-label" for="{$key}">
                {$key} - {$value} $
            </label>
        </div>
        HTML;   
        echo $html;
    }
}

/**
 * Cette fonction permet de créer une liste radio
 *
 * @param array $arr - le tableau qui contient les différentes valeurs 
 * @param string $name - le name appliquer sur cette liste de checkbox
 * @return void - retourne le HTML de la liste radio
 */
function setRadio(array $arr, string $name)
{
    foreach($arr as $key=>$value){
        $html = <<<HTML
        <div class="form-check">
            <input class="form-check-input" type="radio" value="{$key}" id="{$key}" name="{$name}">
            <label class="form-check-label" for="{$key}">
                {$key} - {$value} $
            </label>
        </div>
        HTML;   
        echo $html;
    }
}