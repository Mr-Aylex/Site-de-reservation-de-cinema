<?php

//require_once("../manager/manager.php");

/**
 * Class Films
 */
class Films {
  protected $id;
  protected $titre;
  protected $salle;
  protected $image;
  protected $resume;
  protected $bande_annonce;
  protected $tweet;
  protected $video;
  /**
   * Films constructor.
   * @param array $donnees
   */
  public function __construct($donnees){
    $this->hydrate($donnees);
  }

  /**
   * @param array $donnees
   * methode hydrate de la class Films
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
   * @return Films
   */
  public function setImage($image)
  {
    $this->image = $image;
    return $this;
  }

  /**
   * @param string $tweeter
   * @return Films
   */
  public function setTweet($tweeter){
    $this->tweet = $tweeter;
    return $this;
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
   * @return Films
   */
  public function setId($id)
  {
    $this->id = $id;
    return $this;
  }

  /**
   * @return string
   */
  public function getBande_annonce()
  {
    return $this->bande_annonce;
  }

  /**
   * @return string
   */
  public function getTweet(){
    return $this->tweet;
  }

  /**
   * @param string $bande_annonce
   * @return Films
   */
  public function setBande_annonce($bande_annonce)
  {
    $this->bande_annonce = $bande_annonce;
    return $this;
  }

  /**
   * @return string
   */
  public function getResume()
  {
    return $this->resume;
  }

  /**
   * @param string $resume
   * @return Films
   */
  public function setResume($resume)
  {
    $this->resume = $resume;
    return $this;
  }


}
?>
