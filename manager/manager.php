<?php

require_once("../traitement/traitement_film.php");
reuiqre_once("../model/Films.php");

class manager
{
  public function Film(Film $donnees){
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=cinema_php;charset=utf8','root','');
     }
    catch(Exception $e)
    {
      die('ERREUR:'.$e->getMessage());
    }
    $film = $bdd->prepare('INSERT INTO films(nom,salle) VALUES(?,?,?,?,?,?)');
    $insert_film =$film->execute(array('nom'=>$donnees->getFilm(),$donnees,'salle'=>$donnees->getSalle()));
    if($insert_film == true){
      header("Location: ../index.php");
      }


}

}
