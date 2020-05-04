<html>
<?php
include "../../include/header.php";
require_once($_SERVER['DOCUMENT_ROOT'] . "/site-de-reservation-de-cinema/manager/manager.php");
require_once($_SERVER['DOCUMENT_ROOT'] . "/site-de-reservation-de-cinema/model/Films.php");
$manager = new manager();
$tab_film = $manager->flush_film();
$film = $tab_film[$_GET['name']];
var_dump($_GET);


if ($film->getImage() == "the_boy.jpeg"){
  $path = "boy.mp4";
  $titre = "The boy";
}

if ($film->getImage() == "Appel_de_la_foret.jpg"){
  $path = "foret.mp4";
  $titre = "L'appel de la forêt";
}

if ($film->getImage() == "sonic.jpeg"){
  $path = "sonic.mp4";
  $titre = "The boy";
}

if ($film->getImage() == "birds_of_prey.jpeg"){
  $path = "quinn.mp4";
  $titre = "Birds of Prey et la fantabuleuse histoire de Harley Quinn";
}

if ($film->getImage() == "bad_boys.jpeg"){
  $path = "bad_boy.mp4";
  $titre = "Bad boys 3";

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
      <a  class="btn btn-danger" href="../../formulaire/reservation_film.php?id_film=<?php echo $film->getId();?>">Reserver</a>
        </div>

    <div class="tweet">
        <a class="twitter-timeline" data-width="400" data-height="800"
           href="<?php echo $film->getTweet();?>">Tweets by <?php echo $titre; ?></a>
        <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    </div>

    <div style="margin-top:-190px;margin-left:420px;">
        <i class="stars fas fa-star"></i>
        <i class="stars fas fa-star"></i>
        <i class="bordure far fa-star"></i>
        <i class="bordure far fa-star"></i>
        <i class="bordure far fa-star"></i>
    </div>
    <div class="commentaire">
        <label>Laissez votre commentaire: </label>
        <form action="../../traitement/ajout_commentaire.php" method="post">
            <textarea class="form" rows="5" column="10" name="comm"></textarea>
            <input type="hidden" name="name"value="<?php echo $_GET['name']?>">
            <input type="hidden" name="id_film" value="<?php echo $film->getId(); ?>">
            <input type="submit" name="" value="Envoyer votre commentaire"></input>
        </form>
    </div>
</body>
<?php
include "../../include/footer.php";
?>
</html>
