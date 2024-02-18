<?php 
$title = "Contact";
require_once 'config.php';
require_once 'fonction.php';
include 'header.php' 
?>


<main class="container">
    <div class="row">
        <div class="col">
            <h2>Nous contacter</h2>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Est illo doloremque qui atque, delectus odit, adipisci, quo rerum culpa iure accusamus hic molestiae blanditiis exercitationem facere! Cumque ipsam neque soluta.</p>
        </div>
        <div class="col">
            <h2>Nos horaires d'ouvertures</h2>
            <ul>
                <?php foreach(JOURS as $k=>$jour):?>
                    <li>
                        <strong><?=$jour?> :</strong>
                        <?=creneaux_html(CRENEAUX[$k]);?>
                    </li>
                <?php endforeach;?>
            </ul> 
        </div>
    </div>
</main>

<?php 
require 'footer.php';