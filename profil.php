<?php 
$username = null;
//creation de la clear cookie
if(!empty($_GET['action']) && $_GET['action'] === 'deconnecter'){
    //on détruit la valeur de 'utilisateur' dans $_cookie
    unset($_COOKIE['utilisateur']);
    //on fait un retour dans le passé sur le cookie pour le reset
    setcookie('utilisateur', '', time()-10);
}
//on vérifie que le cookie est définit et qu'il contient bien la valeur username
if(!empty($_COOKIE['utilisateur'])){
    $username = $_COOKIE['utilisateur'];
}

//on vérifie post a une valeur et on créer un cookie avec le nom que l'user à indiquer dans le formulaire
//ce cookie est valable le temps que l'user ne quitte pas le navigateur
if(!empty($_POST['username'])){
    setcookie('username', $_POST['username'], time()+60*60*24*30);
    $username = $_POST['username'];
}


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