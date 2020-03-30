<html>
<?php
include '../include/header.php';
?>
<body>
<form action="../traitement/ajout_admin.php" method="post" class="container" style="padding-top: 100px; padding-bottom: 50px">
    <div class="form-group">
        <label for="nom" class="text-white">Nom</label>
        <input type="text" name="nom" id="nom" class="form-control">
    </div>
    <div class="form-group">
        <label for="prenom" class="text-white">Prenom</label>
        <input type="text" name="prenom" id="prenom" class="form-control">
    </div>
    <div class="form-group">
        <label for="mail" class="text-white">Adresse Mail</label>
        <input type="text" name="mail" id="mail" class="form-control">
    </div>
    <div class="form-group">
        <label for="adresse" class="text-white">Adresse</label>
        <input type="text" name="adresse" id="adresse" class="form-control">
    </div>

    <div class="form-group">
        <label for="admin" class="text-white">Mot de passe admin</label>
        <input type="password" name="admin" id="admin" class="form-control">
    </div>

    <input type="submit" name="Valider" class="btn btn-primary">
</form>

</body>
<?php
include "../include/footer.php";
?>
</html>
