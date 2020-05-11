<!DOCTYPE html>
<html lang="" dir="ltr">
<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="../src/css/formulaire_film.css"/>

</head>
<body class="body">
<?php include "../include/header.php" ?>
<form class="form" action="../traitement/ajout_film.php" method="post" class="container">
    <h1 style="">Ajoutez votre film : </h1>
    <label class="label" style="color:white;" for="">Entrez le titre de votre film : </label>
    <div>
        <input class="" style="color:white;" type="text" name="titre" placeholder="Titre film..."/>
    </div>
    <div>
        <label style="color:white;">Enrez le numéro de la salle :</label>
        <input type="number" name="salle"/>
    </div>
    <div>
        <label class="label" style="color:white;" for="">Ajouter l'image du film :</label>
        <input type="text" id="image_film" style="color:white;" name="image" placeholder="nom du fichier avec extension">
    </div>
    <div>
        <label class="label" style="color:white;" for="">Ajoutez le résumé du film :</label>

        <input style="color:white;" type="text" name="resume" placeholder="Résumé du film..."/>
    </div>
    <div>
        <label class="label" style="color:white;" for="">Ajouter la bande annonce du film :</label>
        <input type="text" id="bande_annonce_film" style="color:white;" name="bande_annonce" placeholder="nom du fichier avec extension">
    </div>
    <div>
        <label style="color:white;">Enrez le lien twitter :</label>
        <input style="color:white;" type="text" name="tweet" placeholder="Lien Twitter..."/>
    </div>


    <input style="color:#fff;background-color:#f9cf22;" type="submit" value="Ajouter"/>

</form>

<?php include "../include/footer.php" ?>
</body>
</html>
