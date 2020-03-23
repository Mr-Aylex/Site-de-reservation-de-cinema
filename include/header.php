<header>
    <title>Cinéma</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <?php
  /**
   *@author
   */
    require_once($_SERVER['DOCUMENT_ROOT']."/site-de-reservation-de-cinema/manager/manager.php");
    require_once($_SERVER['DOCUMENT_ROOT']."/site-de-reservation-de-cinema/model/Utilisateur.php");
    session_start();
    if (isset($_SESSION['user']))
    {
        $user = unserialize($_SESSION['user']);
    }
    ?>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../src/css/header.css" />
    <link rel="stylesheet" href="/Site-de-reservation-de-cinema/src/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="/Site-de-reservation-de-cinema/src/css/animate.css">

    <link rel="stylesheet" href="/Site-de-reservation-de-cinema/src/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/Site-de-reservation-de-cinema/src/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="/Site-de-reservation-de-cinema/src/css/magnific-popup.css">

    <link rel="stylesheet" href="/Site-de-reservation-de-cinema/src/css/aos.css">

    <link rel="stylesheet" href="/Site-de-reservation-de-cinema/src/css/ionicons.min.css">

    <link rel="stylesheet" href="/Site-de-reservation-de-cinema/src/css/flaticon.css">
    <link rel="stylesheet" href="/Site-de-reservation-de-cinema/src/css/icomoon.css">
    <link rel="stylesheet" href="/Site-de-reservation-de-cinema/src/css/style.css">
    <link rel="stylesheet" type="text/css" href="../src/css/mosaique.css" />

  <script src="https://kit.fontawesome.com/e1924a5c8f.js" crossorigin="anonymous"></script>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light site-navbar-target" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="/Site-de-reservation-de-cinema/index.php">Ciné<span> Views.</span></a>
	      <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav nav">
	          <li class="nav-item"><a href="/Site-de-reservation-de-cinema/index.php" class="nav-link"><span>Cinéma</span></a></li>
	          <li class="nav-item"><a href="/Site-de-reservation-de-cinema/views/mosaique.php" class="nav-link"><span>Films</span></a></li>
	          <li class="nav-item"><a href="#schedule-section" class="nav-link"><span>À venir</span></a></li>
	          <!--<li class="nav-item"><a href="/Site-de-reservation-de-cinema/views/premium.php" class="nav-link"><span>Carte Premium</span></a></li>-->
	          <li class="nav-item"><a href="/Site-de-reservation-de-cinema/views/contact.php" class="nav-link"><span>Contact</span></a></li>
                <?php
                if(empty($_SESSION['user'])) {?>
                    <li class="nav-item cta"><a href="/Site-de-reservation-de-cinema/formulaire/connexion_form.php" class="btn btn-outline-warning">Connexion</a></li>
                    <li class="nav-item cta"><a href="/Site-de-reservation-de-cinema/formulaire/inscription_form.php" class="btn btn-outline-warning">Inscription</a></li>
                <?php } else {?>

                <li class="nav-item"><a href="/Site-de-reservation-de-cinema/formulaire/modification_form.php" class="btn btn-outline-warning">modification</a></li>
                <li class="nav-item"><a href="/Site-de-reservation-de-cinema/traitement/deconnexion.php" class="btn btn-outline-warning">Déconnexion</a></li>
                <?php } ?>
	        </ul>
	      </div>
	    </div>
	  </nav>

</header>
