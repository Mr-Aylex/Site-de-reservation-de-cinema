<?php

require_once("../manager/manager.php");

class Films {
  public $film,$salle;
  public function __construct(){
    $this->hydrate($donnees);
  }

  public function hydrate($donnees){
    foreach($donnees as $key => $value){
          $method = 'set'.ucfirst($key);
          if(method_exists($this,$method)){
            $method($value);
          }
    }

  }
  public function setFilm(){
    if(!is_string($film)){
      header("Location:../views/mosaique.php");
    }
    return $this->_film = $film;
  }
  public function setSalle(){
    if(!is_string($salle)){
      header("Location:../views/mosaique.php");
    }
    return $this->_salle = $salle;
  }
  public function getSalle(){return $this->_salle;}
  public function getFilm(){return $this->_film;}
}
?>
