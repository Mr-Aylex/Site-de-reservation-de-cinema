<html>
<?php
include "../../include/header.php";
require_once($_SERVER['DOCUMENT_ROOT'] . "/site-de-reservation-de-cinema/manager/manager.php");
require_once($_SERVER['DOCUMENT_ROOT'] . "/site-de-reservation-de-cinema/model/Films.php");
$manager = new manager();
$tab_film = $manager->flush_film();
$film = $tab_film[$_GET['name']];


if ($film->getImage() == "the_boy.jpeg"){
  $path = "boy.mp4";

}

if ($film->getImage() == "Appel_de_la_foret.jpg"){
  $path = "foret.mp4";

}

if ($film->getImage() == "sonic.jpeg"){
  $path = "sonic.mp4";

}

if ($film->getImage() == "birds_of_prey.jpeg"){
  $path = "quinn.mp4";

}

if ($film->getImage() == "bad_boys.jpeg"){
  $path = "bad_boy.mp4";

}
?>
<link rel="stylesheet" type="text/css" href="../../src/css_film/film.css" />
<script type="text/javascript" src="../../src/javascript/film.js"></script>
<body class="body">

  <div style="background-position: right -100px;background-image: url('../../src/images/image_film/<?php echo $film->getImage()?>');">
    <div style="margin-top:100px;margin-left:350px;">
      <video  width="720" height="640" controls muted loop autoplay>


    <source  src="../../src/video/<?php echo $path ?>" ype="video/mp4"></source>

    </video>
    </div>
</div>

    <div style="margin-top:300px;"class="bande_annonce">
        <img class="laforet" width="300" height="300" src="../../src/images/image_film/<?php echo $film->getBande_annonce(); ?>"></img>
    </div>
    <h4 style="  margin-left:420px;"class="title"><?php echo $film->getTitre(); ?></h4>
    <div style=" margin-left:420px;"class="resume">
        <?php echo $film->getResume(); ?>
        <a class="btn btn-danger"href="../../views/watchlist.php" >Ajouter ce film</a>
        <a class="btn btn-danger" >Partager ce film</a>
      <a style="margin-left:440px;margin-top:10px;" class="btn btn-danger" href="../../formulaire/reservation_film.php?id_film=<?php echo $film->getId(); ?>&id_utilisateur=<?php $user->getId(); ?>">Reserver</a>
        </div>

    <div class="tweet">
        <a class="twitter-timeline" data-width="400" data-height="800"
           href="<?php echo $film->getTweet();?>">Tweets by php</a>
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
