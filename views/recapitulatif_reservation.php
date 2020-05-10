<html>
<?php
include "../include/header.php";
$unique = unserialize($_SESSION['reservation'])
?>
<body style="background-image: url('../src/images/fonds_de_pages/fond_modification.jpg'); background-size: cover">
<section class="container">
    <table class="table table-striped">
        <thead>
        <tr>
            <th class="text-white">Numéro</th>
            <th class="text-white">Tarif</th>
            <th class="text-white">Type_de_tarif</th>
            <th class="text-white">Id utilisateur</th>
            <th class="text-white">Salle</th>
        </tr>
        </thead>
        <tbody>

        <tr>
            <th class="text-white"><?php echo $unique["numero"] ?></th>
            <th class="text-white"><?php echo $unique["tarif"] ?></th>
            <th class="text-white"><?php echo $unique["type_de_tarif"]?></th>
            <th class="text-white"><?php echo $unique["id_utilisateur"] ?></th>
            <th class="text-white"><?php echo $unique["salle"] ?></th>

        </tr>


        </tbody>
    </table>
</section>



</body>

</html>
