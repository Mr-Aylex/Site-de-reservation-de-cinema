<html>
<?php
include "../include/header.php";
$tab_places = $_SESSION['dernieres_places'];
?>
<body style="background-image: url('../src/images/fonds_de_pages/fond_modification.jpg'); background-size: cover">
<section class="container">
    <table class="table table-striped">
        <thead>
        <tr>
            <th class="text-white">Tarif</th>
            <th class="text-white">Type de tarif</th>
            <th class="text-white">Salle</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($tab_places as $key => $value) { ?>
        <tr>
            <th class="text-white"><?php echo $value->getTarif(); ?>€</th>
            <th class="text-white"><?php echo $value->getType_de_tarif(); ?></th>
            <th class="text-white"><?php echo $value->getSalle(); ?></th>

        </tr>

        <?php } ?>
        </tbody>
    </table>
</section>



</body>

</html>
