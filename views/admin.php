
<html>
<?php
include "../include/header.php";
$manager = new manager();
$tab_user = $manager->recuperer_les_donnees_admin();
$tab_place = $manager->Getplaces();
?>
<body style="background-image: url('../src/images/fonds_de_pages/fond_modification.jpg'); background-size: cover">
<section class="container">
    <table class="table table-striped">
        <thead>
        <tr>
            <th class="text-white">Id</th>
            <th class="text-white">Nom</th>
            <th class="text-white">Prenom</th>
            <th class="text-white">Adresse</th>
            <th class="text-white">Mail</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($tab_user as $keys => $value) { ?>
        <tr>
            <th class="text-white"><?php echo $value->getId() ?></th>
            <th class="text-white"><?php echo $value->getNom() ?></th>
            <th class="text-white"><?php echo $value->getPrenom() ?></th>
            <th class="text-white"><?php echo $value->getAdresse() ?></th>
            <th class="text-white"><?php echo $value->getMail() ?></th>
        </tr>
        <?php } ?>
        </tbody>
    </table>
</section>
<section class="container">
    <a href="../formulaire/ajout_admin_form.php" class="btn-success btn">Ajouter un administrateur</a>
    <a href="" class="btn-secondary btn">Ajouter un film</a>
</section>
<section class="container">
    <table class="table table-striped">
        <thead>
        <tr>
            <th class="text-white">Id</th>
            <th class="text-white">Tarif</th>
            <th class="text-white">Type de tarif</th>
            <th class="text-white">salle</th>
            <th class="text-white">film</th>
            <th class="text-white">Id de l'utilisateur</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($tab_place as $keys => $valeur) { ?>
            <tr>
                <th class="text-white"><?php echo $valeur->getNumero() ?></th>
                <th class="text-white"><?php echo $valeur->getTarif() ?></th>
                <th class="text-white"><?php echo $valeur->getType_de_tarif() ?></th>
                <th class="text-white"><?php echo $valeur->getSalle() ?></th>
                <th class="text-white"><?php echo $valeur->getId_film() ?></th>
                <th class="text-white"><?php echo $valeur->getId_utilisateur() ?></th>
                <th>
                    <a href="../traitement/supprimer_place.php?numero=<?php echo $valeur->getNumero() ?>" class="btn-danger btn">Supprimer</a>
                </th>
                <th>
                    <a href="../traitement/modifier_place.php?numero=<?php echo $valeur->getNumero() ?>" class="btn-light btn">Modifier</a>
                </th>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</section>


</body>

</html>
