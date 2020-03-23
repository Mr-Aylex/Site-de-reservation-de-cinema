
<body>
<?php
  include "../include/header.php";
require_once($_SERVER['DOCUMENT_ROOT']."/site-de-reservation-de-cinema/manager/manager.php");
require_once($_SERVER['DOCUMENT_ROOT']."/site-de-reservation-de-cinema/model/Films.php");


$manager = new manager();
$tab_film = $manager->flush_film();
  ?>

<!--
<header class="v-header container">
    <div class="fullscreen-video-wrap">
      <video  width="320" height="240" controls muted loop autoplay>
<source  src="../src/video/annonce.mp4" ype="video/mp4"></source>

    </video>
    </div>
    <div class="header-overlay"></div>
    <div class="header-content text-md-center">
      <h1 style="margin-left:100px;"class="color">Profitez du meilleur site de cinema !</h1>
      <p style="margin-left:10px;" >Avengers EndGame disponible sur nos plateforme </p>
      <a href="premium.php" style="border-radius:20px;"class="btn">Regarder <i class="far fa-play-circle"></i></a>
    </div>
  </header>
-->
 <section class="section section-a">
    <div class="container">
        <table style="">
            <tr>

                <?php foreach ($tab_film as $item => $value) {?>
                    <td>
                        <div class="card-body">
                            <h5 class="titre_film card-title"><?php echo $value->getTitre(); ?></h5>
                            <a href="../views/film/film.php?name=<?php echo $item ?>"><img class="" height="200" width="150"
                                                                                           src="../src/images/image_film/<?php echo $value->getImage(); ?>"
                                                                                           class="" alt="..."/></a>
                        </div>
                    </td>
                <?php } ?>
            </tr>
        </table>
    </div>
  </section> 




<?php
include "../include/footer.php";
?>
</body>
