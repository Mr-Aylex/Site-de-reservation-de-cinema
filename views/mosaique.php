
<?php
include "../include/header.php";
require_once($_SERVER['DOCUMENT_ROOT']."/site-de-reservation-de-cinema/manager/manager.php");
require_once($_SERVER['DOCUMENT_ROOT']."/site-de-reservation-de-cinema/model/Films.php");
$manager = new manager();
$tab_film = $manager->flush_film();
?>
<html>
<body>
<table style="">
    <tr>

        <?php foreach ($tab_film as $item => $value) {?>
        <td>
            <div class="division bas" style="width: 18rem;">

                <a href="../views/film/film_la_foret.php"><img class="img" height="200" width="150"
                                                               src="../src/images/image_film/<?php echo $value->getImage(); ?>"
                                                               class="" alt="..."/></a>
                <span class="icon">Films</span>
                <div class="card-body">
                    <h5 class="titre_film card-title"><?php echo $value->getTitre(); ?></h5>
                </div>
            </div>
        </td>
        <?php } ?>
        <!--

        <td>
            <div class="division bas" style="width: 18rem;">

                <a href="../views/film/film_harley_quinn.php"><img class="img" height="200" width="150"
                                                                   src="../src/images/image_film/Harley_quinn.jpeg"
                                                                   class="" alt="..."/></a>
                <span class="icon">Films</span>
                <div class="card-body">
                    <h5 class="titre_film card-title">Harley Quinn</h5>
                </div>
            </div>
        </td>-->
    </tr>
</table>
<?php
include "../include/footer.php";
?>
</body>
</html>