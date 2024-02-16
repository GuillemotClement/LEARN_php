<?php
include_once 'function.php';
//on créer une variable qui prendra la valeur de title de la page
$title = "Accueil";
//isset
//on vient importer le code du header qui est commune à chaque page du site.
$nav = "index";
// printr($_SERVER);
require 'header.php';
?>

<main class="container">
    <h1 class="text-uppercase text-center">Accueil</h1>
    <div class="container col-xxl-8 px-4 py-5">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-10 col-sm-8 col-lg-6">
                <img src="Public/img/hero.jpg" class="d-block mx-lg-auto img-fluid rounded shadow" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
            </div>
            <div class="col-lg-6">
            <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">Blablabla</h1>
            <p class="lead">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illo molestiae debitis asperiores porro quod labore at repellendus temporibus. Corrupti sint cumque velit animi dignissimos magni aut hic possimus, iure ex.</p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                <button type="button" class="btn btn-primary btn-lg px-4 me-md-2 shadow text-uppercase">Primary</button>
                <button type="button" class="btn btn-outline-secondary btn-lg px-4 shadow text-uppercase">Default</button>
            </div>
        </div>
        </div>
    </div>
</main>

<?php 
//on vient imporer le footer qui est commun à chaque page
require 'footer.php';

//démarrer un serveur local php
// $ php -S localhost:8000 dans le terminal