<?php 
require_once 'fonction.php';
$title = "Menu";
//on vient récupérer le fichier source
$lignes = file(__DIR__ . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . 'menuTsv.tsv');
foreach($lignes as $k => $ligne){
    $lignes[$k] = explode("\t", trim($ligne));
}
require 'elements/header.php';
?>

<main class="container">
    <h1>Menu</h1>
    <?php foreach($lignes as $ligne):?>
        <?php if(count($ligne) === 1): ?>
            <h2><?=$ligne[0]?></h2>
        <?php else:?>
            <p>
                <strong><?=$ligne[0]?></strong><br>
                <?=$ligne[1]?>
                <?=number_format($ligne[2], 2, ',', '  ')?> $
            </p>
        <?php endif?>
    <?php endforeach?>
</main>



<?php 
require 'elements/footer.php';