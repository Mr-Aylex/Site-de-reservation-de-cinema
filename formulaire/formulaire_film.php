<!DOCTYPE html>
<html lang="" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
          <link rel="stylesheet" type="text/css" href="../src/css/formulaire_film.css" />

  </head>
  <body class="body">
  <?php include "../include/header.php" ?>
  <form class="form" action="" method="post" style="padding-top: 150px; padding-bottom: 50px"class="container">


      <h1 style="">Ajouter votre film : </h1>
      <label class="label" style="color:white;" for="">Entrez votre nom :</label>
      <div>
          <input class="" type="text" name="nom" placeholder="Nom"/>
      </div>

      <div>
          <label style="color:white;">Prenom :</label>
          <input type="text" name="prenom" placeholder="Prenom"/>
      </div>

      <div>
          <label class="label" style="color:white;" for="">Mail :</label>
          <input type="text" name="mail" placeholder="Mail" value=""/>
      </div>

      <div>
          <label class="label" style="color:white;" for="">Adresse :</label>
          <input type="text" name="adresse" placeholder="Adresse">
      </div>


      <label class="label" style="color:white;" for="">Numéro de téléphone :</label>

      <input type="text" name="numero" placeholder="Numéro"/>

      <label class="label" style="color:white;" for="">Mot de passe :</label>
      <input type="password" name="mot_de_passe" placeholder="Mot de passe"/>

      <input type="submit" value="Ajouter"/>

  </form>

  <?php include "../include/footer.php" ?>
  </body>
</html>
