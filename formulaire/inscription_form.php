<html>
<?php
include '../include/header.php';
?>
<body>
<form action="../traitement/inscription.php" method="post" class="container">
    <div class="form-group">
        <label for="nom">Nom</label>
        <input type="text" name="nom" id="nom" class="form-control">
    </div>
    <div class="form-group">
        <label for="prenom">Prenom</label>
        <input type="text" name="prenom" id="prenom" class="form-control">
    </div>
    <div class="form-group">
        <label for="mail">Adresse Mail</label>
        <input type="text" name="mail" id="mail" class="form-control">
    </div>
    <div class="form-group">
        <label for="adresse">Adresse</label>
        <input type="text" name="adresse" id="adresse" class="form-control">
    </div>
    <div class="form-group">
        <label for="mdp">Mot de passe</label>
        <input type="password" name="mdp" id="mdp" class="form-control">
    </div>
    <input type="submit" name="Valider" class="btn btn-primary">
</form>

</body>
<?php
include "../include/footer.php";
?>
</html>