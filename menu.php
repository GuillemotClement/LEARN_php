<?php 
$title = "Menu";
//on vient récupérer le fichier source
$menu = file_get_contents(__DIR__ . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . 'menuTsv.tsv');
//PHP_EOL permet de récupérer la fin d'une ligne. Cela est passé comme séparateur dans explode()
$lignes = explode(PHP_EOL, $menu);
require 'elements/header.php';
?>

<main class="container">
    <!-- Test affichage des lignes du fichier source -->
    <?= dump($lignes);?>
</main>



<?php 
require 'elements/footer.php';