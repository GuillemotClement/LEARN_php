<div class="row fixed-bottom bg-light p-3">
    <div class="col">
    
    </div>
    <div class="col">
        <form action="newsletter.php" method="post" class="form-inline">
            <div class="form-group">
                <input class="form-control my-3" type="email" name="email" placeholder="saisir adresse mail" required>
            </div>
            <button type="submit" class="btn btn-primary">S'inscrire</button>
        </form>
    </div>
    <div class="col">
        <h5 class="text-uppercase">Navigation</h5>
        <ul class="nav flex-column">
            <?= nav_menu('nav-link')?>
        </ul>
    </div>
</div>

</body>
</html>