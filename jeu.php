<?php 
$title = "Composer votre glace";
require 'header.php'; 
require_once 'oldFunction.php';

$parfums = [
    'fraise'=>4,
    'chocolat'=>5,
    'vanille'=>3,
];
$cornets = [
    'pot'=>2,
    'cornet'=>3,
];
$supplements = [
    'pépite de chocolat'=>2,
    'chantilly'=> 0.5,
];

$ingredients = [];
$total = 0;

if(isset($_GET['parfum'])){
    foreach($_GET['parfum'] as $parfum){
        if(isset($parfums[$parfum])){
            $ingredients[] = $parfum;
            $total += $parfums[$parfum];
        }
    }
}
if(isset($_GET['supplement'])){
    foreach($_GET['supplement'] as $supplement){
        if(isset($supplements[$supplement])){
            $ingredients[] = $supplement;
            $total += $supplements[$supplement];
        }
    }
}
// if(isset($_GET['cornet'])){
//     $cornet = $_GET['cornet'];
    
//     if(isset($cornets[$cornet])){
//         $ingredients[] = $cornet;
//         $total += $cornets[$cornet];
//     }
// }

printr($_GET);

?>

<main class="container my-3">
    <h1 class="text-center text-uppercase ">Composer votre glace</h1>
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Votre Glace</h5>
                    <ul>
                        <?php foreach($ingredients as $ingredient):?>
                            <li><?=$ingredient?></li>
                        <?php endforeach?>
                    </ul>
                    <p><strong><?=$total?></strong> $</p>
                </div>
            </div>
        </div>
        <div class="col">
        <form action="/graphikart/jeu.php" method="get">
        <div class="ctn-parfum my-3">
            <h3>Selection du parfum</h3>
            <?php foreach($parfums as $parfum=>$prix):?>
                <div class="checkbox">
                    <label for="">
                        <?=checkbox('parfum', $parfum, $_GET)?>
                        <?=$parfum?> - <?=$prix?> $
                    </label>
                </div>
            <?php endforeach?>
        </div>
        <div class="ctn-supplement my-3">
            <h3>Selection du supplément</h3>
            <?php foreach($supplements as $supplement=>$prix):?>
                <div class="checkbox">
                    <label for="">
                        <?=checkbox('supplement', $supplement, $_GET)?>
                        <?=$supplement?> - <?=$prix?> $
                    </label>
                </div>
            <?php endforeach?>
        </div>
        
    <button class="btn btn-success" type="submit">Créer ma glace</button>
    </form>
        </div>
    </div>
    
</main>


<?php 
require 'footer.php';
?>