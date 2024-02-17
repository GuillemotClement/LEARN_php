<?php 
$aDeviner = 150;

require 'header.php'; 


function setValue($string){
    if(isset($string)){
        return htmlentities($string);
    }
}
?>

<?php if(isset($_GET['chiffre'])) :?>
    <?php if($_GET['chiffre'] > $aDeviner): ?>
        Le chiffre est trop grand
    <?php elseif($_GET['chiffre'] < $aDeviner): ?>
        Le chiffre est trop petit
    <?php else:?>
        Bravo, vous avez deviner 
    <?php endif?>
<?php endif?>


<main class="container my-3">
    <form action="/graphikart/jeu.php" method="get">
        <h3>Mon petit formulaire</h3>
        <div class="mb-3">
            <label for="" class="form-label"></label>
            <input type="number" class="form-control" id="" name="chiffre" placeholder="entre 0 et 1000" value="<?=setValue($_GET['chiffre'])?>">
        </div>
        <div class="ctn-btn">
            <button type="submit" class="btn btn-primary shadow">Deviner</button>
        </div>
    </form>
</main>



<?php 
require 'footer.php';

