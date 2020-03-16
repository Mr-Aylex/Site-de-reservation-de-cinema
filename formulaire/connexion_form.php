<html>
<?php
include '../include/header.php';
?>
<body>
<form action="/Site-de-reservation-de-cinema/traitement/connexion.php" method="post" style="padding-top: 150px"class="container">
    <div class="form-group">
        <label for="mail">Adresse Mail</label>
        <input type="text" name="mail" id="mail" class="form-control">
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
