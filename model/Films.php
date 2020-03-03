<?php

require_once("../manager/manager.php");

class Films {
  protected $titre;
  protected $salle;

  /**
   * Films constructor.
   * @param $donnees
   */
  public function __construct($donnees){
    $this->hydrate($donnees);
  }

  /**
   * @param array $donnees
   */
  public function hydrate($donnees){
    foreach($donnees as $key => $value){
          $method = 'set'.ucfirst($key);
          if(method_exists($this,$method)){
            $method($value);
          }
    }

  }

  /**
   * @return mixed
   */
  public function getSalle()
  {
    return $this->salle;
  }

  /**
   * @param mixed $salle
   */
  public function setSalle($salle)
  {
    $this->salle = $salle;
  }

  /**
   * @return string
   */
  public function getTitre()
  {
    return $this->titre;
  }

  /**
   * @param string $titre
   */
  public function setTitre($titre)
  {
    $this->titre = $titre;
  }
}
?>
