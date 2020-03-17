
<body>
<?php
  include "../include/header.php";

  require_once($_SERVER['DOCUMENT_ROOT']."/site-de-reservation-de-cinema/manager/manager.php");
require_once($_SERVER['DOCUMENT_ROOT']."/site-de-reservation-de-cinema/model/Films.php");


$manager = new manager();
$tab_film = $manager->flush_film();
  ?>


  <header class="v-header container">
    <div class="fullscreen-video-wrap">
      <!--  https://www.videvo.net/video/typing-on-computer-white-bg/4475/ -->
      <!-- DO NOT USE THIS VIDEO, I JUST NEEDED A HOSTED VIDEO FOR THIS CODEPEN> USE THE ONE ABOVE -->
      <video  width="320" height="240" controls muted loop autoplay>
<source  src="../src/video/annonce.mp4" ype="video/mp4"></source>

    </video>
    </div>
    <div class="header-overlay"></div>
    <div class="header-content text-md-center">
      <h1 class="color">Profitez du meilleur site de cinema !</h1>
      <p>Avengers EndGame disponible sur nos plateforme </p>
      <a class="btn">Regarder</a>
    </div>
  </header>

  <section class="section section-a">
    <div class="container">
        <table style="">
            <tr>

                <?php foreach ($tab_film as $item => $value) {?>
                    <td>
                        <div class="division bas" style="width: 18rem;">
                                <a href="../views/film/film.php?name=<?php echo $item ?>"><img class="img" height="200" width="150"
                                                                                               src="../src/images/image_film/<?php echo $value->getImage(); ?>"
                                                                                               class="" alt="..."/></a>
                                <span class="icon">Films</span>
                                <div class="card-body">
                                    <h5 class="titre_film card-title"><?php echo $value->getTitre(); ?></h5>
                                </div>
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
