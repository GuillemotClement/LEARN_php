<?php 
require 'header.php'; 
require_once 'oldFunction.php';
printr($_GET);
?>


<main class="container my-3">
    <form action="/graphikart/jeu.php" method="get">
        <h3>Mon petit formulaire</h3>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="parfum[]" value="fraise" id="fraise">
            <label class="form-check-label" for="fraise">
                Fraise
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="parfum[]" value="vanille" id="vanille">
            <label class="form-check-label" for="vanille">
                Vanille
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="parfum[]" value="chocolat" id="chocolat">
            <label class="form-check-label" for="chocolat">
                Chocolat
            </label>
        </div>
        <input type="text" name="demo[]">
        <input type="text" name="demo[]">
        <div class="ctn-btn my-3">
            <button type="submit" class="btn btn-primary shadow">Deviner</button>
        </div>
    </form>
</main>


<?php 
require 'footer.php';

