<!DOCTYPE html>
<html lang="" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="../classe/classe_erreur.php" method="post"
      style="  margin: 230px auto;
      margin-top:150px;
        width:400px;
        padding:10px;
        height:500px;
        padding:10px 20px;
         opacity : 0.9;
        background-color:#f9cf22;
        box-shadow: 0 15px 25px rgba(0,0,0,.5);
        border-radius: 10px;">
      <h1 style="text-align:center;">Inscription</h1>
      <label class="label" style="color:white;"for="">Entrez votre nom :</label>
      <div>
        <input style="width:300px;background:none;border-left:none;border-right:none;border-bottom:1px solid white;border-top:none;cursor:text;display:block;margin-left:0px;" type="text" name="nom" placeholder="Nom"/>
      </div>

      <div>
        <label style="color:white;">Prenom :</label>
        <input style="width:300px;background:none;border-left:none;border-right:none;border-bottom:1px solid white;border-top:none;cursor:text;display:block;margin-left:0px;"  type="text" name="prenom" placeholder="Prenom"/>
      </div>

      <div>
        <label class="label" style="color:white;" for="">Mail :</label>
        <input style="width:300px;background:none;border-left:none;border-right:none;border-bottom:1px solid white;border-top:none;cursor:text;display:block;margin-left:0px;"  type="text" name="mail"  placeholder="Mail"value=""/>
      </div>

<div>
<label class="label" style="color:white;" for="">Adresse :</label>
  <input style="width:300px;background:none;border-left:none;border-right:none;border-bottom:1px solid white;border-top:none;cursor:text;display:block;margin-left:0px;"  type="text" name="adresse" placeholder="Adresse">
</div>


      <label class="label" style="color:white;" for="">Numéro de téléphone :</label>

<input style="width:300px;background:none;border-left:none;border-right:none;border-bottom:1px solid white;border-top:none;cursor:text;display:block;margin-left:0px;"  type="text" name="numero" placeholder="Numéro"/>

<label class="label" style="color:white;" for="">Mot de passe :</label>
        <input style="width:300px;background:none;border-left:none;border-right:none;border-bottom:1px solid white;border-top:none;cursor:text;display:block;margin-left:0px;"  type="password" name="mot_de_passe" placeholder="Mot de passe"/>

        <input  style="color:red;margin-top:10px;display:block;margin-left:0px;" type="submit" value="Ajouter"/>

    </form>
  </body>
</html>
