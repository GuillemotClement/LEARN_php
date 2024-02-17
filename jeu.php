<?php 
require 'header.php'; 
require_once 'oldFunction.php';

$parfums = [
    'Fraise'=>4,
    'Chocolat'=>5,
    'Vanille'=>3,
];

$cornets = [
    'Pot'=>2,
    'Cornet'=>3,
];

$supplement = [
    'Pépite de chocolat'=>2,
    'Chantilly'=> 0.5,
];

printr($_GET);

?>


<main class="container my-3">
    <form action="/graphikart/jeu.php" method="get">
        <div class="choiceParfum mb-3">
            <?=setCheckBox($parfums, 'parfums')?>
            
        </div>
        <div class="choiceCornet mb-3">
            <?=setRadio($cornets, "cornets")?> 
        </div>
        <div class="choiceSupplement mb-3">
            <?=setCheckBox($supplement, 'supplement')?>
        </div>
    <button type="submit">Submit</button>



    </form>
</main>


<?php 
require 'footer.php';

