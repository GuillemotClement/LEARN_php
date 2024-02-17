<?php 
$aDeviner = 150;
$erreur = null;
$succes = null;
$value = null;

if(isset($_POST['chiffre'])){
    if($_POST['chiffre'] > $aDeviner){
        $erreur = "Le chiffre est trop grand";
    }elseif($_POST['chiffre'] < $aDeviner){
        $erreur = "Le chiffre est trop petit";
    }else{
        $succes = "Bravo, vous avez deviner";
    }
    $value = (int)$_POST['chiffre'];
}

require 'header.php'; 
?>


<?php if($erreur):?>
    <div class="alert alert-danger">
        <?= $erreur ?>
    </div>
<?php elseif($succes):?>
    <div class="alert alert-success">
        <?=$succes?>
    </div>
<?php endif?>


<main class="container my-3">
    <form action="/graphikart/jeu.php" method="post">
        <h3>Mon petit formulaire</h3>
        <div class="mb-3">
            <label for="" class="form-label"></label>
            <input type="number" class="form-control" id="" name="chiffre" placeholder="entre 0 et 1000" value="<?=$value?>">
        </div>
        <div class="ctn-btn">
            <button type="submit" class="btn btn-primary shadow">Deviner</button>
        </div>
    </form>
</main>


<?php 
require 'footer.php';

