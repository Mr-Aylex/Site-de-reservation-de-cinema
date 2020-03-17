<?php

require_once("../manager/manager.php");

/**
 * Class Films
 */
class Films {
  protected $id;
  protected $titre;
  protected $salle;
  protected $image;

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
            $this->$method($value);
          }
    }

  }

  /**
   * @return string
   */
  public function getSalle()
  {
    return $this->salle;
  }

  /**
   * @param string $salle
   * @return Films
   */
  public function setSalle($salle)
  {
    $this->salle = $salle;
    return $this;
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
   * @return Films
   */
  public function setTitre($titre)
  {
    $this->titre = $titre;
    return $this;
  }

  /**
   * @return string
   */
  public function getImage()
  {
    return $this->image;
  }

  /**
   * @param string $image
   */
  public function setImage($image)
  {
    $this->image = $image;
  }

  /**
   * @return int
   */
  public function getId()
  {
    return $this->id;
  }

  /**
   * @param int $id
   */
  public function setId($id)
  {
    $this->id = $id;
  }
}
?>
