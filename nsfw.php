<?php 
$age = null;

if(!empty($_POST['birthday'])){
    setcookie('birthday', $_POST['birthday']);
    //le set cookie ne créer pas la valeur, il faut la créer "manuellement"
    $_COOKIE['birthday'] = $_POST['birthday'];
}

if(!empty($_COOKIE['birthday'])){
    $birthday = (int)$_COOKIE['birthday'];
    $age = (int)date('Y') - $birthday;
}

require 'elements/header.php';

?>

<main class="container">

    <?php if($age && $age >= 18):?>
        <p>Gros cochon</p>
    <?php elseif($age && $age < 18):?>
        <div class="alert alert-danger">
            Vous n'avez pas l'age requis
        </div>
    <?php else:?>
    <form action="" method="post">
        <h2>Saisir année de naissance</h2>
        <div class="mb-3 ">
            <label for="birthday" >Section réservé pour les adultes. Entrez votre année de naissance</label>
            <select name="birthday" class="form-control" id="birthday">
                <?php for($i = 2020; $i > 1919; $i--):?>
                <option value="<?=$i?>"><?=$i?></option>
                <?php endfor?>
            </select>
        </div>
        <button type="submit" class="btn btn-warning">Envoyer</button>
    </form>
    <?php endif?>
</main>

<?php 
require 'elements/footer.php';
