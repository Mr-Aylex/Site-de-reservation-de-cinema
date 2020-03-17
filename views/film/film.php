<html>
<?php
include "../../include/header.php";
require_once($_SERVER['DOCUMENT_ROOT'] . "/site-de-reservation-de-cinema/manager/manager.php");
require_once($_SERVER['DOCUMENT_ROOT'] . "/site-de-reservation-de-cinema/model/Films.php");
$manager = new manager();
$tab_film = $manager->flush_film();
$film = $tab_film[$_GET['name']];

?>
<link rel="stylesheet" type="text/css" href="../../src/css_film/film.css" />
<script type="text/javascript" src="../../src/javascript/film.js"></script>
<body class="body">
    <div style="margin-top:100px;margin-left:100px;">
        <img class="img_la_foret" width="400" height="400" src="../../src/images/image_film/<?php echo $film->getImage(); ?>"></img>

    </div>

    <div class="vedette">
        <a class="btn btn-danger" href="../../formulaire/reservation_film.php?id_film=<?php echo $film->getId(); ?>&id_utilisateur=<?php $user->getId(); ?>">Reserver</a>
        Film en vedette
    </div>
        <a href="film_la_foret.php"> <img class="bord" width="175" height="220"
                                          src="../../src/images/image_film/bande_annonce_laforet.jpg"></img></a>
        <a href="film_sonic.php"> <img class="bord_2" width="175" height="220"
                                       src="../../src/images/image_film/bande_annonce_sonic.jpg"></img></a>
        <a href="film_harley_quinn.php"> <img class="bord_3" width="175" height="220"
                                              src="../../src/images/image_film/bande_annonce_harleyquinn.jpg"></img></a>
        <a href="film_the_boy.php"> <img class="bord_4" width="175" height="220"
                                         src="../../src/images/image_film/bande_annonce_theboy.jpg"></img></a>
    <div class="bande_annonce">
        <img class="laforet" src="../../src/images/image_film/<?php echo $film->getBande_annonce(); ?>"></img>
    </div>
    <h4 class="title"><?php echo $film->getTitre(); ?></h4>
    <div class="resume">
        <?php echo $film->getResume(); ?>
        <input type="button" href="../../views/watchlist.php" value="Ajouter ce film "></input>
        <input type="button" value="Bande annonce"></input>
        <input type="button" value="Partager ce film"></input>
    </div>
    <div class="trait">
    </div>
    <div class="tweet">
        <a class="twitter-timeline" data-width="400" data-height="800"
           href="https://twitter.com/BadBoys?ref_src=twsrc%5Etfw">Tweets by BadBoys</a>
        <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    </div>
    <div class="etoile">
        <i class="stars fas fa-star"></i>
        <i class="stars fas fa-star"></i>
        <i class="bordure fas fa-star"></i>
        <i class="bordure far fa-star"></i>
        <i class="bordure far fa-star"></i>
    </div>
    <div class="commentaire">
        <label>Laissez votre commentaire: </label>
        <form action="" method="POST">
            <textarea class="form" rows="5" column="10"></textarea>
            <input type="submit" value="Envoyer votre commentaire"></input>
        </form>
    </div>
</body>
<?php
include "../../include/footer.php";
?>
</html>
