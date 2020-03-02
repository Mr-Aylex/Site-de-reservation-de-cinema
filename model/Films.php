<?php


class Films {
  public $film;
  public function setFilm(){
    if(!is_string($film)){
      header("Location:..");
    }
    return $this->_film = $film;
  }
  public function getFilm(){return $this->_film;}
}
