<?php 
//on utilise serialuze() pour convertir ke tableau en string utilisable par php
$user = [
    'prenom'=>"John",
    'nom'=>"Doe",
    'age'=>20,
];
setcookie('utilisateur', serialize($user));

//si on souhaite récupérer le tableau du cookie
$utilisateur = $_COOKIE['utilisateur'];
var_dump(unserialize($utilisateur)); //on peut afficher les valeurs du tableau contenu dans le cookie

require 'elements/header.php';
?>
<main class="container">
<!-- Si username existe alors on affiche "Bonjour name -->
    <?php if($username):?>
        <div class="alert alert-success">
            Bonjour <?= htmlentities($username)?>
        </div>
        <!-- Creation d'un lien qui permet de clear le cookie -->
        <a href="profil.php?action=deconnecter">Logout</a>
    <?php else:?>
        <form action="" method="post">
            <label for="username">Name :</label>
            <input type="text" name="username" id="username" required>
            <button type="submit" class="btn btn-primary shadow">Send</button>
        </form>
    <?php endif?>
</main>

<?php require 'elements/footer.php'?>