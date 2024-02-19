<?php 
$title = "Contact";
require_once 'data/config.php';
require_once 'fonction.php';
date_default_timezone_set('Europe/Paris');
$heure = (int)($_GET['heure'] ?? date('G'));
$jour = (int)($_GET['jour'] ?? date('N') - 1);
$creneaux = CRENEAUX[$jour];
$ouvert = in_creneau($heure, $creneaux);
$color = $ouvert ? "green" : "red";
include 'elements/header.php' ;
?>


<main class="container">
    <div class="row">
        <div class="col">
            <h2>Nous contacter</h2>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Est illo doloremque qui atque, delectus odit, adipisci, quo rerum culpa iure accusamus hic molestiae blanditiis exercitationem facere! Cumque ipsam neque soluta.</p>
        </div>

        <div class="col">
            <h2>Nos horaires d'ouvertures</h2>
            <?php if($ouvert):?>
            <div class="alert alert-success">
                Le magasin sera ouvert
            </div>
            <?php else: ?>
            <div class="alert alert-danger">
                Le magasin sera fermé
            </div>
                <form action="" method="get" class="my-3">
                    <div class="form-group">
                        <?php select('jour', $jour, JOURS)?>
                    </div>
                    <div class="form-group my-3">
                        <input class="form-control" type="number" name="heure" value="<?=$heure?>">
                    </div>
                    <button type="submit" class="btn btn-primary shadow my-3">Vérifier l'ouverture du magasin</button>
                </form>




            
            <?php endif?>
            <ul>
                <?php foreach(JOURS as $k=>$jour):?>
                    <li <?php if($k + 1 === (int)date('N')):?>
                        style="color: <?=$color?>"
                        <?php endif?>>
                        <strong><?=$jour?> :</strong>
                        <?=creneaux_html(CRENEAUX[$k]);?>
                    </li>
                <?php endforeach;?>
            </ul> 
        </div>
    </div>
</main>

<?php 
require 'elements/footer.php';