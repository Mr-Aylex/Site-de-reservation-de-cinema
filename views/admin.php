
<html>
<?php
include "../include/header.php";
$manager = new manager();
$tab_user = $manager->recuperer_les_donnees_admin();
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
    <a href="" class="btn-success ">Ajouter un administrateur</a>
    <a href="" class="btn-danger ">Ajouter un film</a>
</section>


</body>

</html>
