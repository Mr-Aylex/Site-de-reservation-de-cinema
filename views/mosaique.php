
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
      <td>

      <div class="division bas" style="width: 18rem;">

        <a href="../views/film/film_la_foret.php"><img class="img" height="200" width="150"src="../src/images/image_film/Appel_de_la_foret.jpg" class="" alt="..."/></a>

      <span class="icon" >Films</span>
        <div class="card-body">
          <h5 class="titre_film card-title">L'appel de la forêt</h5>



        </div>
      </div>
      </td>

      <td>

      <div class="division bas" style="width: 18rem;">

        <a href="../views/film/film_the_boy.php"><img class="img" height="200" width="150"src="../src/images/image_film/the_boy.jpeg" class="" alt="..."/></a>

      <span class="icon" >Films</span>
        <div class="card-body">
          <h5 class="titre_film card-title">The boy</h5>



        </div>
      </div>
      </td>


      <td>

      <div class="division bas" style="width: 18rem;">

        <a href="../views/film/film_sonic.php"><img class="img" height="200" width="150"src="../src/images/image_film/sonic.jpeg" class="" alt="..."/></a>

      <span class="icon" >Films</span>
        <div class="card-body">
          <h5 class="titre_film card-title">Sonic le film</h5>



        </div>
      </div>
      </td>
      <td>

      <div class="division bas" style="width: 18rem;">

        <a href="../views/film/film_bad_boys.php"><img class="img" height="200" width="150"src="../src/images/image_film/bad_boys.jpeg" class="" alt="..."/></a>

      <span class="icon" >Films</span>
        <div class="card-body">
          <h5 class="titre_film card-title">Bad Boys 3</h5>



        </div>
      </div>
      </td>


      <td>

      <div class="division bas" style="width: 18rem;">

        <a href="../views/film/film_harley_quinn.php"><img class="img" height="200" width="150"src="../src/images/image_film/Harley_quinn.jpeg" class="" alt="..."/></a>

      <span class="icon" >Films</span>
        <div class="card-body">
          <h5 class="titre_film card-title">Harley Quinn</h5>



        </div>
      </div>
      </td>
      </tr>


      </table>
    </div>
  </section>




<?php
include "../include/footer.php";
?>
</body>
