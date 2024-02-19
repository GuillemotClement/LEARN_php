<?php 
require_once 'fonction.php';
$title = "Menu";
//on vient récupérer le fichier source
$lignes = file(__DIR__ . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . 'menuCsv.csv');
foreach($lignes as $k => $ligne){
    $lignes[$k] = str_getcsv(trim($ligne, " \t\n\r\0\x0B,"));
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
                <strong><?=number_format($ligne[2], 2, ',', '  ')?> $</strong>
            </p>
        <?php endif?>
    <?php endforeach?>
</main>



<?php 
require 'elements/footer.php';