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


    <div>
    <video  width="320" height="240" controls muted loop autoplay>
<source  src="../../src/video/<?php$film->getVideo()); ?>" ype="video/mp4"></source>

  </video>
</div>

    <div style="margin-top:500px;"class="bande_annonce">
        <img class="laforet" width="300" height="300" src="../../src/images/image_film/<?php echo $film->getBande_annonce(); ?>"></img>
    </div>
    <h4 style="  margin-left:420px;"class="title"><?php echo $film->getTitre(); ?></h4>
    <div style=" margin-left:420px;"class="resume">
        <?php echo $film->getResume(); ?>
        <input style="color:white;"type="button" href="../../views/watchlist.php" value="Ajouter ce film "></input>
        <input style="color:white;"type="button" value="Bande annonce"></input>
        <input style="color:white;"type="button" value="Partager ce film"></input>
        </div>
    <a style="margin-left:440px;margin-top:10px;" class="btn btn-danger" href="../../formulaire/reservation_film.php?id_film=<?php echo $film->getId(); ?>&id_utilisateur=<?php $user->getId(); ?>">Reserver</a>
    <div class="tweet">
        <a class="twitter-timeline" data-width="400" data-height="800"
           href="<?php echo $film->getTweet();?>">Tweets by BadBoys</a>
        <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    </div>

    <div class="etoile">
        <i class="stars fas fa-star"></i>
        <i class="stars fas fa-star"></i>
        <i class="bordure far fa-star"></i>
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
