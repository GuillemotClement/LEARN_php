<?php
$error = null;
$email = null;
$success = null; 
if(!empty($_POST['email'])){
    $email = $_POST['email'];
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        $file = __DIR__ . DIRECTORY_SEPARATOR . 'emails' . DIRECTORY_SEPARATOR . date('Y-m-d') . '.txt';
        file_put_contents($file, $email . PHP_EOL, FILE_APPEND);
        $success = "Email enregistré";
        $email = null;
    } else {
        $error = "Email invalide";
    }
}





require 'elements/header.php';
?>

<div class="container">
    <h1>S'inscrire à la newsletter</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia quo earum voluptate sequi facilis, quae distinctio porro eveniet odit fugit tempora soluta quam doloremque delectus aliquid quos totam minima sint!</p>

    <?php if($error):?>
        <div class="alert alert-danger">
            <?=$error?>
        </div>
        <?php endif?>
    <?php if($success):?>
        <div class="alert alert-success">
            <?=$success?>
        </div>
    <?php endif?>

    <form action="newsletter.php" method="post" class="form-inline">
    <div class="form-group">
        <input class="form-control my-3" type="email" name="email" placeholder="saisir adresse mail" value="<?=@htmlentities($email)?>" required>
    </div>
    <button type="submit" class="btn btn-primary">S'inscrire</button>
    </form>
</div>





<?php
require 'elements/footer.php';