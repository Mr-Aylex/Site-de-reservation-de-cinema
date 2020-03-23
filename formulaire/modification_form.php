<html>
<?php
require '../model/Films.php';
include '../include/header.php';
?>
<body style="background-image: url('../src/images/fonds_de_pages/fond_modification.jpg')">
<form action="../traitement/modification.php" method="post" style="padding-top: 150px; padding-bottom: 50px"class="container">
    <div class="form-group">
        <label for="nom" class="text-white">Nom</label>
        <input type="text" name="nom" id="nom" class="form-control" value="<?php echo $user->getNom()?>">
    </div>
    <div class="form-group">
        <label for="prenom" class="text-white">Prenom</label>
        <input type="text" name="prenom" id="prenom" class="form-control" value="<?php echo $user->getPrenom()?>">
    </div>
    <div class="form-group">
        <label for="mail" class="text-white">Adresse Mail</label>
        <input type="text" name="mail" id="mail" class="form-control" value="<?php echo $user->getMail()?>">
    </div>
    <div class="form-group">
        <label for="adresse" class="text-white">Adresse</label>
        <input type="text" name="adresse" id="adresse" class="form-control" value="<?php echo $user->getAdresse()?>">
    </div>
    <input type="submit" name="Valider" class="btn btn-primary">
</form>

</body>
<?php
include "../include/footer.php";
?>
</html>