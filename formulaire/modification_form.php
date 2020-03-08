<html>
<?php
include '../include/header.php';
?>
<body>
<form action="../traitement/modification.php" method="post">
    <div class="form-group">
        <label for="nom">Nom</label>
        <input type="text" name="nom" id="nom" class="form-control" value="<?php echo $user->getNom()?>">
    </div>
    <div class="form-group">
        <label for="prenom">Prenom</label>
        <input type="text" name="prenom" id="prenom" class="form-control" value="<?php echo $user->getPrenom()?>">
    </div>
    <div class="form-group">
        <label for="mail">Adresse Mail</label>
        <input type="text" name="mail" id="mail" class="form-control" value="<?php echo $user->getMail()?>">
    </div>
    <div class="form-group">
        <label for="adresse">Adresse</label>
        <input type="text" name="adresse" id="adresse" class="form-control" value="<?php echo $user->getAdresse()?>">
    </div>
    <input type="submit" name="Valider" class="btn btn-primary">
</form>

</body>
<?php
include "../include/footer.php";
?>
</html>