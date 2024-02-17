<?php 
if(!function_exists('nav_item')){
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
        $path = getBasenamePath($_SERVER['REQUEST_URI']);
        if($path === $lien){
            $classe .= ' active';
        }
        //ajout de la balise avec la syntaxe heredoc
        $html = <<<HTML
        <li class="nav-item">
            <a class="$classe $linkClass" href="$lien">$titre</a>
        </li>
HTML;
        return $html;
    }
}

?>


<?=nav_item("index.php", 'Accueil', $linkClass)?>
<?=nav_item("contact.php", 'Contact', $linkClass)?>
<?=nav_item("jeu.php", 'Jeu', $linkClass)?>